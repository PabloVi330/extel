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
                    <h4 class="mb-sm-0 font-size-18">Grupos</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Grupos</a></li>
                            <li class="breadcrumb-item active">registros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <!-- =================MODAL CREAR CATEGORIA-->

        <button type="button" class="btn btn-primary
                                waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#modalGuardarCategoria"> Nueva Categoria</button>

        <div id="modalGuardarCategoria" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Registrar nueva categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="#" id="formCrearCategoria">
                                <!-- CARGA DE DATROS -->
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div>
                                                <h5 class="font-size-14 mb-3"></h5>
                                                <div class="row">

                                                    <div class="mb-3">
                                                        <label for="nombre_C" class="form-label">Nombre</label>
                                                        <input class="form-control" type="text" id="nombre_C" name="nombre_C">
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
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="guardarCategoria">Guardar</button>
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
                            <table id='datatable-categorias' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Numero SIN</th>
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
        <div id="modalEditarCategoria" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Editar categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" id="formEditarCategoria">
                                        <div class="row">
                                            <input type="hidden" id="Eid_categoria" name="Eid_categoria">
                                            <div class="col-12">
                                                <label for="Enombre_C" class="form-label">Codigo</label>
                                                <input class="form-control" type="text" id="Enombre_C" name="Enombre_C">
                                            </div>
                                            <hr>
                                            Activo
                                            <div class="col-12 m-a">
                                                <input type="hidden" id="Eestado_C" name="Eestado_C" value="">
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
                                                waves-light" id="editarCategoria">Guardar Cambios</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>



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

    <!-- ========================================================================================================================= -->
    <script>
        // ======== LLAMADA A LA TABLA DE CATEGORIAS
        $(document).ready(function() {
            var table = $('#datatable-categorias').DataTable({
                lengthChange: false,
                cache: false,
                ajax: {
                    url: './controllers/CategoriasControllers.php?action=obtenerCategorias',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id_categoria'
                    },
                    {
                        data: 'nombre_C'
                    },

                    {
                        data: 'numero_sin_C'
                    },

                    {
                        data: null,
                        render: function(data, type, row) {
                            if (data.estado_C == 1) {
                                return '<button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check-double font-size-32 align-middle "></i></button>';
                            } else {
                                return '<button type="button" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-block font-size-16 align-middle"></i></button>';
                            }


                        }

                    },
                    {
                        data: 'fecha_C'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info btn-editar  btn-lg" data-id="' + row.id_categoria + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminar " data-id="' + row.id_categoria + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
                        }
                    }
                ]
            });

            

        });


        // =================GUARDAR CATEGORIA

        $("#guardarCategoria").on("click", function(e) {
            e.preventDefault();

            var formData = new FormData($("#formCrearCategoria")[0]);
            console.log($('#nombre_C').val());

            $.ajax({
                type: "POST",
                url: './controllers/CategoriasControllers.php?action=crearCategoria',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#modalGuardarCategoria').modal('hide');
                    $('#formCrearCategoria')[0].reset();
                    var table = $('#datatable-categorias').DataTable();
                    table.ajax.reload();
                    if (response == '"ok"') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'La categoria se ha editado correctamente.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'La categoria se ha editado correctamente.' + response,
                        });
                    }

                },
                error: function(error) {
                    console.log("Error en la petición AJAX:", error);

                }
            });
        });


        // ================= EDITAR SUCURSAL 


        $('#datatable-categorias').on('click', '.btn-editar', function() {
            var row = $(this).closest('tr'); // Obtener la fila más cercana al botón "Editar"
            var data = $('#datatable-categorias').DataTable().row(row).data(); // Obtener los datos de la fila
            $('#Eid_categoria').val(data.id_categoria);
            $('#Enombre_C').val(data.nombre_C);
            $('#modalEditarCategoria').modal('show');
            if (data.estado_C == 1) {
                $('#switch3').prop('checked', true);
            } else {
                $('#switch3').prop('checked', false);
            }
        });

        //----------------guardando cambios
        $('#editarCategoria').click(function() {
            var estado_S = $('#switch3').prop('checked') ? 1 : 0;
            $('#Eestado_C').val(estado_S);
            var formData = $('#formEditarCategoria').serialize();
            $.ajax({
                type: 'POST',
                url: './controllers/CategoriasControllers.php?action=edidarCategorias',
                data: formData,
                success: function(response) {

                    $('#modalEditarCategoria').modal('hide');
                    $('#formEditarSucursal')[0].reset();

                    var table = $('#datatable-categorias').DataTable();
                    table.ajax.reload();
                    if (response == '"ok"') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'La categoria ha editado correctamente.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'La categoria ha editado correctamente.' + response,
                        });
                    }

                },
                error: function(error) {
                    console.log("Error en la petición AJAX:", error);
                }
            });
        });




        //=========ELIMINAR CATEGORIAS


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
                                        if (response == '"ok"') {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Éxito',
                                                text: 'La categoria eliminada correctamente.',
                                            });
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Érror',
                                                text: 'La categoria no fue  eliminada correctamente.' + response,
                                            });
                                        }
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
    </script>