

<!DOCTYPE html>
<html lang="en">

<head>

<script type="text/javascript">
function validateform()
{
if(document.test.name.value=="")
{
	alert("plese enter the hotel name")
	document.test.name.focus();
return false;
}

if(document.test.address.value=="")
{
	alert("plese enter the hotel Address")
	document.test.address.focus();
return false;
}

if(document.test.city.value=="")
{
	alert("plese enter the hotel location/city")
	
	document.test.city.focus();
return false;
}


} 
</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CYLON HOTEL GUIDE</title>
<?php
   
    {{  html::style('css/bootstrap.min.css')}}

    
    
    <style>
    body {
        padding-top: 0px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>



</head>

<body >
<div >
<img src="images/hotel logo.jpg"  width="775" height="81" alt="" id="logo"/>
</div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse " role="navigation"  >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CYLON HOTEL GUIDE</a>
				 
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav"">
				<li class="line"> <img src="images/spacer_m2.gif"  height="45"  id="slogan"/></li>
                    <li>
                        <a href="home.html">HOME PAGE</a>
                    </li>
					 
                                                 
					 <li class="line"> <img src="images/spacer_m2.gif"  height="45"  id="slogan"/></li>
					<li>
                        <a href="#">ADD HOTELS</a>
                    </li>
					<li class="line"> <img src="images/spacer_m2.gif"  height="45"  id="slogan"/></li>
                    <li>
                        <a href="#">LOGIN</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
              <!-- Page Content start -->
			<center>
					<form action="insert.php" method="post" name="test"onsubmit="return validateform();">
			    <div class="form-group"> 
				
			 <!--  <label for="inputname" class="control-label col-xs-2">Your Name   :</label> -->
				
					<input type="text" name ="name" class="form-control" style="width:50%" placeholder="Enter Hotel Name"/> 
			  
					
				</div>
			      <div class="form-group"> 
				
			  <!-- label for="inputbirthday" class="control-label col-xs-2">Birth Day  :</label> -->
					
					<input type="text" name ="address" class="form-control" style="width:50%"placeholder="Enter Hotel Address" /> 
			  
					
				</div>
				  <div class="form-group"> 
				  <!-- <label for="inputadress" class="control-label col-xs-2">Adress :</label> -->
					
					<input type="text" name ="city" class="form-control" style="width:50%"   placeholder="Enter Hotel Location/City"                                 /> 
			  
					
				</div>
				
			
				
				
			
				<div class="form-group"> 
				<button type="submit" class="btn btn-primary" class="form-control" >Register</button>
				</div>
				</form>
			</center>  
			  
			  
			  
			  
			 <!-- Page Content end --> 
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
