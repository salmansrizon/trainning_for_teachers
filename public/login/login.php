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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto:300" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>

    <body>




        <div class="container" style="width:400px; height:500px; text-align:center; padding-top:100px;;">
            <div class="card" >
                <form method="post" id="login_form" action="<?php echo base_url();?>login/check" style="padding:30px;">
                    <div style="padding:50px;">
                        <h1 style="text-align:center; color:#4286f4;">Log In</h1>
                    </div>

                    <div class="md-form">
                      
                        <br>
                        <input type="text" id="username" name="username" class="form-control">
                        <label for="form2">Your email</label>
                    </div>

                    <div class="md-form">
                       
                        <br>
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="form4">Your password</label>
                    </div>
                    <br>
                    <div style="text-align:center;">
                        <input class="btn btn-primary"  name="submit" id="submit" type="submit" style="text-align:center; margin:none ! importent; border:none ! importent ; font-size:1em ;">
                    </div>

                </form>
            </div>
        </div>

        <!-- /Start your project here-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/tether.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/mdb.min.js"></script>
        <!-- custom js -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/datepicker.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/lib/js/login.js"></script>
    </body>

</html>
