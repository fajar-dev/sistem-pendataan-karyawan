<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Tambah Karyawan</h4>
                      </div>
                      <div class="card-body">
                          <div class="basic-form">
                              <form action="<?php echo base_url() ?>page/tambah_proses" method="post">
                                <div class="form-group">
                                  <label>Nama Karyawan</label>
                                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                  <label>Asal Instansi</label>
                                  <input type="text" class="form-control" name="asal" placeholder="Asal">
                                </div>
                                <div class="form-group">
                                  <label>Tanggal Masuk</label>
                                  <input type="date" class="form-control" name="masuk" >
                                </div>
                                <div class="form-group">
                                  <label>Tanggal Keluar</label>
                                  <input type="date" class="form-control" name="keluar">
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-4 btn-lg">Submit</button>
                              </form>
                          </div>
                      </div>
                  </div>
                  </div>
              </div>  
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        