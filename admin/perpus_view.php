

                        <div >
                        <h2 style="text-align: center"> DAFTAR BUKU PERPUSTAKAAN</h2>
                        <a href="index.php?m=admin&p=perpus_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_perpus");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> Kode Buku </th><th> Judul Buku </th><th>Author</th>
                                        <th>ISBN</th><th>Tanggal Terbit</th><th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_perpus ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($perpus=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$perpus->kd_buku?>
                                        </td>
                                        <td>
                                            <?=$perpus->judul_buku?>
                                        </td>
                                        <td>
                                            <?=$perpus->author?>
                                        </td>
										<td>
                                            <?=$perpus->isbn?>
                                        </td>
										<td>
                                            <?=$perpus->tgl_terbit?>
                                        </td>
                                        <td>
            <a href='index.php?m=admin&p=perpus_form&id=<?=$perpus -> kd_buku ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/perpus_action.php?aksi=hapus&id=<?=$perpus -> kd_buku ?>' 
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
Halaman : <a href="?m=admin&p=perpus_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>