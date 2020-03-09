<?php $this->load->view('admin/header'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>admin/dashboard">SISTEM PENDUKUNG KEPUTUSAN REKOMENDASI DESAIN PHOTOBOOTH | PT FIRUZ IMANI OETAMA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                        <li class="divider"></li>
                        <li><a href="<?=base_url('admin/dashboard/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?=base_url();?>admin/dashboard"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_user"><i class="fa fa-user fa-fw"></i>User</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_customer"><i class="fa fa-users fa-fw"></i>Customer</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_order_desain"><i class="fa fa-shopping-cart fa-fw"></i>Order Desain</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_tema_desain"><i class="fa fa-paint-brush fa-fw"></i>Tema Desain</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_tema"><i class="fa fa-paint-brush fa-fw"></i>Tema</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_jenis_desain"><i class="fa fa-list-ol fa-fw"></i>Jenis Desain</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_kriteria"><i class="fa fa-list-ul fa-fw"></i>Kriteria</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_hasil"><i class="fa fa-superscript fa-fw"></i>Perhitungan</a>
                        </li>
                        <li>
                            <a href="<?=base_url();?>admin/data_laporan"><i class="fa fa-file fa-fw"></i>Laporan</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php if(isset($content)) echo $content; ?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php $this->load->view('admin/footer'); ?>