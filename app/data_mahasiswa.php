
  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomer</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Semester</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                    while($mhs = mysqli_fetch_array($query)){
                        $no++
                     
                    ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['nim']; ?></td>
                    <td><?php echo $mhs['semester']; ?></td>
                    <td>X</td>
                  </tr>
                  <?php }?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
   