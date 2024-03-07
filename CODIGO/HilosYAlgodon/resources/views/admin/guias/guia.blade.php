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
                                        <h5>Añadir nuevo producto</h5>
                                        <ol>
                                            <li>Dar click en el icono de agregar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/MSBZvNf/productos1.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Completar el formulario de nuevo producto</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/5Y9Z2ZW/productos2.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <ol>
                                                <li>Ingresar nuevo nombre del producto</li>
                                                <li>Ingresar una descripción del producto</li>
                                                <li>Ingresar la cantidad del producto</li>
                                                <li>Ingresar las horas de trabajo que se ocupo en realizar el producto</li>
                                            </ol>
                                            <li>Dar click en guardar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/W2R6dbX/productos3.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Producto agregado </li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/HBHFQWz/productos4.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>                                        
                                        <h5>Editar Producto</h5>
                                        <ol>
                                            <li>Dar click en el botón Editar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/2sFcDNM/productos5.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Editar datos generales del producto en el formulario</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/BqK4W7D/productos6.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <ol>
                                                <li>Ingresar nuevo nombre</li>
                                                <li>Ingresar nueva descripción </li>
                                                <li>Ingresar nueva cantidad</li>
                                                <li>Ingresar nuevas horas de trabajo</li>
                                            </ol>
                                            <li>Dar click en el botón Guardar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/vVk7ZP0/productos7.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Asignar materiales de fabricación al producto</li>                                                
                                            <ol>
                                                <li>Dar click en el botón Modificar Materiales</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/1fXLg2T/productos8.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                               
                                                <li>Seleccionar los materiales</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/f9kdGdy/productos9.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                
                                                <li>Dar click en el botón Añadir</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/RjwRvp9/productos10.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                
                                                <li>Ingresar la cantidad que se usara del material</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/BVPDCnm/productos11.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                
                                            </ol>
                                            <li>Dar click en el botón Asignar</li>
                                            <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/LrSsTDm/productos12.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                    
                                        </ol>
                                        <h5>Eliminar Producto</h5>
                                        <ol>
                                            <li>Dar click en el botón Eliminar asignado a cada producto</li>
                                            <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/kcS7Zf2/productos13.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>                                                
                                            <li>Dar click en el botón Eliminar en la ventana emergente</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/pr9LkwZ/productos14.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
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
                                        <h5>Añadir Orden</h5>
                                        <ol>
                                            <li>Dar click en el botón para agregar nueva orden</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/1nwyGJ5/agenda0.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Llenar el formulario de una nueva orden </li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/KDhbjWb/agenda1.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <ol>
                                                <li>Ingresar el nombre del cliente</li>
                                                <li>Ingresar una descripción de la orden</li>
                                                <li>Ingresar la fecha de entrega</li>
                                                <li>Ingresar la dirección del cliente o de entrega</li>
                                            </ol>
                                            <li>Dar click en el botón</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/b6ZCKMs/agenda2.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Nueva Orden agregada</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/fx4sQb0/agenda3.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
                                        <h5>Editar Orden</h5>
                                        <ol>
                                            <li>Dar click en el botón Editar que este asignado a cada orden</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/dBwvKG9/agenda4.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Editar datos generales en la orden en el formulario</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/Mk3t2VG/agenda5.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <ol>
                                                <li>Ingresar nuevo nombre del cliente</li>
                                                <li>Ingresar nueva descripción de la orden</li>
                                                <li>Ingresar nueva fecha de entrega</li>
                                                <li>Ingresar nueva dirección de la orden</li>
                                                <li>Modificar el estado de pendiente a entregado</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/HHQ5Cck/agenda6.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                                <li>Dar click en el botón Guardar</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/sjvP486/agenda7.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            </ol>
                                            <li>Asignar productos a la orden</li>
                                            <ol>
                                                <li>Dar click en el botón Elegir Productos</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/CKXVS5x/agenda8.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                                <li>Seleccionar el o los productos que se asignaran a la orden</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/z4zmjtT/agenda9.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                                <li>Dar click en el botón Añadir</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/F7whG21/agenda10.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                                <li>Asignar la cantidad del producto</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/V2SNr4x/agenda11.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                                <li>Dar click en el botón Asignar </li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/6Y83pbB/agenda12.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            </ol>
                                        </ol>
                                        <h5>Eliminar Orden</h5>
                                        <ol>
                                            <li>Dar click en el botón Eliminar asignado a cada orden</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/nsXQSkG/agenda13.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                            <li>Dar click en el botón Eliminar en la ventana emergente</li>
                                                <div class="card-body">                                                
                                                    <!-- Imagen -->
                                                    <div class="image-container">
                                                        <img src="https://i.ibb.co/pr9LkwZ/productos14.jpg" alt="Imagen" class="img-fluid">
                                                    </div>                                                
                                                </div>
                                        </ol>
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


