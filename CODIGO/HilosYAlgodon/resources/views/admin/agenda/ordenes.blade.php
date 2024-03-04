@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-body overflow-x-auto">
            <h1>ORDENES</h1>
            <button type="button" class="btn btn-primary my-3 float-end" data-bs-toggle="modal" data-bs-target="#newUserModal">
                <i class="bi bi-plus-circle-dotted" style="font-size: 1.5rem;"></i>
            </button>
            <table class="table table-bordered" id="ordenes">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Id</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Descipcion</th>
                        <th scope="col">Fecha de Entrega</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Estado</th>
                        <th scope="col">OP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ordenes as $orden)
                        <tr>
                            <td>{{ $orden->id }}</td>
                            <td>{{ $orden->nombre_cliente }}</td>
                            <td>{{ $orden->descripcion }}</td>
                            <td>{{ $orden->fecha_entrega }}</td>
                            <td>{{ $orden->direccion }}</td>
                            <td style="text-align: center">
                                @if ($orden->entregado)
                                    <span class="badge bg-success">Entregado</span>
                                @else
                                    <span class="badge bg-secondary">Pendiente</span>
                                @endif
                            </td>
                            </td>
                            <td>
                                <a href="{{ route('admin.agenda.details', encrypt($orden->id)) }}" class="btn btn-primary">
                                    Editar
                                </a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalDeleteMaterial{{ $orden->id }}">
                                    Eliminar
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="modalDeleteMaterial{{ $orden->id }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Está seguro de eliminar el
                                            orden del cliente:
                                            {{ $orden->nombre_cliente }}?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger fw-bold">Los datos no se podrán recuperar</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin.agenda.destroy', encrypt($orden->id)) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-primary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="float-right ml-2 btn btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal new Orden -->
    <div class="modal fade modal-lg" id="newUserModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo orden</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('admin.agenda.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input id="nombre_cliente" type="text"
                                class="form-control @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente"
                                value="{{ old('nombre_cliente') }}" autocomplete="nombre_cliente" placeholder="Almohada" oninput="validarAlfabeticos(this)">

                            <label for="nombre_cliente">{{ __('Nombre del cliente') }}</label>

                            @error('nombre_cliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('descripcion') is-invalid @enderror" placeholder="Leave a comment here"
                                id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                            <label for="descripcion">Descripcion</label>
                            @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input id="fecha_entrega" type="datetime-local" min="2024-03-02T12:00"
                                    class="form-control @error('fecha_entrega') is-invalid @enderror" name="fecha_entrega"
                                    value="{{ old('fecha_entrega') }}" autocomplete="fecha_entrega"
                                    placeholder="Insertar el costo">
                                <label for="fecha_entrega">Fecha de Entrega</label>
                            </div>

                            @error('fecha_entrega')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('direccion') is-invalid @enderror" placeholder="Leave a comment here"
                                id="direccion" name="direccion">{{ old('direccion') }}</textarea>
                            <label for="direccion">Dirección</label>
                            @error('direccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
