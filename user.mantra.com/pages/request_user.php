<?php
$qkota=mysql_query("SELECT * FROM `master_state`");
$user='1';
?>
	
 <form role='form' id="form" action="pages/proses.php" method="post" style="text-align:left;" >
 
 	<div class="form-group" >
    <label>Tempat Tujuan</label><br>
        	<input name="location" id="optionsRadiosInline1 location" value="1" checked="" type="radio"> <label>Dalam kota</label>  	
 	 		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="location" id="optionsRadiosInline1 location" value="2"  type="radio"> <label>Luar Kota</label> 	 	
 	 	
 	 	<br>
        <div class="row">
        <div class='col-sm-4'>  <input name="tujuan" id="tujuan"  class="form-control" placeholder="Enter text" ></div>
       <div class='col-sm-3'> <select name="state" id="state" class="state" >
            <?php while ($vcity=mysql_fetch_array($qkota)){ ?>
            <option value="<?=$vcity['state_id']?>"><?=$vcity['state_name']?></option>
        <?php } ?>
           </select></div>
        <div class="city" ></div>
        </div>
 	 <label>Keperluan</label>	<input name="keperluan" class="form-control" id="keperluan" placeholder="Enter text" >  
 	</div>
 	 	
 	 	
 	 	

 	 	
 	<label> Jumlah Penumpang</label>
 	<select style="width:100px;" class="form-control" name="jumlahP" id="">
                                                <option value='1'>1 orang</option>
                                                <option  value='2'>2 orang</option>
                                                <option  value='3'>3 orang</option>
                                                <option  value='4'>4 orang</option>
                                                <option  value='5'>5 orang</option>
                                            </select>
                           <table ><tr><td>                
<div class='col-sm-5'>
 	<label>Tanggal Mulai</label> 	
 	 <div class="bfh-datepicker" data-mode="24h" data-name="date-start"></div>
 	</div>
</div>   


<div class='col-sm-5' >
 	<label>Jam Mulai</label> 	
 	                  
                      <div class="bfh-timepicker" data-mode="24h" data-name="time-start"></div>
                   
 </div>
  

  
                                             
<div class='col-sm-5'>
 	<label>Tanggal Selesai</label> 	
 	 <div class="bfh-datepicker" data-mode="24h" data-name="date-finish"></div>
</div> 
                               
                               
<div class='col-sm-5' >
<label>Jam selesai </label>
<div class="bfh-timepicker" data-mode="24h" data-name="time-finish"></div>
                    
  </div> 
 
 

 
  
  	</td></tr>
    <tr><td>
  	
    
    
 	 	
<div class="col-md-6">
    
    <label>Kondisi</label>
    <select class="form-control" name="kondisi" >
    <option value="">----Pilih----</option>
    <option value="drop" >Drop</option>
    <option value="tunggu" > Tunggu</option>
    
    
    </select>
    
    
    
 	                                      
         </div>
        </td></tr></table>
        
                                     
  <div class="form-group" style="text-align:right; ">
  	<input class="btn btn-danger" type="button" data-dismiss="modal" name="cancel" value="Cancel" >
      <input type="hidden" name="request" value="request">
      <input type="hidden" name="iduser" value="<?=base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($user)))));?>">
      
  <input class="btn btn-primary" type="button" id="request-submit"  value="Send" >
  
  
  </div>
 </form>


 	

 