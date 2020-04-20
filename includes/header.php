<?php
    session_start();
    require_once(__DIR__ . '/../classes/database.class.php');
    if( !($_SESSION["logged"]) )
    {
        header('Location: index.php');
    } 
?>
<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Album App by Yuri</title>

        <link href="static/css/bootstrap.min.css" rel="stylesheet">
        <link href="static/css/font-awesome/css/font-awesome.css" rel="stylesheet">
        
        <link href="static/css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="static/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">

        <link href="static/css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

        <link href="static/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
        <link href="static/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

        <link href="static/css/plugins/chartist/chartist.min.css" rel="stylesheet">

        <link href="static/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
        <link href="static/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

        <link href="static/css/animate.css" rel="stylesheet">    
        <link href="static/css/style.css" rel="stylesheet">

        <script src="static/js/scripts.js" type="text/javascript"></script>
        <script src="static/js/ajax_funcoes.js" type="text/javascript"></script>
    </head>
    <body class="pace-done">
        <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <h2 class="text-white">MENU</h2>
                            </span>
                        </div>
                        <div class="logo-element">
                            Ideep
                        </div>
                    </li>
                    <li <?=($page == 'artist') ? 'class="active"' : ''?>>
                        <a href="artist.php" title="Dashboard"><i class="fa fa-male"></i> <span class="nav-label">Artist List</span></a>
                    </li>
                    <li <?=($page == 'album') ? 'class="active"' : ''?>>
                        <a href="album.php" title="Cadastro de pessoas"><i class="fa fa-music"></i> <span class="nav-label">Album List</span></a>
                    </li>
                    <li>
                        <a href="index.php?logout=1" title="Logout"><i class="fa fa-reply"></i> <span class="nav-label">Logout</span></a>
                    </li>               
                </ul>
            </div>
        </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">                   
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                Welcome to Album APP by Yuri
                            </li>
                            <li>
                                <a href="index.php?logout=1">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>