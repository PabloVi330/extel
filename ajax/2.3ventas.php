<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- flatpickr css -->
<link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- selecte -->
<link href="assets/libs/select2/select2.min.css" />
<link href="assets/libs/selectize/selectize.css" rel="stylesheet" type="text/css" />

<style>
    .compatibilidad-cell {
        max-height: 40px;
        /* Establece la altura máxima deseada */
        overflow: hidden;
        /* Oculta el texto que se desborda */
        word-wrap: break-word;
        /* Permite que el texto se envuelva dentro de la caja si es necesario */
    }

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
                    <h4 class="mb-sm-0 font-size-18">Ventas</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Movimientos</a></li>
                            <li class="breadcrumb-item active">Ventas</li>
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
                        <form action="" class="form-control" id="formVentas">

                            <div class="mb-3">
                                <label for="fecha_V" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha_V" name="fecha_V">
                            </div>

                            <label for="fk_id_usuario" class="form-label font-size-13 text-muted">Seleccionar
                                Cliente</label>
                            <select class="form-cont" name="fk_id_cliente" id="fk_id_cliente" requerid>
                                <option value="">Seleccionar Cliente</option>
                            </select>

                            <input type="hidden" id="clasificacionCliente" name="clasificacionCliente" value="">

                            <!-- TIPOS DE VENTAS -->
                            <div class="col-lg-12 col-md-12">
                                <h5 class="font-size-14 mb-3"><i class="mdi mdi-arrow-right text-danger me-2"></i>Tipo venta</h5>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="tipo_V" id="venta" value="venta" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Venta:
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="tipo_V" id="pedido" value="pedido">
                                    <label class="form-check-label" for="formRadios1">
                                        Pedido:
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="tipo_V" id="cancelado" value="proforma">
                                    <label class="form-check-label" for="formRadios2">
                                        Proforma:
                                    </label>
                                </div>
                            </div>
                            <!-- ESTADOS DE VENTA  -->
                            <div class="col-lg-12 col-md-12">
                                <h5 class="font-size-14 mb-3"><i class="mdi mdi-arrow-right text-success me-1"></i>Estado</h5>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="estado_V" id="cancelado" value="cancelado" checked>
                                    <label class="form-check-label" for="formRadios1">
                                        Cancelado:
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="estado_V" id="por_pagar" value="por pagar">
                                    <label class="form-check-label" for="formRadios2">
                                        Por Pagar:
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div><label for="switch3">Facturado:</label></div>
                            <input type="hidden" id="facturado_V" name="facturado_V" value="">
                            <input type="checkbox" id="switch3" switch="bool" name="switch3" />
                            <label for="switch3" data-on-label="Si" data-off-label="No"></label>


                            <div class="mb-3">
                                <label for="total_E" class="form-label">Total</label>
                                <input type="number" step="any" class="form-control" id="importe_V" name="importe_V">
                            </div>
                            <input type="hidden" id="detalle_V" name="detalle_V">
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
                                                    <h4 class="float-end font-size-16">Factura # <input type="text" class="form-control"></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                           <h5 class="font-size-15 mb-2">Actividad Economica:</h5>
                                            <p class="mb-1 " id="actitivadEconomica"></p>
                                            
                                            <h5 class="font-size-15 mb-2">Fecha:</h5>
                                            <p class="mb-1 " id="fechaNota"></p>

                                            <h5 class="font-size-15 mb-2">Nombre/Razon social:</h5>
                                            <p class="mb-1" id="razonSocialNota"></p>
                                        </div>

                                        <div class="col-lg-6">
                                            <h5 class="font-size-15 mb-2`">NI/CI/CEX:</h5>
                                            <p class="mb-1" id="nitNota"></p>

                                            <h5 class="font-size-14 mb-2">Cod. Cliente:</h5>
                                            <p class="mb-1" id="codigoClienteNota"></p>
                                            <p>337-256-9134</p>
                                        </div>
                                    </div>
                                    <hr class="my-4">

                                    <div class="py-2 mt-3">
                                        <h5 class="font-size-15">Detalle de venta</h5>
                                    </div>
                                    <div class="p-4 border rounded">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap align-middle mb-0" id="tabla-ventas">
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
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="d-print-none mt-3">
                                        <div class="float-end">
                                            <a href="javascript:print();    " id="imprimirBtn" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                            <a href="#" class="btn btn-primary w-md waves-effect waves-light" id="crearVenta"> Guardar</a>
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
                    <h5 class="modal-title font-size-16" id="composemodalTitle">New
                        Message</h5>
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
                                    <th>P. Dist.</th>
                                    <th>P. Tec.</th>
                                    <th>P. Pub.</th>
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
                                            bx-plus me-1"></i>Lista de Ventas</button>
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
                        <table id="datatable-ventas" class="table align-middletable-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cliente</th>
                                    <th>Vendedor</th>
                                    <th>Fecha</th>
                                    <th>Precio</th>
                                    <th>Facturado</th>
                                    <th>Tipo</th>
                                    <th>Estado</th>
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
<script>
    $(document).ready(function() {

        //ANCHOR - data tables de articulos
        var tableArticulos = $('#datatable-articulos').DataTable({
            lengthChange: false,
            ajax: {
                url: './controllers/ArticulosControllers.php?action=obtenerArticulos',
                dataSrc: ''
            },
            columnDefs: [{
                targets: 3, // Índice de la columna (puede ser un número o un selector)
                width: '150px' // Ajusta el tamaño según tus necesidades
            }],
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
                            console.log(data.descripcion_A)
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
                    data: null,
                    render: function(data, type, row) {
                        // Combina los valores de los cuatro campos en un solo string
                        var uno = row.stock_sucursal_1
                        var dos = row.stock_sucursal_2
                        return ` <div class="row w-100" >
                                  <div class=" ${uno < 5 ? 'parpadeo' : ''}  badge badge-soft-info font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${uno}</div>

                                  <div class="${dos < 5 ? 'parpadeo' : ''} badge badge-soft-success font-size-14 m-1"><i class="fas fa-laptop-house"></i>${dos}</div>

                                  <div class="badge badge-soft-warning font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${row.stock_sucursal_1}</div>
                                  <div class="badge badge-soft-primary font-size-14 m-1"><i class="fas fa-laptop-house"></i> ${row.stock_sucursal_1}</div>
                               
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

                        return ` <button class="btn btn-sm btn-info agregar_A btn-lg" id="add${row.id_articulo}" >
                            <i class="fas fa-cart-plus fa-2x"></i>
                        </button>`;
                    }
                }
            ]
        });

        $.ajax({
            type: "POST",
            url: "./controllers/ArticulosControllers.php?action=obtenerArticulos",
            contentType: false,
            processData: false,
            success: function(response) {
                console.log("Respuesta del servidor:", JSON.stringify(response));

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

















        //LINK - llamada a los clientes 
        var selectCliente = $('#fk_id_cliente');
        var inputClasificacion = $('#clasificacionCliente');
        var razonSocialCliente = $('#razonSocialNota');
        var nitCliente = $('#nitNota');
        var codigoCliente = $('#codigoClienteNota');

        selectCliente.selectize({
            valueField: 'id_cliente',
            labelField: 'nombre_Cl',
            searchField: 'nombre_Cl',
            placeholder: 'Seleccionar un cliente',
            load: function(query, callback) {
                $.ajax({
                    url: './controllers/ClientesControllers.php?action=obtenerClientes',
                    dataType: 'json',
                    data: {
                        q: query
                    },
                    success: function(data) {
                        callback(data);
                        console.log(data);
                    }
                });
            },
            onChange: function(value) {
                
                var selectedClient = this.options[value];
                var idCliente = selectedClient.id_cliente;
                var clasificacionCliente = selectedClient.clasificacion_Cl;
                var razonSocialCliente1 = selectedClient.nombre_Cl;
                var nitCliente1 = selectedClient.ci_Cl;
                var codigoCliente1 = selectedClient.id_cliente;

                const fechaActual = new Date();

              
                const año = fechaActual.getFullYear();
                const mes = String(fechaActual.getMonth() + 1).padStart(2, '0'); 
                const dia = String(fechaActual.getDate()).padStart(2, '0');
                const horas = String(fechaActual.getHours()).padStart(2, '0');
                const minutos = String(fechaActual.getMinutes()).padStart(2, '0');
                const segundos = String(fechaActual.getSeconds()).padStart(2, '0');
                const fechaFormateada = `${año}-${mes}-${dia} ${horas}:${minutos}:${segundos}`;

                
                console.log(fechaFormateada);
                $('#fechaNota').text(fechaFormateada);

                inputClasificacion.val(clasificacionCliente);
                razonSocialCliente.text(razonSocialCliente1);
                nitCliente.text(nitCliente1);
                codigoCliente.text(codigoCliente1);

            }
        });




        //NOTE - llamada a las ventas
        var tableVentas = $('#datatable-ventas').DataTable({
            lengthChange: false,
            order: [
                [0, "desc"]
            ],
            ajax: {
                url: './controllers/VentasControllers.php?action=obtenerVentas',
                dataSrc: ''
            },
            columns: [{
                    data: 'id_venta'
                },

                {
                    data: 'nombre_cliente'
                },
                {
                    data: 'nombre_usuario'
                },
                {
                    data: 'fecha_V'
                },
                {
                    data: 'importe_V'
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.facturado_V == 1) {
                            return `<div class="badge badge-soft-info font-size-12"><i class="fas fa-money-bill"></i> Venta Fact</div>`;
                        } else {
                            return `<div class="badge badge-soft-success font-size-12 pedido" id="${data.id_venta}"><i class="fas fa-file-invoice"></i> Venta sin</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.tipo_V == "venta") {
                            return `<div class="badge badge-soft-primary font-size-12"><i class="fas fa-money-bill"></i> Venta</div>`;
                        } else if (data.tipo_V == "pedido") {
                            return `<div class="badge badge-soft-secondary font-size-12 pedido" id="${data.id_venta}"><i class="fas fa-file-invoice"></i> Pedido</div>`
                        } else {
                            return `<div class="badge badge-soft-dark font-size-12 pedido" id="${data.id_venta}"><i class="fas fa-file-invoice"></i> Proforma</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.estado_V == 'CANCELADO') {
                            return `<div class="badge badge-soft-success font-size-12"><i class="fas fa-times"></i> Cancelado</div>`;
                        } else {
                            return `<div class="badge badge-soft-danger ont-size-12"><i class="fas fa-dollar-sign"></i> Por pagar</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        if (data.impreso_V == 0) {
                            return `<div class="badge badge-soft-warning font-size-12">Pendiente</div>`;
                        } else {
                            return `<div class="badge badge-soft-success ont-size-12">Impreso ${data.impreso_V}</div>`
                        }

                    }
                },
                {
                    data: null,
                    render: function(data, type, row) {

                        return `<div>
                                        <a href="pdfs/nota_venta.php?id_venta=${data.id_venta}" target="_blank">
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
                        return `<button class="btn btn-sm btn-danger btn-eliminar " id="${data.id_venta}"><i class="fas fa-trash-alt fa-2x"></i></button>`;
                    }
                }
            ]
        });
    });


    var carrito = [];

    function calcularTotal() {
        let total = 0;
        var facturado = $('#switch3').prop("checked");
        for (var i = 0; i < carrito.length; i++) {
            total = total + parseFloat(facturado ? carrito[i].sub_total_facturado : carrito[i].sub_total);
        }
        total = parseFloat(total.toFixed(2));
        $('#total').text(total);
        $('#importe_V').val(total);
    }
    // Función para agregar una nueva fila de producto al carrito
    function agregarFila(data) {
        var id = data.id_articulo;
        var codigo = data.codigo_A;
        var descripcion = data.descripcion_A;
        var precio_neto = data.precio_neto_A;
        var precio_venta = 0;
        var precio_facturado = 0;
        var cantidad_venta = 1;
        if ($('#clasificacionCliente').val() == "DISTRIBUCION") {
            precio_venta = data.precio_distribucion_A;
            precio_facturado = data.precio_distribucion_A * 1.13;
        }
        if ($('#clasificacionCliente').val() == "TECNICO") {
            precio_venta = data.precio_tecnico_A;
            precio_facturado = data.precio_tecnico_A * 1.13;
        }
        if ($('#clasificacionCliente').val() == "PUBLICO") {
            precio_venta = data.precio_publico_A;
            precio_facturado = data.precio_publico_A * 1.13;
        }
        var stock = data.stock_A;
        var cantidad = data.cantidad_A;
        if ('cantidad_venta' in data) {
            cantidad_venta = data.cantidad_venta;
        }
        var precio_unitario = precio_venta / data.cantidad_A;
        precio_unitario = parseFloat(precio_unitario.toFixed(4));
        var precioUnitF = precio_facturado / data.cantidad_A;
        precioUnitF = parseFloat(precioUnitF.toFixed(4));
        var facturado = $('#switch3').prop("checked");
        var producto = {
            id_articulo: id,
            codigo_A: codigo,
            descripcion_A: descripcion,
            precio_neto_A: precio_neto,
            precio_distribucion_A: data.precio_distribucion_A,
            precio_tecnico_A: data.precio_tecnico_A,
            precio_publico_A: data.precio_publico_A,
            cantidad_A: data.cantidad_A,
            stock_A: stock,

            precio_venta: precio_unitario,
            precio_facturado: precioUnitF,
            cantidad_venta: cantidad_venta,
            sub_total: precio_unitario * cantidad_venta,
            sub_total_facturado: precioUnitF * cantidad_venta,

        }

        console.log(producto)
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
                        <td style="display: none;">
                            <p class="font-size-13 text-muted mb-0 id" value="">${producto.id_articulo}</p>
                        </td>
                        <td>
                            <p class="font-size-13 text-muted mb-0 codigo" value="">${producto.codigo_A}</p>
                        </td>
                        <td class="descripcion-cell ">
                            <p class="font-size-13 text-muted mb-0" value="">${descripcion} </p>
                        </td>
                        <td > <input type="number" step="any" class="form-control price" value="${facturado?producto.precio_facturado:producto.precio_venta}"></td>
                        <td > <input type="number" class="form-control quantity" value="${cantidad_venta}" min="1" max="${producto.stock_A}">  </td>
                        <td class="text-end subtotal" value="">${facturado?producto.sub_total_facturado:producto.sub_total}</td>
                        <td> <button class="btn btn-sm btn-danger btn-eliminar" id="${id}"><i class="fas fa-trash-alt fa-2x"></i></button></td>
                </tr>`;
        $(nuevaFila).insertBefore('#tabla-ventas tbody tr:last');



        calcularTotal();
    }



    $('#switch3').on('click', function() {
        var facturado = $('#switch3').prop("checked");
        carritoAux = carrito;
        carrito = [];
        carritoAux.forEach(function(producto) {
            // Buscar la fila con el ID y eliminarla
            $('#tabla-ventas tbody tr').filter(function() {
                return $(this).find('.id').text() === producto.id_articulo;
            }).remove();
        })

        carritoAux.forEach(function(producto) {
            agregarFila(producto);
        });

    });

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
    $('#tabla-ventas').on('input', '.price, .quantity', function() {
        var facturado = $('#switch3').prop("checked");
        var tipo_V = $('input[name="tipo_V"]:checked').val();
        console.log(tipo_V)
        let row = $(this).closest('tr');
        let id = parseInt(row.find('.id').text());
        let price = parseFloat(row.find('.price').val());
        let quantity = parseFloat(row.find('.quantity').val());
        var sub_total = quantity * price;
        sub_total = parseFloat(sub_total.toFixed(3));
        var productoExistente = carrito.find(item => item.id_articulo == id);

        if (productoExistente && productoExistente.stock_A >= quantity || tipo_V == "proforma") {
            // Actualizar el producto existente
            productoExistente.precio_venta = facturado ? productoExistente.precio_venta : price;
            productoExistente.precio_facturado = facturado ? price : productoExistente.precio_facturado;
            productoExistente.cantidad_venta = quantity;
            productoExistente.sub_total = facturado ? productoExistente.sub_total : sub_total;
            productoExistente.sub_total_facturado = facturado ? sub_total : productoExistente.sub_total_facturado;
            row.find('.subtotal').text(sub_total);
        }
        if (productoExistente.stock_A <= quantity) {
            Swal.fire({
                icon: 'warning',
                title: 'Atencion',
                text: 'El stock a alcanzo  el limite compra de nuevo !!!',
                confirmButtonText: 'Ok'
            });
            $(this).closest('tr');
            if (tipo_V == 'venta' || tipo_V == 'pedido') {
                productoExistente.cantidad_venta = parseInt(productoExistente.stock_A);
                productoExistente.sub_total = parseFloat(productoExistente.cantidad_venta * productoExistente.precio_venta)
                productoExistente.sub_total_facturado = parseFloat(productoExistente.cantidad_venta * productoExistente.precio_facturado)
                row.find('.quantity').val(productoExistente.stock_A);
                row.find('.subtotal').text(facturado ? productoExistente.sub_total_facturado : productoExistente.sub_total);
            }

        }
        //console.log(carrito);
        calcularTotal();
    });

    // eliminar un producto del detalle de envio
    $('#tabla-ventas').on('click', '.btn-eliminar', function() {
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
    $('#crearVenta').on('click', function() {

        var tipo = $('#switch4').prop('checked') ? 1 : 0;
        $('#tipo_V').val(tipo);
        var tipo = $('#switch3').prop('checked') ? 1 : 0;
        $('#facturado_V').val(tipo);
        $('#detalle_V').val(JSON.stringify(carrito));
        var formData = $('#formVentas').serialize();
        var detalleVenta = $('#detalle_V').val();
        $.ajax({
            type: 'POST',
            url: './controllers/VentasControllers.php?action=crearVenta',
            data: formData,
            success: function(response) {

                if (response == '"ok"') {

                    Swal.fire({
                        icon: 'success',
                        title: 'Éxito',
                        text: 'La venta se realizo con exito',
                        confirmButtonText: 'Ok'
                    });

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Érror',
                        text: 'La venta no se realizo',
                        confirmButtonText: 'Ok'
                    });
                }
                reloadTables();

                var filasAeliminar = $('#tabla-ventas tbody tr');
                filasAeliminar.each(function() {
                    $(this).remove();
                });


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

        window.location.href = "inicio.php#2.3ventas.php";
    });

    //CONFIRMAR PEDIDO
    $("#datatable-ventas").on("click", ".pedido", function(e) {
        e.preventDefault();
        var idVenta = $(this).attr('id');
        console.log(idVenta);
        Swal.fire({
            title: '¿Verificar pedido?',
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
                    url: './controllers/VentasControllers.php?action=recibirPedido',
                    data: {
                        id_venta: idVenta
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

    $("#datatable-ventas").on("click", ".btn-eliminar", function(e) {
        e.preventDefault();
        var idVenta = $(this).attr('id');
        console.log(idVenta);
        Swal.fire({
            title: '¿Eliminar venta?',
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
                    url: './controllers/VentasControllers.php?action=eliminarVenta',
                    data: {
                        id_venta: idVenta
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

    function reloadTables() {
        var miTablaVentas = $('#datatable-ventas').DataTable();
        miTablaVentas.ajax.reload();
        var miTablaArticulos = $('#datatable-articulos').DataTable();
        miTablaArticulos.ajax.reload();
    }

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
<script src="assets/libs/selectize/selectize.js"></script>
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