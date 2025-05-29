<?php

namespace App\Http\Modules;

use App\Http\Controllers\Controller;
use App\Http\Modules\RequestsGlobal\CrearUsuarioRequest;
use Illuminate\Http\Request;
use App\Http\Modules\ServiceIndex;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ControllersIndex extends Controller
{


    public function __construct(protected ServiceIndex $serviceIndex) {}

    public function index(Request $request)
    {
        try {
            $index = 'ConEXCT';
            return response()->json($index, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'mensaje' => 'ha ocurrido un error al ingresar -> index del service',
                'status' => $th->getCode(),
                'error' => $th->getMessage(),
                'res' => false,
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function crearCuenta(CrearUsuarioRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'activo' => true,
            ]);

            $tokenResult = $user->createToken('session_token');
            $token = $tokenResult->token;
            $token->expires_at = Carbon::now()->addDays(1);
            $token->save();

            return response()->json([
                'message' => 'Cuenta creada correctamente',
                'token' => $tokenResult->accessToken,
                'usuario' => $user
            ], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 400);
        }
    }
}
