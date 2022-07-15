<?php

namespace App\Http\Controllers;

use App\Repositories\User\EloquentUserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\RequestService\RequestBuilder;
use App\Services\UserService\UserService;
use Illuminate\Http\Request;


class UserController extends Controller
{

//    private EloquentUserRepository $userRepository;
//
//    public function __construct(EloquentUserRepository $userRepository)
//    {
//        $this->userRepository = $userRepository;
//    }
//
//    public function store(Request $request)
//    {
//       $this->userRepository->create([
//           'name'=>$request->name,
//           'email'=>$request->email,
//           'password'=>bcrypt($request->password)
//       ]);
//
//       return redirect()->back();
//    }
//
//    public function create(Request $request, UserService $userService)
//    {
//        $userService->createNewUser($request->name,$request->email,$request->password);
//    }


    public function getRequest()
    {
        $request = RequestBuilder::init()
            ->setUrl('https://jsonplaceholder.typicode.com/users')
            ->setMethod('GET')
            ->setParams([])
            ->setHeaders([])
            ->setBody('')
            ->setResponse('')
            ->build();


        $request->run();
    }
}
