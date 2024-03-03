<?php

namespace App\Http\Controllers\Admin\Reportes;

use App\Http\Controllers\Controller;
use App\Model\Agenda;
use App\Model\Materiales;
use App\Model\Productos;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function index()
    {
        $datosMateriales = "";
        $datosProductos = "";
        $datosAgenda = "";
        return view('admin.reportes.index', compact('datosMateriales', 'datosProductos', 'datosAgenda'));
    }

    public function generarReporte(Request $request)
    {
        $request->validate([
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date',
        ]);

        $datosMateriales = "";
        $datosProductos = "";
        $datosAgenda = "";
        $actualDate =  date('Y-m-d');

        if (!$request->reporte_materiales && !$request->reporte_inventario && !$request->reporte_agenda) {
            return redirect()->back()->with('danger', 'Debe seleccionar al menos un reporte');
        }


        if ($request->reporte_materiales && $request->reporte_materiales == "on") {
            $datosMateriales = Materiales::whereBetween('created_at', [$request->fechaInicio, $request->fechaFin])->get();
        }

        if ($request->reporte_inventario && $request->reporte_inventario == "on") {
            $datosProductos = Productos::whereBetween('created_at', [$request->fechaInicio, $request->fechaFin])->get();
        }

        if ($request->reporte_agenda && $request->reporte_agenda == "on") {
            if (!$request->estado_ordenes || $request->estado_ordenes == "") {
                return redirect()->back()->with('danger', 'Seleccione un tipo de reporte de Agenda');
            }
            if ($request->estado_ordenes == 'todas') {
                $datosAgenda = Agenda::whereBetween('created_at', [$request->fechaInicio, $request->fechaFin])->get();
            } else if ($request->estado_ordenes == 'entregadas') {
                $datosAgenda = Agenda::whereBetween('created_at', [$request->fechaInicio, $request->fechaFin])
                    ->where('entregado', true)->get();
            } else if ($request->estado_ordenes == 'pendientes') {
                $datosAgenda = Agenda::whereBetween('created_at', [$request->fechaInicio, $request->fechaFin])
                    ->where('entregado', false)->get();
            }
        }

        $fechaInicio = $request->fechaInicio;
        $fechaFin = $request->fechaFin;

        return view('admin.reportes.index', compact('datosMateriales', 'datosProductos', 'datosAgenda', 'fechaInicio', 'fechaFin', 'actualDate'));
    }
}
