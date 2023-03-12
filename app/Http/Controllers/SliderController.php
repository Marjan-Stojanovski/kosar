<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\StaticPages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Slider;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::all();
        $users = User::all();
        $data = ['sliders' => $sliders, 'users' => $users];

        return view('dashboard.sliders.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.sliders.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $description = $request->get('description');
        $link = $request->get('link');
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'sliders');
        $image = $imageObj->imageStore();

        Slider::create([
            'name' => $name,
            'description' => $description,
            'image' => $image,
            'link' => $link
        ]);

        return redirect()->route('sliders.index');
    }
    public function show($id)
    {
        $sliders = Slider::FindorFail($id);
        $data = ['sliders' => $sliders];

        return view('dashboard.sliders.show')->with($data);
    }

    public function edit($id)
    {
        $sliders= Slider::FindorFail($id);
        $data = ['sliders' => $sliders];

        return view('dashboard.sliders.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.index')
                ->withErrors($validator)
                ->withInput();
        }

        $sliders = Slider::FindorFail($id);
        $image = $request->get('image');

        $imageObj = new ImageStore($request, 'sliders');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $sliders->fill($input)->save();

        return redirect()->route('sliders.index');
    }

    public function destroy($id)
    {
        $sliders = Slider::FindorFail($id);
        $sliders->delete();
        return redirect()->route('sliders.index');
    }
}
