

                        <div >
                        <h2 style="text-align: center"> Data Absensi</h2>
                        <a href="index.php?m=admin&p=absen_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_absen");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th> NIS </th><th> Sakit </th><th>Ijin</th><th>Alpa</th><th>Keterangan</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_absen ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($absen=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$absen->nis?>
                                        </td>
                                        <td>
                                            <?=$absen->sakit?>
                                        </td>
                                        <td>
                                            <?=$absen->ijin?>
                                        </td>
										<td>
                                            <?=$absen->alpa?>
                                        </td>
										<td>
                                            <?=$absen->keterangan?>
                                        </td>
                                        <td>
            <a href='index.php?m=admin&p=absen_form&id=<?=$absen -> idabsen ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/absen_action.php?aksi=hapus&id=<?=$absen -> idabsen ?>' 
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
<?php 
 echo "Jumlah record :".$jum."<br/>";
for($x=1;$x<=$halaman;$x++){
?>
Halaman : <a href="?m=admin&p=absen_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>