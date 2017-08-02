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
        Registration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Registration</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <h3 class="box-title">Registered Trainer Into</h3>
            </div>
            <!-- /.box-header -->
            <form method="POST" action="" class="form-horizontal">
              <input type="hidden" name="id" value="<?php echo $info->id;?>">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-5 control-label">Course Name</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->course_name;?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Batch</label>
                  
                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->batch_name.' ('.$info->batch_start.' - '.$info->batch_end.')';?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Full Name</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->full_name;?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-5 control-label">Contact</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->contact_number;?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Email</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->email;?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-5 control-label">Current Profession</label>

                    <div class="col-sm-5">
                      <input type="text" class="form-control" value="<?php echo $info->prefession;?>" readonly>
                    </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Educational Information</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                         <table id="reg_data" class="table table-bordered table-striped display nowrap">
                            <thead>
                                <th width="20%">Exam Name</th>
                                <th>Institute</th>
                                <th width="20%">Passing Year</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td>SSC</td>
                                <td><?php echo $info->school;?></td>
                                <td><?php echo $info->sch_pass_date;?></td>
                              </tr>
                              <tr>
                                <td>HSC</td>
                                <td><?php echo $info->college;?></td>
                                <td><?php echo $info->col_pass_date;?></td>
                              </tr>
                              <tr>
                                <td>Bachelor/ Equivalent</td>
                                <td><?php echo $info->university;?></td>
                                <td><?php echo $info->uni_pass_date;?></td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                      
                      <!-- /.box-body -->
                    </div>
                  </div>
                </div>

                <hr>

                <div class="row">
                  <div class="col-xs-6" style="height: 300px;">
                    <iframe src="<?php echo $info->gc_copy;?>" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
                  </div>
                  <div class="col-xs-6">
                    <iframe src="<?php echo $info->similer_course;?>" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                <!-- <button type="submit" class="btn btn-info pull-right">Submit</button> -->
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

 function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }

</script>

</body>
</html>
