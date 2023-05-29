<?php

namespace App\Http\Controllers;

use App\Models\Token;

class TokenController extends Controller
{
    public function setToken (string $token){  
        $tokenPart = explode('.', $token);
        $payload = $tokenPart[1];
        $decode = base64_decode($payload);
        $json = json_decode($decode, true);
        $exp = $json['exp'];
        $getToken = Token::find(1);
        $getToken->update(['token' => $token, 'exp' => $exp]);
    }

    public function getToken(){
        $token = Token::find(1);
        $time = time();
        if($token->exp <= $time){
            $token->update(['token' => null, 'exp' => null]);
            return null;
        }
        return $token->token;
    }

    public function deleteToken(){
        $token = Token::find(1);
        $token->update(['token' => null, 'exp' => null]);
    }
}
