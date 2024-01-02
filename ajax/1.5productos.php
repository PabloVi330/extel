<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">DataTables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- MODAL DE NUEVO ARTICULO -->
        <div>
            <button type="button" class="btn btn-primary
                                waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#modalProducto">Agregar Nuevo Producto</button>

            <div id="modalProducto" class="modal fade" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFullscreenLabel">Registrar nuevo producto</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="#" id="formularioP" class="dropzone p-0">
                                    <!-- CARGA DE DATROS -->
                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-size-14 mb-3"></h5>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label for="codigo_P" class="form-label">Codigo</label>
                                                            <input class="form-control" type="text" id="codigo_A" name="codigo_A">
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="mb-3">
                                                                <label for="id_categoria" class="form-label font-size-13 text-muted">Seleccionar
                                                                    Categorias</label>
                                                                <select class="form-control" data-trigger name="id_categoria" id="id_categoria" placeholder="This is a search placeholder">
                                                                    <option value="">Seleccionar</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <input class="form-control" type="hidden" id="id_usuario" name="id_usuario">

                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="mb-3">
                                                                <label for="id_marca" class="form-label font-size-13 text-muted">Marcas</label>
                                                                <select class="form-control" data-trigger name="id_marca" id="id_marca" placeholder="This is a search placeholder">
                                                                    <option value="sin marca">Seleccionar Marca</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="descripcion_A" class="form-label">Descripcion</label>
                                                            <input class="form-control" type="text" id="descripcion_A" name="descripcion_A">
                                                        </div>


                                                        <div class="col-3">
                                                            <label for="stock_A" class="form-label">Stock</label>
                                                            <input class="form-control" type="number" id="stock_A" name="stock_A" min="1">
                                                        </div>

                                                        <div class="col-3">
                                                            <label for="cantidad_A" class="form-label">Cantidad</label>
                                                            <input class="form-control" type="number" id="cantidad_A" name="cantidad_A" value="1" min="1">
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="unimed_A" class="form-label">U. Med.</label>
                                                            <input class="form-control" type="text" id="unimed_A" name="unimed_A">
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="precio_neto_A" class="form-label">Precio
                                                                Net.</label>
                                                            <input class="form-control" type="number" id="precio_neto_A" name="precio_neto_A" step="any">
                                                        </div>


                                                        <div class="col-3">
                                                            <label for="precio_distribucion_A" class="form-label">Precio
                                                                Dist.</label>
                                                            <input class="form-control" type="number" id="precio_distribucion_A" name="precio_distribucion_A" step="any">
                                                        </div>

                                                        <div class="col-3">
                                                            <label for="precio_tecnico_A" class="form-label">Precio
                                                                Tec.</label>
                                                            <input class="form-control" type="number" id="precio_tecnico_A" name="precio_tecnico_A" step="any">
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="precio_publico_A" class="form-label">Precio
                                                                Pub.</label>
                                                            <input class="form-control" type="number" id="precio_publico_A" name="precio_publico_A" step="any">
                                                        </div>

                                                        <div class="col-3">
                                                            <label for="precio_fact_A" class="form-label">Precio
                                                                Fact.</label>
                                                            <input class="form-control" type="number" id="precio_fact_A" name="precio_fact_A" step="any">
                                                        </div>

                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Imagenes</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div>

                                                        <div class="fallback">
                                                            <input name="imagenes" type="file" enctype="multipart/form-data">
                                                        </div>
                                                        <div class="dz-message needsclick">
                                                            <div class="mb-3">
                                                                <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                                            </div>
                                                            <h5>Drop files here or click to upload.</h5>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal" id="limpiar">Close</button>
                                <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light " id="enviarFormulario">Guardar</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>




            <!-- TABLA DE ARTICULOS -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id='datatable-articulos' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Categoria</th>
                                        <th>Stock</th>
                                        <th>Marca</th>
                                        <th>Umed.</th>
                                        <th>P. Neto</th>
                                        <th>P. Dis.</th>
                                        <th>P. Tec.</th>
                                        <th>P. Pub-</th>
                                        <th>Accio.</th>
                                    </tr>
                                </thead>

                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end cardaa -->
                </div> <!-- end col -->
            </div>


            <!-- MODAL EDITAR ARTICULOS -->
            <div id="modalEditarArticulo" class="modal fade" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalFullscreenLabel"> Editar Articulo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="#" id="formEditarArticulo" class="dropzone p-0">

                                    <!-- CARGA DE DATROS -->
                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-size-14 mb-3"></h5>
                                                    <div class="row">
                                                        <input class="form-control" type="hidden" id="Eid_usuario" name="Eid_usuario">
                                                        <input class="form-control" type="hidden" id="Eid_articulo" name="Eid_articulo">
                                                        <input class="form-control" type="hidden" id="Eid_sucursal" name="Eid_sucursal">
                                                        <input class="form-control" type="hidden" id="Eimagenes_A" name="Eimagenes_A">

                                                        <div class="col-3">
                                                            <label for="Ecodigo_A" class="form-label">Codigo</label>
                                                            <input class="form-control" type="text" id="Ecodigo_A" name="Ecodigo_A">
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="mb-3">
                                                                <label for="Eid_categoria" class="form-label font-size-13 text-muted">Seleccionar
                                                                    Categorias</label>
                                                                <select class="form-control" data-trigger name="Eid_categoria" id="Eid_categoria">
                                                                    <option value="">Seleccionar</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="mb-3">
                                                                <label for="Emarca_A" class="form-label font-size-13 text-muted">Marcas</label>
                                                                <select class="form-control" data-trigger name="Eid_marca" id="Eid_marca" placeholder="This is a search placeholder">
                                                                    <option value="sin marca">Seleccionar Marca</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                        <div class="mb-3">
                                                            <label for="Edescripcion_A" class="form-label">Descripcion</label>
                                                            <input class="form-control" type="text" id="Edescripcion_A" name="Edescripcion_A">
                                                        </div>


                                                        <div class="col-3">
                                                            <label for="Estock_A" class="form-label">Stock</label>
                                                            <input class="form-control" type="number" id="Estock_A" name="Estock_A" min="1">

                                                        </div>
                                                        <div class="col-3">
                                                            <label for="Ecantidad_A" class="form-label">Cantidad</label>
                                                            <input class="form-control" type="number" id="Ecantidad_A" name="Ecantidad_A" min="1">
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="Eunimed_A" class="form-label">U. Med.</label>
                                                            <input class="form-control" type="text" id="Eunimed_A" name="Eunimed_A">
                                                        </div>


                                                        <div class="col-3">
                                                            <label for="Eprecio_neto_A" class="form-label">Precio
                                                                Neto</label>
                                                            <input class="form-control" type="number" id="Eprecio_neto_A" name="Eprecio_neto_A" step="0.01">
                                                        </div>

                                                        <div class="col-3">
                                                            <label for="Eprecio_distribucion_A" class="form-label">Precio
                                                                Dist.</label>
                                                            <input class="form-control" type="number" id="Eprecio_distribucion_A" name="Eprecio_distribucion_A" step="any">
                                                        </div>
                                                        <div class="col-3">
                                                            <label for="Eprecio_tecnico_A" class="form-label">Precio
                                                                Tec..</label>
                                                            <input class="form-control" type="number" id="Eprecio_tecnico_A" name="Eprecio_tecnico_A" step="any">
                                                        </div>

                                                        <div class="col-3 ">
                                                            <label for="Eprecio_publico_A" class="form-label">Precio
                                                                Pub.</label>
                                                            <input class="form-control" type="number" id="Eprecio_publico_A" name="Eprecio_publico_A" step="any">
                                                        </div>

                                                    </div>
                                                    Activo
                                                    <div class="col-12 m-a">
                                                        <input type="hidden" id="Eestado_A" name="Eestado_A" value="">
                                                        <input type="checkbox" id="switch3" switch="bool" name="switch3" />
                                                        <label for="switch3" data-on-label="Si" data-off-label="No"></label>
                                                    </div>
                                                    <!-- end row -->
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->

                                        <!-- CARGA DE IMAGENES -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title">Imagenes</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>

                                                            <div class="fallback">
                                                                <input name="imagenes" type="file" enctype="multipart/form-data">
                                                            </div>
                                                            <div class="dz-message needsclick">
                                                                <div class="mb-3">
                                                                    <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                                                </div>
                                                                <h5>Drop files here or click to upload.</h5>
                                                            </div>

                                                        </div>

                                                        <div class="text-center mt-4">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Send
                                                                Files</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light " id="editarArticulo">Guardar Cambios</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div>
    </div>
    <!-- End Page-content -->
    <style>
        @keyframes parpadeo {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .parpadeo {
            animation: parpadeo 1s infinite;
        }
    </style>


    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="assets/libs/dropzone/min/dropzone.min.js"></script>
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $(".dropzone").dropzone();
        });
    </script>


    <script>
        function resetForm() {
            var formulario = document.getElementById("formularioP");
            var dropzone = Dropzone.forElement("#formularioP");
            formulario.reset();
            dropzone.removeAllFiles();
            var table = $('#datatable-articulos').DataTable();
            table.ajax.reload();

        }
        $(document).ready(function() {
            $("#limpiar").on("click", function(e) {
                e.preventDefault();
                resetForm();
            })
        })




        $(document).ready(function() {
            //ANCHOR - data tables de articulos
            var tableArticulos = $('#datatable-articulos').DataTable({
                lengthChange: true,
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ],
                ajax: {
                    url: './controllers/ArticulosControllers.php?action=obtenerArticulos',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id_articulo'
                    },
                    {
                        data: 'codigo_A'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            if (data.descripcion_A !== null) {
                                //var descripcion_A = JSON.parse(data.descripcion_A.descripcion_A);
                                //console.log(data.descripcion_A)
                                descripcion_A = data.descripcion_A.detalle
                                // Dividir la cadena en segmentos de 20 caracteres
                                var segmentos = [];
                                for (var i = 0; i < descripcion_A.length; i += 20) {
                                    segmentos.push(descripcion_A.substring(i, i + 20));
                                }

                                // Crear un bloque de HTML con saltos de línea para cada segmento
                                var descripcionHtml = segmentos.map(function(segmento) {
                                    return `<div>${segmento}</div>`;
                                }).join('');

                                return `<img src="controllers/uploads/products/" alt="" class="avatar-lg rounded-circle me-4">
                            <a href="#" class="text-body">${descripcionHtml}</a>`;
                            } else {
                                return `<img src="controllers/uploads/products/" alt="" class="avatar-lg rounded-circle me-4">
                            <a href="#" class="text-body">SN</a>`;
                            }
                        }
                    },
                    {
                        data: 'nombre_categoria'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            // Combina los valores de los cuatro campos en un solo string
                            var uno = row.stock_sucursal_1
                            var dos = row.stock_sucursal_2
                            var tres = row.stock_sucursal_3
                            var cuatro = row.stock_sucursal_4
                            return ` <div class="row w-100" >
                                  <div class=" ${uno <= 6 ? 'parpadeo' : ''}  badge badge-soft-info font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${uno}</div> 

                                  <div class="${dos <= 6 ? 'parpadeo' : ''} badge badge-soft-success font-size-14 m-1"><i class="fas fa-laptop-house"></i>${dos}</div>

                                  <div class=" ${tres <= 6 ? 'parpadeo' : ''} badge badge-soft-warning font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${tres}</div>
                                  <div class=" ${cuatro <= 6 ? 'parpadeo' : ''} badge badge-soft-primary font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${cuatro}</div>
                               
                            </div>`;
                        }
                    },
                    {
                        data: 'nombre_marca'
                    },
                    {
                        data: 'unimed_A'
                    },
                    {
                        data: 'precio_neto_A',
                        render: function(data, type, row) {
                            // Devolver el contenido de la celda con el color aplicado y estilos
                            return `<div class="badge badge-soft-secondary font-size-14"><i class="fas fa-laptop-house"></i> ${data}</div>`;
                        }
                    },
                    {
                        data: 'precio_distribucion_A',
                        render: function(data, type, row) {
                            // Devolver el contenido de la celda con el color aplicado y estilos
                            return `<div class="badge badge-soft-danger font-size-14"><i class="fas fa-laptop-house"></i> ${data}</div>`;
                        }
                    },
                    {
                        data: 'precio_tecnico_A',
                        render: function(data, type, row) {
                            // Devolver el contenido de la celda con el color aplicado y estilos
                            return `<div class="badge badge-soft-info font-size-14"><i class="fas fa-laptop-house"></i> ${data}</div>`;
                        }
                    },
                    {
                        data: 'precio_publico_A',
                        render: function(data, type, row) {
                            // Devolver el contenido de la celda con el color aplicado y estilos
                            return `<div class="badge badge-soft-dark font-size-14"><i class="fas fa-laptop-house"></i> ${data}</div>`;
                        }
                    },

                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info btn-editar btn-lg" data-id="' + row.id_articulo + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminar " data-id="' + row.id_articulo + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
                        }
                    }
                ]
            });
            new $.fn.dataTable.Buttons(tableArticulos, {
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ]
            });

            tableArticulos.buttons().container()
                .appendTo('#datatable-articulos_wrapper .col-md-6:eq(0)');

            $(".dataTables_length select").addClass('form-select form-select-sm');

            //=============CARGAR CATEGORIAS  =================
            $.ajax({
                url: './controllers/CategoriasControllers.php?action=obtenerCategorias',
                dataType: 'json',
                success: function(data) {
                    var select = $('#id_categoria');
                    select.empty();
                    select.append($('<option>', {
                        value: '',
                        text: 'Seleccionar'
                    }));
                    $.each(data, function(key, value) {
                        select.append($('<option>', {
                            value: value.id_categoria,
                            text: value.nombre_C
                        }));
                    });
                }
            });

            //===========CARGAR MARCAS ============================

            $.ajax({
                url: './controllers/MarcasControllers.php?action=obtenerMarcas',
                dataType: 'json',
                success: function(data) {
                    var select = $('#id_marca');
                    select.empty();
                    select.append($('<option>', {
                        value: '',
                        text: 'Seleccionar'
                    }));
                    $.each(data, function(key, value) {
                        select.append($('<option>', {
                            value: value.id_marca,
                            text: value.nombre_marca
                        }));
                    });
                }
            })



        });


        // ================================================
        // -------------CREAR PRODUCTO --------------------
        // ================================================

        $("#enviarFormulario").on("click", function(e) {
            e.preventDefault();

            var formData = new FormData($("#formularioP")[0]);

            var imageFiles = $(".dropzone")[0].dropzone.getAcceptedFiles();

            for (var i = 0; i < imageFiles.length; i++) {
                formData.append("imagenes[]", imageFiles[i]);
            }
            $.ajax({
                type: "POST",
                url: "./controllers/ArticulosControllers.php?action=guardarArticulos",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log("Respuesta del servidor:", response);
                    if (response == '"ok"') {
                        $('#modalProducto').modal('hide');
                        resetForm();
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'El articulo se a creado Correctamente',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'El producto no se guardo en  la base de datos',
                        });
                    }
                },
                error: function(error) {
                    console.log("Error en la petición AJAX:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Érror',
                        text: 'error no se pudo hacer la petision AJAX:',
                    });
                }
            });
        });


        // ================================================
        // -------------EDITAR PRODUCTO --------------------
        // ================================================
        $('#datatable-articulos').on('click', '.btn-editar', function() {
            var idArticulo = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: './controllers/ArticulosControllers.php?action=obtenerArticuloPorId',
                data: {
                    id_articulo: idArticulo
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var fk_id_marca = response.fk_id_marca;
                    var fk_id_categoria = response.fk_id_categoria;
                    $.ajax({
                        type: 'GET',
                        url: './controllers/MarcasControllers.php?action=obtenerMarcas',
                        dataType: 'json', // Asegúrate de que la respuesta sea en formato JSON
                        success: function(response) {
                            var marcaDeseada = response.find(function(marca) {
                                return marca.id_marca == fk_id_marca;
                            });
                            console.log("Sucursal encontrada:", marcaDeseada);
                            var selectSucursal = $('#Eid_marca');
                            selectSucursal.empty();

                            selectSucursal.append($('<option>', {
                                value: marcaDeseada.id_marca,
                                text: marcaDeseada.nombre_marca
                            }));

                            // Recorre la respuesta y agrega opciones al select
                            $.each(response, function(index, sucursal) {
                                if (sucursal.id_sucursal !== fk_id_sucursal) {
                                    selectSucursal.append($('<option>', {
                                        value: sucursal.id_sucursal, // El valor del ID de la sucursal
                                        text: sucursal.nombreS // El nombre de la sucursal
                                    }));
                                }

                            });
                        },
                        error: function(error) {
                            console.error('Error en la petición AJAX: de la SUCURSAL', error);
                        }
                    });
                    $.ajax({
                        type: 'GET',
                        url: './controllers/CategoriasControllers.php?action=obtenerCategorias',
                        dataType: 'json', // Asegúrate de que la respuesta sea en formato JSON
                        success: function(response) {
                            var categoriaDeseada = response.find(function(categoria) {
                                return categoria.id_categoria == fk_id_categoria;
                            });
                            console.log("Sucursal encontrada:", categoriaDeseada);
                            var selectCategoria = $('#Eid_categoria');
                            selectCategoria.empty();

                            selectCategoria.append($('<option>', {
                                value: categoriaDeseada.id_categoria,
                                text: categoriaDeseada.nombre_C
                            }));

                            // Recorre la respuesta y agrega opciones al select
                            $.each(response, function(index, categoria) {
                                if (categoria.id_categoria !== fk_id_categoria) {
                                    selectCategoria.append($('<option>', {
                                        value: categoria.id_categoria, // El valor del ID de la sucursal
                                        text: categoria.nombre_C // El nombre de la sucursal
                                    }));
                                }
                            });
                        },
                        error: function(error) {
                            console.error('Error en la petición AJAX: de la CATEGORIA', error);
                        }
                    });
                    $('#modalEditarArticulo').modal('show');
                    $('#Eid_articulo').val(idArticulo);
                    $('#Ecodigo_A').val(response.codigo_A);
                    $('#Eimagenes_A').val(response.imagenes_A);
                    $('#Eid_usuario').val(response.fk_id_usuario);
                    $('#Eid_sucursal').val(response.fk_id_sucursal);

                    $('#Emarca_A').val(response.marca);
                    var selectedText = $('#Emarca_A option:selected').text();
                    $('#Emarca_A').find('option').filter(function() {
                        return $(this).text() === selectedText;
                    }).prop('selected', true);

                    var descripcion = JSON.parse(response.descripcion_A);
                    $('#Edescripcion_A').val(descripcion.detalle);
                    $('#Estock_A').val(response.stock_A);
                    $('#Ecantidad_A').val(response.cantidad_A);
                    $('#Eunimed_A').val(response.unimed_A);
                    $('#Eprecio_neto_A').val(response.precio_neto_A);
                    $('#Eprecio_distribucion_A').val(response.precio_distribucion_A);
                    $('#Eprecio_tecnico_A').val(response.precio_tecnico_A);
                    $('#Eprecio_publico_A').val(response.precio_publico_A);

                    if (response.estado_A == 1) {
                        $('#switch3').prop('checked', true);
                    } else {
                        $('#switch3').prop('checked', false);
                    }
                }
            });
            $('#editarArticulo').click(function() {
                var estado_U = $('#switch3').prop('checked') ? 1 : 0;
                $('#Eestado_A').val(estado_U);
                var formData = $('#formEditarArticulo').serialize();
                $.ajax({
                    type: 'POST',
                    url: './controllers/ArticulosControllers.php?action=editararticulos',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $('#modalEditarArticulo').modal('hide');
                        $('#formEditarArticulo')[0].reset();

                        var table = $('#datatable-articulos').DataTable();
                        table.ajax.reload();
                        if (response == '"ok"') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'El articulo se a actualizado Correctamente',
                            });
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Érror',
                                text: 'El articulo se a actualizado Correctamente' + response,
                            }); 
                        }
                    },
                    error: function(error) {

                    }
                });
            });

        });


        // ================================================
        // -------------ELIMINAR PRODUCTO --------------------
        // ================================================
        $(document).ready(function() {
            $('#datatable-articulos').on('click', '.btn-eliminar', function() {
                var idArticulo = $(this).data('id'); // Obtener el ID de la sucursal desde el atributo data-id
                console.log(idArticulo)
                // Mostrar un SweetAlert2 de confirmación
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Realmente deseas eliminar este Articulo?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // El usuario confirmó la eliminación, realiza la solicitud AJAX para eliminar la sucursal
                        $.ajax({
                            type: 'POST',
                            url: './controllers/ArticulosControllers.php?action=eliminarArticulos',
                            data: {
                                id_articulo: idArticulo
                            },
                            success: function(response) {
                                // Maneja la respuesta del servidor aquí, por ejemplo, recargar la tabla
                                var table = $('#datatable-articulos').DataTable();
                                table.ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Éxito',
                                    text: 'El articulo se elimino correctamente.',
                                });
                            },
                            error: function(error) {
                                console.log('Error en la petición AJAX:', error);
                            }
                        });
                    }
                });
            });



        })
    </script>