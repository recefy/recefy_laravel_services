<?php

namespace App\Http\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Modules\ServiceIndex;
use Illuminate\Http\Response;

class ControllersIndex extends Controller
{

    public function __construct(protected ServiceIndex $serviceIndex){

    }

    public function index(Request $request)
    {
        try{
            $index = $this->serviceIndex->InteroperabilidadDataRecetas($request->all());
            return response()->json($index, 200);
        } catch (\Throwable $th){
            return response()->json([
                'mensaje' => 'ha ocurrido un error al ingresar -> index del service',
                'status' => $th->getCode(),
                'error' => $th->getMessage(),
                'res' => false,
            ], Response::HTTP_BAD_REQUEST);
        }

    }
}
