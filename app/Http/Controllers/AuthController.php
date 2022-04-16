<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    /*
    *   Login function
    *   Params: username and password
    */
    public function getToken(LoginRequest $request)
    {
        $params = $request->only(['username','password']);

        if (!auth()->attempt($params)) {
            return response(['error' => 'Invalid Credentials'], 401);
        }

        $accessToken = auth()->user()->createToken('api')->accessToken;

        return response()->json([
            'success'=>true,
            'code'=>200,
            'token'=>$accessToken
        ]);
    }

    /*
    *   get and parse xml request 
    */
    public function spellCheck(Request $request){

        if (!$request->isXml()) {
            return response()->json(['success'=>false,'msg'=>'Only xml request is allowed'],422);
        }

        $data = $request->xml();

        return [
            'success'=>true,
            'data'=>$data
        ];
    }   

}
