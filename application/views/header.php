<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mini Project</title>
  <link rel="shortcut icon" href="<?php echo base_url("assets/img/doc.png") ?>">
  <link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/simple-sidebar.css")?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/css/float.css")?>" rel="stylesheet">
  <link href="<?php echo base_url("assets/fontawesome/css/font-awesome.min.css")?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fontawesome/css/font-awesome.min.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css")?>">
  <script src="<?php echo base_url("assets/jquery/jquery.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <script src="<?php echo base_url("assets/js/sweetalert2.all.min.js")?>"></script>

</head>

<body>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div style="border-right:2px solid  #ffc400;" id="sidebar-wrapper">
      <div class="sidebar-heading"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;CRUD CI</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url("pelanggan") ?>" class="list-group-item list-group-item-action menu "><i class="fa fa-users"></i>&nbsp;&nbsp;Data Pelanggan</a>
        <a href="<?php echo base_url("barang") ?>" class="list-group-item list-group-item-action menu"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Data Barang</a>
        <a href="<?php echo base_url("penjualan") ?>" class="list-group-item list-group-item-action menu"><i class="fa fa-database"></i>&nbsp;&nbsp;Data Penjualan</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn" style="background-color: #0d47a1;color: white" id="menu-toggle"><i class="fa fa-bars"></i></button>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="container-fluid">