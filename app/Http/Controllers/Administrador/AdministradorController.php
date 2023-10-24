<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    
    public function index(){

        $tenant = Tenant::with('domains')->get();
        return View('administrador.index', compact('tenant'));
    }
}
