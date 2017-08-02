<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ToT | Registration </title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url();?>assets/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/datepicker.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/DataTables/datatables.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:300" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
        

    </head>

    <body>

        <!-- Start your project here-->
        <!--Navbar-->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark bg-primary">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand "href="#" style="float:left !importent;">
                    <strong>Training For Trainers</strong>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="nav navbar-nav mr-auto navbar-right">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#schedule">Course schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reg">Registration</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>login/logout">Log Out</a>
                        </li>
                    </ul>
                </div>

        </nav>
        <div class="container" style="margin-top: 100px;" >
            
            <table id="reg_data" class="display" cellpadding="1" cellspacing="1" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Course</th>
                        <th>Batch Schedule</th>
                        <th>Full Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Prefession</th>
                        <th>University</th>
                        <th>Passing date</th>
                        <th>College</th>
                        <th>Passing date</th>
                        <th>School</th>
                        <th>Passing date</th>
                        <th>CV Link</th>
                    </tr>
                </thead>
            </table>

        </div>
        <!-- intro starts-->

        <input id="_url" type="hidden" value="<?php echo base_url();?>">

        <!-- /Start your project here-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <!-- <script type="text/javascript" src="<?php echo base_url();?>../assets/js/jquery-3.1.1.min.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        

        
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/tether.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>
        <!-- custom js -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/DataTables/datatables.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/datepicker.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/lib/js/admin.js"></script>
    </body>

</html>
