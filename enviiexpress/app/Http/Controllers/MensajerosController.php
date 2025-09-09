
<?php

namespace App\Http\Controllers;

use App\Models\Mensajero;
use Illuminate\Http\Request;

class MensajerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajeros = Mensajero::all();
        return view('mensajeros.index', compact('mensajeros'));
    }
}
