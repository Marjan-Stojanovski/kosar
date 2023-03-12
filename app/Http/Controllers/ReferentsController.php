<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Referent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReferentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $referents = Referent::all();
        $users = User::all();
        $data = ['referents' => $referents, 'users' => $users];

        return view('dashboard.referents.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.referents.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('referents.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $description = $request->get('description');
        $image = $request->get('image');

        $imageObj = new ImageStore($request, 'referents');
        $image = $imageObj->imageStore();

        Referent::create([
            'name' => $name,
            'description' => $description,
            'image' => $image
        ]);

        return redirect()->route('referents.index');
    }
    public function show($id)
    {
        $referents = Referent::FindorFail($id);
        $data = ['referents' => $referents];

        return view('dashboard.referents.show')->with($data);
    }

    public function edit($id)
    {
        $referents = Referent::FindorFail($id);
        $data = ['referents' => $referents];

        return view('dashboard.referents.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('referents.index')
                ->withErrors($validator)
                ->withInput();
        }

        $referents = Referent::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'referents');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $referents->fill($input)->save();

        return redirect()->route('referents.index');
    }

    public function destroy($id)
    {
        $referents = Referent::FindorFail($id);
        $referents->delete();
        return redirect()->route('referents.index');
    }
}
