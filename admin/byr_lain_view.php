

                        <div >
                        <h2 style="text-align: center"> Data Pembayaran Lain</h2>
                        <a href="index.php?m=admin&p=byr_lain_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_bayaran_lain");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> Pembayaran </th><th>Deskripsi</th><th>Total</th>
                                        <th>Tanggal Awal</th><th>Tanggal Akhir</th><th>Denda</th><th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_bayaran_lain ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($bayaran_lain=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$bayaran_lain->pembayaran?>
                                        </td>
                                        <td>
                                            <?=$bayaran_lain->deskripsi?>
                                        </td>
                                        <td>
                                            <?=$bayaran_lain->total?>
                                        </td>
										<td>
                                            <?=$bayaran_lain->tgl_start?>
                                        </td>
										<td>
                                            <?=$bayaran_lain->tgl_akhir?>
                                        </td>
                                        <td>
                                            <?=$bayaran_lain->denda?>
                                        </td>
                                        <td>
            <a href='index.php?m=admin&p=byr_lain_form&id=<?=$bayaran_lain -> id?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/byr_lain_action.php?aksi=hapus&id=<?=$bayaran_lain -> id ?>' 
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
Halaman : <a href="?m=admin&p=byr_lain_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>