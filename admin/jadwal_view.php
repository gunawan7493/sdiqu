

                        <div >
                        <h2 style="text-align: center"> Data jadwal Pelajaran</h2>
                        <a href="index.php?m=admin&p=jadwal_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_jadwal");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> Kelas </th><th> ID Guru </th><th>ID Mapel</th><th>Hari</th><th>jam
                                        </th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_jadwal ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($jadwal=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$jadwal->id_kelas?>
                                        </td>
                                        <td>
                                            <?=$jadwal->id_guru?>
                                        </td>
                                        <td>
                                            <?=$jadwal->id_mapel?>
                                        </td>
										<td>
                                            <?=$jadwal->hari?>
                                        </td>
										<td>
                                            <?=$jadwal->jam?>
                                        </td>
                                        <td>
            <a href='index.php?m=admin&p=jadwal_form&id=<?=$jadwal -> id ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/jadwal_action.php?aksi=hapus&id=<?=$jadwal -> id ?>' 
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
Halaman : <a href="?m=admin&p=jadwal_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>