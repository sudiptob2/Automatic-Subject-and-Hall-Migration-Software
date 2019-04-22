<?php
include('../includes/header.php');
include('../database/config.php');
if(isset($_POST['submit']))
{
    $subject = array("Ag", "fish", "DM","NFS","LMA","DVM","AH");
	$quota = array("merit","FFQ","FWQ","WARDQ","TQ","HDQ","PDQ","BKSP");
	
	for($i=0;$i<7;$i++)
	{
	    for($j=0;$j<8;$j++)
		{
		    $s="update seat_data set ".$quota[$j]."=".$_POST[$subject[$i]."-".$quota[$j]]." where Faculty='".$subject[$i]."'";
			$stmt= $conn->prepare($s);
			$stmt->execute();
			#update seat_data set merit=11 where Faculty='Ag'
        }
	}
	
	
	echo "<h4>Suceesfuuly Inserted!!!</h4>";

}

?>

<div class="container-fluid">
<style>


legend{
font-size:18px;
font-weight:bold;
color:#0f9b02;
}
label{
font-size:14px;

color:#0d8502;
}
.btn{
background-color: #cbfec7;
}
.btn:hover{
color:#f0ffee;
background-color:#11b103;
}
</style>
<form class="form-horizontal  text-left" role="form" action="" method="POST" >
<fieldset>
  <legend>Agriculture</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="Ag-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-merit" name="Ag-merit">
		</div>
		<label class="control-label col-sm-2" for="Ag-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-FFQ" name="Ag-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="Ag-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-TQ" name="Ag-TQ">
		</div>
		<label class="control-label col-sm-2" for="Ag-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-PDQ" name="Ag-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="Ag-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-HDQ" name="Ag-HDQ">
		</div>
		<label class="control-label col-sm-2" for="Ag-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-BKSP" name="Ag-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="Ag-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-WARDQ" name="Ag-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="Ag-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="Ag-FWQ" name="Ag-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
  <legend>Fisheries</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fish-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-merit" name="fish-merit">
		</div>
		<label class="control-label col-sm-2" for="fish-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-FFQ" name="fish-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fish-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-TQ" name="fish-TQ">
		</div>
		<label class="control-label col-sm-2" for="fish-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-PDQ" name="fish-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fish-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-HDQ" name="fish-HDQ">
		</div>
		<label class="control-label col-sm-2" for="fish-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-BKSP" name="fish-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="fish-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-WARDQ" name="fish-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="fish-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="fish-FWQ" name="fish-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
  <legend>NFS</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="NFS-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-merit" name="NFS-merit">
		</div>
		<label class="control-label col-sm-2" for="NFS-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-FFQ" name="NFS-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="NFS-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-TQ" name="NFS-TQ">
		</div>
		<label class="control-label col-sm-2" for="NFS-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-PDQ" name="NFS-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="NFS-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-HDQ" name="NFS-HDQ">
		</div>
		<label class="control-label col-sm-2" for="NFS-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-BKSP" name="NFS-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="NFS-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-WARDQ" name="NFS-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="NFS-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="NFS-FWQ" name="NFS-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
  <legend>DM</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DM-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-merit" name="DM-merit">
		</div>
		<label class="control-label col-sm-2" for="DM-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-FFQ" name="DM-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DM-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-TQ" name="DM-TQ">
		</div>
		<label class="control-label col-sm-2" for="DM-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-PDQ" name="DM-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DM-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-HDQ" name="DM-HDQ">
		</div>
		<label class="control-label col-sm-2" for="DM-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-BKSP" name="DM-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DM-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-WARDQ" name="DM-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="DM-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DM-FWQ" name="DM-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
  <legend>LMA</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="LMA-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-merit" name="LMA-merit">
		</div>
		<label class="control-label col-sm-2" for="LMA-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-FFQ" name="LMA-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="LMA-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-TQ" name="LMA-TQ">
		</div>
		<label class="control-label col-sm-2" for="LMA-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-PDQ" name="LMA-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="LMA-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-HDQ" name="LMA-HDQ">
		</div>
		<label class="control-label col-sm-2" for="LMA-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-BKSP" name="LMA-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="LMA-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-WARDQ" name="LMA-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="LMA-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="LMA-FWQ" name="LMA-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
  <legend>DVM</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DVM-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-merit" name="DVM-merit">
		</div>
		<label class="control-label col-sm-2" for="DVM-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-FFQ" name="DVM-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DVM-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-TQ" name="DVM-TQ">
		</div>
		<label class="control-label col-sm-2" for="DVM-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-PDQ" name="DVM-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DVM-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-HDQ" name="DVM-HDQ">
		</div>
		<label class="control-label col-sm-2" for="DVM-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-BKSP" name="DVM-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="DVM-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-WARDQ" name="DVM-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="DVM-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="DVM-FWQ" name="DVM-FWQ">
		</div>
	</div>

	</fieldset>
	<fieldset>
    <legend>AH</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="AH-merit">Merit:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-merit" name="AH-merit">
		</div>
		<label class="control-label col-sm-2" for="AH-FFQ">FFQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-FFQ" name="AH-FFQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="AH-TQ">TRIBLEQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-TQ" name="AH-TQ">
		</div>
		<label class="control-label col-sm-2" for="AH-PDQ">PDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-PDQ" name="AH-PDQ">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="AH-HDQ">HDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-HDQ" name="AH-HDQ">
		</div>
		<label class="control-label col-sm-2" for="AH-BKSP">BKSPQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-BKSP" name="AH-BKSP">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="AH-WARDQ">WARDQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-WARDQ" name="AH-WARDQ">
		</div>
		<label class="control-label col-sm-2" for="AH-FWQ">FWQ:</label>
		<div class="col-sm-4 ">
			<input type="text" class="form-control" id="AH-FWQ" name="AH-FWQ">
		</div>
	</div>
	
    <div class="form-group">  
		<div class="checkbox">
            <label style="margin-left:15px"><input type="checkbox"> I am sure that I have filled the form correctly.</label>
        </div>
		<div class="container-fluid">
			<h5 style="color:#0b6f02">***Please Note that if you entered any incorrect information total migration system will not work Properly***</h5>
		</div>
      <div class="col-sm-2">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>
	</fieldset>
  </form>
</div>

<?php
include('../includes/sidenav.php');
include('../includes/footer.php');
?>