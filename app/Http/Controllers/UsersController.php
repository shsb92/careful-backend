<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
        /**
     * Function creates a new auction user.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|mail|unique:users',
            'password' => 'required|min:4|confirmed',
            'role_id' => 'required',
        ]);

        $user = new User();
        $user->name = $request->value['name'];
        $user->email = $request->value['email'];
        $user->password = bcrypt($request->value['password']);
        $user->street = $request->value['street'];
        $user->house_nr = $request->value['house_nr'];
        $user->city = $request->value['city'];
        $user->postal_code = $request->value['postal_code'];
        $user->job_title = $request->value['job_title'];
        $user->role_id = $request->value['role_id'];
        $user->save();

        return $user;
    }

    /**
     * Function returns list of all auction users.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function index() {
        return User::all();
    }

    /**
     * Function returns data of a selected auction user.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\User $user
     *
     * @return Illuminate\Http\Response
     */
    public function show(Request $request) {
        $user = User::where('id', $request->route('id'))->first();

        return $user;
    }
    
    /**
     * Function updates a given auction user.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function update() {

    }

    /**
     * Function deletes an auction user.
     *
     * @param Illuminate\Http\Request $request
     * @param App\Models\User $center
     *
     * @return Illuminate\Http\Response
     */
    public function delete(Request $request) {
        $user = User::find($request->route('id'));
        $user->delete();

        return response('Group deleted', 200);
    }
}
