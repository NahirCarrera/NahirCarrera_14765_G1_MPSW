@extends('admin.layout')

@section('content')
    <div class="d-flex flex-wrap w-100 justify-content-center">
        <div class="card mb-3 flex-fill">
            <div class="card-header bg-info">
                <h4>Perfil del orden: {{ $orden->nombre }}</h4>
            </div>
            <div class="card-body">
                <div class="col mx-auto">
                    <form action="{{ route('admin.agenda.edit', encrypt($orden->id)) }}" id="update_product_info"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input id="nombre_cliente" type="text"
                                    class="form-control @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente"
                                    value="{{ $orden->nombre_cliente }}" autocomplete="nombre_cliente"
                                    placeholder="Almohada">

                                <label for="nombre_cliente">{{ __('Nombre del cliente') }}</label>

                                @error('nombre_cliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control @error('descripcion') is-invalid @enderror" placeholder="Leave a comment here"
                                    id="descripcion" name="descripcion">{{ $orden->descripcion }}</textarea>
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
                                        class="form-control @error('fecha_entrega') is-invalid @enderror"
                                        name="fecha_entrega" value="{{ $orden->fecha_entrega }}"
                                        autocomplete="fecha_entrega" placeholder="Insertar el costo">
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
                                    id="direccion" name="direccion">{{ $orden->descripcion }}</textarea>
                                <label for="direccion">Dirección</label>
                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="entregado"
                                class="form-check form-switch my-3 mx-auto rounded border border-primary px-2 py-1 list-group-item list-group-item-action list-group-item-primary"
                                style="width:25%;height:35px;min-width:200px;">
                                <input name="entregado" id="entregado"
                                    class="form-check-input float-end @error('entregado') is-invalid @enderror"
                                    type="checkbox" role="switch" @if ($orden->entregado === 1) checked @else @endif>
                                <label class="form-check-label float-start" for="entregado">Entregado</label>
                                @error('entregado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="card mb-3 mx-3">
            <div class="card-header bg-info">
                <h4>Asignacion de Productos</h4>
            </div>
            <div class="card-body">
                <div class="text-end mb-3">
                    <button href="" class="btn btn-success px-2" data-bs-toggle="modal"
                        data-bs-target="#newRequirementsModal">
                        <i class="bi bi-plus-lg"></i> Elegir Productos
                    </button>
                </div>


            </div>
        </div>

    </div>

    <!-- MODAL PARA AÑADIR MATERIALES -->
    <div class="modal fade modal-md" id="newRequirementsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Materiales</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
@endsection
