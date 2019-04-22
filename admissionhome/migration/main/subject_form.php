

<?php
include('../database/config.php');

if(isset($_POST['submit'])){
	if($_POST['flag_val']=="flag 0(for pre migration)"){
		header("Location:subject_migration_0.php");
	}
	else if($_POST['flag_val']=="flag 2(for post migration)")
	{
		header("Location:subject_migration_2.php");
	}
}
?>
<?php

include('../includes/header.php');
?>
<div class="container-fluid">

<form class="form-horizontal  text-left" role="form" action="" method="POST" >
<fieldset>
  <legend>Set Flag</legend>
	<div class="form-group">
		<label class="control-label col-sm-2" for="roll">Flag:</label>
		<div class="col-sm-4">
		  <select class="form-control" id="flag_sel" onchange="document.getElementById('flag_val').value=this.options[this.selectedIndex].text">
			<option>flag 0(for pre migration)</option>
			<option>flag 2(for post migration)</option>
		  </select>
		  <input type="hidden" name="flag_val" id="flag_val" value="flag 0(for pre migration)" />
		  </div>
		<div class="col-sm-2">
			<button type="submit" onclick="move()" class="btn btn-default" name="submit">Submit</button>
        </div>
		
	</div>
</fieldset>
</form>

</div>

<?php

include('../includes/sidenav.php');
include('../includes/footer.php');


?>