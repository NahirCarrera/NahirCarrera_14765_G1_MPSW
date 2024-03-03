<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Productos;
use App\Model\Agenda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $productosBajos = Productos::where('cantidad', '<', 10)->get();
        $ordenesProntasAEntregar = Agenda::where('fecha_entrega', '>', date('Y-m-d\TH:i'))->get();
        $ordenesRetrasadas = Agenda::where('fecha_entrega', '<', date('Y-m-d\TH:i'))->get();
        $fechaActual = date('Y-m-d');
        return view('admin.adminPrincipal', compact('productosBajos', 'ordenesProntasAEntregar', 'ordenesRetrasadas', 'fechaActual'));
    }
}
