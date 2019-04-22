<!DOCTYPE html>
<html lang="en">
<head>
  <title>Migration Control Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
	body{
		background-color :#f0ffee;
		background-image: url('circuit.png');
	}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  max-height:60px;
    }
	h5{
	color:Black; 
	}
    .sidenav {
      padding-top: 20px;
      background-color: #64fc56;
      width:auto;
	  height:auto;
	  padding-bottom:20px;
    }
	/* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 200px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	/* On small screens, set height to 'auto' for sidenav and grid */
 
	.navbar-default{
		background-color:#16dd03;
		
	}
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	  background-color : Silver;
    }
     .banner{
		width:auto;
		height:auto;
		max-height:200px;
	 }
	 
#myNavbar li a{
    color: #f0ffee;
	font-weight:bold;
    
}

/* Change the link color on hover */
#myNavbar li a:hover {
    color: #bf3611;
	background-color: #98fd8e;
    
	
}
.sidenav a{
    color:#0b6f02;
}


.dropdown {
    position: relative;
    display: block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #cbfec7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #97de5c}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .d {
    background-color: #3e8e41;
}
#myNavbar #my a{
    color:#13c703;
	text-decoration: none;
}
#myNavbar #my a:hover {
    color: #bf3611;
	background-color: #33ff33;
    
}
    #imgg{

   border:2px solid #9ef937;
   background-color : #f0ffee;
}
    footer {
	  background-color: #16dd03;
      padding: 10px;
    }
  </style>
</head>
<body>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8" id='imgg'>
<center><img class="img-responsive banner" src="../images/Migration Banner.png" alt="banner"/></center>
<center>
<nav class="navbar navbar-default navbar-fixed text-left">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#" >Home</a></li>
		<li class="dropdown d" ><a href="#" >Migration</a>
			<div class="dropdown-content" id="my">
				<a href="#">Subject Migration</a>
				<a href="#">Hall Migration</a>
			</div>
		</li>
		<li class="dropdown d" ><a href="#" >Migration View</a>
		
			<div class="dropdown-content" id="my">
				<a href="#">Unit wise</a>
				<a href="#">Subject Wise</a>
				<a href="#">Hall Wise</a>
			</div>
		 
		</li>
		<li><a href="#" >Attendence Sheet</a></li>
		<li><a href="#" >About us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
</nav>
</center>

<div class="row">
	<div class="col-sm-9">

	</div>
	<div class="col-sm-3">
		<div class="container sidenav">
			<div class="container-fluid" style="border:2px inset #0f9b02; background-color:#cbfec7">
				<h4 style="text-decoration: underline;">Important Links</h4>
				<h5><a href="#" >PSTU Home</a></h5>
				<h5><a href="#" >Admission Home</a></h5>
				<h5><a href="#" >Migration Home</a></h5>
				<h5><a href="#" >Attendence Sheet</a></h5>
				<h5><a href="#" >Migration</a></h5>
				<h5><a href="#" >Migration View</a></h5>
			</div>
		<br>
			<div class="container-fluid" style="border:2px inset #0f9b02; background-color:#cbfec7">
				<h4 style="text-decoration: underline;">Quick Links</h4>
				<h5><a href="#" >PSTU Hompage</a></h5>
				<h5><a href="#" >Admission Homepage</a></h5>
				<h5><a href="#" >psdksjdn</a></h5>
				<h5><a href="#" >Attendence Sheet</a></h5>
			</div>
		
		<br>
			<div class="container-fluid" style="border:2px inset #0f9b02; background-color:#cbfec7">
				<h4 style="text-decoration: underline;">Quick Links</h4>
				<h5><a href="#" >PSTU Hompage</a></h5>
				<h5><a href="#" >Admission Homepage</a></h5>
				<h5><a href="#" >psdksjdn</a></h5>
				<h5><a href="#" >Attendence Sheet</a></h5>
			</div>
			
		</div>
	
	</div>
</div>
<footer class="container-fluid text-center">
  <p><strong>Powered By - Faculty of Computer Science & Engineering and Developed by Animesh,Sudipto,Forhad</strong></p>
</footer>
</div>
<div class="col-sm-2">
</div>
</div>
</body>
</html>