<!DOCTYPE html>
<html lang="en">
<head>
  <title>Migration Control Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
	body{
		background-color :#f0ffee;
		background-image: url('../images/circuit.png');
		font-family:times-new-roman;
	}
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	 
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
	 

.sidenav a{
    color:#0b6f02;
}
.dropdown{
position:relative;
display:inline-block;
}
.dropdown-menu{
    display: none;
    position: absolute;
    background-color: #cbfec7;
    min-width: 160px;
	color:black;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-menu a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-menu a:hover {background-color: #97de5c}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #33ff33;
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
#myNavbar #my  li a{
   color:#16dd03;
}
#myNavbar #my  li a:hover{
   color: #bf3611;
   background-color:#16dd03;
}
    #imgg{

   border:2px solid #9ef937;
   background-color : #f0ffee;
}
    footer {
	  background-color: #16dd03;
      padding: 10px;
    }
	legend{
	      border-bottom:1px solid #98fd8e;
	}
  </style>
</head>
<body>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8" id='imgg'>
<center><img class="img-responsive banner" src="../images/Migration Banner.png" alt="banner"/></center>
<nav class="navbar navbar-default">
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
		
	   <ul class="nav navbar-nav">
        <li><a href="../index.php" >Home</a></li>
		<li class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Migration<span class="caret"></span></a>
			<ul class="dropdown-menu" id="my">
				<li><a href="../main/subject_form.php">Subject Migration</a></li>
				<li><a href="../main/hall_form.php">Hall Migration</a></li>
			</ul>
		</li>
		<li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Migration View<span class="caret"></a>
		
			<ul class="dropdown-menu" id="my">
				<li><a href="../migrationView/unit_merit.php">Unit wise</a></li>
				<li><a href="../migrationView/subject_merit.php">Subject Wise</a></li>
				<li><a href="../migrationView/hall_merit.php">Hall Wise</a></li>
			</ul>
		 
		</li>
		<li><a href="../attendance_sheet/" >Attendence Sheet</a></li>
		<li><a href="../main/flag_update.php" >Update flag</a></li>
        <li><a href="../main/seat_data.php">Seat Information</a></li>
      </ul>
    </div>
</div>
</nav>
<div class="row">
	<div class="col-sm-9">