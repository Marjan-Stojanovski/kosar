<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        $productsCount = $products->count();
        $data = ['products' => $products, 'productsCount' => $productsCount];
        return view('dashboard.products.index')->with($data);
    }

    public function create()
    {
        $products = Product::all();
        $users = User::all();
        $categories = Category::getList();
        $data = ['products' => $products, 'users' => $users, 'categories' => $categories];
        return view('dashboard.products.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }

        $title = $request->get('title');
        $slug = Str::slug($request->get('title'));
        $image = $request->get('image');
        $category_id = $request->get('category_id');
        $description = $request->get('description');
        $user_id = $request->get('user_id');


        $imageObj = new ImageStore($request, 'products');
        $image = $imageObj->imageStore();

        Product::create([
        'title' => $title,
        'slug' => $slug,
        'image' => $image,
        'category_id' => $category_id,
        'description' => $description,
        'user_id' => $user_id
        ]);

        $products = Product::all();
        $users = User::all();
        $productsCount = $products->count();
        $data = ['products' => $products, 'users' => $users, 'productsCount' => $productsCount];
        return view('dashboard.products.index')->with($data);

    }

    public function edit($id)
    {
        $product = Product::FindorFail($id);
        $categories = Category::getList();
        $users = User::all();
        $data = ['product' => $product, 'users' => $users, 'categories' => $categories];
        return view('dashboard.products.edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'image' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $product = Product::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'products');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $product->fill($input)->save();


        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::FindorFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

}

