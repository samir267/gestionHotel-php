<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../cssdashboard\css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="../cssdashboard\css/custom.css">
		
		
		<!--google fonts -->
	
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	<!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  

<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../cssdashboard\img/logo.png" class="img-fluid"/><span>Hotelier Panel</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="dashboard.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Chambres</span></a>
                </li>
                <li  class="">
                    <a href="facture.php" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Factures</span></a>
                </li>
            </ul>
		

                
                
                
				
				
           
        </nav>
		
		
		
		
		<!--------page-content---------------->
		
		<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">GO</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 4 new messages</a>
                                    </li>
                                    
                                  
                                </ul>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="../cssdashboard\img/test3.jpg" style="width:40px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="#">
										  <span class="material-icons">
                      person_outline
                      </span>Profile

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
                                                    settings
                                                    </span>Settings</a>
                                    </li>
                                    <li>
                                        <a href="logout.php"><span class="material-icons">
                                                    logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Dashboard</h4>           
            </div>
			
		   </div>
		   
		   
		   
		   <!--------main-content------------->
		   
		   <div class="main-content">
			  <div class="row">
			    
				<div class="col-md-12">
				<div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <h2 class="ml-lg-2">Gerer Chambres</h2>
        </div>
        
      </div>
    </div>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          
          <th>prix</th>
          <th>categorie</th>
          <th>etat</th>
          <th>nb_personne</th>

        </tr>
      </thead>
      <tbody>
        
         
<?php
require '../connection.php';
include 'chambre.php';
$chambre=new chambre(null,"","","","");
$res=$chambre->__selection($conn);

while($row=$res->fetch()){
  ?>
<tr>
          
          <td><?php echo $row["prix"] ?></td>
          <td><?php echo $row["categorie"] ?></td>
          <td><?php if( $row["etat"]==0)echo "libre";
                    else if ($row["etat"]==1)echo "réservé" ?></td>
          <td><?php echo $row["nbr_personne"] ?></td>

          <td>
 
      <a href="#editChambreModal" data-id="<?php echo $row['id'] ?>" class="edit" data-toggle="modal">
			<i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
      
          </td>
        </tr>
<?php
  }

?>

 








         
         
      </tbody>
    </table>
    <div class="clearfix">
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item active"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>


<!-- Edit Modal HTML -->


<div id="editChambreModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
      <form action="updateChambre.php"  method="post">
        
        <div class="modal-header">
          <h4 class="modal-title">Modifier etat chambre</h4>
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Êtes-vous sûr de liberer cette chambre ?</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id" >
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="save">
        </div>
      </form>
    </div>
	</div>
</div>


















				
		   
			  </div>
			 
			 
			 <!---footer---->
			 
			 
		</div>
		
		<footer class="footer">
			    <div class="container-fluid">
				  <div class="footer-in">
                    <p class="mb-0">&copy 2023 - All Rights Reserved.</p>
                </div>
				</div>
			 </footer>
</div>
</div>


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="../cssdashboard\js/jquery-3.3.1.slim.min.js"></script>
   <script src="../cssdashboard\js/popper.min.js"></script>
   <script src="../cssdashboard\js/bootstrap.min.js"></script>
   <script src="../cssdashboard\js/jquery-3.3.1.min.js"></script>
  
  


<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
// Assuming you have jQuery library loaded

$(document).ready(function() {
  // Click event handler for the edit link
  $('a.edit').on('click', function() {
    // Get the value of data-id attribute for the clicked link
    var dataId = $(this).data('id');
    // Send the dataId value to PHP using AJAX
    $.ajax({
      url: 'getChambre.php',
      type: 'Post',
      data: { dataId: dataId },
	    beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click

},
success: function (response) {//once the request successfully process to the server side it will return result here
                response =JSON.parse(response)       
                console.log(response)        
                $("#editChambreModal [name=\"id\"]").val(response);

             
            },
      error: function(xhr, status, error) {
        // Handle any errors that may occur during the AJAX request
        console.error(error);
      }
    });
  });
});
///



</script>
  
  



  </body>
  
  </html>


