<!DOCTYPE html>
<html>
<head>
<?php 
  $this->load->view('admin/asset/styles_add_up');
?>

<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">

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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url();?>users/add" class="btn btn-info pull-right"><i class="fa fa-user"></i> Add User</a>
              <h3 class="box-title">Users List</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                 <table id="reg_data" class="table table-bordered table-striped display nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>password</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($list as $value) {
                        echo "<tr>";
                        echo "<td>".$value['id']."</td>";
                        echo "<td>".$value['user_name']."</td>";
                        echo "<td>".$value['password']."</td>";
                        echo "<td>".$value['full_name']."</td>";
                        echo "<td>".$value['email']."</td>";
                        echo "<td><a href='". base_url() ."users/edit/". $value["id"]."' class='btn btn-success'><span class='fa fa-pencil-square-o'> Edit</span></a> <a href='#' class='btn btn-danger' onclick='return removeItem(". $value["id"].");'><span class='fa fa-trash-o'> Delete</span></a></td>";
                        echo "</tr>";
                       }
                       
                    ?>
                    </tbody>
                  </table>
              </div>
            
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

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>


<script type="text/javascript">

  (function() {
    // $.ajax({
    //   type:'POST',
    //   url: '<?php //echo base_url();?>admin/number_of_new_app',
    //   success:function (data) {
    //     console.log(data);
    //     $('#new_appli').html(data);
    //   }
    // });

    $('#reg_data').DataTable( {
        "processing": true,
        "serverSide": true        
    });

  })();

  function removeItem(id) {
    var r = confirm("Do you want Delete this User Info ?");
    if (r == true) {
      window.location="<?php echo base_url();?>users/delete/" + id;
      return false;
    }
  }

</script>

</body>
</html>
