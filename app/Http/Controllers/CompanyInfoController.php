<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\ImageStore;
use App\Models\CompanyInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $company = CompanyInfo::first();
        $users = User::all();

        $data = ['users' => $users, "company" => $company];

        if (empty($company)) {

            return view('dashboard.company_info.create')->with($data);
        } else {
            $company = CompanyInfo::first();
            $data = ['users' => $users, "company" => $company];
            return view('dashboard.company_info.index')->with($data);
        }
    }

    public function create()
    {
        $users = User::all();
        $data = ['users' => $users];

        return view('dashboard.company_info.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'info' => 'required',
            'address' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'image' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('company_info.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $info = $request->get('info');
        $address = $request->get('address');
        $mail = $request->get('mail');
        $phone = $request->get('phone');
        $facebook = $request->get('facebook');
        $instagram = $request->get('instagram');
        $image = $request->get('image');
        $description = $request->get('description');
        $user_id = $request->get('user_id');

        $imageObj = new ImageStore($request, 'company_info');
        $image = $imageObj->imageStore();


        CompanyInfo::create([
            'name' => $name,
            'info' => $info,
            'address' => $address,
            'mail' => $mail,
            'phone' => $phone,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'image' => $image,
            'description' => $description,
            'user_id' => $user_id,
        ]);

        $company = CompanyInfo::first();
        $data = ['company' => $company];

        return view('dashboard.company_info.index')->with($data);
    }

    public function edit()
    {
        $company = CompanyInfo::first();
        $users = User::all();
        $data = ['company' => $company, 'users' => $users];

        return view('dashboard.company_info.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'info' => 'required',
            'address' => 'required',
            'mail' => 'required',
            'phone' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'image' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('company_info.edit')
                ->withErrors($validator)
                ->withInput();
        }

        $company = CompanyInfo::FindorFail($id);
        $image = $request->get('image');
        $imageObj = new ImageStore($request, 'company_info');
        $image = $imageObj->imageStore();

        $input = $request->all();
        $input['image'] = $image;

        $company->fill($input)->save();

        $company = CompanyInfo::first();
        $data = ['company' => $company];

        return view('dashboard.company_info.index')->with($data);
    }

}
