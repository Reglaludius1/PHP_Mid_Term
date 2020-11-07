<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditEmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::all();

        return view('employees/employee_list')->with('employees', $employees);
    }

    public function edit(Employee $employee) {
        return view('employees/edit')->with('employee', $employee);
    }

    public function update(EditEmployeeRequest $request, Employee $employee) {
        $employee->update($request->all());

        return redirect()->route('employees');
    }
}
