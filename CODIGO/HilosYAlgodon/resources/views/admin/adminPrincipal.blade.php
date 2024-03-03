@extends('admin.layout')

@section('content')
    <div>
        <h1>Entre Hilos & Algodon</h1>
    </div>
    <div class="card">
        <div class="card-body">
            @if ($productosBajos->isEmpty() && !$ordenesProntasAEntregar)
                <div class="alert alert-success" role="alert">
                    <h5>Todo en orden</h5>
                    <p>El inventario se encuentra en buen estado Y no tiene entregas pendientes!</p>
                </div>
            @endif

            @if (!$productosBajos->isEmpty())
                <div class="alert alert-danger" role="alert">
                    <h5>Inventario</h5>
                    <p>Atención! Los siguientes productos se encuentran bajos de stock:</p>
                    <table class="table-danger">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        @foreach ($productosBajos as $productos)
                            <tbody>
                                <tr>
                                    <td>{{ $productos->id }}</td>
                                    <td>
                                        {{ $productos->nombre }}
                                    </td>
                                    <td>
                                        {{ $productos->cantidad }}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endif

            @if (!$ordenesRetrasadas->isEmpty())
                <div class="alert alert-danger" role="alert">
                    <h5>Entregas</h5>
                    <p>Atención! Las siguientes entregas se encuentran RETRASADAS:</p>

                    <table class="table-danger">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Cliente</th>
                                <th>Descripcion</th>
                                <th>Fecha de Entrega</th>
                                <th>Días de retraso</th>
                            </tr>
                        </thead>
                        @foreach ($ordenesRetrasadas as $orden)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ $orden->id }}
                                    </td>
                                    <td>
                                        {{ $orden->nombre_cliente }}
                                    </td>
                                    <td>
                                        {{ $orden->descripcion }}
                                    </td>
                                    <td>
                                        {{ $orden->fecha_entrega }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($orden->fecha_entrega)->diffInDays(now()) }}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endif


            @if (!$ordenesProntasAEntregar->isEmpty())
                <div class="alert alert-warning" role="alert">
                    <h5>Entregas</h5>
                    <p>Atención! Las siguientes entregas se encuentran pendientes:</p>

                    <table class="table-warning">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Cliente</th>
                                <th>Descripcion</th>
                                <th>Fecha de Entrega</th>
                                <th>Días restantes</th>
                            </tr>
                        </thead>
                        @foreach ($ordenesProntasAEntregar as $orden)
                            <tbody>

                                <tr>
                                    <td>
                                        {{ $orden->id }}
                                    </td>
                                    <td>
                                        {{ $orden->nombre_cliente }}
                                    </td>
                                    <td>
                                        {{ $orden->descripcion }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($orden->fecha_entrega)->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($orden->fecha_entrega)->diffInDays(now()->subDay()) }}
                                    </td>
                                </tr>

                            </tbody>
                        @endforeach
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
