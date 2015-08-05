

                        <div >
                        <h2 style="text-align: center"> Daftar Data Kurikulum</h2>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_kurikulum");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th><th> ID </th><th> Kelas </th><th>Kurikulum</th><th>ID Mapel</th></tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_kurikulum limit $start,$per_hal";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($kurikulum=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										<td>
                                            <?=$kurikulum->id_kurikulum?>
                                        </td>
                                        <td>
                                            <?=$kurikulum->kelas?>
                                        </td>
                                        <td>
                                            <?=$kurikulum->kurikulum?>
                                        </td>
										<td>
                                            <?=$kurikulum->id_mapel?>
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
 echo "Halaman : ";
for($x=1;$x<=$halaman;$x++){
?>
<a href="?m=admin&p=kurikulum_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>