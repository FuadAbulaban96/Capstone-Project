<?php include('../includes/admin_header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Booking Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active text-lg">Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Booking DataTable</h3>
                </div>
                <!-- /.card-header -->
              <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Customer name</th>
                          <th>National #</th>
                          <th>License #</th>
                          <th>Customer Phone</th>
                          <th>Pick-up Address</th>
                          <th>Drop-off Address</th>
                          <th>Pick-up Date</th>
                          <th>Drop-off Date</th>
                          <th>Model</th>
                          <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>    
                </table>
              </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
      </div>
  </section> 
  <!-- /.content -->
</div>
<?php include('../includes/admin_footer.php'); ?>