<?php
include('../includes/header.php');

?>
<div class='container-fluid'>
<legend style="color:#13c703; font-size:22px; font-weight:bold; padding:5px;">Please fill up the form to proceed...</legend>
<form class="form-horizontal" role="form" action="subject_wise_merit.php" method="POST">
  <fieldset>
  <legend>Subject Selction</legend>
<div class="form-group">

  <label class="control-label col-sm-4" for="unit">Subject :</label>
  <div class="col-sm-6">
  <select class="form-control" id="select" onchange="document.getElementById('subject').value=this.options[this.selectedIndex].text">
    <option>B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]</option>
    <option>B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]</option>
    <option>B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]</option>
	<option>B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]</option>
	<option>B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]</option>
	<option>Doctor of Veterinary Medicine (DVM)</option>
	<option>B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]</option>
	<option>CSE</option>
	<option>BBA</option>
  </select>
   <input type="hidden" name="selected_text" id="subject" value="B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]" />
  </div>
</div>

<div class="form-group">

  <label class="control-label col-sm-4" for="unit">Migration view for:</label>
  <div class="col-sm-6">
  <select class="form-control" id="select" onchange="document.getElementById('flag').value=this.options[this.selectedIndex].text">
    <option>Selected students for admission</option>
    <option>Admitted Students</option>
  </select>
   <input type="hidden" name="flag" id="flag" value="Selected students for admission" />
  </div>
</div> 

    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
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