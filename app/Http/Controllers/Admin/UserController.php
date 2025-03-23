<?php

namespace App\Http\Controllers\Admin;

use App\DesignePatterns\Facade\FacadeAuth;
use App\DesignePatterns\Facade\FacadeMail;
use App\DesignePatterns\Facade\FacadeSignUp;
use App\DesignePatterns\Facade\FacadeUser;
use App\DesignePatterns\Facade\FacadeValidate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request): \Illuminate\Http\RedirectResponse
    {

//        User::createUser($request);
//        return redirect()->route('home');

//        // Facade Design Pattern
//        // validate user
//         $validate = new FacadeValidate();
//        // create user
//        $user = new FacadeUser();
//        // auth user
//         $auth = new FacadeAuth();
//        // send email
//        $mail = new FacadeMail();
//
//        if($validate->isValid($request)){
//            $user->create($request);
//            $auth->login($request->email, $request->password);
//            $mail->to($request->email,'welcome','message');
//        }

        $facadeSignup = new FacadeSignUp();
        $facadeSignup->signup($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
