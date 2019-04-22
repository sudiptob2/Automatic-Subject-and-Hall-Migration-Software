<?php
include('../includes/header.php');
include('../database/config.php')
?>
<style>


legend{
font-size:18px;
font-weight:bold;
color:#0f9b02;
}
h4{
font-size:16px;
font-weight:bold;

color:#0f9b02;
}
.btn{
background-color: #cbfec7;
}
.btn:hover{
color:#f0ffee;
background-color:#11b103;
}
</style>
<div class='container-fluid'>
<form class="form-horizontal  text-left" role="form" action="" method="POST" >
<fieldset>
  <legend>Search Student</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="roll">Exam Roll:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="roll" name="roll">
		</div>
		<div class="col-sm-2">
        <button type="submit" class="btn btn-default" name="submit">Search</button>
      </div>
		
	</div>
</fieldset>
</form>
</div>
<?php
if(isset($_POST['submit'])){
    $d=$_POST['roll'];
	$row="";
	foreach($conn->query("select * from posted_data where XROLL='$d'") as $row) {
		if($row['XROLL']!=0)
		{
			echo "<form class='form-horizontal  text-left' role='form' action='' method='POST' ><fieldset><legend>Student Information</legend><div class='col-sm-offset-2'><h4>Unit=".$row['UNIT']."</br></br>Roll=".$row['XROLL']."</br></br>Name=".$row['NAME']."</br></br>Sex=".$row['SEX']."</h4></br></br><div class='checkbox'><label style='margin-left:15px'><input type='checkbox'>I am sure the Student is admitted. </label></div><div class='col-sm-2'><button type='submit' class='btn btn-default' name='ok'>Ok</button></div></div><input type='hidden' name='xroll' value=".$row['XROLL']."></fieldset></form>";
		}
	}
	if(!$row)
	{
	    echo "<h4 class='col-sm-offset-2 col-sm-4' style='color:red;'>Roll not found!!!</h4>";
	}
}
if(isset($_POST['ok']))
{
	$d=$_POST['xroll'];
	$stmt= $conn->prepare("update posted_data set flag=2 where XROLL='$d'");
	$stmt->execute();
}
?>
<?php
include('../includes/sidenav.php');
include('../includes/footer.php');
?>