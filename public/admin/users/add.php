<!DOCTYPE html>
<html>
<head>
<?php 
  $this->load->view('admin/asset/styles_add_up');
?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
  //$data['username'] = $username;
  $this->load->view('admin/header/header');
  $this->load->view('admin/left/left');
?>

  
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-10">
          <div class="box">
            <div class="box-header">
            <h3 class="box-title">New User</h3>
            </div>
            <!-- /.box-header -->
            <form method="POST" action="<?php echo base_url();?>users/add_post" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-5 control-label">User Name</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="username" required>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-5 control-label">Password</label>

                    <div class="col-sm-5">
                      <input type="password" class="form-control" name="password" placeholder="at least 5 character" required>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Full name</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="full_name" placeholder="e.g, MD. MAHMUD" required>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Email</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="email" placeholder="e.g, user@domain.com" required>
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
            
            <!-- /.box-body -->
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <input id="_url" type="hidden" value="<?php echo base_url();?>">
  <!-- /.content-wrapper -->
  <?php 
  $this->load->view('admin/footer/footer');
  ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->


<?php 
  $this->load->view('admin/asset/styles_script_add_bellow');
?>


<script type="text/javascript">

  (function() {
    // $.ajax({
    //   type:'POST',
    //   url: '<?php //echo base_url();?>admin/number_of_registration',
    //   success:function (data) {
    //     console.log(data);
    //     $('#re_no').html(data);
    //   }
    // });

  })();


</script>

</body>
</html>
