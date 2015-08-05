

                        <div >
                        <h2 style="text-align: center"> Data jadwal Pelajaran</h2>
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

                                $sql="select * from tb_jadwal limit $start, $per_hal";
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
 echo "Page : ";
for($x=1;$x<=$halaman;$x++){
?>
 <a href="?m=guru&p=jadwal_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>