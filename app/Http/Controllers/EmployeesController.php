<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeesController extends Controller
{
        /**
     * Function creates a new auction center.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|mail|unique:employees',
            'password' => 'required|min:4|confirmed',
            'role_id' => 'required',
        ]);

        $employee = new User();
        $employee->name = $request->value['name'];
        $employee->email = $request->value['email'];
        $employee->password = bcrypt($request->value['password']);
        $employee->street = $request->value['street'];
        $employee->house_nr = $request->value['house_nr'];
        $employee->city = $request->value['city'];
        $employee->postal_code = $request->value['postal_code'];
        $employee->job_title = $request->value['job_title'];
        $employee->role_id = $request->value['role_id'];
        $employee->save();

        return $employee;
    }

    /**
     * Function returns list of all auction centers.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function index() {
        return User::all();
    }

    /**
     * Function returns data of a selected auction center.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\Employee $center
     *
     * @return Illuminate\Http\Response
     */
    public function show(Request $request) {
        $center = User::where('id', $request->route('id'))->first();

        return $center;
    }
    
    /**
     * Function updates a given auction center.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function update() {

    }

    /**
     * Function deletes an auction center.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\Employee $center
     *
     * @return Illuminate\Http\Response
     */
    public function delete(Request $request) {
        $center = User::find($request->route('id'));
        $center->delete();

        return response('Group deleted', 200);
    }
}
