<?php

namespace App\Http\Controllers\Admin\Agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Agenda;
use Exception;

class AgendaController extends Controller
{
    public function index()
    {
        $ordenes = Agenda::all();
        $actualDate =  date('Y-m-d\TH:i');
        return view('admin.agenda.ordenes', compact('ordenes', 'actualDate'));
    }

    public function create(Request $data)
    {

        $validatedData = $data->validate([
            'nombre_cliente' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'fecha_entrega' => ['required'],
            'direccion' => ['required', 'string'],
        ]);

        try {
            $agenda = new Agenda();
            $agenda->nombre_cliente = $data->nombre_cliente;
            $agenda->descripcion = $data->descripcion;
            $agenda->fecha_entrega = $data->fecha_entrega;
            $agenda->direccion = $data->direccion;
            $agenda->save();
            return back()->with(['success' => 'La orden se registró con éxito']);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function details($id)
    {
        $orden = Agenda::find(decrypt($id));
        return view('admin.agenda.ordenDetail', compact('orden'));
    }

    public function edit(Request $data, $id)
    {
        $validatedData = $data->validate([
            'nombre_cliente' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string'],
            'fecha_entrega' => ['required'],
            'direccion' => ['required', 'string'],
        ]);

        $agenda = Agenda::find(decrypt($id));
        if ($agenda) {
            $agenda->nombre_cliente = $data->nombre_cliente;
            $agenda->descripcion = $data->descripcion;
            $agenda->fecha_entrega = $data->fecha_entrega;
            $agenda->direccion = $data->direccion;
            $agenda->entregado = $data->entregado && $data->entregado == 'on' ? 1 : 0;
            $agenda->save();
            return back()->with(['success' => 'La orden se actualizó con éxito']);
        }
        return back()->with(['danger' => 'La orden no se encontró']);
    }

    public function destroy($id)
    {
        $agenda = Agenda::find(decrypt($id));
        if ($agenda) {
            $agenda->delete();
            return back()->with(['success' => 'La orden se eliminó con éxito']);
        }
        return back()->with(['danger' => 'La orden no se encontró']);
    }
}
