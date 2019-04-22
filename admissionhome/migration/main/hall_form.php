<?php
include('../includes/header.php');

?>
<style>


legend{
font-size:18px;
font-weight:bold;
color:#0f9b02;
}
label{
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
<center><h2 style="color:#11b103;font-weight:bold;">Hall Migration</h2></center>
<legend style="color:#13c703; font-size:22px; font-weight:bold; padding:5px;">Please fill up the form to proceed...</legend>
<form class="form-horizontal" role="form" action="hall_migration.php" method="POST">
  <fieldset>
  <legend>Unit Selction</legend>
<div class="form-group">

  <label class="control-label col-sm-2" for="unit_sel">Unit</label><label class="control-label col-sm-2" for="unit_sel">:</label>
  <div class="col-sm-4">
  <select class="form-control" id="unit_sel" onchange="document.getElementById('unit').value=this.options[this.selectedIndex].text">
    <option>A</option>
    <option>B</option>
    <option>C</option>
  </select>
  <input type="hidden" name="unit" id="unit" value="A" />
  </div>
</div>
   <fieldset>
  <fieldset>
  <legend>Hall Migration</legend>
    <div class="form-group">
      <label class="control-label col-sm-4" for="s1">Sher-E-Bangla Hall-1:</label>
      <div class="col-sm-4 ">
        <input type="text" class="form-control" id="s1" name="s1">
      </div>
    </div>
	</br>
    <div class="form-group">
      <label class="control-label col-sm-4" for="s2">Sher-E-Bangla Hall-2:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="s2" name="s2">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="mk">M.Keramot Ali Hall:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="mk" name="mk">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="bs">Bangabondhu Seikh Mujibur Rahman Hall:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="bs" name="bs">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="ks">Kobi Begum Sufia Kamal Hall:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="ks" name="ks">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="sf">Sheikh Fajilatunnessa Mujib Hall:</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="sf" name="sf">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="sfa">Sheikh Fajilatunnessa Mujib Hall(ANSVM):</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="sfa" name="sfa">
      </div>
    </div>
	</br>
	<div class="form-group">
      <label class="control-label col-sm-4" for="mj">Cpt. Mohiuddin Jahangir Hall (ANSVM):</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="mj" name="mj">
      </div>
    </div>
	</br>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
	</br>
	</fieldset>
  </form>
</div>
<?php
include('../includes/sidenav.php');
include('../includes/footer.php');
?>