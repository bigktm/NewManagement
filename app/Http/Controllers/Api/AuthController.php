<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\User;
use App\Http\Requests\Api\LoginUser;
use App\Http\Requests\Api\RegisterUser;
use App\RealWorld\Transformers\UserTransformer;
use Illuminate\Http\Request;

class AuthController extends ApiController
{
    /**
     * AuthController constructor.
     *
     * @param UserTransformer $transformer
     */
    public function __construct(UserTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Login user and return the user if successful.
     *
     * @param LoginUser $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginUser $request)
    {
        $credentials = $request->only('email', 'password');

        if (! Auth::once($credentials)) {
            return $this->respondFailedLogin();
        }

        return $this->respondWithTransformer(auth()->user());
    }

    /**
     * Register a new user and return the user if successful.
     *
     * @param RegisterUser $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterUser $request)
    {
        $params = $request->all();
        $user = User::create([
            'username' => $params['username'],
            'email' => $params['email'],
            'password' => bcrypt($params['password']),
        ]);

        return $this->respondWithTransformer($user);
    }
}
