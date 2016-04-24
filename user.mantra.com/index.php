<?php
session_start();
include "connect.php";
$_SESSION['user_status']='User';
$page=$_GET['p'];?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$_SESSION['user_status']?> Dashboad </title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
    <link href="assets/css/form.css" rel="stylesheet" />
     <link href="assets/form-helpers/css/bootstrap-formhelpers.css" rel="stylesheet" />
    



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <div class="col-lg-5">
            <h1 style="color:#fff; font-weight:bold;">Management Transportation</h1>
</div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
              


          

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
       <?php include "pages/menu_user.php" ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
       <div id="page-wrapper">
          
            <div class="row">
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboad user</h1>
                </div>
                 <!--end page header-->
            </div>
          
            

            <div class="row">
                <div class="col-lg-12">
                     <!--Basic Tabs   -->
                   
                       
                    

                            <div class="tab-content">
                                <div >
                                  <?php 
    
                                        if ($page=='request'){
        
                                        include "pages/request_user.php";
                                    
                                        }
                                        else if ($page=='history'){ include "pages/history.php";}
                                    
                                    
                                    ?>
                                    
                                    
                                    
                    
                                </div>
                               
                                
                            </div>
                        </div>
                    
                    <!--End Basic Tabs   -->
                </div>
              
            </div>
            
           
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script src="assets/form-helpers/js/bootstrap-formhelpers.js"></script>
   
    
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    
    <script>
    $(document).ready(function() {
       
     $(".state").change(function(){
     var vls = $(this).val();
         $(".city").load("pages/city.php?id="+vls);
				});
				
			
			//================= validation ==================//
			
			$("#request-submit").click(function(){
        		var erorr="";
				if ($('#tujuan').val()==''){
				$('#tujuan').css('border','solid 1px red');
				  erorr="error";
				}
				
			
			if ($('#keperluan').val()==''){
        	$('#keperluan').css('border','solid 1px red');
			 erorr="error";
			}
			if ($('#tujuan').val()==''){
        	$('#tujuan').css('border','solid 1px red');
			 erorr="error";
			}
			if ($('#kondisi').val()==''){
        	$('#kondisi').css('border','solid 1px red');
			 erorr="error";
			}
			
			if (erorr==''){
				//$("#request-submit").val(erorr);
				$("#form").submit();
			
			//$('#kondisi').css('border','solid 1px red');
			
		}
			
        	});
			
			
			
			
	   
  
        	
        	
        	    	   
            
    });
    
   
    
    
    </script>

</body>

</html>
