 <?php
 {
    ?>

                        <div >
                        <h2 style="text-align: center"> Data Siswa</h2>
                        <a href="menu.php?m=admin&p=siswa_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_siswa");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th> No Induk </th><th> Nama Siswa </th><th>Lahir</th><th>Tanggal</th><th>Jenis Kelamin</th><th>Alamat</th>
                                        <th>Nama Ayah</th><th>Nama Ibu</th><th>Kelas</th><th>Foto</th><th>Aksi</th></tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_siswa ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($siswa=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$siswa->nis?>
                                        </td>
                                        <td>
                                            <?=$siswa->nama?>
                                        </td>
                                        <td>
                                            <?=$siswa->lahir?>
                                        </td>
										<td>
                                            <?=$siswa->tgl?>
                                        </td>
                                        <td>
                                            <?=$siswa->jk?>
                                        </td>
                                        <td>
                                            <?=$siswa->alamat?>
                                        </td>
										<td>
                                            <?=$siswa->nm_ayah?>
                                        </td>
                                        <td>
                                            <?=$siswa->nm_ibu?>
                                        </td>
                                        <td>
                                            <?=$siswa->kelas?>
                                        </td>
                                        <td>
                                           <?= "<img src='./admin/gambar/".$siswa->foto."' width='100px' height='100px'/>" ?>
                                        </td>
                                        <td>
            <a href='menu.php?m=admin&p=siswa_form&id=<?=$siswa -> id ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/siswa_action.php?aksi=hapus&id=<?=$siswa -> id ?>' 
                onclick="return confirm('Yakin data akan dihapus?') ";
                 class="btn btn-danger"><i class='glyphicon glyphicon-remove' ></i></a>
                                            </td>
                                    </tr>
       <?php
	$no++;
	}
                        ?>
     <!-------------------------------->                                 
                                    
                                </tbody>
                            </table>
    </div>
<?php } ?>
<?php 
 echo "Jumlah record :".$jum."<br/>";
for($x=1;$x<=$halaman;$x++){
?>
<div class="pagination-sm">Page : <a href="?m=admin&p=siswa_view&page=<?php echo $x ?>"><?php echo $x ?></a></div>
<?php
}
 
?>