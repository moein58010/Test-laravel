<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User1;
use Illuminate\Http\Request;

class ControllerRegister extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.MyRegister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'passwordconfirm' => 'required',

            ]);

        $data['password'] = bcrypt($data['password']);


        $user = \App\Models\User::create($data);

        auth()->loginUsingId($user->id);


        return redirect('/admin/articles')
            ->with('success', 'User created successfully');


    }


}
