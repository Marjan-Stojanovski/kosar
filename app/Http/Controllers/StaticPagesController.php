<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Service;
use App\Models\StaticPages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaticPagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $stats = StaticPages::all();
        $users = User::all();
        $data = ['stats' => $stats, 'users' => $users];

        return view('dashboard.stats.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.stats.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('stats.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $description = $request->get('description');
        $image = $request->get('image');

        $imageObj = new ImageStore($request, 'stats');
        $image = $imageObj->imageStore();

        StaticPages::create([
            'name' => $name,
            'description' => $description,
            'image' => $image
        ]);

        return redirect()->route('stats.index');
    }
    public function show($id)
    {
        $stats = StaticPages::FindorFail($id);
        $data = ['stats' => $stats];

        return view('dashboard.stats.show')->with($data);
    }

    public function edit($id)
    {
        $stats = StaticPages::FindorFail($id);
        $data = ['stats' => $stats];

        return view('dashboard.stats.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('stats.index')
                ->withErrors($validator)
                ->withInput();
        }

        $stats = StaticPages::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'stats');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $stats->fill($input)->save();

        return redirect()->route('stats.index');
    }

    public function destroy($id)
    {
        $stats = StaticPages::FindorFail($id);
        $stats->delete();
        return redirect()->route('stats.index');
    }



}
