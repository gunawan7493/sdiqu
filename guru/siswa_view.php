 <?php
 {
    ?>

                        <div >
                        <h2 style="text-align: center"> Data Siswa</h2>
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
                                        <th>Nama Ayah</th><th>Nama Ibu</th><th>Kelas</th><th>Foto</th></tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_siswa limit $start,$per_hal ";
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
 echo "Page : ";
for($x=1;$x<=$halaman;$x++){
?>
    <button class="btn btn-mini"><a href="?m=guru&p=siswa_view&page=<?php echo $x ?>"><?php echo $x ?></a></button></div>
<?php
}
 
?>