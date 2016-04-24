<?php 
//$query=mysql_query("select * from user");
$query=mysql_query("select * from request,user,master_city where  user.iduser=request.iduser and master_city.city_id=request.city ");


?>


  <div class="panel-heading">
                           
                        </div>

  <div class="row">
                <div class="col-lg-13">
                     <!--Basic Tabs   -->
                   
                       
                        <div class="panel-body">
                           

                            <div class="tab-content">
                                <div >
                                       <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>Tanggal</th>
                                            
                                            <th>Tujuan</th>
                                            <th>Kota/Kabupaten </th>
                                            <th>Keperluan </th>
                                             <th>Mobil</th>
                                            <th>Mulai </th>
                                             <th>Jam mulai </th>
                                            <th>Selesai </th>
                                            <th>Jam Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        $n=1;
                                        while ($view_query=mysql_fetch_array($query)){ ?>
                                        <tr >
                                            <td><?=$n?></td>
                                            <td><?=$view_query['tgl_request']?></td>
                                           
                                            <td ><?=$view_query['tujuan']?></td>
                                            <td><?=$view_query['city_name']?></td>
                                            <td ><?=$view_query['keperluan']?></td>
                                             <td><?=$view_query['waktu_request']?></td>
                                            <td ><?=$view_query['tgl_start']?></td>
                                            <td ><?=$view_query['jam_start']?></td>
                                            <td ><?=$view_query['tgl_finish']?></td>
                                            <td ><?=$view_query['jam_finish']?></td>
                                        </tr>
                                        <?php $n++; } ?>
                                    </tbody>
                                </table>
                            </div>
                    
                                </div>
                               
                                
                            </div>
                        </div>
                    
                    <!--End Basic Tabs   -->
                </div>
              
            </div>


<div class="panel-body">
                                  
                                    </div>