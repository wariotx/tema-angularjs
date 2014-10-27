<!doctype html>
<html lang="es" ng-app="juegoApp">
<head>
    <title>Game | Administration</title>
    <!--css-->
    <?php /*<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>*/ ?>

    <!--js-->
    <?php /*<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> */ ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.js"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js"></script>-->
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.min.js"></script>
    <script src="//angular-ui.github.io/ui-router/release/angular-ui-router.min.js"></script>
    <!--angular-->
    <?php /*<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.js"></script>*/ ?>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular-route.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular-sanitize.min.js"></script>

    <!--angular resources-->
    <script src="assets/js/controllers/loginController.js"></script>
    <script src="assets/js/controllers/flashController.js"></script>
    <script src="assets/js/controllers/menuController.js"></script>
    <script src="assets/js/services/authService.js"></script>
    <script src="assets/js/services/flashService.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- load our application -->
    <script>
        angular.module("juegoApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
    </script>
    <style>
        a {
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .container-small {
                width: 300px;
            }

            .container-large {
                width: 970px;
            }
        }

        @media (min-width: 992px) {
            .container-small {
                width: 500px;
            }

            .container-large {
                width: 1170px;
            }
        }

        @media (min-width: 1200px) {
            .container-small {
                width: 700px;
            }

            .container-large {
                width: 1500px;
            }

            .container-small, .container-large {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
<!-- NAVIGATION -->
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" ng-controller="MenuController">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#/">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown" on-toggle="toggled(open)">
                <a href="#" class="dropdown-toggle"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>

                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>

                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>

                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>

                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>

                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown" on-toggle="toggled(open)">
                <a href="#" class="dropdown-toggle"><i class="fa fa-bell"></i> <b
                        class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown" on-toggle="toggled(open)">
                <a href="#" class="dropdown-toggle"><i class="fa fa-user"></i> John Smith <b
                        class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href ng-click="logout()"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-table"></i> Tables</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-edit"></i> Forms</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                </li>
                <li>
                    <a href ng-click="status.open = !status.open">
                        <i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i>
                    </a>
                    <ul id="demo" collapse="!status.open">
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                        <li>
                            <a href="#">Dropdown Item</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-12" ng-controller="FlashController">
                    <alert ng-repeat="alert in alerts" type="{{alert.type}}" close="closeAlert($index)">
                        {{alert.msg}}
                    </alert>
                    <!--            <button class='btn btn-default' ng-click="addAlert()">Add Alert</button>-->
                </div>
                <div class="row">
                    <div id="view" class="col-lg-12" ui-view></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>