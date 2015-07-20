

                        <div >
                        <h2 style="text-align: center"> Data Nilai Siswa</h2>
                        <a href="index.php?m=admin&p=nilai_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_nilai");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> No Induk </th><th>ID Mata Pelajaran</th><th>Tugas</th>
                                        <th>UTS</th><th>UAS</th><th>Rata-Rata</th><th>Kelas</th><th>semester</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_nilai";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($nilai=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$nilai->nis?>
                                        </td>
                                        <td>
                                            <?=$nilai->id_mapel?>
                                        </td>
                                        <td>
                                            <?=$nilai->tugas?>
                                        </td>
										<td>
                                            <?=$nilai->uts?>
                                        </td>
										<td>
                                            <?=$nilai->uas?>
                                        </td>
                                        <td>
                                            <?=$nilai->rata?>
                                        </td>
                                        <td>
                                            <?=$nilai->id_kelas?>
                                        </td>
                                        <td>
                                            <?=$nilai->semester?>
                                        </td>
                                        

                                        <td>
            <a href='index.php?m=admin&p=nilai_form&id=<?=$nilai -> id?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/nilai_action.php?aksi=hapus&id=<?=$nilai -> id ?>' 
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
Halaman : <a href="?m=admin&p=nilai_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>