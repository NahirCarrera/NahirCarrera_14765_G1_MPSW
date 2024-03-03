<?php

namespace App\Http\Controllers\Admin\Agenda;

use App\Http\Controllers\Controller;
use App\Model\Productos;
use App\Model\ProductosPorOrden;
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
        $productos = Productos::all();
        $idsProductosAsignados = ProductosPorOrden::where('orden_id', decrypt($id))->pluck('producto_id')->toArray();
        $productosAsignados = ProductosPorOrden::where('orden_id', decrypt($id))->get();
        return view('admin.agenda.ordenDetail', compact('orden', 'productos', 'idsProductosAsignados', 'productosAsignados'));
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

    public function editAsignacionProductos(Request $newProductos, $ordenId)
    {
        if ($newProductos && $ordenId) {
            try {
                $ordenId = decrypt($ordenId);
                $materialesToAssign = $newProductos->except(['_token', '_method', 'asignarMateriales_length']);
                $nuevosMaterialesIds = [];
                $idsProductosAsignados = ProductosPorOrden::where('orden_id', $ordenId)->pluck('producto_id')->toArray();

                foreach ($materialesToAssign as $checkbox => $value) {
                    $parts = explode('_', $value);
                    $materialId = $parts[1];
                    $nuevosMaterialesIds[] = $materialId;
                    if (!in_array($materialId, $idsProductosAsignados)) {
                        $newAssignation = new ProductosPorOrden();
                        $newAssignation->orden_id = $ordenId;
                        $newAssignation->producto_id = $materialId;
                        $newAssignation->save();
                    }
                }

                foreach ($idsProductosAsignados as $id) {
                    if (!in_array($id, $nuevosMaterialesIds)) {
                        ProductosPorOrden::where('orden_id', $ordenId)->where('producto_id', $id)->delete();
                    }
                }

                return back()->with(['success' => 'Los productos se asignaron con éxito']);
            } catch (Exception $e) {
                return back()->with(['danger' => 'Ocurrió un error: ' . $e]);
            }
        } else {
            return back()->with(['danger' => 'Ocurrió un error']);
        }
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
