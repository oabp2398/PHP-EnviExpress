
<?php

namespace App\Http\Controllers;

use App\Models\Roles_permiso;
use Illuminate\Http\Request;

class Roles_permisosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles_permisos = Roles_permiso::all();
        return view('roles_permisos.index', compact('roles_permisos'));
    }
}
