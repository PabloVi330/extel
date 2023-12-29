<?php 
 $area = $_SESSION['area_U'] ;
 $tipo = $_SESSION['tipo_U'] ;
?>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                <li>
                    <a href="index.php">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>




                <!-- INICIO GRUPOS  -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Grupos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php if ($area == "administrador") { // Muestra solo si el nivel de usuario es 0 o 1 
                        ?>
                            <li>
                                <a href="1.1sucursales.php">
                                    <span data-key="t-calendar">
                                        <i class="fas fa-store"></i>
                                        Sucursales
                                    </span>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if ($area == "administrador") { // Muestra solo si el nivel de usuario es 0, 1 o 2 
                        ?>
                            <li>
                                <a href="1.2usuarios.php">
                                    <span data-key="t-chat">
                                        <i class="fas fa-user-tag"></i>
                                        Usuarios
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="1.3categorias.php">
                                    <span data-key="t-chat">
                                        <i class="fas fa-chart-line"></i>
                                        Grupos
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="1.4marcas.php">
                                    <span data-key="t-chat">
                                        <i class="fab fa-atlassian"></i>
                                        Marcas
                                    </span>
                                </a>
                            </li>
                        <?php } ?>

                        <li>
                            <a href="1.5productos.php">
                                <span data-key="t-chat">
                                    <i class="fab fa-product-hunt"></i>
                                    Productos</span>
                            </a>
                        </li>
                        <li>
                            <a href="1.6clientes.php">
                                <span data-key="t-chat">
                                    <i class="fas fa-user-tie"></i>
                                    Clientes</span>
                            </a>
                        </li>
                      </ul>
                </li>
                <!-- FIN DE GRUPOS -->




                <!-- MOVIMIENTOS -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fas fa-exchange-alt"></i>
                        <span data-key="t-apps">Movimientos</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php
                         if($area == "administrador" || $area == "supervisor"){
                        ?>
                        <li>
                            <a href="2.1compras.php">
                                <span data-key="t-calendar">
                                    <i class="fas fa-shopping-cart"></i>
                                    Compras
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="2.2envios.php">
                                <span data-key="t-chat">
                                    <i class="fas fa-truck"></i>
                                    Envios</span>
                            </a>
                        </li>
                         <?php
                         }
                        ?>
                        
                        <li>
                            <a href="2.3ventas.php">
                                <span data-key="t-chat">
                                    <i class="fas fa-money-bill-wave"></i>
                                    Ventas</span>
                            </a>
                        </li>

                        <!-- <li>
                            <a href="chat.html">
                                <span data-key="t-chat"><i class="fas fa-money-bill"></i>
                                    Creditos</span>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <!-- FIN DE MOVIMINTOS -->






            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4
                            mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited
                            Access</h5>
                        <p class="font-size-13">Upgrade your plan
                            from a Free trial, to select ‘Business
                            Plan’.</p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>