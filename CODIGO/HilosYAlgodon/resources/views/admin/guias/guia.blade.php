@extends('admin.layout')


@section('content') 
    <style>        
    img {
            max-width: 300px;
            max-height: 300px;
        }
    </style> 
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Guia de Usuario</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid pt-4">

                    <!-- Notificaciones -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h4>Notificaciones</h4>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5>Esta sección tiene tres tipos de alertas: </h5>
                                        <ul>
                                            <li>Muestra los Productos bajos en stock cundo son menores o iguales a 10 </li>
                                            <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/k2KQ5dG/alertas3.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                            </div>
                                            <li>Muestra las ordenes pendientes de color amarillo</li>
                                            <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/ydgzcY7/alertas4.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                            </div>
                                            <li>Muestra las ordenes que se encuentran con un día de retraso o más de color rojo</li>
                                            <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/NK3qBwK/alertas5.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Materiales -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4>Materiales</h4>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5>Añadir materiales </h5>
                                        <ol>
                                            <li>Dar click en el icono de agregar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/hL4p5h6/materiales1.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Muestra el formulario para un nuevo material</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/Tr91fC6/materiales2.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                
                                                    <ol>
                                                        <li>Ingresar nombre del material</li>
                                                        <li>Elegir unidad de medida del material</li>
                                                        <li>Ingresar la cantidad del material</li>
                                                        <li>Ingresar el costo total del material</li>
                                                    </ol>
                                            <li>Dar click en guardar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/G5vhJbk/materiales4.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Material agregado</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/qxyKNrY/materiales5.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
                                        <h5>Editar Material</h5>
                                        <ol>
                                            <li>Dar click en el botón editar disponible para cada material</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/2s1HM0k/materiales6.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li> Muestra el formulario para editar el material seleccionado</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/M6djBZc/materiales7.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <ol>
                                                <li>Editar nombre del material</li>
                                                <li>Elegir unidad de medida del material</li>
                                                <li>Editar la cantidad del material</li>
                                                <li>Editar el costo total del material</li>
                                            </ol>
                                            <li>Dar click en guardar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/mF2S2Zm/materiales8.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
                                        <h5>Eliminar Material</h5>
                                        <ol>
                                            <li>Dar click en el botón eliminar disponible en cada material</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/nwSfzRW/materiales9.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Dar click en Eliminar en la ventana emergente</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/dGTgZYD/materiales11.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Productos -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h4>Productos</h4>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>En esta sección se mostrará la página de inicio de la aplicación</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agenda -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <h4>Agenda</h4>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>En esta sección se mostrará la página de inicio de la aplicación</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Reportes -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <h4>Reportes</h4>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>En esta sección se mostrará la página de inicio de la aplicación</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Usuarios -->
                    <div class="card mb-3">
                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <h4>Usuarios</h4>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>En esta sección se mostrará la página de inicio de la aplicación</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Modal para imagenes llamadas con un boton de un enlace -->
    <div class="modal fade" id="modalImagenes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imagenes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body
                    d-flex justify-content-center align-items-center">
                    <img src="" id="imagenModal" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection


