<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Helpers\ImageStore;

class SettingsControler extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Settings::first();
        $users = User::all();

        $data = ['users' => $users, "settings" => $settings];
        if (empty($settings)) {
            return view('dashboard.settings.create')->with($data);
        } else {
            $settings = Settings::first();
            $data = ['users' => $users, "settings" => $settings];
            return view('dashboard.settings.index')->with($data);
        }
    }

    public function create()
    {
        $users = User::all();
        $data = ['users' => $users];

        return view('dashboard.settings.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'mainurl' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }

        $title = $request->get('title');
        $mainurl = $request->get('mainurl');
        $email = $request->get('email');
        $description = $request->get('description');
        $image = $request->get('image');
        $link = $request->get('link');
        $address = $request->get('address');
        $phone = $request->get('phone');
        $twitter = $request->get('twitter');
        $facebook = $request->get('facebook');
        $skype = $request->get('skype');
        $linkedin = $request->get('linkedin');
        $youtube = $request->get('youtube');
        $flickr = $request->get('flickr');
        $pinterest = $request->get('pinterest');
        $user_id = $request->get('user_id');

        $imageObj = new ImageStore($request, 'settings');
        $image = $imageObj->imageStore();


        Settings::create([
            'title' => $title,
            'mainurl' => $mainurl,
            'email' => $email,
            'description' => $description,
            'image' => $image,
            'link' => $link,
            'address' => $address,
            'phone' => $phone,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'skype' => $skype,
            'linkedin' => $linkedin,
            'youtube' => $youtube,
            'flickr' => $flickr,
            'pinterest' => $pinterest,
            'user_id' => $user_id,
        ]);

        $settings = Settings::first();
        $data = ['settings' => $settings];

        return view('dashboard.settings.index')->with($data);
    }

    public function edit()
    {
        $settings = Settings::first();
        $users = User::all();
        $data = ['settings' => $settings, 'users' => $users];

        return view('dashboard.settings.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'mainurl' => 'required',
            'email' => 'required',
            'description' => 'required',
            'image' => 'required',
            'link' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('settings.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $setting = Settings::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'settings');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $setting->fill($input)->save();

        $settings = Settings::first();
        $data = ['settings' => $settings];

        return view('dashboard.settings.index')->with($data);
    }

}
