<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::all();

        $data = [
            'employees' => $employees,
        ];
        return view('dashboard.employee.index')->with($data);
    }

    public function create()
    {
        return view('dashboard.employee.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required|max:255',
            'position'         => 'required',
            'description'   => 'required',

        ]);

        if ($validator->fails()) {
            return redirect()->route('employees.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $position = $request->get('position');
        $description = $request->get('description');

        Employee::create([
            'name' => $name,
            'position' => $position,
            'description' => $description
        ]);

        $employees = Employee::all();

        $data = [
            'employees' => $employees,
        ];

        return view('dashboard.employee.index')->with($data);
    }
        public function edit($id)
    {
        $employee = Employee::FindorFail($id);

        $data = [
            'employee' => $employee,
        ];

        return view('dashboard.employee.edit')->with($data);

    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required|max:255',
            'position'         => 'required',
            'description'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $employee = Employee::FindorFail($id);
        $input      = $request->all();

        $employee->fill($input)->save();

        $employees = Employee::all();

        $data = [
            'employees' => $employees,
        ];

        return view('dashboard.employee.index')->with($data);

    }
    public function destroy($id)
    {
        $employee = Employee::FindorFail($id);
        $employee->delete();

        $employees = Employee::all();

        $data = [
            'employees' => $employees,
        ];

        return view('dashboard.employee.index')->with($data);
    }
}
