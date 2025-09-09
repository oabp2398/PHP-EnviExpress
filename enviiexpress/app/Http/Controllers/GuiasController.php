
<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use Illuminate\Http\Request;

class GuiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guias = Guia::all();
        return view('guias.index', compact('guias'));
    }
}
