<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Referent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::all();
        $users = User::all();
        $data = ['services' => $services, 'users' => $users];

        return view('dashboard.services.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.services.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('services.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $description = $request->get('description');
        $image = $request->get('image');

        $imageObj = new ImageStore($request, 'referents');
        $image = $imageObj->imageStore();

        Service::create([
            'name' => $name,
            'description' => $description,
            'image' => $image
        ]);

        return redirect()->route('services.index');
    }
    public function show($id)
    {
        $services = Service::FindorFail($id);
        $data = ['services' => $services];

        return view('dashboard.services.show')->with($data);
    }

    public function edit($id)
    {
        $services = Service::FindorFail($id);
        $data = ['services' => $services];

        return view('dashboard.services.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('services.index')
                ->withErrors($validator)
                ->withInput();
        }

        $services = Service::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'services');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $services->fill($input)->save();

        return redirect()->route('services.index');
    }

    public function destroy($id)
    {
        $services = Service::FindorFail($id);
        $services->delete();
        return redirect()->route('services.index');
    }
}

