<?php
include('../includes/header.php');

?>
<div class='container-fluid'>
<legend style="color:#13c703; font-size:22px; font-weight:bold; padding:5px;">Please fill up the form to proceed...</legend>
<form class="form-horizontal" role="form" action="unit_wise_merit.php" method="POST">
  <fieldset>
  <legend>Unit Selction</legend>
<div class="form-group">

  <label class="control-label col-sm-4" for="unit">Unit :</label>
  <div class="col-sm-6">
  <select class="form-control" id="select" onchange="document.getElementById('unit').value=this.options[this.selectedIndex].text">
    <option>A</option>
    <option>B</option>
    <option>C</option>
  </select>
   <input type="hidden" name="selected_text" id="unit" value="A" />
  </div>
</div>

 <div class="form-group">

  <label class="control-label col-sm-4" for="select">Migration view for:</label>
  <div class="col-sm-6">
  <select class="form-control" id="select" onchange="document.getElementById('flag').value=this.options[this.selectedIndex].text">
    <option>Selected students for admission</option>
    <option>Admitted Students</option>
  </select>
   <input type="hidden" name="flag" id="flag" value="Selected students for admission" />
  </div>
</div> 

    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-6">
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