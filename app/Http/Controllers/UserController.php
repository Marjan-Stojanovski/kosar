<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Routing\Matcher\ExpressionLanguageProvider;
use App\Mail\MailSender;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        $countries = Country::all();
        $userCount = $users->count();
        $data = ['users' => $users, 'roles' => $roles, 'countries' => $countries, 'userCount' => $userCount];
        return view('dashboard.users.index')->with($data);
    }

    public function create()
    {
        $roles = Role::all();
        $countries = Country::all();
        $data = ['roles' => $roles, 'countries' => $countries];

        return view('dashboard/users.create')->with($data);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'country_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $email = $request->get('email');
        $password = bcrypt($request->get('password'));
        $role_id = $request->get('role_id');
        $country_id = $request->get('country_id');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role_id' => $role_id,
            'country_id' => $country_id
        ]);

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $users = User::FindorFail($id);
        $roles = Role::all();
        $countries = Country::all();
        $data = ['users' => $users, 'roles' => $roles, 'countries' => $countries];
        return view('dashboard.users.show')->with($data);
    }

    public function edit($id)
    {
        $user = User::FindorFail($id);
        $roles = Role::all();
        $countries = Country::all();
        $data = ['user' => $user, 'roles' => $roles, 'countries' => $countries];
        return view('dashboard.users.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'country_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::FindorFail($id);

        $user->fill($request->all())->save();

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::FindorFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function mail()
    {
        $msg = "Zdravo";
        Mail::to('stojanovskim@yahoo.com')->send(new MailSender($msg));
    }



}
