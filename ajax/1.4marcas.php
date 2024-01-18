<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Marcas</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Marcas</a></li>
                            <li class="breadcrumb-item active">registros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <!-- =================MODAL CREAR CATEGORIA-->

        <button type="button" class="btn btn-primary
                                waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#modalGuardarMarca">
            Nueva Marca</button>

        <div id="modalGuardarMarca" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Registrar nueva Marca</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="#" id="formCrearMarca" class="dropzone p-0">
                                <!-- CARGA DE DATROS -->
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div>
                                                <h5 class="font-size-14 mb-3"></h5>
                                                <div class="row">

                                                    <div class="mb-3">
                                                        <label for="nombre_C" class="form-label">Nombre</label>
                                                        <input class="form-control" type="text" id="nombre_marca" name="nombre_marca">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
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
                                                        <input name="foto_marca" type="file" enctype="multipart/form-data">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal" id="limpiar">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="guardarMarca">Guardar</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>


        <!-- ==============TABLA DE SUCURSALES -->
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id='datatable-marcas' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>foto</th>
                                        <th>Acciones</th>
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
        </div>

        <!-- ===============MODAL EDITAR SUCURSAL -->
        <div id="modalEditarMarca" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Editar Marca</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#" id="formEditarMarca" class="dropzone p-0" >
                                        <!-- CARGA DE DATROS -->
                                        <div class="col-lg-12">
                                            <div class="card">

                                                <div class="card-body">
                                                    <div>
                                                        <h5 class="font-size-14 mb-3"></h5>
                                                        <div class="row">
                                                            <input type="hidden" id="Eid_marca" name="Eid_marca">
                                                            <input type="hidden" id="Efoto_marca" name="Efoto_marca">
                                                            <div class="mb-3">
                                                                <label for="Enombre_C" class="form-label">Nombre</label>
                                                                <input class="form-control" type="text" id="Enombre_marca" name="Enombre_marca">
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
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
                                                                <input name="Efoto_marca1" type="file" enctype="multipart/form-data">
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
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="editarMarca">Guardar Cambios</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>

    <!-- ========================================================================================================================= -->
    <script>
        function resetForm() {
            var formulario = document.getElementById("formEditarMarca");
            var dropzone = Dropzone.forElement("#formEditarMarca");
            formulario.reset();
            dropzone.removeAllFiles();
            var table = $('#datatable-marcas').DataTable();
            table.ajax.reload();

        }
        $(document).ready(function() {
            $("#limpiar").on("click", function(e) {
                e.preventDefault();
                resetForm();
            })
        })
        // ======== LLAMADA A LA TABLA DE CATEGORIAS

        $(document).ready(function() {

            var table = $('#datatable-marcas').DataTable({
                lengthChange: false,
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ],
                ajax: {
                    url: './controllers/MarcasControllers.php?action=obtenerMarcas',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id_marca'
                    },
                    {
                        data: 'nombre_marca'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            var img = JSON.parse(data.foto_marca);
                            return '<img src="controllers/uploads/marcas/' + img[0] + '" alt="" height="70px" class="img">';
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info editar  btn-lg" data-id="' + row.id_marca + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminar " data-id="' + row.id_marca + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
                        }
                    }
                ]
            });

            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ]
            });

            table.buttons().container()
                .appendTo('#datatable-marcas_wrapper .col-md-6:eq(0)');

            $(".dataTables_length select").addClass('form-select form-select-sm');

        });


        // =========GUARDAR| MARCA
        $(document).ready(function() {
            $("#guardarMarca").on("click", function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                var formData = new FormData($("#formCrearMarca")[0]);

                // Obtén los archivos de imagen seleccionados
                var imageFiles = $(".dropzone")[0].dropzone.getAcceptedFiles();

                // Agrega los archivos de imagen al FormData
                for (var i = 0; i < imageFiles.length; i++) {
                    formData.append("foto_marca[]", imageFiles[i]);
                }
                $.ajax({
                    type: "POST",
                    url: './controllers/MarcasControllers.php?action=crearMarca',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log("Respuesta del servidor:", response);
                        $('#modalGuardarMarca').modal('hide');
                        resetForm();
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'La Marca se ha editado correctamente.',
                        });
                    },
                    error: function(error) {
                        console.log("Error en la petición AJAX:", error);

                    }
                });
            });
        });

        // ========= EDITAR MARCA 

        //----------------obtener datos para la edicion
        $('#datatable-marcas').on('click', '.editar', function() {
            var row = $(this).closest('tr'); // Obtener la fila más cercana al botón "Editar"
            var data = $('#datatable-marcas').DataTable().row(row).data(); // Obtener los datos de la fila
            console.log(data);
            $('#Eid_marca').val(data.id_marca);
            $('#Enombre_marca').val(data.nombre_marca);
            $('#Efoto_marca').val(data.foto_marca);
            $('#modalEditarMarca').modal('show');
           
        });

        //----------------guardando cambios
        $('#editarMarca').click(function() {

            var formData = new FormData($("#formEditarMarca")[0]);

            // Obtén los archivos de imagen seleccionados
            var imageFiles = $(".dropzone")[1].dropzone.getAcceptedFiles();

            // Agrega los archivos de imagen al FormData
            for (var i = 0; i < imageFiles.length; i++) {
                formData.append("foto_marca[]", imageFiles[i]);
            }
            $.ajax({
                type: 'POST',
                url: './controllers/MarcasControllers.php?action=edidarMarca',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    $('#modalEditarMarca').modal('hide');
                    //$('#formEditarSucursal')[0].reset();

                    var table = $('#datatable-marcas').DataTable();
                    table.ajax.reload();

                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'La marca ha editado correctamente.',
                    });
                },
                error: function(error) {

                }
            });
        });



        //=========ELIMINAR CATEGORIAS
        $(document).ready(function() {

            $('#datatable-categorias').on('click', '.btn-eliminar', function() {
                var idCategoria = $(this).data('id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Realmente deseas eliminar esta categoria?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: 'POST',
                            url: './controllers/ArticulosControllers.php?action=obtenerArticuloPorCategoria',
                            data: {
                                id_categoria: idCategoria
                            },
                            success: function(response) {
                                console.log(JSON.parse(response));

                                if (!JSON.parse(response)) {
                                    $.ajax({
                                        type: 'POST',
                                        url: './controllers/CategoriasControllers.php?action=eliminarCategorias',
                                        data: {
                                            id_categoria: idCategoria
                                        },
                                        success: function(response) {
                                            var table = $('#datatable-categorias').DataTable();
                                            table.ajax.reload();
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Éxito',
                                                text: 'La categoria eliminada correctamente.',
                                            });
                                        },
                                        error: function(error) {
                                            console.log('Error en la petición AJAX:', error);
                                        }
                                    });
                                } else {
                                    console.log('si tiene productos asociados ')
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'La categoria tiene productos asociados',
                                    });
                                }
                            }

                        });

                    }
                });
            });



        })
    </script>

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
    <!-- choices js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- color picker js -->
    <script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- datepicker js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>