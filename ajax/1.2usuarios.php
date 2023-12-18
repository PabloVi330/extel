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
                    <h4 class="mb-sm-0 font-size-18">Usuarios</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Usuarios</a></li>
                            <li class="breadcrumb-item active">registros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <!-- =================MODAL CREAR NUEVO USUARIO-->

        <button type="button" class="btn btn-primary
                                waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#modalCrearUsuario"> Nuevo Usuarios</button>

        <div id="modalCrearUsuario" class="modal fade" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalFullscreenLabel">Registrar nuevo usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="#" id="formCrearUsuario" class="dropzone p-0">

                                <!-- CARGA DE DATROS -->
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div>
                                                <h5 class="font-size-14 mb-3"></h5>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Seleccionar Sucursal</label>
                                                            <select class="form-control" data-trigger name="sucursal_U" id="sucursal_U" requerid>
                                                                <option value="">Seleccionar Sucursal</option>

                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="usuario_U" class="form-label">Usuario</label>
                                                        <input class="form-control" type="text" id="usuario_U" name="usuario_U" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="password_U" class="form-label">Constrasena</label>
                                                        <input class="form-control" type="text" id="password_U" name="password_U" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="nombre_U" class="form-label">Nombre</label>
                                                        <input class="form-control" type="text" id="nombre_U" name="nombre_U" requerid>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="nombre_U" class="form-label">CI/Nit</label>
                                                        <input class="form-control" type="text" id="ci_U" name="ci_U" requerid>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="area_U" class="form-label font-size-13 text-muted">Seleccionar Area</label>
                                                            <select class="form-control" data-trigger name="area_U" id="area_U" requerid>
                                                                <option value="">Seleccionar Area</option>
                                                                <option value="administrador">Administrador</option>
                                                                <option value="supervisor">Supervisor</option>
                                                                <option value="operador">Operador</option>
                                                                <option value="tecnico">Tecnico</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="tipo_U" class="form-label font-size-13 text-muted">Seleccionar Nivel</label>
                                                            <select class="form-control" data-trigger name="tipo_U" id="tipo_U" requerid>
                                                                <option value="">Seleccionar Nivel</option>
                                                                <option value="1">Administrador</option>
                                                                <option value="2">Medio</option>
                                                                <option value="3">Solo lectura</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="correo_U" class="form-label">Correo</label>
                                                        <input class="form-control" type="email" id="correo_U" name="correo_U" step="any">
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="telefono_U" class="form-label">Telefono</label>
                                                        <input class="form-control" type="number" id="telefono_U" name="telefono_U">
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!-- end card body -->

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
                                    </div>
                                    <!-- end card -->
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light " id="guardarUsuario">Save changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>


        <!-- ==============TABLA DE SUCURSALES -->
        <div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id='datatable-usuarios' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Suc.</th>
                                        <th>Nombre</th>
                                        <th>CI</th>
                                        <th>Area</th>
                                        <th>Tipo</th>
                                        <th>Correo</th>
                                        <th>Telefono</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
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
        <div id="modalEditarUsuario" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Editar usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <form action="#" id="formEditarUsuario" class="dropzone p-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="font-size-14 mb-3"></h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <input type="hidden" name="Eid_usuario" id="Eid_usuario">
                                                    <input type="hidden" name="Efoto_U" id="Efoto_U">
                                                    <div class="mb-3">
                                                        <label for="Esucursal_U" class="form-label font-size-13 text-muted">Seleccionar Sucursal</label>
                                                        <select class="form-control" data-trigger name="Esucursal_U" id="Esucursal_U" requerid>
                                                            <option value="">Seleccionar Sucursal</option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Eusuario_U" class="form-label">Usuario</label>
                                                    <input class="form-control" type="text" id="Eusuario_U" name="Eusuario_U" requerid>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Epassword_U" class="form-label">Constrasena</label>
                                                    <input class="form-control" type="text" id="Epassword_U" name="Epassword_U" requerid>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Enombre_U" class="form-label">Nombre</label>
                                                    <input class="form-control" type="text" id="Enombre_U" name="Enombre_U" requerid>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Enombre_U" class="form-label">CI/Nit</label>
                                                    <input class="form-control" type="text" id="Eci_U" name="Eci_U" requerid>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <label for="Earea_U" class="form-label font-size-13 text-muted">Seleccionar Area</label>
                                                        <select class="form-control" data-trigger name="Earea_U" id="Earea_U" requerid>
                                                            <option value="">Seleccionar Area</option>
                                                            <option value="administrador">Administrador</option>
                                                            <option value="supervisor">Supervisor</option>
                                                            <option value="operador">Operador</option>
                                                            <option value="tecnico">Tecnico</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <label for="Etipo_U" class="form-label font-size-13 text-muted">Seleccionar Nivel</label>
                                                        <select class="form-control" data-trigger name="Etipo_U" id="Etipo_U" requerid>
                                                            <option value="">Seleccionar Nivel</option>
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Medio</option>
                                                            <option value="3">Solo lectura</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Ecorreo_U" class="form-label">Correo</label>
                                                    <input class="form-control" type="email" id="Ecorreo_U" name="Ecorreo_U" step="any">
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="Etelefono_U" class="form-label">Telefono</label>
                                                    <input class="form-control" type="Enumber" id="Etelefono_U" name="Etelefono_U">
                                                </div>
                                                <hr>
                                                Activo
                                                <div class="col-12 m-a">
                                                    <input type="hidden" id="Eestado_U" name="Eestado_U" value="">
                                                    <input type="checkbox" id="switch3" switch="bool" name="switch3" />
                                                    <label for="switch3" data-on-label="Si" data-off-label="No"></label>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                        <!-- end card body -->

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

                                    </div>
                                </form>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="editarUsuario">Guardar Cambios</button>
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
    

    
    <!-- choices js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- color picker js -->
    <script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- datepicker js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>

    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            $(".dropzone").dropzone();
        });
    </script>

    <script>
        // ======== LLAMADA A LA TABLA DE USUARIOS
        $(document).ready(function() {

            var tableU = $('#datatable-usuarios').DataTable({
                lengthChange: true,
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ],
                ajax: {
                    url: './controllers/UsuariosControllers.php?action=obtenerUsuarios',
                    dataSrc: ''
                },

                columns: [{
                        data: 'id_usuario'
                    },
                    {
                        data: 'nombreS'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            var img = JSON.parse(data.foto_U);
                            var nombre = data.nombre_U;
                            return `<img src="controllers/uploads/users/${img[0]}"alt="" class="avatar-sm rounded-circle me-2">
                            <a href="#" class="text-body">${nombre}</a>`
                        }
                    },
                    {
                        data: 'ci_U'
                    },
                    {
                        data: 'area_U'
                    },
                    {
                        data: 'tipo_U'
                    },
                    {
                        data: 'correo_U'
                    },
                    {
                        data: 'telefono_U'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            if (data.estado_U == 1) {
                                return '<button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check-double font-size-32 align-middle "></i></button>';
                            } else {
                                return '<button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button>';
                            }


                        }

                    },
                    {
                        data: 'fecha_U'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info btn-editarU  btn-lg" data-id="' + row.id_usuario + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminarU " data-id="' + row.id_usuario + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
                        }
                    }
                ]
            });

            new $.fn.dataTable.Buttons(tableU, {
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ]
            });

            tableU.buttons().container()
                .appendTo('#datatable-usuarios_wrapper .col-md-6:eq(0)');

            $(".dataTables_length select").addClass('form-select form-select-sm');
        });



        // =========GUARDAR USUARIO
        $(document).ready(function() {
            //llamada a las sucursales 
            $.ajax({
                url: "./controllers/SucursalesControllers.php?action=obtenerSucursales", // Ajusta la ruta correcta
                dataType: 'json',
                success: function(data) {
                    var select = $('#sucursal_U');
                    select.empty();
                    select.append($('<option>', {
                        value: '',
                        text: 'Seleccionar'
                    }));
                    $.each(data, function(key, value) {
                        select.append($('<option>', {
                            value: value.id_sucursal,
                            text: value.nombreS
                        }));
                    });
                }
            });

            $("#guardarUsuario").on("click", function(e) {
                e.preventDefault(); // Evita el comportamiento predeterminado del botón

                // Obtén los datos del formulario
                var formData = new FormData($("#formCrearUsuario")[0]);

                // Obtén los archivos de imagen seleccionados
                var imageFiles = $(".dropzone")[0].dropzone.getAcceptedFiles();

                // Agrega los archivos de imagen al FormData
                for (var i = 0; i < imageFiles.length; i++) {
                    formData.append("imagenes[]", imageFiles[i]);
                }
                // Realiza la petición AJAX
                $.ajax({
                    type: "POST",
                    url: "./controllers/UsuariosControllers.php?action=crearUsuarios",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log("Respuesta del servidor:", response);
                        if (response) {
                            $('#modalCrearUsuario').modal('hide');
                            $('#formCrearUsuario')[0].reset();

                            // Recargar la tabla DataTables
                            var table = $('#datatable-usuarios').DataTable();
                            table.ajax.reload();

                            // Mostrar SweetAlert2 de éxito
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'El usuarios se ha creado correctamente.',
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Éxito',
                                text: 'El usuarios se ha creado correctamente.',
                            });

                        }
                    },
                    error: function(error) {
                        console.log("Error en la petición AJAX:", error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'El usuarios se ha creado correctamente.' + error.message,
                        });
                    }
                });
            });
        });

        // ========= EDITAR USUARIO 
        $('#datatable-usuarios').on('click', '.btn-editarU', function() {
            var idUsuario = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: './controllers/UsuariosControllers.php?action=obtenerUsuarioPorId',
                data: {
                    id_usuario: idUsuario
                },
                dataType: 'json',
                success: function(response) {
                    console.log("Respuesta del servidor:", response);
                    var fk_id_sucursal = response.fk_id_sucursal;
                    $.ajax({
                        type: 'GET',
                        url: './controllers/SucursalesControllers.php?action=obtenerSucursales',
                        dataType: 'json', // Asegúrate de que la respuesta sea en formato JSON
                        success: function(response) {
                            var sucursalDeseada = response.find(function(sucursal) {
                                return sucursal.id_sucursal == fk_id_sucursal;
                            });
                            console.log("Sucursal encontrada:", sucursalDeseada);
                            var selectSucursal = $('#Esucursal_U');
                            selectSucursal.empty();

                            selectSucursal.append($('<option>', {
                                value: sucursalDeseada.id_sucursal,
                                text: sucursalDeseada.nombreS
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

                            // Abre el modal
                            $('#modalEditarUsuario').modal('show');

                            // Puedes agregar más asignaciones de campos aquí
                        },
                        error: function(error) {
                            console.error('Error en la petición AJAX:', error);
                        }
                    });
                    $('#Eid_usuario').val(idUsuario);
                    $('#Efoto_U').val(response.foto_U);
                    $('#Eusuario_U').val(response.usuario_U)
                    $('#Epassword_U').val(response.password_U)
                    $('#Enombre_U').val(response.nombre_U);
                    $('#Eci_U').val(response.ci_U)

                    $('#Earea_U').val(response.area_U);
                    var selectedText = $('#Earea_U option:selected').text();
                    $('#area_U').find('option').filter(function() {
                        return $(this).text() === selectedText;
                    }).prop('selected', true);

                    $('#Etipo_U').val(response.tipo_U);
                    var selectedText = $('#Etipo_U option:selected').text();
                    $('#Etipo_U').find('option').filter(function() {
                        return $(this).text() === selectedText;
                    }).prop('selected', true);

                    $('#Ecorreo_U').val(response.correo_U);
                    $('#Etelefono_U').val(response.telefono_U);
                    if (response.estado_U == 1) {
                        $('#switch3').prop('checked', true);
                    } else {
                        $('#switch3').prop('checked', false);
                    }
                }
            });
            $('#editarUsuario').click(function() {
                var estado_U = $('#switch3').prop('checked') ? 1 : 0;
                $('#Eestado_U').val(estado_U);
                var formData = $('#formEditarUsuario').serialize();
                $.ajax({
                    type: 'POST',
                    url: './controllers/UsuariosControllers.php?action=editarUsuarios',
                    data: formData,
                    success: function(response) {
                        $('#modalEditarUsuario').modal('hide');
                        $('#formEditarUsuario')[0].reset();

                        var table = $('#datatable-usuarios').DataTable();
                        table.ajax.reload();
                        var mensaje = response.message;
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: mensaje,
                        });
                    },
                    error: function(error) {

                    }
                });
            });

        });
        //ELIMINAR USUARIO
        $(document).ready(function() {
            $('#datatable-usuarios').on('click', '.btn-eliminarU', function() {
                var idUsuario = $(this).data('id'); // Obtener el ID de la sucursal desde el atributo data-id
                console.log(idUsuario)
                // Mostrar un SweetAlert2 de confirmación
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Realmente deseas eliminar este Usuarios?',
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
                            url: './controllers/UsuariosControllers.php?action=eliminarUsuarios',
                            data: {
                                id_usuario: idUsuario
                            },
                            success: function(response) {
                                // Maneja la respuesta del servidor aquí, por ejemplo, recargar la tabla
                                var table = $('#datatable-usuarios').DataTable();
                                table.ajax.reload();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Éxito',
                                    text: 'El usuario se elimino correctamente.',
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