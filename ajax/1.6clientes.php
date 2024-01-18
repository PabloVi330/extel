<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- selecte -->
<link href="assets/libs/select2/select2.min.css" />
<link href="assets/libs/selectize/selectize.css" rel="stylesheet" type="text/css" />


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Clientes</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Clientes</a></li>
                            <li class="breadcrumb-item active">registros</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <!-- =================MODAL CREAR NUEVO USUARIO-->
  
        <button type="button" class="btn btn-primary
                                waves-effect waves-light mb-3" data-bs-toggle="modal" data-bs-target="#modalCrearCliente">
            Nuevo Cliente</button>

        <div id="modalCrearCliente"  class="modal fade " tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalFullscreenLabel">Registrar nuevo Cliente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="#" id="formCrearCliente" class="dropzone p-0">

                                <!-- CARGA DE DATROS -->
                                <div class="col-lg-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div>
                                                <h5 class="font-size-14 mb-3"></h5>
                                                <div class="row">

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="codigo_Cl" class="form-label">Codigo:</label>
                                                        <input class="form-control" type="text" id="codigo_Cl" name="codigo_Cl" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="ci_Cl" class="form-label">CI:</label>
                                                        <input class="form-control" type="number" id="ci_Cl" name="ci_Cl" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="nombre_Cl" class="form-label">Nombre</label>
                                                        <input class="form-control" type="text" id="nombre_Cl" name="nombre_Cl" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="clasificacion_Cl" class="form-label font-size-13 text-muted">Clasificacion</label>
                                                            <select class="form-control" name="clasificacion_Cl" id="clasificacion_Cl" requerid>
                                                                <option value="DISTRIBUCION">Distribucion</option>
                                                                <option value="TECNICO">Tecnico</option>
                                                                <option value="PUBLICO">Publico</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="direccion_Cl" class="form-label">Direccion</label>
                                                        <input class="form-control" type="text" id="direccion_Cl" name="direccion_Cl">
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="telefono_Cl" class="form-label">Telefono</label>
                                                        <input class="form-control" type="number" id="telefono_Cl" name="telefono_Cl">
                                                    </div>


                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="nit_Cl" class="form-label">NIT:</label>
                                                        <input class="form-control" type="text" id="nit_Cl" name="nit_Cl" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="razon_social_Cl" class="form-label">Razon social:</label>
                                                        <input class="form-control" type="text" id="razon_social_Cl" name="razon_social_Cl" requerid>
                                                    </div>

                                                    <div class="col-lg-4 col-md-6">
                                                        <label for="nombre_empresa_Cl" class="form-label">Nombre de Empresa:</label>
                                                        <input class="form-control" type="text" id="nombre_empresa_Cl" name="nombre_empresa_Cl" requerid>
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
                                                btn-secondary waves-effect" data-bs-dismiss="modal" id="limpiar">Cerrar</button>
                            <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light " id="guardarCliente">Guardar</button>
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
                            <table id='datatable-clientes' class="table
                            table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>CI</th>
                                        <th>Clasificacion</th>
                                        <th>Autorizado</th>
                                        <th>Porsentaje</th>
                                        <th>Limite</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>NIT</th>
                                        <th>Razon Social</th>
                                        <th>Empresa</th>
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
        <div id="modalEditarCliente" class="modal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Editar usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12">
                            <div class="card">
                                <form action="#" id="formEditarCliente" class="dropzone p-0">

                                    <!-- CARGA DE DATROS -->
                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div>
                                                    <h5 class="font-size-14 mb-3"></h5>
                                                    <div class="row">
                                                        <input type="hidden" name="Eid_cliente" id="Eid_cliente">

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Ecodigo_Cl" class="form-label">Codigo:</label>
                                                            <input class="form-control" type="text" id="Ecodigo_Cl" name="Ecodigo_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Eci_Cl" class="form-label">CI:</label>
                                                            <input class="form-control" type="text" id="Eci_Cl" name="Eci_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Enombre_Cl" class="form-label">Nombre</label>
                                                            <input class="form-control" type="text" id="Enombre_Cl" name="Enombre_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Eclasificacion_Cl" class="form-label">Clasificacion</label>
                                                            <input class="form-control" type="text" id="Eclasificacion_Cl" name="Eclasificacion_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Edireccion_Cl" class="form-label">Direccion</label>
                                                            <input class="form-control" type="text" id="Edireccion_Cl" name="Edireccion_Cl">
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Etelefono_Cl" class="form-label">Telefono</label>
                                                            <input class="form-control" type="number" id="Etelefono_Cl" name="Etelefono_Cl">
                                                        </div> <br>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Enit_Cl" class="form-label">NIT:</label>
                                                            <input class="form-control" type="text" id="Enit_Cl" name="Enit_Cl" requerid>
                                                        </div>


                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Erazon_social_Cl" class="form-label">Razon Social:</label>
                                                            <input class="form-control" type="text" id="Erazon_social_Cl" name="Erazon_social_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Enombre_empresa_Cl" class="form-label">Nombre de empresa:</label>
                                                            <input class="form-control" type="text" id="Enombre_empresa_Cl" name="Enombre_empresa_Cl" requerid>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Eautorizacion_Cl" class="form-label">Autorizacion:</label>
                                                            <input class="form-control" type="text" id="Eautorizacion_Cl" name="Eautorizacion_Cl">
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Eporcentaje_Cl" class="form-label">Interes %</label>
                                                            <input class="form-control" type="number" id="Eporcentaje_Cl" name="Eporcentaje_Cl">
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <label for="Elimite_Cl" class="form-label">Limite de Credito</label>
                                                            <input class="form-control" type="number" id="Elimite_Cl" name="Elimite_Cl">
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
                            <!-- end card -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn
                                                btn-secondary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn
                                                btn-primary waves-effect
                                                waves-light" id="editarCliente">Guardar Cambios</button>
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
    <script src="assets/libs/@simonwep/pickr/pickr.min.js"></script>
    <script src="assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- datepicker js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script src="assets/libs/selectize/selectize.js"></script>
    <script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <script>
        function resetForm() {
            var formulario = document.getElementById("formCrearCliente");
            var dropzone = Dropzone.forElement("#formCrearCliente");
            formulario.reset();
            dropzone.removeAllFiles();
            var table = $('#datatable-clientes').DataTable();
            table.ajax.reload();

        }
        $(document).ready(function() {
            $("#limpiar").on("click", function(e) {
                e.preventDefault();
                resetForm();
            })

        });


        // ======== LLAMADA A LA TABLA 
        $(document).ready(function() {
            var table = $('#datatable-clientes').DataTable({
                lengthChange: true,
                buttons: [
                    'copy', 'excel', 'pdf', 'colvis'
                ],
                ajax: {
                    url: './controllers/ClientesControllers.php?action=obtenerClientes',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id_cliente'
                    },

                    {
                        data: 'codigo_Cl'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<i class="bx bxs-user-circle fa-2x"></i>
                            <a href="#" class="text-body">${row.nombre_Cl} </a>`
                        }
                    },
                    {
                        data: 'ci_Cl'
                    },
                    {
                        data: 'clasificacion_Cl'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            if (data.autorizacion_Cl == "autorizado") {
                                return `<div class="badge badge-soft-success font-size-12"><i class="fas fa-money-bill"></i> Autorizado</div>`;
                            } else {
                                return `<div class="badge badge-soft-danger secondary font-size-12 pedido" id="${data.id_venta}"><i class="fas fa-file-invoice"></i> SIN/A</div>`
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<div class="badge badge-soft-primary font-size-12"><i class="fas fa-money-bill"></i>${data.porcentaje_CL}</div>`;
                        }
                    },

                    {
                        data: null,
                        render: function(data, type, row) {
                            return `<div class="badge badge-soft-info font-size-12"><i class="fas fa-money-bill"></i>${data.limite_Cl}</div>`;
                        }
                    },
                    {
                        data: 'direccion_Cl'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {

                            return '<a target="_blank" href="https://wa.me/591' + data.telefono_Cl + '"> <button type="button" class="btn btn-soft-success waves-effect waves-light"><i class="fab fa-whatsapp fa-2x"></i></button> </a>';

                        }

                    },

                    {
                        data: 'nit_Cl'
                    },

                    {
                        data: 'razon_social_Cl'
                    },

                    {
                        data: 'nombre_empresa_Cl'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="btn btn-sm btn-info btn-editar  btn-lg" data-id="' + row.id_cliente + '"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger btn-eliminar" data-id="' + row.id_cliente + '"><i class="fas fa-trash-alt fa-2x"></i></button>';
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
                .appendTo('#datatable-clientes_wrapper .col-md-6:eq(0)');

            $(".dataTables_length select").addClass('form-select form-select-sm');
        });


        /* ==============================
        -------------GUARDAR--------------
        =================================== */
        var myDropzone = new Dropzone("#formCrearCliente", {
            paramName: "imagenes[]", // Nombre del campo en el formulario
            maxFilesize: 5, // Tamaño máximo en MB
            maxFiles: 5, // Número máximo de archivos permitidos
            acceptedFiles: "image/*", // Acepta solo archivos de imagen
            addRemoveLinks: true, // Muestra el enlace para eliminar archivos
            dictRemoveFile: "Eliminar", // Texto para el enlace de eliminación
            init: function() {
                this.on("success", function(file, response) {});
                this.on("removedfile", function(file) {
                    // Manejar la eliminación de archivos (si es necesario)
                    console.log("Archivo eliminado: " + file.name);
                });
            }
        });


        $("#guardarCliente").on("click", function(e) {
            e.preventDefault();

            var formData = new FormData($("#formCrearCliente")[0]);
            var imageFiles = $(".dropzone")[0].dropzone.getAcceptedFiles();
            for (var i = 0; i < imageFiles.length; i++) {
                formData.append("imagenes[]", imageFiles[i]);
            }

            $.ajax({
                type: "POST",
                url: "./controllers/ClientesControllers.php?action=crearCliente",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response) {
                        $('#modalCrearCliente').modal('hide');
                        resetForm();
                        Swal.fire({
                            icon: 'success',
                            title: 'Éxito',
                            text: 'El cliente se ha creado correctamente.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'El cliente no se creo',
                        });

                    }
                },
                error: function(error) {
                    console.log("Error en la petición AJAX:", error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Érror',
                        text: 'El cliente se ha creado correctamente.' + error.message,
                    });
                }
            });
        });


        /*================================================================
        -------------------EDITAR CLIENTE--------------------------
        =================================================================*/

        $('#datatable-clientes').on('click', '.btn-editar', function() {
            var idCliente = $(this).data('id');
            console.log(idCliente);
            $.ajax({
                type: 'POST',
                url: './controllers/ClientesControllers.php?action=obtenerClientePorId',
                data: {
                    id_cliente: idCliente
                },
                dataType: 'json',
                success: function(response) {
                    console.log("Respuesta del servidor:", response);

                    $('#Eid_cliente').val(idCliente);
                    $('#Ecodigo_Cl').val(response.codigo_Cl);
                    $('#Eci_Cl').val(response.ci_Cl);
                    $('#Enombre_Cl').val(response.nombre_Cl)
                    $('#Eclasificacion_Cl').val(response.clasificacion_Cl)
                    $('#Edireccion_Cl').val(response.direccion_Cl);
                    $('#Etelefono_Cl').val(response.telefono_Cl);
                    $('#Enit_Cl').val(response.nit_Cl);
                    $('#Erazon_social_Cl').val(response.razon_social_Cl);
                    $('#Enombre_empresa_Cl').val(response.nombre_empresa_Cl);
                    $('#Eporcentaje_Cl').val(response.porcentaje_Cl);
                    $('#Elimite_Cl').val(response.limite_Cl);
                    $('#modalEditarCliente').modal('show');
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        $('#editarCliente').click(function() {

            var formData = $('#formEditarCliente').serialize();
            $.ajax({
                type: 'POST',
                url: './controllers/ClientesControllers.php?action=editarCliente',
                data: formData,
                success: function(response) {
                    $('#modalEditarCliente').modal('hide');
                    resetForm();
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



        /*============================================================
        ------------ELIMINAR CLIENTE--------------------------
        ============================================================*/

        $(document).ready(function() {
            $('#datatable-clientes').on('click', '.btn-eliminar', function() {
                var idCliente = $(this).data('id'); // Obtener el ID de la sucursal desde el atributo data-id
                console.log(idCliente)

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Realmente deseas eliminar este Cliente?',
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
                            url: './controllers/ClientesControllers.php?action=eliminarCliente',
                            data: {
                                id_cliente: idCliente
                            },
                            success: function(response) {
                                resetForm();
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