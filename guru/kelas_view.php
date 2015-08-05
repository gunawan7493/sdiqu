

                        <div >
                        <h2 style="text-align: center"> Data Kelas Siswa</h2>
                         <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_kelas");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> Kelas </th><th>Nama Ruangan</th><th>Wali Kelas</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_kelas";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($kelas=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$kelas->kelas?>
                                        </td>
                                        <td>
                                            <?=$kelas->nama_ruang?>
                                        </td>
                                        <td>
                                            <?=$kelas->wali_kelas?>
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
Halaman : <a href="?m=guru&p=kelas_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>