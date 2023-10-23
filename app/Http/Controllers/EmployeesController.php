<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::select(
            'employees.*',
            'departments.name as department'
        )
            ->join('departments', 'departments.id', '=', 'employees.department_id')
            ->paginate(10);
        return response()->json($employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:1|max:100',
            'email' => 'required|email|max:80',
            'phone' => 'required|max:15',
            'department_id' => 'required|numeric'
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()->all()
            ], 400);
        }
        $employee = new Employees($request->input());
        $employee->save();
        return response()->json([
            'status' => true,
            'message' => 'Employee created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        return response()->json([
            'status' => true,
            'data' => $employees
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        $rules = [
            'name' => 'required|string|min:1|max:100',
            'email' => 'required|email|max:80',
            'phone' => 'required|max:15',
            'department_id' => 'required|numeric'
        ];
        $validator = Validator::make($request->input(), $rules);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()->all()], 400);
        }
        $employees->update($request->input());
        return response()->json(['status' => true, 'message' => 'Employee updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        $employees->delete();
        return response()->json(['status' => true, 'message' => 'Employee deleted successfully'], 200);
    }

    public function EmployeesByDepartment()
    {
        $employees = Employees::select(DB::raw(
            'count(employees.id) as count, departments.name'
        ))
            ->rightJoin('departments', 'departments.id', '=', 'employees.department_id')
            ->groupBy('departments.name')->get();
        return response()->json($employees);
    }
    public function all()
    {
        $employees = Employees::select(
            'employees.*',
            'departments.name as department'
        )
            ->join('departments', 'departments.id', '=', 'employees.department_id')
            ->get();
        return response()->json($employees);
    }
}
