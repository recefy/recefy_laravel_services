<?php

namespace App\Http\Modules;

use App\Models\User;

class RepositorieIndex
{

    public function __construct(protected User $modelUsuario) {}

    public function buscarUsuarioExistente(int $id)
    {

        return $this->modelUsuario->where('id', $id)->first();
    }
}
