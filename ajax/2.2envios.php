<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- flatpickr css -->
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<style>
    /* Estilos para la impresión */
    @media print {
        .detalles {
            visibility: hidden;
            width: 0
        }

        .compras {
            margin-left: 0;
        }

    }
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- ======================================================
        ----------TITULOS-----------------------------------------
        ========================================================= -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Envios</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Movimientos</a></li>
                            <li class="breadcrumb-item active">Envios</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- ======================================================
        ----------REALIZAR ENVIO----------------------
        ========================================================= -->
        <div class="row">
            <div class="col-12">
                <!-- DATOS DE ENVIO -->
                <div class="email-leftbar card detalles">
                    <button type="button" class="btn btn-danger btn-block
                        waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
                        <i class=" fas fa-cart-plus"></i>
                        Agregar
                    </button>
                    <div class="mail-list mt-4">
                        <form action="" class="form-control" id="formEnvios">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="fk_id_sucursal" class="form-label font-size-13 text-muted">Sucursal</label>
                                    <select class="form-control" data-trigger name="fk_id_sucursal" id="fk_id_sucursal">
                                        <option value="">Seleccionar</option>
                                    </select>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="fecha_E" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha_E" name="fecha_E">
                            </div>

                            <div class="mb-3">
                                <label for="responsable_E" class="form-label">Responsable</label>
                                <input type="text" class="form-control" id="responsable_E" name="responsable_E">
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div><label for="switch4">Costo:</label></div>
                                <input type="hidden" id="tipo_E" name="tipo_E" value="">
                                <input type="checkbox" id="switch4" switch="bool" name="switch4" checked />
                                <label for="switch4" data-on-label="Si" data-off-label="No"></label>
                            </div>

                            <div class="mb-3">
                                <label for="total_E" class="form-label">Total</label>
                                <input type="number" step="any" class="form-control" id="total_E" name="total_E">
                            </div>
                            <input type="hidden" id="detalle_E" name="detalle_E">
                        </form>
                    </div>
                </div>

                <!-- DETALLE DE ENVIO-->
                <div class="email-rightbar mb-3 compras">

                    <div class="row" id="compras">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="invoice-title row">

                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <div class="mb-4">
                                                    <img src="assets/images/logo-sm.svg" alt="" height="24"><span class="logo-txt">Minia</span>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="mb-4">
                                                    <h4 class="float-end font-size-16">Invoice # 12345</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">

                                            <p class="mb-1">1874 County Line Road City, FL 33566</p>
                                            <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i> abc@123.com</p>
                                            <p><i class="mdi mdi-phone align-middle me-1"></i> 012-345-6789</p>

                                        </div>

                                        <div class="col-lg-6">
                                            <h5 class="font-size-15 mb-3">Billed To:</h5>
                                            <h5 class="font-size-14 mb-2">Richard Saul</h5>
                                            <p class="mb-1">1208 Sherwood Circle
                                                Lafayette, LA 70506</p>
                                            <p class="mb-1">RichardSaul@rhyta.com</p>
                                            <p>337-256-9134</p>
                                        </div>
                                    </div>
                                    <hr class="my-4">

                                    <div class="py-2 mt-3">
                                        <h5 class="font-size-15">Detalle de envio</h5>
                                    </div>
                                    <div class="p-4 border rounded">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap align-middle mb-0" id="tabla-envios">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 70px;">No.</th>
                                                        <th style="width: 70px;">ID.</th>
                                                        <th>Item</th>
                                                        <th class="text-end" style="width: 120px;">Precio</th>
                                                        <th class="text-end" style="width: 120px;">Cantidad</th>
                                                        <th class="text-end" style="width: 120px;">Sub Total</th>
                                                        <th class="text-end" style="width: 120px;"></th>Eliminar
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                        <th scope="row" colspan="6" class="border-0 text-end">Total</th>
                                                        <td class="border-0 text-end">
                                                            <h4 class="m-0" id="total">Bs 0.00</h4>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-print-none mt-3">
                                        <div class="float-end">
                                            <a href="javascript:print();    " id="imprimirBtn" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                            <a href="#" class="btn btn-primary w-md waves-effect waves-light" id="crearEnvio"> Guardar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- ======================================================
    ----------MODAL DE DATA TABLES ARTICULOS-------------------------
    ========================================================= -->
    <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-size-16" id="composemodalTitle">Lista de productos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <table id='datatable-articulos' class="table
                                        table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                     <th>Stock</th>
                                    <th>Marca</th>
                                    <th>Umed.</th>
                                    <th>P. Vta</th>
                                    <th>Accio.</th>

                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ==========================================================
    -----------------TABLA DE ENVIOS -----------------------------
    ========================================================== -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light
                                        waves-effect waves-light"><i class="bx
                                            bx-plus me-1"></i>Lista de Envios</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1
                                    mb-4">
                                <div class="input-group datepicker-range">
                                    <input type="text" class="form-control
                                            flatpickr-input" data-input aria-describedby="date1">
                                    <button class="input-group-text" id="date1" data-toggle><i class="bx
                                                bx-calendar-event"></i></button>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link text-muted py-1
                                            font-size-16 shadow-none
                                            dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx
                                                bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <ul class="dropdown-menu
                                            dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table id="datatable-envios" class="table align-middletable-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sucursal</th>
                                    <th>Responsable</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>tipo</th>
                                    <th>Estado</th>
                                    <th>Responder</th>
                                    <th>Impreso</th>
                                    <th>Download Pdf</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>

</div>
<script>
    $(document).ready(function() {
        //ANCHOR -  llamada a los articulos
        var tableArticulos = $('#datatable-articulos').DataTable({
            lengthChange: false,
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
                        var descripcion_A = data.descripcion_A;

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
                    }
                },
                {
                    data: 'stock_A'
                },
                {
                    data: 'nombre_marca'
                },
                {
                    data: 'unimed_A'
                },
                {
                    data: 'precio_neto_A'
                },
                {
                    data: null,
                    render: function(data, type, row) {

                        return ` <button class="btn btn-sm btn-info agregar_A btn-lg" id="add${row.id_articulo}" >
                            <i class="fas fa-cart-plus fa-2x"></i>
                        </button>`;
                    }
                }
            ]
        });

        //LINK - llamada a las sucursales
        $.ajax({
            url: './controllers/SucursalesControllers.php?action=obtenerSucursales', // Ajusta la ruta correcta
            dataType: 'json',
            success: function(data) {
                var select = $('#fk_id_sucursal');
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

        //NOTE - llamada a los envios
        var tableEnvios = $('#datatable-envios').DataTable({
            lengthChange: false,
            order: [
                [0, "desc"]
            ],
            ajax: {
                url: './controllers/EnviosControllers.php?action=obtenerEnvios',
                dataSrc: ''
            },
            columns: [{
                    data: 'id_envio'
                },
                {
                    data: 'nombre_sucursal'
                },
                {
                    data: 'nombre_usuario'
                },
                {
                    data: 'fecha_E'
                },
                {
                    data: 'total_E'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.tipo_E == 0) {
                            return `<div class="badge badge-soft-info font-size-12">Sin Costo</div>`;
                        } else {
                            return `<div class="badge badge-soft-success ont-size-12">Costo</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.estado_E == 0) {
                            return `<div class="badge badge-soft-warning font-size-12">Enviado</div>`;
                        } else {
                            return `<div class="badge badge-soft-success ont-size-12">Recibido</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return `<div>
                                        <a >
                                          <button type="button" class="btn recibir
                                                    btn-soft-light btn-sm w-xs
                                                    waves-effect btn-label
                                                    waves-light" id="${data.id_envio}"><i class="fas fa-envelope-open label-icon"></i>
                                                Recibir
                                            </button>
                                        </a>
                                    </div>`;
                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.impreso_E == 0) {
                            return `<div class="badge badge-soft-warning font-size-12">Pendiente</div>`;
                        } else {
                            return `<div class="badge badge-soft-success ont-size-12">Impreso ${data.impreso_E}</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {

                        return `<div>
                                        <a href="pdfs/nota_envio.php?id_envio=${data.id_envio}" target="_blank">
                                          <button type="button" class="btn
                                                    btn-soft-light btn-sm w-xs
                                                    waves-effect btn-label
                                                    waves-light"><i class="bx
                                                        bx-download label-icon"></i>
                                                Pdf
                                            </button>
                                        </a>
                                    </div>`;
                    }
                },

                {
                    data: null,
                    render: function(data, type, row) {
                        return `<button class="btn btn-sm btn-info btn-editar  btn-lg" data-id="1"><i class="fas fa-edit fa-2x"></i></button>  <button class="btn btn-sm btn-danger eliminarEnvio" id="${data.id_envio}"><i class="fas fa-trash-alt fa-2x"></i></button>`;
                    }
                }
            ]
        });
    });


    var carrito = [];

    function calcularTotal() {
        let total = 0;
        for (var i = 0; i < carrito.length; i++) {
            total = total + parseFloat(carrito[i].subtotal);
        }
        console.log(total);
        $('#total').text(total);
        $('#total_E').val(total);
    }
    // Función para agregar una nueva fila de producto al carrito
    function agregarFila(data) {
        var id = data.id_articulo;
        var codigo = data.codigo_A;
        var descripcion = data.descripcion_A;
        var precio_neto = data.precio_neto_A;
        var precio_distribucion = data.precio_distribucion_A;
        var precio_tecnico = data.precio_tecnico_A;
        var precio_publico = data.precio_publico_A;
        var stock = data.stock_A;
        var unimed = data.unimed_A;
        var cantidad = parseInt(data.cantidad_A);
        var cantidad_envio = 1;
        var producto = {
            id: id,
            codigo: codigo,
            descripcion: descripcion,
            precio_neto: precio_neto,
            precio_distribucion: precio_distribucion,
            precio_tecnico: precio_tecnico,
            precio_publico: precio_publico,
            stock: stock,
            cantidad: cantidad,
            subtotal: precio_neto,
            stock: stock,
            cantidad_envio: cantidad_envio,
            unimed: unimed,
        }
        carrito.push(producto)

        let nuevaFila = `
                <tr>

                   <style>
                        .descripcion-cell {
                            max-width: 200px; /* El ancho máximo deseado para la descripción */
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: nowrap;
                        }
                    </style>
                        <th scope="row">${carrito.length}</th>
                        <td>
                            <p class="font-size-13 text-muted mb-0 id" value="">${producto.codigo}</p>
                        </td>
                        <td class="descripcion-cell">
                            <p class="font-size-13 text-muted mb-0" value="">${descripcion} </p>
                        </td>
                        <td > <input type="number" step="any" class="form-control price" value="${precio_neto}"></td>
                        <td > <input type="number" class="form-control quantity" value="1" min="1" max="${cantidad_envio}">  </td>
                        <td class="text-end subtotal" value="">${precio_neto}</td>
                        <td> <button class="btn btn-sm btn-danger btn-eliminar" id="${id}"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                </tr>`;
                $(nuevaFila).insertBefore('#tabla-envios tbody tr:last');
        //console.log(carrito)
        calcularTotal();
    }

    // Agrega un producto al carrito cuando se hace clic en él
    $("#datatable-articulos").on("click", ".agregar_A", function(e) {
        e.preventDefault();
        var row = $(this).closest('tr'); // Obtener la fila más cercana al botón "Editar"
        var data = $('#datatable-articulos').DataTable().row(row).data();
        $(this).prop('disabled', true);
        console.log(data);
        agregarFila(data)
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: 'El producto se ha agregado al carrito correctamente.',
            showConfirmButton: false, // Para ocultar el botón "Aceptar"
            timer: 500 // El mensaje se cerrará automáticamente después de 2 segundos (ajusta el tiempo según tus necesidades)
        });

    });


    // Escuchar cambios en los campos de precio y cantidad
    $('#tabla-envios').on('input', '.price, .quantity', function() {

        let row = $(this).closest('tr');
        let id = parseInt(row.find('.id').text());
        let priceUnit = parseFloat(row.find('.price').val());
        let quantity = parseFloat(row.find('.quantity').val());
        let subtotal = quantity * priceUnit;
        subtotal = parseFloat(subtotal.toFixed(2));


        var productoExistente = carrito.find(item => item.id == id);

        if (productoExistente && productoExistente.stock >= quantity) {
            // Actualizar el producto existente
            productoExistente.precioUnit = priceUnit;
            productoExistente.cantidad = quantity;
            productoExistente.subtotal = subtotal;
            row.find('.subtotal').text(subtotal);
        }
        if (productoExistente.stock == quantity || productoExistente.stock < quantity) {
            Swal.fire({
                icon: 'warning',
                title: 'Atencion',
                text: 'El stock a alcanzo  el limite compra de nuevo !!!',
                confirmButtonText: 'Ok'
            });
            $(this).closest('tr');
            productoExistente.cantidad = parseInt(productoExistente.stock);
            productoExistente.subtotal = parseFloat(productoExistente.cantidad * productoExistente.precio)
            row.find('.quantity').val(productoExistente.stock);
            row.find('.subtotal').text(productoExistente.subtotal);

        }
        console.log(carrito);
        calcularTotal();
    });

    // eliminar un producto del detalle de envio
    $('#tabla-envios').on('click', '.btn-eliminar', function() {
        var id = $(this).attr('id');
        $(this).closest('tr').remove();
        var btnAdd = $('#add' + id);
        btnAdd.prop('disabled', false);
        carrito = carrito.filter(function(producto) {
            return producto.id != id;
        })
        calcularTotal();
    })


    // Escuchar clic en el botón "Guardar Carrito"
    $('#crearEnvio').on('click', function() {

        var tipo = $('#switch4').prop('checked') ? 1 : 0;
        $('#tipo_E').val(tipo);
        $('#detalle_E').val(JSON.stringify(carrito)); 
        var formData = $('#formEnvios').serialize();
        $.ajax({
            type: 'POST',
            url: './controllers/EnviosControllers.php?action=crearEnvio',
            data: formData,
            success: function(response) {
                console.log(response);
                if (response == '"ok"') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'Los Productos se enviaron correctamenete',
                        confirmButtonText: 'Ok'
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Érror',
                        text: 'Los productos no se enviaron',
                        confirmButtonText: 'Ok'
                    });
                }
                var miTablaenvios = $('#datatable-envios').DataTable();
                miTablaenvios.ajax.reload();
            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Érror',
                    text: 'No se pudo Conectar con el Controlador',
                    confirmButtonText: 'Ok'
                });
            }
        });
    });


    //recibir envio 
    $("#datatable-envios").on("click", ".recibir", function(e) {
        e.preventDefault();
        var idEnvio = $(this).attr('id');
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¿Confirmas haber recibido todo los productos ?',
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
                    url: './controllers/EnviosControllers.php?action=recibirEnvio',
                    data: {
                        id_envio: idEnvio
                    },
                    success: function(response) {
                        if (response === 'true') {
                            var table = $('#datatable-envios').DataTable();
                            table.ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'El usuario se elimino correctamente.',
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


    $("#datatable-envios").on("click", ".eliminarEnvio", function(e) {
        e.preventDefault();
        var idEnvio = $(this).attr('id');
        console.log(idEnvio);
        Swal.fire({
            title: '¿Eliminar el Envio?',
            text: '¿Confirmas haber recibido todo los productos ?',
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
                    url: './controllers/EnviosControllers.php?action=eliminarEnvio',
                    data: {
                        id_envio: idEnvio
                    },
                    success: function(response) {
                        if (response === 'true') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Éxito',
                                text: 'La venta se elimino correctamente.',
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Érror',
                                text: 'No se pudo eliminar la venta.',
                            });
                        }
                        reloadTables();
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Érror',
                            text: 'No se pudo conetcar con el controlar de ventas.',
                        });
                    }
                });
            }
        });

    });

    // Calcular el total inicial
    calcularTotal();
</script>
<!--ckeditor js-->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!-- email editor init -->
<script src="assets/js/pages/email-editor.init.js"></script>
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
<!-- flatpickr js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/invoices-list.init.js"></script>

<script>
    $('#checkAll').on('change', function() {
        $('.table-check .form-check-input').prop('checked', $(this).prop("checked"));
    });
    $('.table-check .form-check-input').change(function() {
        if ($('.table-check .form-check-input:checked').length == $('.table-check .form-check-input').length) {
            $('#checkAll').prop('checked', true);
        } else {
            $('#checkAll').prop('checked', false);
        }
    });
</script>