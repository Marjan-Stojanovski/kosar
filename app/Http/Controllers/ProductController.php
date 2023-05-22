<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Country;
use App\Models\User;
use App\Models\Volume;
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
        $products           = Product::all();
        $brands             = Brand::all();
        $volumes            = Volume::all();
        $productsCount      = $products->count();
        $countries          = Country::all();

        $data = [
            'products'      => $products,
            'productsCount' => $productsCount,
            'brands'        => $brands,
            'volumes'       => $volumes,
            'countries'     => $countries
        ];
        return view('dashboard.products.index')->with($data);
    }

    public function create()
    {
        $products           = Product::all();
        $users              = User::all();
        $categories         = Category::getList();
        $brands             = Brand::all();
        $volumes            = Volume::all();
        $countries          = Country::all();

        $data = [
            'products'      => $products,
            'users'         => $users,
            'categories'    => $categories,
            'brands'        => $brands,
            'volumes'       => $volumes,
            'countries'     => $countries
        ];
        return view('dashboard.products.create')->with($data);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title'         => 'required|max:255',
            'image'         => 'required',
            'category_id'   => 'required',
            'description'   => 'required',
            'user_id'       => 'required',
            'brand_id'      => 'required',
            'volume_id'     => 'required',
            'alcohol'       => 'required',
            'price'         => 'required',
            'country_id'     => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }

        $title          = $request->get('title');
        $slug           = Str::slug($request->get('title'));
        $image          = $request->get('image');
        $description    = $request->get('description');
        $alcohol        = $request->get('alcohol');
        $price          = $request->get('price');
        $action         = $request->get('action');
        $discount       = $request->get('discount');
        $country_id     = $request->get('country_id');
        $category_id    = $request->get('category_id');
        $user_id        = $request->get('user_id');
        $brand_id       = $request->get('brand_id');
        $volume_id      = $request->get('volume_id');

        $imageObj = new ImageStore($request, 'products');
        $image = $imageObj->imageStore();

        Product::create([
            'title'         => $title,
            'slug'          => $slug,
            'image'         => $image,
            'description'   => $description,
            'alcohol'       => $alcohol,
            'price'         => $price,
            'action'        => $action,
            'discount'      => $discount,
            'category_id'   => $category_id,
            'user_id'       => $user_id,
            'brand_id'      => $brand_id,
            'volume_id'     => $volume_id,
            'country_id'    => $country_id
        ]);

        $products           = Product::all();
        $users              = User::all();
        $productsCount      = $products->count();
        $brands             = Brand::all();
        $volumes            = Volume::all();
        $countries          = Country::all();

        $data = [
            'products'      => $products,
            'users'         => $users,
            'productsCount' => $productsCount,
            'brands'        => $brands,
            'volumes'       => $volumes,
            'countries'     => $countries
        ];
        return view('dashboard.products.index')->with($data);

    }

    public function edit($id)
    {
        $product        = Product::FindorFail($id);
        $categories     = Category::getList();
        $users          = User::all();
        $brands         = Brand::all();
        $volumes        = Volume::all();
        $countries      = Country::all();

        $data = [
            'product'       => $product,
            'users'         => $users,
            'categories'    => $categories,
            'brands'        => $brands,
            'volumes'       => $volumes,
            'countries'     => $countries];

        return view('dashboard.products.edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title'         => 'required|max:255',
            'image'         => 'required',
            'category_id'   => 'required',
            'description'   => 'required',
            'user_id'       => 'required',
            'brand_id'      => 'required',
            'volume_id'     => 'required',
            'alcohol'       => 'required',
            'price'         => 'required',
            'country_id'     => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $product    = Product::FindorFail($id);
        $image      = $request->get('image');
        $imageObj   = new ImageStore($request, 'products');
        $image      = $imageObj->imageStore();

        $input      = $request->all();
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

