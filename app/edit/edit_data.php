<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
           <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <form method='get' action='update/update_data.php' >
                  <div class="row">
                    <div class="col-sm-6"> 
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name='nama' placeholder="nama" value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" name='id' placeholder="nama" value="<?php echo $view['id'];?>" hidden>
                    </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nim</label>
                        <input type="text" class="form-control" name='nim' placeholder="nim" value="<?php echo $view['nim'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <select class="custom-select" id="inputGroupSelect01" name="semester">
                            <option value="<?php echo $view['semester'];?>"selected><?php echo $view['semester'];?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                      </div>
                    </div>
                 <button type="submit" class="btn btn-lg btn-info">Simpan</button>
                </form>
                
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>    