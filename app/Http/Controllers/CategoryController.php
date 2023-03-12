<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::getTree();
        $image = 'image';
        $data = ['categories' => $categories, $image];

        return view('dashboard.categories.index')->with($data);
    }

    public function create()
    {
        $categories = Category::getList();
        $data = ['categories' => $categories];

        return view('dashboard.categories.create')->with($data);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $parent_id = $request->get('parent_id');
        $image = $request->get('image');
        $desc = $request->get('desc');
        $slug = Str::slug($request->get('name'));


        $imageObj = new ImageStore($request, 'categories');
        $image = $imageObj->imageStore();


        if (!isset($parent_id)) {
            $data = [
                'name' => $name,
                'image' => $image,
                'desc' => $desc,
                'slug' => $slug
            ];
            Category::create($data);
            Session::flash('flash_message', 'Category successfully added!');
            return redirect()->back();
        }

        $category = Category::FindOrFail($parent_id);

        Category::create(['name' => $name, 'image' => $image, 'desc' => $desc, 'slug' => $slug], $category);
        Session::flash('flash_message', 'Category successfully added!');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::FindOrFail($id);
        $categories = Category::getList();
        $data = ['category' => $category, 'categories' => $categories];
        return view('dashboard.categories.edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        $category = Category::FindOrFail($id);

        $input = $request->all();


        if ($request->hasFile('image')) {
            $imageObj = new ImageStore($request, 'categories');
            $image = $imageObj->imageStore();
            $input['image'] = $image;
        }

        if ($request->has('name')) {
            $input['slug'] = Str::slug($request->get('name'));
        }

        $category->fill($input)->save();
        Session::flash('flash_message', 'Category successfully edited.');

        $categories = Category::getTree();
        $data = ['categories' => $categories];
        return view('dashboard.categories.index')->with($data);
    }

    public function destroy($id)
    {

        Category::fixTree();
        $category = Category::FindOrFail($id);

        $category->delete();
        $categories = Category::all();
        $data = ['categories' => $categories];
        return redirect('dashboard/categories')->with($data);
    }





}
