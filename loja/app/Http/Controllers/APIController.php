<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;


class APIController extends Controller
{
   public $loginAfterSignUp = true;

   public function login(Request $request){

    $token = null;

    $campos_json = json_decode( $request->getContent(), JSON_OBJECT_AS_ARRAY);

    $credenciais = [ 'email' => $campos_json['email'], 'password' =>$campos_json['password']];

        try {
            if (!$token = JWTAuth::attempt($credenciais)){

                return response()->json(['success' => false,
                                         'message' => 'Credenciais inválidas'], 401);
            }
        } catch ( JWTException $e) {

            return response()->json(['error' => 'Token Nao Criado'], 500);
        }
        return response()->json(['success' => true,
                                 'token'=>$token], 200);
   }

   public function logout (Request $request){

       $this->validate($request, ['token' => 'required']);

       try {

           JWTAuth::invalidade($request->token);

           return response()->json(['success' => true,'message'=> "Adeus"], 200);

       }catch (JWTException $exception) {

        return response()->json(['success' => false,
                                 'message'=> 'erro, nao quero ficar sem vc'], 500);

       }
   }
}
