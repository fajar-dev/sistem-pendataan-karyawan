<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                  <div class="col-12">
                  <?php echo $this->session->flashdata('msg') ?>
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Data Karyawan</h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="example" class="display" style="min-width: 845px">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Asal Instansi</th>
                                              <th>Tanggal Masuk</th>
                                              <th>Tanggal Keluar</th>
                                              <th>Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                                    <?php
                                                        $no=1;
                                                        foreach($hasil as $data){
                                                    ?>
                                          <tr class="text-dark">
                                              <td><?php echo $no++?></td>
                                              <td><?php echo htmlentities($data->nama_karyawan, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->asal_instansi, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->tgl_masuk, ENT_QUOTES, 'UTF-8');?></td>
                                              <td><?php echo htmlentities($data->tgl_keluar, ENT_QUOTES, 'UTF-8');?></td>
                                              <td>
                                                  <a href="<?php echo base_url() ?>page/nilai/<?php echo $data->id?>" class="btn btn-primary">Nilai</a>
                                                  <a href="<?php echo base_url() ?>page/hapus/<?php echo $data->id?>" class="btn btn-danger btn-del">Hapus</a>
                                                </td>
                                          </tr>
                                                    <?php
                                                        }
                                                    ?>
                                      </tbody>
                                  </table>
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