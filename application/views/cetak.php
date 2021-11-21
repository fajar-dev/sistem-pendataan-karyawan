<style>
table, th, td {
  border:1px solid black;
}
</style>
<center><h1>Data Nilai Karyawan <br></h1><hr><br></center>
                                            <table style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Nilai Komunikasi</th>
                                                        <th>Nilai Tanggung Jawab</th>
                                                        <th>Nilai Kesopanan</th>
                                                        <th>Nilai Kedisiplinan</th>
                                                        <th>nilai Kerapian</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                            $no=1;
                                                            foreach($hasil as $data){
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $no++?></td>
                                                        <td><?php echo htmlentities($data->nama_karyawan, ENT_QUOTES, 'UTF-8');?></td>
                                                        <td><?php echo $data->nilai_komunikasi;?></td>
                                                        <td><?php echo $data->nilai_tanggung_jawab;?></td>
                                                        <td><?php echo $data->nilai_kesopanan;?></td>
                                                        <td><?php echo $data->nilai_kedisiplinan;?></td>
                                                        <td><?php echo $data->nilai_kerapian;?></td>
                                                    </tr>
                                                        <?php } ?>
                                                </tbody>
                                            </table>
<script type="text/javascript">
window.print();
</script>
