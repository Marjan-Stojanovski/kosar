<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\CompanyInfo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;



class CommentControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comments = Comment::all();
        $commentsCount = $comments->count();
        $data = ['comments' => $comments, 'commentsCount' => $commentsCount];

        return view('dashboard.comments.index')->with($data);
    }

    public function create()
    {
        $products = Product::all();
        $data = ['products' => $products];

        return view('dashboard.comments.create')->with($data);
    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'subject' => 'required',
            'rating' => 'required',
            'product_id' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('comments.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $subject = $request->get('subject');
        $rating = $request->get('rating');
        $product_id = $request->get('product_id');
        $message = $request->get('message');

        Comment::create([
            'name' => $name,
            'subject' => $subject,
            'rating' => $rating,
            'product_id' => $product_id,
            'message' => $message
        ]);

        $comments = Comment::all();
        $commentsCount = $comments->count();
        $data = ['comments' => $comments, 'commentsCount' => $commentsCount];

        return view('dashboard.comments.index')->with($data);
    }

    public function edit($id)
    {
        $comment = Comment::FindorFail($id);
        $products = Product::all();
        $data = ['products' => $products, 'comment' => $comment];

        return view('dashboard.comments.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'subject' => 'required',
            'rating' => 'required',
            'product_id' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('comments.create')
                ->withErrors($validator)
                ->withInput();
        }

        $comment = Comment::FindorFail($id);

        $comment->fill($request->all())->save();

        $comments = Comment::all();
        $commentsCount = $comments->count();
        $data = ['comments' => $comments, 'commentsCount' => $commentsCount];

        return view('dashboard.comments.index')->with($data);
    }
    public function destroy($id)
    {
        $comment = Comment::FindorFail($id);
        $comment->delete();

        $comments = Comment::all();
        $commentsCount = $comments->count();
        $data = ['comments' => $comments, 'commentsCount' => $commentsCount];

        return view('dashboard.comments.index')->with($data);
    }

    public function frontendSave(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'subject' => 'required',
            'rating' => 'required',
            'product_id' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('comments.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $subject = $request->get('subject');
        $rating = $request->get('rating');
        $product_id = $request->get('product_id');
        $message = $request->get('message');

        Comment::create([
            'name' => $name,
            'subject' => $subject,
            'rating' => $rating,
            'product_id' => $product_id,
            'message' => $message
        ]);

        $id = $product_id;
        $company = CompanyInfo::first();
        $product = Product::FindorFail($id);
        $categoriesTree = Category::getTreeHP();
        $category_id = $product['category_id'];
        $categoryProducts = Product::where('category_id', $category_id)->get();
        $comments = Comment::where('product_id', $product_id)->get();
        $data = ['product' => $product, 'categoriesTree' => $categoriesTree, 'categoryProducts' => $categoryProducts, 'comments' => $comments, 'company' => $company];

        return view('frontend.productView')->with($data);
    }


}
