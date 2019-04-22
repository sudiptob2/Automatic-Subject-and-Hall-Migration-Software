<?php
include('../includes/header.php');

?>
<div class='container-fluid'>
<legend style="color:#13c703; font-size:22px; font-weight:bold; padding:5px;">Please fill up the form to proceed...</legend>
<form class="form-horizontal" role="form" action="hall_wise_merit.php" method="POST">
  <fieldset>
  <legend>Select Hall</legend>
<div class="form-group">

  <label class="control-label col-sm-2" for="unit">Hall Name :</label>
  <div class="col-sm-4">
  <select class="form-control" id="select" onchange="document.getElementById('hall').value=this.options[this.selectedIndex].text">
    <option>SHER-E-BANGLA HALL-1 (Male)</option>
    <option>SHER-E-BANGLA HALL-2 (Male)</option>
    <option>M. KERAMAT ALI HALL (Male)</option>
	<option>BANGABANDHU SHEIKH MUJIBUR RAHMAN HALL (Male)</option>
	<option>CPT. MOHIUDDIN JAHANGIR HALL (ANSVM Campus - Male)</option>
	<option>KOBI BEGUM SUFIA KAMAL HALL (Female)</option>
	<option>SHEIKH FAJILATUNNESSA MUJIB HALL (Female)</option>
	<option>SHEIKH FAJILATUNNESSA MUJIB HALL (ANSVM Campus - Female)</option>
  </select>
   <input type="hidden" name="selected_text" id="hall" value="SHER-E-BANGLA HALL-1 (Male)" />
  </div>
</div>

 

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	</fieldset>
  </form>
</div>
<?php
include('../includes/sidenav.php');
include('../includes/footer.php');
?>