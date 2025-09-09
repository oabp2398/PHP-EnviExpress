
<?php

namespace App\Http\Controllers;

use App\Models\Asignacione;
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaciones = Asignacione::all();
        return view('asignaciones.index', compact('asignaciones'));
    }
}
