 <?php
 {
    ?>

                        <div >
                        <h2 style="text-align: center"> Data Guru</h2>
                        <a href="menu.php?m=admin&p=guru_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_guru");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th> Nama </th><th> NIP </th><th>Lahir</th><th>Tanggal</th><th>Alamat</th>
                                        <th>Jenis Kelamin</th><th>Status</th><th>Foto</th><th>Aksi</th></tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_guru ";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($guru=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$guru->nama?>
                                        </td>
                                        <td>
                                            <?=$guru->nip?>
                                        </td>
                                        <td>
                                            <?=$guru->lahir?>
                                        </td>
										<td>
                                            <?=$guru->tgl?>
                                        </td>
                                        <td>
                                            <?=$guru->alamat?>
                                        </td>
                                        <td>
                                            <?=$guru->jk?>
                                        </td>
										<td>
                                            <?=$guru->status?>
                                        </td>
                                        <td>
                                            <?= "<img src='./admin/gambar/".$guru->foto."' width='50px' height='50px'/>" ?>
                                        </td>
                                        <td>
            <a href='menu.php?m=admin&p=guru_form&id=<?=$guru -> id ?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/guru_action.php?aksi=hapus&id=<?=$guru -> id ?>' 
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
Halaman : <a href="?m=admin&p=guru_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>