<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\Referent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $brands = Brand::all();
        $countries = Country::all();
        $users = User::all();
        $data = ['brands' => $brands, 'countries' => $countries, 'users' => $users];

        return view('dashboard.brands.index')->with($data);
    }

    public function create()
    {
        $countries = Country::all();
        $data = ['countries' => $countries];
        return view('dashboard.brands.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'country_id' => 'required',
            'region' => 'required',
            'image' => 'required',
            'weblink' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('brands.create')
                ->withErrors($validator)
                ->withInput();
        }
       
        $name = $request->get('name');
        $description = $request->get('description');
        $country_id = $request->get('country_id');
        $region = $request->get('region');
        $weblink = $request->get('weblink');
        $image = $request->get('image');

        $imageObj = new ImageStore($request, 'brands');
        $image = $imageObj->imageStore();

        Brand::create([
            'name' => $name,
            'description' => $description,
            'country_id' => $country_id,
            'region' => $region,
            'image' => $image,
            'weblink' => $weblink,
        ]);

        return redirect()->route('brands.index');
    }
    public function show($id)
    {
        $brands = Brand::FindorFail($id);
        $countries = Country::all();
        $data = ['brands' => $brands, 'countries' => $countries];

        return view('dashboard.brands.show')->with($data);
    }

    public function edit($id)
    {
        $brands = Brand::FindorFail($id);
        $countries = Country::all();
        $data = ['brands' => $brands, 'countries' => $countries];

        return view('dashboard.brands.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'country_id' => 'required',
            'region' => 'required',
            'image' => 'required',
            'weblink' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('brands.index')
                ->withErrors($validator)
                ->withInput();
        }

        $brands = Brand::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'brands');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $brands->fill($input)->save();

        return redirect()->route('brands.index');
    }

    public function destroy($id)
    {
        $brands = Brand::FindorFail($id);
        $brands->delete();
        return redirect()->route('brands.index');
    }

}
