 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                  <div class="col-12">
                  <?php echo $this->session->flashdata('msg') ?>
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Nilai Karyawan</h4>
                              <a href="" class="btn btn-warning text-white"  data-toggle="modal" data-target="#exampleModal">Edit Nilai</a>
                          </div>
                          <div class="card-body text-dark">
                            <p>
                              Nama: <?php echo $hasil->nama_karyawan;?><br>
                              Asal Instansi: <?php echo $hasil->asal_instansi;?><br>
                            </p>
                            <div class="table-responsive mt-4">
                              <table class="table table-bordered table-responsive-sm text-dark">
                                  <thead>
                                      <tr>
                                          <th>Nilai Komunikasi</th>
                                          <th>Nilai Tanggung Jawab</th>
                                          <th>Nilai Kesopanan</th>
                                          <th>Nilai Kedisiplinan</th>
                                          <th>nilai Kerapian</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><?php echo $hasil->nilai_komunikasi;?></td>
                                          <td><?php echo $hasil->nilai_tanggung_jawab;?></td>
                                          <td><?php echo $hasil->nilai_kesopanan;?></td>
                                          <td><?php echo $hasil->nilai_kedisiplinan;?></td>
                                          <td><?php echo $hasil->nilai_kerapian;?></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>  
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nilai Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="basic-form">
                  <form action="<?php echo base_url() ?>page/update_nilai" method="post">
                    <input type="hidden" name="id" value="<?php echo $hasil->id;?>">
                    <div class="form-group">
                      <label>Nilai Komunikasi</label>
                      <input type="number" class="form-control" name="komunikasi" value="<?php echo $hasil->nilai_komunikasi;?>">
                    </div>
                    <div class="form-group">
                      <label>Nilai Tanggung Jawab</label>
                      <input type="number" class="form-control" name="tanggung_jawab" value="<?php echo $hasil->nilai_tanggung_jawab;?>">
                    </div>
                    <div class="form-group">
                      <label>Nilai Kesopanan</label>
                      <input type="number" class="form-control" name="kesopanan" value="<?php echo $hasil->nilai_kesopanan;?>">
                    </div>
                    <div class="form-group">
                      <label>Nilai Kedisiplinan</label>
                      <input type="number" class="form-control" name="kedisiplinan" value="<?php echo $hasil->nilai_kedisiplinan;?>">
                    </div>
                    <div class="form-group">
                      <label>Nilai Kerapian</label>
                      <input type="number" class="form-control" name="kerapian" value="<?php echo $hasil->nilai_kerapian;?>">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->