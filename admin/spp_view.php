

                        <div >
                        <h2 style="text-align: center"> Data Pembayaran Bulanan</h2>
                        <a href="menu.php?m=admin&p=spp_form" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
                        <?php

                            //pagging
                            $per_hal=10;
                            $jumlah_record=mysql_query("SELECT COUNT(*) from tb_bulanan");
                            $jum=mysql_result($jumlah_record, 0);
                            $halaman=ceil($jum / $per_hal);
                            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                            $start = ($page - 1) * $per_hal;
                            
                            //
                        ?>
                        <table class="table table-hover table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th><th> No Induk </th><th>Kelas</th>
                                        <th>Bulan</th><th>SPP</th><th>Boarding</th>
                                        <th>Transport</th><th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <!---->
                                 <?php

                                $sql="select * from tb_bulanan limit $start,$per_hal";
                            $hasil=mysql_query($sql) or die(mysql_error(). "<br>".$sql);   
                       $no=1;
                        while($bulanan=mysql_fetch_object($hasil)){
                      ?>
                                    <tr>
                                        <td> <?= $no ?></td>
										
                                        <td>
                                            <?=$bulanan->no_induk?>
                                        </td>
                                        <td>
                                            <?=$bulanan->kelas?>
                                        </td>
                                        <td>
                                            <?=$bulanan->bulan?>
                                        </td>
										<td>
                                            <?=$bulanan->spp?>
                                        </td>
										<td>
                                            <?=$bulanan->boarding?>
                                        </td>
                                        <td>
                                            <?=$bulanan->transport?>
                                        </td>
                                        
                                        <td>
            <a href='menu.php?m=admin&p=spp_form&id=<?=$bulanan -> id?>' class="btn btn-info"><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;
            <a href='admin/spp_action.php?aksi=hapus&id=<?=$bulanan -> id ?>' 
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
 echo "Halaman : ";
for($x=1;$x<=$halaman;$x++){
?>
<a href="?m=admin&p=spp_view&page=<?php echo $x ?>"><?php echo $x ?></a>
<?php
}
 
?>