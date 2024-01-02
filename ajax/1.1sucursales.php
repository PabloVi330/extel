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
                    <h4 class="mb-sm-0 font-size-18">Sucursales</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Sucursales</a></li>
                            <li class="breadcrumb-item active">registros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <!-- =================MODAL CREAR SUCURSAL-->

        <button type="button" class="btn btn-primary waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#agregarSucursal"> Nueva Sucursal</button>

        <div id="agregarSucursal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Registrar nueva sucursal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="#" id="formCrearSucursal" class="dropzone p-0">
                                <!-- CARGA DE DATROS -->
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div>
                                                <h5 class="font-size-14 mb-3"></h5>
                                                <div class="row">

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nombre</label>
                                                        <input class="form-control" type="text" id="nombre_S" name="nombre_S">
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="example-text-input" class="form-label">Direccion</label>
                                                        <input class="form-control" type="text" id="direccion_S" name="direccion_S">
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="example-text-input" class="form-label">Telefono</label>
                                                        <input class="form-control" type="number" id="telefono_S" name="telefono_S">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="enviarSucursal">Guardar</button>
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
                            <table id='datatable-sucursales' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
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
        <div id="editarSucursal" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Editar sucursal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" id="formEditarSucursal">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="Eid_S" class="form-label">ID</label>
                                                <input class="form-control" type="text" id="Eid_S" name="Eid_S">
                                            </div>
                                            <div class="col-12">
                                                <label for="Enombre_S" class="form-label">Nombre</label>
                                                <input class="form-control" type="text" id="Enombre_S" name="Enombre_S">
                                            </div>

                                            <div class="col-12">
                                                <label for="Edireccion_S" class="form-label">Direccion</label>
                                                <input class="form-control" type="text" id="Edireccion_S" name="Edireccion_S">
                                            </div>
                                            <div class="col-12">
                                                <label for="Etelefono_S" class="form-label">Telefono</label>
                                                <input class="form-control" type="number" id="Etelefono_S" name="Etelefono_S">
                                            </div>
                                            <hr>
                                            Activo
                                            <div class="col-12 m-a">
                                                <input type="hidden" id="Eestado_S" name="Eestado_S" value="">
                                                <input type="checkbox" id="switch3" switch="bool" name="switch3" />
                                                <label for="switch3" data-on-label="Si" data-off-label="No"></label>
                                            </div>
                                        </div>
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
                                                waves-light" id="editarSucursalE">Guardar Cambios</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>

    <!-- ========================================================================================================================= -->


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


    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>

    <script>
        // ======== LLAMADA A LA TABLA DE SUCURSALES
        $(document).ready(function() {
            var table = $('#datatable-sucursales').DataTable({
                lengthChange: false,
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ],
                ajax: {
                    url: './controllers/SucursalesControllers.php?action=obtenerSucursales',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id_sucursal'
                    },
                    {
                        data: 'nombreS'
                    },
                    {
                        data: 'direccion_S'
                    },
                    {
                        data: 'telefono_S'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            if (data.estado_S == 1) {
                                return '<button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check-double font-size-32 align-middle "></i></button>';
                            } else {
                                return '<button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button>';
                            }


                        }

                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info btn-editar  btn-lg" data-id="' + row.id_sucursal + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminar " data-id="' + row.id_sucursal + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
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
                .appendTo('#datatable-sucursales_wrapper .col-md-6:eq(0)');

            $(".dataTables_length select").addClass('form-select form-select-sm');

        });



        // ==============================================================
        // ================================= CREAR SUCURSAL==============
        // ============================================================== 
        $("#enviarSucursal").on("click", function(e) {
            e.preventDefault();
            var formData = new FormData($("#formCrearSucursal")[0]);
            var imageFiles = $(".dropzone")[0].dropzone.getAcceptedFiles();
            for (var i = 0; i < imageFiles.length; i++) {
                formData.append("imagenes[]", imageFiles[i]);
            }
            $.ajax({
                type: "POST",
                url: './controllers/SucursalesControllers.php?action=crearSucursal',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#agregarSucursal').modal('hide');
                    $('#formCrearSucursal')[0].reset();
                    var table = $('#datatable-sucursales').DataTable();
                    table.ajax.reload();
                    if (response == '"ok"') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'La sucursal se ha editado correctamente.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: response,
                        });
                    }
                },
                error: function(error) {

                    let errorMessage = "Ocurrió un error al conectar con el controlador.";

                    if (error.status === 0) {
                        errorMessage = "No se pudo establecer conexión con el servidor.";
                    } else if (error.status === 404) {
                        errorMessage = "No se encontró el recurso solicitado.";
                    } else if (error.status === 500) {
                        errorMessage = "Error interno del servidor.";
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: errorMessage,
                    });

                }
            });
        });


        // ==============================================================
        // ================================= EDITAR SUCURSAL=============
        // ============================================================== 

        //----------------obtener datos para la edicion
        $('#datatable-sucursales').on('click', '.btn-editar', function() {
            var row = $(this).closest('tr'); // Obtener la fila más cercana al botón "Editar"
            var data = $('#datatable-sucursales').DataTable().row(row).data(); // Obtener los datos de la fila
            $('#Eid_S').val(data.id_sucursal);
            $('#Enombre_S').val(data.nombreS);
            $('#Edireccion_S').val(data.direccion_S);
            $('#Etelefono_S').val(data.telefono_S);
            $('#editarSucursal').modal('show');
            if (data.estado_S == 1) {
                $('#switch3').prop('checked', true);
            } else {
                $('#switch3').prop('checked', false);
            }
        });

        //----------------guardando cambios
        $('#editarSucursalE').click(function() {
            var estado_S = $('#switch3').prop('checked') ? 1 : 0;
            $('#Eestado_S').val(estado_S);
            var formData = $('#formEditarSucursal').serialize();
            $.ajax({
                type: 'POST',
                url: './controllers/SucursalesControllers.php?action=edidarSucursales',
                data: formData,
                success: function(response) {
                    $('#editarSucursal').modal('hide');
                    $('#formEditarSucursal')[0].reset();
                    var table = $('#datatable-sucursales').DataTable();
                    table.ajax.reload();
                    if (response == '"ok"') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'La sucursal se ha editado correctamente.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'LA SUCURSAL NO SE A EDITADO CORRECTAMENTE.' + response,
                        });
                    }

                },
                error: function(error) {

                }
            });
        });




        // ==============================================================
        // ================================= ELIMINAR SUCURSAL===========
        // ============================================================== 

        $('#datatable-sucursales').on('click', '.btn-eliminar', function() {
            var idSucursal = $(this).data('id'); // Obtener el ID de la sucursal desde el atributo data-id

            // Mostrar un SweetAlert2 de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Realmente deseas eliminar esta sucursal?',
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
                        url: './controllers/SucursalesControllers.php?action=eliminarSucursales',
                        data: {
                            id_sucursal: idSucursal
                        },
                        success: function(response) {
                            // Maneja la respuesta del servidor aquí, por ejemplo, recargar la tabla
                            var table = $('#datatable-sucursales').DataTable();
                            table.ajax.reload();
                            if (response == '"ok"') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Éxito',
                                    text: 'La sucursal eliminado correctamente.',
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Érror',
                                    text: 'La sucursal no se eliminado correctamente.' + response,
                                });
                            }
                        },
                        error: function(error) {
                            console.log('Error en la petición AJAX:', error);
                        }
                    });
                }
            });
        });
    </script>