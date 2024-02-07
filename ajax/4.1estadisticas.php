 <!-- plugin css -->
 <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <div class="page-content">
     <div class="container-fluid">

         <!-- start page title -->
         <div class="row">
             <div class="col-12">
                 <div class="page-title-box d-sm-flex align-items-center
                    justify-content-between">
                     <h4 class="mb-sm-0 font-size-18">Reportes</h4>

                     <div class="page-title-right">
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript:
                                    void(0);">Red Extel </a></li>
                             <li class="breadcrumb-item active">Reportes</li>
                         </ol>
                     </div>

                 </div>
             </div>
         </div>
         <!-- end page title -->

         <div class="row">
             <div class="col-xl-3 col-md-6">
                 <!-- card -->
                 <div class="card card-h-100">
                     <!-- card body -->
                     <div class="card-body ">
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h4 class="mb-3">
                                     <span>Usuarios</span>
                                 </h4>
                                 <h4 class="mb-3">
                                     <span class="counter-value text-center" id="usuarios"></span>
                                 </h4>
                             </div>

                             <div class="col-6">
                                 <i class=" fas fa-user-check fa-4x"></i>
                             </div>
                         </div>
                         <div class="text-nowrap">
                             <span class="badge bg-soft-success text-success">activos</span>
                             <span class="ms-1 text-muted font-size-13">sin observaciones</span>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div><!-- end col -->

             <div class="col-xl-3 col-md-6">
                 <!-- card -->
                 <div class="card card-h-100">
                     <!-- card body -->
                     <div class="card-body">
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h4 class="mb-3">
                                     <span>Grupos</span>
                                 </h4>
                                 <h4 class="mb-3">
                                     <span class="counter-value" id="grupos">0</span>
                                 </h4>
                             </div>
                             <div class="col-6">
                                 <i class=" far fa-object-group fa-4x"></i>
                             </div>
                         </div>
                         <div class="text-nowrap">
                             <span class="badge bg-soft-primary text-danger">Activos</span>
                             <span class="ms-1 text-muted font-size-13">Homologados</span>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div><!-- end col-->

             <div class="col-xl-3 col-md-6">
                 <!-- card -->
                 <div class="card card-h-100">
                     <!-- card body -->
                     <div class="card-body">
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h4 class="mb-3">
                                     <span>Clientes</span>
                                 </h4>
                                 <h4 class="mb-3">
                                     <span class="counter-value" id="clientes"></span>
                                 </h4>
                             </div>
                             <div class="col-6">
                                 <i class="fas fa-user-tag fa-4x"></i>
                             </div>
                         </div>
                         <div class="text-nowrap">
                             <span class="badge bg-soft-success text-success">+
                                 Activos</span>
                             <span class="ms-1 text-muted font-size-13">Sin Observasiones</span>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div><!-- end col -->

             <div class="col-xl-3 col-md-6">
                 <!-- card -->
                 <div class="card card-h-100">
                     <!-- card body -->
                     <div class="card-body">
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h4 class="mb-3">
                                     <span>Proveedores</span>
                                 </h4>
                                 <h4 class="mb-3">
                                     <span class="counter-value" id="proveedores">9</span>
                                 </h4>
                             </div>
                             <div class="col-6">
                                 <i class=" fas fa-house-user fa-4x"></i>
                             </div>
                         </div>
                         <div class="text-nowrap">
                             <span class="badge bg-soft-info text-success">Activos</span>
                             <span class="ms-1 text-muted font-size-13">Since
                                 last week</span>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div><!-- end col -->
         </div><!-- end row-->











         <div class="row">


             <div class="col-xl-12">
                 <div class="card card-h-100">
                     <div class="card-body">
                         <div class="d-flex flex-wrap align-items-center mb-4">
                             <h5 class="card-title me-2">Ventas Semanales</h5>
                         </div>
                         <div class="row">
                             <div class="col-lg-12">
                                 <div id="grafico_ventas" data-colors='[" #5156be" ," #34c38f"]' class="apex-charts " s></div>
                             </div>
                         </div>

                     </div>
                 </div>

                 <!-- end row -->
             </div>
             <!-- end col -->
         </div> <!-- end row-->

         <div class="row">

             <div class="col-xl-6">
                 <!-- card -->
                 <div class="card card-h-100">
                     <!-- card body -->
                     <div class="card-body">
                         <div class="d-flex flex-wrap align-items-center mb-4">
                             <h5 class="card-title me-2">Según Categoria</h5>
                         </div>

                         <div class="row align-items-center">
                             <div class="col-sm-12 col-lg-12">
                                 <div id="wallet-balance" class="apex-charts"></div>
                             </div>
                             <div class="col-sm align-self-center">
                                 <div class="mt-4 mt-sm-0" id="categoria-info"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-xl-6">
                 <!-- card -->
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex flex-wrap align-items-center mb-4">
                             <h5 class="card-title me-2">Productos mas vendidos segun cantidad</h5>
                             <div class="ms-auto">
                                 <div class="dropdown">
                                     <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                     </a>

                                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                         <a class="dropdown-item" href="" onclick="changeLocation('USA')">USA</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Russia')">Russia</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Australia')">Australia</a>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div id="sales-by-locations" data-colors='[" #5156be" ]' style="height: 250px"></div>

                         <div class="px-2 py-2" id="progress-container">
                             <!-- Contenido de progreso dinámico aquí -->
                         </div>
                     </div>
                 </div>
                 <!-- end card -->
             </div>
             <!-- end col -->
         </div>
         <!-- end row-->



         <div class="row">

             <div class="col-xl-6">
                 <!-- card -->
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex flex-wrap align-items-center mb-4">
                             <h5 class="card-title me-2">Productos mas vendidos segun cantidad</h5>
                             <div class="ms-auto">
                                 <div class="dropdown">
                                     <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                     </a>

                                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                         <a class="dropdown-item" href="" onclick="changeLocation('USA')">USA</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Russia')">Russia</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Australia')">Australia</a>
                                     </div>
                                 </div>
                             </div>
                         </div>


                         <div>
                             <!-- Contenedor del gráfico -->
                             <canvas id="category-bar-chart" width="200" height="200"></canvas>
                         </div>
                     </div>
                 </div>
                 <!-- end card -->
             </div>


             <div class="col-xl-6">
                 <!-- card -->
                 <div class="card">
                     <div class="card-body">
                         <div class="d-flex flex-wrap align-items-center mb-4">
                             <h5 class="card-title me-2">Productos mas vendidos segun cantidad</h5>
                             <div class="ms-auto">
                                 <div class="dropdown">
                                     <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                     </a>

                                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                         <a class="dropdown-item" href="" onclick="changeLocation('USA')">USA</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Russia')">Russia</a>
                                         <a class="dropdown-item" href="" onclick="changeLocation('Australia')">Australia</a>
                                     </div>
                                 </div>
                             </div>
                         </div>


                         <div>
                             <!-- Contenedor del gráfico -->
                             <canvas id="vertical-bar-chart" width="200" height="200"></canvas>
                         </div>
                     </div>
                 </div>
                 <!-- end card -->
             </div>
             <!-- end col -->
         </div>




         <div class="row">
             <div class="col-xl-4">
                 <div class="card">
                     <div class="card-header align-items-center d-flex">
                         <h4 class="card-title mb-0 flex-grow-1">Trading</h4>
                         <div class="flex-shrink-0">
                             <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                 <li class="nav-item">
                                     <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Buy</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Sell</a>
                                 </li>
                             </ul>
                         </div>
                     </div><!-- end card header -->

                     <div class="card-body">
                         <div class="tab-content">
                             <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                 <div class="float-end ms-2">
                                     <h5 class="font-size-14"><i class="bx
                                            bx-wallet text-primary font-size-16
                                            align-middle me-1"></i> <a href="#!" class="text-reset
                                            text-decoration-underline">$4335.23</a></h5>
                                 </div>
                                 <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                 <div>
                                     <div class="form-group mb-3">
                                         <label>Payment method :</label>
                                         <select class="form-select">
                                             <option>Direct Bank Payment</option>
                                             <option>Credit / Debit Card</option>
                                             <option>Paypal</option>
                                             <option>Payoneer</option>
                                             <option>Stripe</option>
                                         </select>
                                     </div>

                                     <div>
                                         <label>Add Amount :</label>
                                         <div class="input-group mb-3">
                                             <label class="input-group-text">Amount</label>
                                             <select class="form-select" style="max-width: 90px;">
                                                 <option value="BT" selected>BTC</option>
                                                 <option value="ET">ETH</option>
                                                 <option value="LT">LTC</option>
                                             </select>
                                             <input type="text" class="form-control" placeholder="0.00121255">
                                         </div>

                                         <div class="input-group mb-3">
                                             <label class="input-group-text">Price</label>
                                             <input type="text" class="form-control" placeholder="$58,245">
                                             <label class="input-group-text">$</label>
                                         </div>

                                         <div class="input-group mb-3">
                                             <label class="input-group-text">Total</label>
                                             <input type="text" class="form-control" placeholder="$36,854.25">
                                         </div>
                                     </div>

                                     <div class="text-center">
                                         <button type="button" class="btn
                                            btn-success w-md">Buy Coin</button>
                                     </div>
                                 </div>
                             </div>
                             <!-- end tab pane -->
                             <div class="tab-pane" id="sell-tab" role="tabpanel">
                                 <div class="float-end ms-2">
                                     <h5 class="font-size-14"><i class="bx
                                            bx-wallet text-primary font-size-16
                                            align-middle me-1"></i> <a href="#!" class="text-reset
                                            text-decoration-underline">$4235.23</a></h5>
                                 </div>
                                 <h5 class="font-size-14 mb-4">Sell Coins</h5>
                                 <div>

                                     <div class="form-group mb-3">
                                         <label>Wallet ID :</label>
                                         <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                     </div>

                                     <div>
                                         <label>Add Amount :</label>
                                         <div class="input-group mb-3">
                                             <label class="input-group-text">Amount</label>
                                             <select class="form-select" style="max-width: 90px;">
                                                 <option value="BT" selected>BTC</option>
                                                 <option value="ET">ETH</option>
                                                 <option value="LT">LTC</option>
                                             </select>
                                             <input type="text" class="form-control" placeholder="0.00121255">
                                         </div>

                                         <div class="input-group mb-3">

                                             <label class="input-group-text">Price</label>
                                             <input type="text" class="form-control" placeholder="$23,754.25">

                                             <label class="input-group-text">$</label>
                                         </div>

                                         <div class="input-group mb-3">
                                             <label class="input-group-text">Total</label>
                                             <input type="text" class="form-control" placeholder="$6,852.41">
                                         </div>
                                     </div>

                                     <div class="text-center">
                                         <button type="button" class="btn
                                            btn-danger w-md">Sell Coin</button>
                                     </div>
                                 </div>
                             </div>
                             <!-- end tab pane -->
                         </div>
                         <!-- end tab content -->
                     </div>
                     <!-- end card body -->
                 </div>
                 <!-- end card -->
             </div>
             <!-- end col -->


             <!-- end col -->

             <div class="col-xl-4">
                 <div class="card">
                     <div class="card-header align-items-center d-flex">
                         <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                         <div class="flex-shrink-0">
                             <select class="form-select form-select-sm mb-0
                                my-n1">
                                 <option value="Today" selected="">Today</option>
                                 <option value="Yesterday">Yesterday</option>
                                 <option value="Week">Last Week</option>
                                 <option value="Month">Last Month</option>
                             </select>
                         </div>
                     </div><!-- end card header -->

                     <div class="card-body px-0">
                         <div class="px-3" data-simplebar style="max-height:
                            352px;">
                             <ul class="list-unstyled activity-wid mb-0">

                                 <li class="activity-list activity-border">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                             <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">+0.5 BTC</h6>
                                                 <div class="font-size-13">$178.53</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>

                                 <li class="activity-list activity-border">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                             <i class="mdi mdi-ethereum
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">-20.5 ETH</h6>
                                                 <div class="font-size-13">$3541.45</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>

                                 <li class="activity-list activity-border">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                             <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">+0.5 BTC</h6>
                                                 <div class="font-size-13">$5791.45</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>

                                 <li class="activity-list activity-border">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                             <i class="mdi mdi-litecoin
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">-1.5 LTC</h6>
                                                 <div class="font-size-13">$5791.45</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>


                                 <li class="activity-list activity-border">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-warning text-warning
                                            rounded-circle">
                                             <i class="bx bx-bitcoin
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">+0.5 BTC</h6>
                                                 <div class="font-size-13">$5791.45</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>

                                 <li class="activity-list">
                                     <div class="activity-icon avatar-md">
                                         <span class="avatar-title
                                            bg-soft-primary text-primary
                                            rounded-circle">
                                             <i class="mdi mdi-litecoin
                                                font-size-24"></i>
                                         </span>
                                     </div>
                                     <div class="timeline-list-item">
                                         <div class="d-flex">
                                             <div class="flex-grow-1
                                                overflow-hidden me-4">
                                                 <h5 class="font-size-14 mb-1">24/05/2021,
                                                     18:24:56</h5>
                                                 <p class="text-truncate
                                                    text-muted font-size-13">0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431</p>
                                             </div>
                                             <div class="flex-shrink-0 text-end
                                                me-3">
                                                 <h6 class="mb-1">+.55 LTC</h6>
                                                 <div class="font-size-13">$91.45</div>
                                             </div>

                                             <div class="flex-shrink-0 text-end">
                                                 <div class="dropdown">
                                                     <a class="text-muted
                                                        dropdown-toggle
                                                        font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                         <i class="mdi
                                                            mdi-dots-vertical"></i>
                                                     </a>

                                                     <div class="dropdown-menu
                                                        dropdown-menu-end">
                                                         <a class="dropdown-item" href="#">Action</a>
                                                         <a class="dropdown-item" href="#">Another
                                                             action</a>
                                                         <a class="dropdown-item" href="#">Something
                                                             else here</a>
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="#">Separated
                                                             link</a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <!-- end card body -->
                 </div>
                 <!-- end card -->
             </div>
             <!-- end col -->
         </div><!-- end row -->
     </div>
     <!-- container-fluid -->
 </div>
 <!-- End Page-content -->

 <!-- apexcharts -->
 <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

 <!-- Plugins js-->
 <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
 <!-- dashboard init -->
 <script src="assets/js/pages/dashboard.init.js"></script>

 <script type="text/javascript">
     function initCounterNumber() {
         var counter = document.querySelectorAll('.counter-value');
         var speed = 250; // The lower the slower
         counter.forEach(function(counter_value) {
             function updateCount() {
                 var target = +counter_value.getAttribute('data-target');
                 var count = +counter_value.innerText;
                 var inc = target / speed;
                 if (inc < 1) {
                     inc = 1;
                 }
                 // Check if target is reached
                 if (count < target) {
                     // Add inc to count and output in counter_value
                     counter_value.innerText = (count + inc).toFixed(0);
                     // Call function every ms
                     setTimeout(updateCount, 1);
                 } else {
                     counter_value.innerText = target;
                 }
             };
             updateCount();
         });
     }

     $(document).ready(function() {
         initCounterNumber();
     });

     $.ajax({
         method: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT COUNT(*) AS cantidad_usuarios FROM usuario'
         },
         dataType: 'json',
         success: function(data) {
             console.log(data)
             $('#usuarios').attr('data-target', data[0].cantidad_usuarios);
             $('#usuarios').text(data[0].cantidad_usuarios);
         }
     });

     $.ajax({
         method: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT COUNT(*) AS cantidad_grupos FROM categoria'
         },
         dataType: 'json',
         success: function(data) {
             console.log(data)
             $('#grupos').attr('data-target', data[0].cantidad_grupos);
             $('#grupos').text(data[0].cantidad_grupos);
         }
     });

     $.ajax({
         method: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT COUNT(*) AS cantidad_clientes FROM clientes'
         },
         dataType: 'json',
         success: function(data) {
             console.log(data)
             $('#clientes').attr('data-target', data[0].cantidad_clientes);
             $('#clientes').text(data[0].cantidad_clientes);
         }
     });

     $.ajax({
         method: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT COUNT(*) AS cantidad_proveedor FROM proveedores'
         },
         dataType: 'json',
         success: function(data) {
             console.log(data)
             $('#proveedores').attr('data-target', data[0].cantidad_proveedor);
             $('#proveedores').text(data[0].cantidad_proveedor);
         }
     });



     function crearGrafico(datosCategoria) {
         // Mapea los datos recibidos para obtener las etiquetas (labels) y las series
         var etiquetas = datosCategoria.map(function(categoria) {
             return categoria.nombre_C;
         });

         var series = datosCategoria.map(function(categoria) {
             return parseInt(categoria.cantidad_productos) / 4;
         });

         // Define el objeto "datosGrafico" con los datos mapeados
         var datosGrafico = {
             series: series,
             chart: {
                 type: 'donut'
             },
             labels: etiquetas
         };

         var options = {
             colors: ["#887aca", "#5776be", "#a877da"]
         };

         // Inicializa el gráfico
         var chart = new ApexCharts(document.querySelector("#wallet-balance"), datosGrafico, options);
         chart.render();
     }

     // Función para realizar la solicitud AJAX
     function realizarSolicitudAjax() {
         $.ajax({
             url: './controllers/ArticulosControllers.php?action=productosPorCategoria',
             method: "GET",
             dataType: "json",
             success: function(data) {

                 crearGrafico(data);
             },
             error: function(xhr, textStatus, errorThrown) {
                 console.error("Error en la solicitud AJAX: " + errorThrown);
             }
         });
     }

     // Llama a la función para realizar la solicitud AJAX al cargar la página
     realizarSolicitudAjax();

     $.ajax({
         type: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT * FROM ventas WHERE MONTH(fecha_V) = MONTH(CURRENT_DATE()) AND YEAR(fecha_V) = YEAR(CURRENT_DATE()); '
         },
         dataType: 'json',
         success(response) {
             console.log(' ventas');
             console.log(response);
             const fechas = response.map(venta => venta.fecha_V);
             const cantidades = response.map(venta => venta.importe_V);

             const ventas = {
                 chart: {
                     type: 'line',
                 },
                 series: [{
                     name: 'Ventas',
                     data: cantidades,
                 }],
                 xaxis: {
                     categories: fechas,
                 },
                 colors: ['#5156be'],
             };

             // Inicializar el gráfico con ApexCharts
             const graficoVentas = new ApexCharts(document.querySelector("#grafico_ventas"), ventas);
             graficoVentas.render();
         }
     });

     $.ajax({
         type: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT * FROM ventas;'
         },
         dataType: 'json',
         success: function(response) {
             const productos_mas_vendidos = obtenerProductosMasVendidos(response, 10);

             updateProgressBars(productos_mas_vendidos);
         },
         error: function(error) {
             console.error('Error en la solicitud AJAX: ', error);
         }
     });




     function updateProgressBars(data) {
         const progressContainer = document.getElementById('progress-container');
         progressContainer.innerHTML = '';
         let totalProductos = 0
         data.forEach(item => {
             totalProductos += item.cantidad
         })

         data.forEach(item => {
             const {
                 id_producto,
                 codigo,
                 descripcion,
                 cantidad
             } = item;
             const percentage = (cantidad / totalProductos) * 100; // Calcular el porcentaje en relación con el máximo

             const progressBarHtml = `
            <p class="mt-3 mb-1">${codigo} <span class="float-end">${percentage.toFixed(2)}%</span></p>
            <div class="progress mt-2" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: ${percentage}%" aria-valuenow="${percentage}" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
        `;

             progressContainer.innerHTML += progressBarHtml;
         });
     }



     // Función para obtener los productos más vendidos
     function obtenerProductosMasVendidos(ventasData, numProductos) {
         // Crear un objeto para contar la cantidad de cada producto
         const conteoProductos = {};

         // Iterar sobre los datos de ventas y contar la cantidad de cada producto
         ventasData.forEach(venta => {
             const detalle = JSON.parse(venta.detalle_V);
             console.log(detalle);
             detalle.forEach(producto => {
                 const idProducto = producto.id_articulo;
                 if (conteoProductos[idProducto] === undefined) {
                     conteoProductos[idProducto] = {
                         codigo: producto.codigo_A,
                         descripcion: producto.descripcion_A,
                         cantidad: producto.cantidad_venta
                     };
                 } else {
                     conteoProductos[idProducto] += producto.cantidad_venta;
                 }
             })

         });

         // Convertir el objeto de conteo a un array de objetos
         const productosOrdenados = Object.keys(conteoProductos).map(idProducto => ({
             id_producto: idProducto,
             codigo: conteoProductos[idProducto].codigo,
             descripcion: conteoProductos[idProducto].descripcion,
             cantidad: conteoProductos[idProducto].cantidad
         }));

         // Ordenar el array por la cantidad de ventas en orden descendente
         productosOrdenados.sort((a, b) => b.cantidad - a.cantidad);

         // Tomar los primeros "numProductos" productos más vendidos
         const productosMasVendidos = productosOrdenados.slice(0, numProductos);

         return productosMasVendidos;
     }

     // Función para actualizar el gráfico de barras verticales
     function updateVerticalBarChart(data) {
         const canvas = document.getElementById('vertical-bar-chart');

         const labels = Object.keys(data);
         const values = Object.values(data);

         new Chart(canvas, {
             type: 'bar',
             data: {
                 labels: labels,
                 datasets: [{
                     label: 'Total Vendido',
                     data: values,
                     backgroundColor: 'rgba(54, 162, 235, 0.6)',
                     borderColor: 'rgba(54, 162, 235, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });
     }
























     // Ejemplo de uso
     // Suponiendo que obtienes los datos de ventas mediante una solicitud AJAX
     $.ajax({
         type: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT  v.*, s.nombreS AS nombre_sucursal, u.nombre_U AS nombre_usuario, c.nombre_Cl AS nombre_cliente FROM ventas AS v LEFT JOIN  sucursal AS s ON v.fk_id_sucursal = s.id_sucursal LEFT JOIN usuario AS u ON v.fk_id_usuario = u.id_usuario LEFT JOIN clientes AS c ON v.fk_id_cliente = c.id_cliente;'
         },
         dataType: 'json',
         success: function(response) {
             const estadisticas_por_usuario = obtenerEstadisticasPorUsuario(response);

             updateVerticalBarChart(estadisticas_por_usuario);
         },
         error: function(error) {
             console.error('Error en la solicitud AJAX: ', error);
         }
     });

     // Esta función debe ser similar a la que has implementado en tu código
     function obtenerEstadisticasPorUsuario(ventasData) {
         const estadisticasPorUsuario = {};

         ventasData.forEach(venta => {
             const {
                 nombre_usuario
             } = venta;

             if (!estadisticasPorUsuario[nombre_usuario]) {
                 estadisticasPorUsuario[nombre_usuario] = {
                     totalVendido: parseFloat(venta.importe_V),
                     cantidadVentas: 1 // Inicializar la cantidad de ventas en 1
                 };
             } else {
                 estadisticasPorUsuario[nombre_usuario].totalVendido += parseFloat(venta.importe_V);
                 estadisticasPorUsuario[nombre_usuario].cantidadVentas++; // Incrementar la cantidad de ventas
             }
         });

         return estadisticasPorUsuario;
     }

     // Función para actualizar el gráfico de barras verticales
     function updateVerticalBarChart(data) {
         const canvas = document.getElementById('vertical-bar-chart');
         console.log(data)
         const labels = Object.keys(data);
         const totalVendido = Object.values(data).map(usuario => usuario.totalVendido); // Obtener el total vendido por usuario
         const cantidadVentas = Object.values(data).map(usuario => usuario.cantidadVentas); // Obtener la cantidad de ventas por usuario

         new Chart(canvas, {
             type: 'bar',
             data: {
                 labels: labels,
                 datasets: [{
                     label: 'Total Vendido',
                     data: totalVendido,
                     backgroundColor: 'rgba(54, 162, 235, 0.6)', // Color azul para las barras del total vendido
                     borderColor: 'rgba(54, 162, 235, 1)',
                     borderWidth: 1
                 }, {
                     label: 'Cantidad de Ventas',
                     data: cantidadVentas,
                     backgroundColor: 'rgba(255, 99, 132, 0.6)', // Color rosa para las barras de la cantidad de ventas
                     borderColor: 'rgba(255, 99, 132, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });
     }









     // Ejemplo de uso
     $.ajax({
         type: "POST",
         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
         data: {
             sql: 'SELECT  v.*, s.nombreS AS nombre_sucursal, u.nombre_U AS nombre_usuario, c.nombre_Cl AS nombre_cliente FROM ventas AS v LEFT JOIN  sucursal AS s ON v.fk_id_sucursal = s.id_sucursal LEFT JOIN usuario AS u ON v.fk_id_usuario = u.id_usuario LEFT JOIN clientes AS c ON v.fk_id_cliente = c.id_cliente;'
         },
         dataType: 'json',
         success: function(response) {
             obtenerCategoriasMasVendidas(response).then(categorias_mas_vendidas => {
                 updateCategoryBarChart1(categorias_mas_vendidas); // Llamar a la función para actualizar el gráfico de barras por categorías
             }).catch(error => {
                 console.error('Error al obtener las categorías más vendidas: ', error);
             });
         },
         error: function(error) {
             console.error('Error en la solicitud AJAX: ', error);
         }
     });


     // Función para actualizar el gráfico de barras por categorías
     function updateCategoryBarChart1(categorias) {
         const canvas1 = document.getElementById('category-bar-chart');
         console.log('categorias');
         console.log(categorias);
         const labels1 = Object.keys(categorias);
         const totalVendido = Object.values(categorias).map(categoria => categoria.totalVendido); // Obtener el total vendido por usuario
         const cantidadVentas = Object.values(categorias).map(categoria => categoria.cantidadVentas); // Obtener la cantidad de ventas por usuario

         new Chart(canvas1, {
             type: 'bar',
             data: {
                 labels: labels1,
                 datasets: [{
                         label: 'Precio Total',
                         data: totalVendido,
                         backgroundColor: 'rgba(255, 255, 132, 0.6)', // Color rosa para las barras de la cantidad vendida por categoría
                         borderColor: 'rgba(255, 255, 132, 1)',
                         borderWidth: 1
                     },
                     {
                         label: 'Cantidad Total',
                         data: cantidadVentas,
                         backgroundColor: 'rgba(0, 0, 123, 0.6)', // Color rosa para las barras de la cantidad vendida por categoría
                         borderColor: 'rgba(0, 0, 123, 0.6)',
                         borderWidth: 1
                     }
                 ]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: true
                     }
                 }
             }
         });
     }

     // Función para obtener las categorías más vendidas y la cantidad de productos vendidos en cada categoría
     function obtenerCategoriasMasVendidas(ventasData) {
         const categorias = {};

         const promises = ventasData.map(venta => {
             const detalle = JSON.parse(venta.detalle_V);

             // Mapear el detalle de cada venta a una lista de promesas AJAX
             return Promise.all(detalle.map(producto => {
                 const idArticulo = producto.id_articulo;

                 // Devolver una promesa para cada solicitud AJAX
                 return new Promise((resolve, reject) => {
                     $.ajax({
                         type: "POST",
                         url: './controllers/VentasControllers.php?action=obtenerVentasPorCore',
                         data: {
                             sql: 'SELECT a.*, c.nombre_C FROM articulo a INNER JOIN categoria c ON a.fk_id_categoria =  c.id_categoria WHERE id_articulo = ' + idArticulo,
                         },
                         dataType: 'json',
                         success: function(response) {
                             const nombreCategoria = response[0].nombre_C;
                             const cantidad = parseInt(producto.cantidad_venta);
                             const sub_total = parseInt(producto.sub_total);

                             if (!categorias[nombreCategoria]) {
                                 categorias[nombreCategoria] = {
                                     totalVendido: parseFloat(sub_total),
                                     cantidadVentas: cantidad // Inicializar la cantidad de ventas en 1
                                 };
                             } else {
                                 categorias[nombreCategoria].totalVendido += parseFloat(sub_total);
                                 categorias[nombreCategoria].cantidadVentas += cantidad; // Incrementar la cantidad de ventas
                             }
                             resolve(); // Resuelve la promesa después de procesar los datos
                         },
                         error: function(error) {
                             console.error('Error en la solicitud AJAX para obtener el ID de categoría: ', error);
                             reject(error); // Rechaza la promesa en caso de error
                         }
                     });
                 });
             }));
         });

         // Devuelve una promesa que se resuelve cuando todas las solicitudes AJAX se completan
         return Promise.all(promises).then(() => categorias);
     }
 </script>