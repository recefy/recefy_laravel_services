<?php

namespace App\Http\Modules;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class ServiceIndex
{

    public function crearUsuario(array $request)
    {   
        $user = User::create([  
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'activo' => true,
        ]);

        $tokenResult = $user->createToken('session_token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addDays(1);
        $token->save();

        return true;
    }
}
