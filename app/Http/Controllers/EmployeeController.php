<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::latest()->paginate(5);
        return view('admin.employees.index', compact('employees'));           
    }

    public function create() {
        return view('admin.employees.create');
    }

    public function store(Request $request) {
        $request->validate([
            'firstname' => 'required'           
        ]);
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }  

    public function edit(Employee $employee) {
        return view('admin.employees.edit',compact('employee'));
    }


    public function update(Request $request, Employee $employee) {
        $request->validate([
            'firstname' => 'required',           
        ]);    
        $employee->update($request->all());    
        return redirect()->route('employees.index')->with('success','Employee updated successfully');
    }
    

    public function destroy(Employee $employee) {
        $employee->delete();    
        return redirect()->route('employees.index')->with('success','Employee deleted successfully');
    }  
}
