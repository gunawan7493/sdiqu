

                        <div >
                        <h2 style="text-align: center"> Data Mata Pelajaran</h2>
                        <a href="menu.php?m=admin&p=mapel_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_mapel");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> ID Mata Pelajaran </th><th> Mata Pelajaran </th><th> Kategori </th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_mapel ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($mapel=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$mapel->id_mapel?>
                                        </td>
                                        <td>
                                            <?=$mapel->mata_pelajaran?>
                                        </td>
                                        <td>
                                            <?=$mapel->kategori?>
                                        </td>
										
                                        <td>
            <a href='menu.php?m=admin&p=mapel_form&id=<?=$mapel -> id_mapel ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/mapel_action.php?aksi=hapus&id=<?=$mapel -> id_mapel ?>' 
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
Halaman : <a href="?m=admin&p=mapel_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>