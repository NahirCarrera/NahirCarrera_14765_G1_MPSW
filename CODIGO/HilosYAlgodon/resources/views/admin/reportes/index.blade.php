@extends('admin.layout')

@section('content')
    <div class="card mb-3" id="formReport">
        <div class="card-body overflow-x-auto">
            <h1>REPORTES</h1>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.reportes.generarReporte') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <label for="reporte_materiales"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_materiales" id="reporte_materiales"
                                    class="form-check-input float-end @error('reporte_materiales') is-invalid @enderror"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_materiales">Materiales</label>
                                @error('reporte_materiales')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                            <label for="reporte_inventario"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_inventario" id="reporte_inventario"
                                    class="form-check-input float-end @error('reporte_inventario') is-invalid @enderror"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_inventario">Inventario</label>
                                @error('reporte_inventario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                            <label for="reporte_agenda"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="reporte_agenda" id="reporte_agenda"
                                    class="form-check-input float-end @error('reporte_agenda') is-invalid @enderror"
                                    type="checkbox" role="switch">
                                <label class="form-check-label float-start" for="reporte_agenda">Agenda</label>
                                @error('reporte_agenda')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                            <div class="form-floating mb-3" style="width:25%;min-width:200px;margin:0 auto;">
                                <select disabled class="form-select" id="estado_ordenes" name="estado_ordenes"
                                    aria-label="Floating label select example">
                                    <option value="" selected>--Seleccione--</option>
                                    <option value="todas">Todas</option>
                                    <option value="entregadas">Entregadas</option>
                                    <option value="pendientes">Pendientes</option>
                                </select>
                                <label for="estado_ordenes">Estado de las Órdenes</label>
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input id="fechaInicio" type="date"
                                        class="form-control @error('fechaInicio') is-invalid @enderror" name="fechaInicio"
                                        value="{{ old('fechaInicio') }}" autocomplete="fechaInicio"
                                        placeholder="Insertar el costo">
                                    <label for="fechaInicio">Fecha de Inicio</label>
                                </div>

                                @error('fechaInicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input id="fechaFin" type="date"
                                        class="form-control @error('fechaFin') is-invalid @enderror" name="fechaFin"
                                        value="{{ old('fechaFin') }}" autocomplete="fechaFin"
                                        placeholder="Insertar el costo">
                                    <label for="fechaFin">Fecha Final</label>
                                </div>

                                @error('fechaFin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>



        </div>

    </div>
    @if (
        $datosMateriales == '' &&
            $datosProductos == '' &&
            $datosAgenda == '' &&
            $datosMateriales == null &&
            $datosProductos == null &&
            $datosAgenda == null)
        <h2>No hay datos para mostrar</h2>
    @else
        @if ($fechaInicio && $fechaFin && $actualDate)
            <h1>Reporte</h1>
            <input type="button" value="Imprimir" id="printbutton" class="btn btn-success float-end">
            <div class="d-flex">
                <p class="my-0 me-5 fs-6">Desde la fecha: {{ $fechaInicio }}</p>
                <p class="m-0 fs-6">Hasta la fecha: {{ $fechaFin }}</p>
            </div>

            <p class="m-0 fs-6">Generado el: {{ $actualDate }}</p>
        @endif
    @endif

    @if ($datosMateriales != '' && $datosMateriales != null)
        <h2>Materiales</h2>
        <table class="table table-bordered" id="materialesReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Unidad de medida</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Costo Total</th>
                    <th scope="col">Costo/Ud medida</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($datosMateriales as $material)
                    <tr>
                        <td>{{ $material->id }}</td>
                        <td>{{ $material->nombre }}</td>
                        <td>{{ $material->ud_medida }}</td>
                        <td>{{ $material->cantidad }}</td>
                        <td>{{ $material->costo_total }}</td>
                        <td>{{ $material->costo_ud_medida }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($datosProductos != '' && $datosProductos != null)
        <h2>Inventario de Productos</h2>
        <table class="table table-bordered" id="productosReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descipcion</th>
                    <th scope="col">Costo Unitario</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Horas de Trabajo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datosProductos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->costo_unitario }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->horas_trabajo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($datosAgenda != '' && $datosAgenda != null)
        <h2>Agenda</h2>
        <table class="table table-bordered" id="agendaReport">
            <thead>
                <tr class="bg-primary text-light">
                    <th scope="col">Id</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Descipcion</th>
                    <th scope="col">Fecha de Entrega</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datosAgenda as $orden)
                    <tr>
                        <td>{{ $orden->id }}</td>
                        <td>{{ $orden->nombre_cliente }}</td>
                        <td>{{ $orden->descripcion }}</td>
                        <td>{{ $orden->fecha_entrega }}</td>
                        <td>{{ $orden->direccion }}</td>
                        <td style="text-align: center">
                            @if ($orden->entregado == 0)
                                <span class="badge bg-success">Entregado</span>
                            @else
                                <span class="badge bg-secondary">Pendiente</span>
                            @endif
                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <script>
        document.getElementById('reporte_agenda').addEventListener('change', function() {
            if (this.checked) {
                document.getElementById('estado_ordenes').disabled = false;
            } else {
                document.getElementById('estado_ordenes').disabled = true;
            }
        });
        document.querySelectorAll('#printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script>

@endsection
