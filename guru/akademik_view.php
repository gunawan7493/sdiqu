

                        <div >
                        <h2 style="text-align: center"> Data Akademik</h2>
                        <?php

                            //pagging
                            $per_hal=15;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_akademik");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th> Nama </th><th> Tanggal </th><th>Kegiatan</th><th>Tanggal Akhir</th></tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_akademik limit $start,$per_hal";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($akademik=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$akademik->nama?>
                                        </td>
                                        <td>
                                            <?=$akademik->tgl?>
                                        </td>
                                        <td>
                                            <?=$akademik->kegiatan?>
                                        </td>
										<td>
                                            <?=$akademik->tgl_akhir?>
                                        </td>
										
                                        
                                    </tr>
       <?php
	$no++;
	}
                        ?>




                                </tbody>
                            </table>
    </div>


<?php 
 echo "Jumlah record :".$jum."<br/>";
for($x=1;$x<=$halaman;$x++){
?>
Halaman : <a href="?m=guru&p=akademik_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>