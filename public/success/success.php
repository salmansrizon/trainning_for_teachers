<!DOCTYPE html>
<html>
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
                <div style="padding:50px;">
                    <h1 style="text-align:center; color:#4286f4;"><?php echo $status; ?></h1>
                </div>
                <a href="<?php echo $exam_link; ?>"><?php echo $exam_name; ?> --> </a> 
            </div>
        </div>

        <input id="_url" type="hidden" value="<?php echo base_url();?>">

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

        <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/lib/js/success.js"></script> -->

</body>
</html>