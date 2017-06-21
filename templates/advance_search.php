<?php 
if(isset($_GET['tab-value']) && $_GET['tab-value']!=''){
  $tabval = $_GET['tab-value'];
}
  if($tabval == 1){
    $addClass2="";
    $addClass3="";
    $addClass1="active ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active";
    
  }elseif($tabval == 2){
    $addClass1="";
    $addClass3="";
    $addClass2="active ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active";
    
  }elseif($tabval == 3){
    $addClass1="";
    $addClass2="";
    $addClass3="active ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active";
    
  }else{
    $addClass2="";
    $addClass3="";
    $addClass1="active ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active";
    
  }


?>


<div class="container">
<div class="rets-search-tab" id="tabs">
<ul class="nav nav-tabs">
  <li class="<?php echo $addClass1;?> tab-click"><a href="javascript:void(0);" data-tab="tabs-1">Advance Search</a></li>
  <li class="<?php echo $addClass2;?> tab-click"><a href="javascript:void(0);" data-tab="tabs-2">Listing ID</a></li>
  <li class="<?php echo $addClass3;?> tab-click"><a href="javascript:void(0);" data-tab="tabs-3">Address</a></li>
</ul>

  <div id="tabs-1" <?php echo(isset($_GET['tab-value']) && $_GET['tab-value'] == 1)? "style='display:block'":"style='display:none'";?>>
      <form class="form-horizontal" id="rets_advance_search_form" action="" method="GET">
    <input type="hidden" name="tab-value" value="1">

<div class="row">

<div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="property_type">Property Type</label>
                  <select class='form-control' name='property_type' id='property_type'>
                    <option value="RES" <?php echo($_GET['property_type'] == "RES")? 'selected="selected"':"";?>>Residential</option>
                    <option value="RNT" <?php echo($_GET['property_type'] == "RNT")? 'selected="selected"':"";?>>Residential Rental</option>
                    <option value="BLD" <?php echo($_GET['property_type'] == "BLD")? 'selected="selected"':"";?>>Builder</option>
                    <option value="LND" <?php echo($_GET['property_type'] == "LND")? 'selected="selected"':"";?>>Vacant/Subdivided Land</option>
                    <option value="MUL" <?php echo($_GET['property_type'] == "MUL")? 'selected="selected"':"";?>>Multiple Dwelling</option>
                    <option value="VER" <?php echo($_GET['property_type'] == "VER")? 'selected="selected"':"";?>>High Rise</option>
                  </select>
                  </div>
              </div>
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="min_price">Minimum Price</label>  
                  <input id="min_price" name="min_price"  class="form-control input-md" type="text" value="<?php echo($_GET['min_price'])?$_GET['min_price']:"";?>">
                  </div>
              </div>
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="max_days_listed">Max Days Listed</label> 
                  <input id="max_days_listed" name="max_days_listed"  class="form-control input-md" type="text" value="<?php echo($_GET['max_days_listed'])?$_GET['max_days_listed']:"";?>">
                  </div>
              </div>
          </div>

           <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="bedrooms">Bedrooms</label>
                  <select class='form-control' name='bedrooms' id='bedrooms'>
                    <option value="">Any Number</option>
                    <option value="studio">Studio</option>
                    <option value="1" <?php echo($_GET['bedrooms'] == 1)?'selected="selected"':"";?>>1+</option>
                    <option value="2" <?php echo($_GET['bedrooms'] == 2)?'selected="selected"':"";?>>2+</option>
                    <option value="3" <?php echo($_GET['bedrooms'] == 3)?'selected="selected"':"";?>>3+</option>
                    <option value="4" <?php echo($_GET['bedrooms'] == 4)?'selected="selected"':"";?>>4+</option>
                    <option value="5" <?php echo($_GET['bedrooms'] == 5)?'selected="selected"':"";?>>5+</option>
                    <option value="6" <?php echo($_GET['bedrooms'] == 6)?'selected="selected"':"";?>>6+</option>
                    <option value="7" <?php echo($_GET['bedrooms'] == 7)?'selected="selected"':"";?>>7+</option>
                    <option value="8" <?php echo($_GET['bedrooms'] == 8)?'selected="selected"':"";?>>8+</option>
                    <option value="9" <?php echo($_GET['bedrooms'] == 9)?'selected="selected"':"";?>>9+</option>
                    <option value="10" <?php echo($_GET['bedrooms'] == 10)?'selected="selected"':"";?>>10+</option>
                  </select>
                  </div>
              </div>
          </div>

         
</div>



<div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                 <div class="col-md-12 align-left  custom-select">
                <label class="control-label" for="city">City</label>  
                <select class='form-control' name='city[]' id='city' multiple>
    
                  <option value="ALAMO" <?php echo(in_array('ALAMO', $_GET['city']))? 'selected="selected"':"";?>>Alamo</option>
                  <option value="ARMAGOSA" <?php echo(in_array('ARMAGOSA', $_GET['city']))? 'selected="selected"':"";?>>Amargosa</option>
                  <option value="BEATTY" <?php echo(in_array('BEATTY', $_GET['city']))? 'selected="selected"':"";?>>Beatty</option>
                  <option value="BLUEDIAM" <?php echo(in_array('BLUEDIAM', $_GET['city']))? 'selected="selected"':"";?>>Blue Diamond</option>
                  <option value="BOULDERC" <?php echo(in_array('BOULDERC', $_GET['city']))? 'selected="selected"':"";?>>Boulder City</option>
                  <option value="CALIENTE" <?php echo(in_array('CALIENTE', $_GET['city']))? 'selected="selected"':"";?>>Caliente</option>
                  <option value="CALNEVAR" <?php echo(in_array('CALNEVAR', $_GET['city']))? 'selected="selected"':"";?>>Cal-Nev-Ari</option>
                  <option value="COLDCRK" <?php echo(in_array('COLDCRK', $_GET['city']))? 'selected="selected"':"";?>>Cold Creek</option>
                  <option value="ELY" <?php echo(in_array('ELY', $_GET['city']))? 'selected="selected"':"";?>>Ely</option>
                  <option value="GLENDALE" <?php echo(in_array('GLENDALE', $_GET['city']))? 'selected="selected"':"";?>>Glendale</option>
                  <option value="GOODSPRG" <?php echo(in_array('GOODSPRG', $_GET['city']))? 'selected="selected"':"";?>>Goodsprings</option>
                  <option value="HENDERSON" <?php echo(in_array('HENDERSON', $_GET['city']))? 'selected="selected"':"";?>>Henderson</option>
                  <option value="INDIANSP" <?php echo(in_array('INDIANSP', $_GET['city']))? 'selected="selected"':"";?>>Indian Springs</option>
                  <option value="JEAN" <?php echo(in_array('JEAN', $_GET['city']))? 'selected="selected"':"";?>>Jean</option>
                  <option value="LASVEGAS" <?php echo(in_array('LASVEGAS', $_GET['city']))? 'selected="selected"':"";?>>Las Vegas</option>
                  <option value="LAUGHLIN" <?php echo(in_array('LAUGHLIN', $_GET['city']))? 'selected="selected"':"";?>>Laughlin</option>
                  <option value="LOGANDAL" <?php echo(in_array('LOGANDAL', $_GET['city']))? 'selected="selected"':"";?>>Logandale</option>
                  <option value="MCGILL" <?php echo(in_array('MCGILL', $_GET['city']))? 'selected="selected"':"";?>>Mc Gill</option>
                  <option value="MESQUITE" <?php echo(in_array('MESQUITE', $_GET['city']))? 'selected="selected"':"";?>>Mesquite</option>
                  <option value="MOAPA" <?php echo(in_array('MOAPA', $_GET['city']))? 'selected="selected"':"";?>>Moapa</option>
                  <option value="MTNSPRG" <?php echo(in_array('MTNSPRG', $_GET['city']))? 'selected="selected"':"";?>>Mountain Spring</option>
                  <option value="NORTHLAS" <?php echo(in_array('NORTHLAS', $_GET['city']))? 'selected="selected"':"";?>>North Las Vegas</option>
                  <option value="OTHER" <?php echo(in_array('OTHER', $_GET['city']))? 'selected="selected"':"";?>>Other</option>
                  <option value="OVERTON" <?php echo(in_array('OVERTON', $_GET['city']))? 'selected="selected"':"";?>>Overton</option>
                  <option value="PAHRUMP" <?php echo(in_array('PAHRUMP', $_GET['city']))? 'selected="selected"':"";?>>Pahrump</option>
                  <option value="PALMGRDNS" <?php echo(in_array('PALMGRDNS', $_GET['city']))? 'selected="selected"':"";?>>Palm Gardens</option>
                  <option value="PANACA" <?php echo(in_array('PANACA', $_GET['city']))? 'selected="selected"':"";?>>Panaca</option>
                  <option value="PIOCHE" <?php echo(in_array('PIOCHE', $_GET['city']))? 'selected="selected"':"";?>>Pioche</option>
                  <option value="SANDYVLY" <?php echo(in_array('SANDYVLY', $_GET['city']))? 'selected="selected"':"";?>>Sandy Valley</option>
                  <option value="SEARCHLT" <?php echo(in_array('SEARCHLT', $_GET['city']))? 'selected="selected"':"";?>>Searchlight</option>
                  <option value="TONOPAH" <?php echo(in_array('TONOPAH', $_GET['city']))? 'selected="selected"':"";?>>Tonopah</option>
                  <option value="URSINE" <?php echo(in_array('URSINE', $_GET['city']))? 'selected="selected"':"";?>>Ursine</option>
                </select>
                </div>
              </div>
          </div>



           <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                    <label class="control-label" for="max_price">Maximum Price</label> 
                    <input id="max_price" name="max_price"  class="form-control input-md" type="text" value="<?php echo($_GET['max_price'])?$_GET['max_price']:"";?>">
                  </div>
              </div>
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                    <label class="control-label" for="sort_by">Sort By</label>
                    <select class='form-control' name='sort_by' id='sort_by'>
                      <option value="">--Sort By--</option>
                      <option value="listing_desc" <?php echo($_GET['sort_by'] =="listing_desc")?'selected="selected"':"";?>>Newest Listing</option>
                      <option value="listing_asc" <?php echo($_GET['sort_by'] =="listing_asc")?'selected="selected"':"";?>>Oldest Listing</option>
                      <option value="pricing_asc" <?php echo($_GET['sort_by'] =="pricing_asc")?'selected="selected"':"";?>>Least expensive to most</option>
                      <option value="pricing_desc" <?php echo($_GET['sort_by'] =="pricing_desc")?'selected="selected"':"";?>>Most expensive to least</option>
                      
                      <option value="bedrooms_asc" <?php echo($_GET['sort_by'] =="bedrooms_asc")?'selected="selected"':"";?>>Bedrooms(low to high)</option>
                      <option value="bedrooms_desc" <?php echo($_GET['sort_by'] =="bedrooms_desc")?'selected="selected"':"";?>>Bedrooms(high to low)</option>
                      <option value="bathrooms_asc" <?php echo($_GET['sort_by'] =="bathrooms_asc")?'selected="selected"':"";?>>Bathrooms(low to high)</option>
                      <option value="bathrooms_desc" <?php echo($_GET['sort_by'] =="bathrooms_desc")?'selected="selected"':"";?>>Bathrooms(high to low)</option>
                      <option value="squarefeet_asc" <?php echo($_GET['sort_by'] =="squarefeet_asc")?'selected="selected"':"";?>>SquareFeet(low to high)</option>
                      <option value="squarefeet_desc" <?php echo($_GET['sort_by'] =="squarefeet_desc")?'selected="selected"':"";?>>SquareFeet(high to low)</option>
                    </select>
                  </div>
              </div>
          </div>



           <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                    <label class="control-label" for="bathrooms">Bathrooms</label> 
                   <select class='form-control' name='bathrooms' id='bathrooms'>
                      <option value="">Any Number</option>
                       <option value="1" <?php echo($_GET['bathrooms'] == 1)?'selected="selected"':"";?>>1+</option>
                    <option value="2" <?php echo($_GET['bathrooms'] == 2)?'selected="selected"':"";?>>2+</option>
                    <option value="3" <?php echo($_GET['bathrooms'] == 3)?'selected="selected"':"";?>>3+</option>
                    <option value="4" <?php echo($_GET['bathrooms'] == 4)?'selected="selected"':"";?>>4+</option>
                    <option value="5" <?php echo($_GET['bathrooms'] == 5)?'selected="selected"':"";?>>5+</option>
                    <option value="6" <?php echo($_GET['bathrooms'] == 6)?'selected="selected"':"";?>>6+</option>
                    <option value="7" <?php echo($_GET['bathrooms'] == 7)?'selected="selected"':"";?>>7+</option>
                    <option value="8" <?php echo($_GET['bathrooms'] == 8)?'selected="selected"':"";?>>8+</option>
                    <option value="9" <?php echo($_GET['bathrooms'] == 9)?'selected="selected"':"";?>>9+</option>
                    <option value="10" <?php echo($_GET['bathrooms'] == 10)?'selected="selected"':"";?>>10+</option>
                    </select>
                  </div>
              </div>
          </div>


          
</div>

<div class="col-md-4 col-sm-4">
          

           <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                    <label class="control-label" for="square_feet">Square Feet</label>
                    <input id="square_feet" name="square_feet"  class="form-control input-md" type="text" value="<?php echo($_GET['square_feet'])?$_GET['square_feet']:"";?>">
                  </div>
              </div>
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="acres">Acres</label>
                  <input id="acres" name="acres"  class="form-control input-md" type="text" value="<?php echo($_GET['acres'])?$_GET['acres']:"";?>">
                  </div>
              </div>
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left custom-select status-filter">
                  <label class="control-label" for="status">Status</label> 
                  <select class='form-control' name='status[]' id='status' multiple>
                    <option value="Active" <?php echo(in_array('Active', $_GET['status']))?'selected="selected"':"";?>>Active</option>
                    <option value="Contingent" <?php echo(in_array('Contingent', $_GET['status']))?'selected="selected"':"";?>>Contingent Offer</option>
                    <option value="Comp Only Sold" <?php echo(in_array('Comp Only Sold', $_GET['status']))?'selected="selected"':"";?>>Comp Only Sold</option>
                    <option value="History" <?php echo(in_array('History', $_GET['status']))?'selected="selected"':"";?>>History</option>
                    <option value="Incomplete" <?php echo(in_array('Incomplete', $_GET['status']))?'selected="selected"':"";?>>Incomplete</option>
                     <option value="Sold" <?php echo(in_array('Sold', $_GET['status']))?'selected="selected"':"";?>>Sold</option>
                    <option value="Leased" <?php echo(in_array('Leased', $_GET['status']))?'selected="selected"':"";?>>Leased</option>
                   <option value="Pending" <?php echo(in_array('Pending', $_GET['status']))?'selected="selected"':"";?>>Pending</option>
                    <option value="Temporarily Off The Market" <?php echo(in_array('Temporarily Off The Market', $_GET['status']))?'selected="selected"':"";?>>Temporarily Off The Market</option>
                    <option value="Withdrawn" <?php echo(in_array('Withdrawn', $_GET['status']))?'selected="selected"':"";?>>Withdrawn</option>
                    <option value="Withdrawn Conditional" <?php echo(in_array('Withdrawn Conditional', $_GET['status']))?'selected="selected"':"";?>>Withdrawn Conditional</option>
                    <option value="Expired" <?php echo(in_array('Expired', $_GET['status']))?'selected="selected"':"";?>>Expired</option>
                    
                  </select>
                  </div>
              </div>
          </div>
          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left">
                     <label class="control-label" for="result_per_page">Results per page
</label>
                     

                    <select class='form-control' name='limit' id='result_per_page'>
                         <option value="25" <?php if($_GET['limit']=='25'){echo "selected";} ?>>25</option>
                  <option value="50" <?php if($_GET['limit']=='50'){echo "selected";} ?>>50</option>
                  <option value="75" <?php if($_GET['limit']=='75'){echo "selected";} ?>>75</option>
                  <option value="100" <?php if($_GET['limit']=='100'){echo "selected";} ?>>100</option>
                      </select>


                  </div>
              </div>
          </div>
</div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6">
    <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left custom-checkbox">
                    <label class="control-label" for="property_sub_type">Property Sub Type</label>
                    <ul>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="AGR" <?php echo(in_array('AGR', $_GET['property_sub_type']))?'checked="checked"':"";?>>Agriculture</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="APT" <?php echo(in_array('APT', $_GET['property_sub_type']))?'checked="checked"':"";?>>Apartment</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="COA" <?php echo(in_array('COA', $_GET['property_sub_type']))?'checked="checked"':"";?>>Common Area</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="COM" <?php echo(in_array('COM', $_GET['property_sub_type']))?'checked="checked"':"";?>> Commercial</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="CON" <?php echo(in_array('CON', $_GET['property_sub_type']))?'checked="checked"':"";?>>Condominium</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="FOUR" <?php echo(in_array('FOUR', $_GET['property_sub_type']))?'checked="checked"':"";?>>  Four-Plex</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="IND" <?php echo(in_array('IND', $_GET['property_sub_type']))?'checked="checked"':"";?>> Industrial</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="MAN" <?php echo(in_array('MAN', $_GET['property_sub_type']))?'checked="checked"':"";?>> Manufactured Home</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="MHP" <?php echo(in_array('MHP', $_GET['property_sub_type']))?'checked="checked"':"";?>> Mobile Home Park</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="MIP" <?php echo(in_array('MIP', $_GET['property_sub_type']))?'checked="checked"':"";?>> Minor Improvements</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="NPCF" <?php echo(in_array('NPCF', $_GET['property_sub_type']))?'checked="checked"':"";?>>
                      Non-profit Community Facilities </li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="OTH" <?php echo(in_array('OTH', $_GET['property_sub_type']))?'checked="checked"':"";?>>
                      Other</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="SAL" <?php echo(in_array('SAL', $_GET['property_sub_type']))?'checked="checked"':"";?>> 
                      Salvage</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="SFR" <?php echo(in_array('SFR', $_GET['property_sub_type']))?'checked="checked"':"";?>> 
                      Single Family Residential</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="TRI" <?php echo(in_array('TRI', $_GET['property_sub_type']))?'checked="checked"':"";?>> 
                      Triplex</li>
                      <li><input type="checkbox" class="sub_type_chk" name="property_sub_type[]" value="TWH" <?php echo(in_array('TWH', $_GET['property_sub_type']))?'checked="checked"':"";?>> 
                      Townhouse</li>
                    </ul>
                  </div>
              </div>
          </div>
  </div>  
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_advance_search"> </label>
  <div class="col-md-4">
    <button id="submit_advance_search" name="submit_advance_search" class="search-btn" type='submit'>Search</button>
    <input id="reset_search" name="reset_search" class="btn btn-info" type='reset' value="Reset">
  </div>
</div>
<br>
</form>
<?php
if(isset($_GET['submit_advance_search'])){
$rets = new Rets($_GET, 'advance_search');
$search_result = $rets->call();
/*echo '<pre>';print_r($search_result);
echo '</pre>';*/
echo get_property_listing($search_result);
}  
?>
 </div>
<style type="text/css">
  pre {
    background-color: red;
}
</style>



  <div id="tabs-2" <?php echo(isset($_GET['tab-value']) && $_GET['tab-value'] == 2)? "style='display:block'":"style='display:none'";?>>
      <form class="form-horizontal" action="" method="GET">
      <input type="hidden" name="tab-value" value="2">
  <br>
  <div class="form-group">
    <label class="col-md-4 control-label" for="listing_id">Listing ID</label>  
    <div class="col-md-4">

      <input type="text" name="listing_id" id="listing_id" <?php if(isset($_GET['listing_id'])){echo "value=".$_GET['listing_id'];} ?>>

    </div>
    
      <p>* Enter up to 25 MLS numbers separated by commas, e.g., 34555867, 53457954, 54552147.</p>
    
  </div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_advance_search"> </label>
  <div class="col-md-4">
    <button id="submit_advance_search" name="submit_advance_listing_search" class="search-btn" type='submit'>Search</button>
    <input id="reset_search" name="reset_search" class="btn btn-info" type='reset' value="Reset">
  </div>
</div>
<br/>

</form>
 <?php
if(isset($_GET['submit_advance_listing_search'])){
$rets = new Rets($_GET, 'advance_listing');
$search_result = $rets->call();
/*echo '<pre>';print_r($search_result);
echo '</pre>';*/
echo get_property_listing($search_result);
} 
?> 
  </div>

  <div id="tabs-3" <?php echo(isset($_GET['tab-value']) && $_GET['tab-value'] == 3)? "style='display:block'":"style='display:none'";?>>
       <form class="form-horizontal" action="" method="GET">
  <input type="hidden" name="tab-value" value="3">

<div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                    
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="property_type">Property Type</label> 
                  <select class='form-control' name='property_type' id='property_type'>
                    <option value="RES">Residential</option>
                    <option value="RNT">Residential Rental</option>
                    <option value="BLD">Builder</option>
                    <option value="LND">Vacant/Subdivided Land</option>
                    <option value="MUL">Multiple Dwelling</option>
                    <option value="VER">High Rise</option>
                  </select>
                  </div>
              </div>
          </div>



 <div class="single-form">
              <div class="form-group">
                    
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="extra_fetures"></label>  
                    <input type="checkbox" name="has_image" value="Image">Has Image
                    <input type="checkbox" name="virtual_tour" value='VT'>Has Virtual Tour </br>
                    <input type="checkbox" name="open_house" value='OH'>Has Open House 
                  </div>
              </div>
          </div>



</div>

<div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                    
                  <div class="col-md-12 align-left all_city custom-select">
                  <label class="control-label" for="city">City</label>
                  <select class='form-control' name='city[]' id='city' multiple>
    
                  <option value="ALAMO" <?php echo(in_array('ALAMO', $_GET['city']))? 'selected="selected"':"";?>>Alamo</option>
                  <option value="ARMAGOSA" <?php echo(in_array('ARMAGOSA', $_GET['city']))? 'selected="selected"':"";?>>Amargosa</option>
                  <option value="BEATTY" <?php echo(in_array('BEATTY', $_GET['city']))? 'selected="selected"':"";?>>Beatty</option>
                  <option value="BLUEDIAM" <?php echo(in_array('BLUEDIAM', $_GET['city']))? 'selected="selected"':"";?>>Blue Diamond</option>
                  <option value="BOULDERC" <?php echo(in_array('BOULDERC', $_GET['city']))? 'selected="selected"':"";?>>Boulder City</option>
                  <option value="CALIENTE" <?php echo(in_array('CALIENTE', $_GET['city']))? 'selected="selected"':"";?>>Caliente</option>
                  <option value="CALNEVAR" <?php echo(in_array('CALNEVAR', $_GET['city']))? 'selected="selected"':"";?>>Cal-Nev-Ari</option>
                  <option value="COLDCRK" <?php echo(in_array('COLDCRK', $_GET['city']))? 'selected="selected"':"";?>>Cold Creek</option>
                  <option value="ELY" <?php echo(in_array('ELY', $_GET['city']))? 'selected="selected"':"";?>>Ely</option>
                  <option value="GLENDALE" <?php echo(in_array('GLENDALE', $_GET['city']))? 'selected="selected"':"";?>>Glendale</option>
                  <option value="GOODSPRG" <?php echo(in_array('GOODSPRG', $_GET['city']))? 'selected="selected"':"";?>>Goodsprings</option>
                  <option value="HENDERSON" <?php echo(in_array('HENDERSON', $_GET['city']))? 'selected="selected"':"";?>>Henderson</option>
                  <option value="INDIANSP" <?php echo(in_array('INDIANSP', $_GET['city']))? 'selected="selected"':"";?>>Indian Springs</option>
                  <option value="JEAN" <?php echo(in_array('JEAN', $_GET['city']))? 'selected="selected"':"";?>>Jean</option>
                  <option value="LASVEGAS" <?php echo(in_array('LASVEGAS', $_GET['city']))? 'selected="selected"':"";?>>Las Vegas</option>
                  <option value="LAUGHLIN" <?php echo(in_array('LAUGHLIN', $_GET['city']))? 'selected="selected"':"";?>>Laughlin</option>
                  <option value="LOGANDAL" <?php echo(in_array('LOGANDAL', $_GET['city']))? 'selected="selected"':"";?>>Logandale</option>
                  <option value="MCGILL" <?php echo(in_array('MCGILL', $_GET['city']))? 'selected="selected"':"";?>>Mc Gill</option>
                  <option value="MESQUITE" <?php echo(in_array('MESQUITE', $_GET['city']))? 'selected="selected"':"";?>>Mesquite</option>
                  <option value="MOAPA" <?php echo(in_array('MOAPA', $_GET['city']))? 'selected="selected"':"";?>>Moapa</option>
                  <option value="MTNSPRG" <?php echo(in_array('MTNSPRG', $_GET['city']))? 'selected="selected"':"";?>>Mountain Spring</option>
                  <option value="NORTHLAS" <?php echo(in_array('NORTHLAS', $_GET['city']))? 'selected="selected"':"";?>>North Las Vegas</option>
                  <option value="OTHER" <?php echo(in_array('OTHER', $_GET['city']))? 'selected="selected"':"";?>>Other</option>
                  <option value="OVERTON" <?php echo(in_array('OVERTON', $_GET['city']))? 'selected="selected"':"";?>>Overton</option>
                  <option value="PAHRUMP" <?php echo(in_array('PAHRUMP', $_GET['city']))? 'selected="selected"':"";?>>Pahrump</option>
                  <option value="PALMGRDNS" <?php echo(in_array('PALMGRDNS', $_GET['city']))? 'selected="selected"':"";?>>Palm Gardens</option>
                  <option value="PANACA" <?php echo(in_array('PANACA', $_GET['city']))? 'selected="selected"':"";?>>Panaca</option>
                  <option value="PIOCHE" <?php echo(in_array('PIOCHE', $_GET['city']))? 'selected="selected"':"";?>>Pioche</option>
                  <option value="SANDYVLY" <?php echo(in_array('SANDYVLY', $_GET['city']))? 'selected="selected"':"";?>>Sandy Valley</option>
                  <option value="SEARCHLT" <?php echo(in_array('SEARCHLT', $_GET['city']))? 'selected="selected"':"";?>>Searchlight</option>
                  <option value="TONOPAH" <?php echo(in_array('TONOPAH', $_GET['city']))? 'selected="selected"':"";?>>Tonopah</option>
                  <option value="URSINE" <?php echo(in_array('URSINE', $_GET['city']))? 'selected="selected"':"";?>>Ursine</option>
                </select>
                  </div>


                  <div class="col-md-12 align-left hide all_county custom-select">
                  <label class="control-label" for="county">Country</label> 
                  <select class='form-control' name='county[]' id='county' multiple>
    
                    <option value="CLARK"> Clark County</option>
                    <option value="LINCOLN"> Lincoln County</option>
                    <option value="NYE"> Nye County</option>
                    <option value="WHITEPINE"> White Pine County</option>
                    <option value="OTHER"> Other County</option>
                    
                  </select>
                  </div>



                   <div class="col-md-12 align-left hide all_postal_codes custom-select">
                  <label class="control-label" for="postal_code">Postal Code</label> 
                  <select class='form-control' name='postal_code[]' id='postal_code' multiple>
                      <option value="00000"<?php echo(in_array('00000', $_GET['postal_code']))? 'selected="selected"':"";?>>00000</option>
                      <option value="13790"<?php echo(in_array('13790', $_GET['postal_code']))? 'selected="selected"':"";?>>13790</option>
                      <option value="21015"<?php echo(in_array('21015', $_GET['postal_code']))? 'selected="selected"':"";?>>21015</option>
                      <option value="24739"<?php echo(in_array('24739', $_GET['postal_code']))? 'selected="selected"':"";?>>24739</option>
                      <option value="24918"<?php echo(in_array('24918', $_GET['postal_code']))? 'selected="selected"':"";?>>24918</option>
                      <option value="25040"<?php echo(in_array('25040', $_GET['postal_code']))? 'selected="selected"':"";?>>25040</option>
                      <option value="37087"<?php echo(in_array('37087', $_GET['postal_code']))? 'selected="selected"':"";?>>37087</option>
                      <option value="46072"<?php echo(in_array('46072', $_GET['postal_code']))? 'selected="selected"':"";?>>46072</option>
                      <option value="46545"<?php echo(in_array('46545', $_GET['postal_code']))? 'selected="selected"':"";?>>46545</option>
                      <option value="46703"<?php echo(in_array('46703', $_GET['postal_code']))? 'selected="selected"':"";?>>46703</option>
                      <option value="47122"<?php echo(in_array('47122', $_GET['postal_code']))? 'selected="selected"':"";?>>47122</option>
                      <option value="47274"<?php echo(in_array('47274', $_GET['postal_code']))? 'selected="selected"':"";?>>47274</option>
                      <option value="60487"<?php echo(in_array('60487', $_GET['postal_code']))? 'selected="selected"':"";?>>60487</option>
                      <option value="70503"<?php echo(in_array('70503', $_GET['postal_code']))? 'selected="selected"':"";?>>70503</option>
                      <option value="71334"<?php echo(in_array('71334', $_GET['postal_code']))? 'selected="selected"':"";?>>71334</option>
                      <option value="71449"<?php echo(in_array('71449', $_GET['postal_code']))? 'selected="selected"':"";?>>71449</option>
                      <option value="81005"<?php echo(in_array('81005', $_GET['postal_code']))? 'selected="selected"':"";?>>81005</option>
                      <option value="84710"<?php echo(in_array('84710', $_GET['postal_code']))? 'selected="selected"':"";?>>84710</option>
                      <option value="84713"<?php echo(in_array('84713', $_GET['postal_code']))? 'selected="selected"':"";?>>84713</option>
                      <option value="84719"<?php echo(in_array('84719', $_GET['postal_code']))? 'selected="selected"':"";?>>84719</option>
                      <option value="84720"<?php echo(in_array('84720', $_GET['postal_code']))? 'selected="selected"':"";?>>84720</option>
                      <option value="84721"<?php echo(in_array('84721', $_GET['postal_code']))? 'selected="selected"':"";?>>84721</option>
                      <option value="84722"<?php echo(in_array('84722', $_GET['postal_code']))? 'selected="selected"':"";?>>84722</option>
                      <option value="84725"<?php echo(in_array('84725', $_GET['postal_code']))? 'selected="selected"':"";?>>84725</option>
                      <option value="84735"<?php echo(in_array('84735', $_GET['postal_code']))? 'selected="selected"':"";?>>84735</option>
                      <option value="84755"<?php echo(in_array('84755', $_GET['postal_code']))? 'selected="selected"':"";?>>84755</option>
                      <option value="84761"<?php echo(in_array('84761', $_GET['postal_code']))? 'selected="selected"':"";?>>84761</option>
                      <option value="84762"<?php echo(in_array('84762', $_GET['postal_code']))? 'selected="selected"':"";?>>84762</option>
                      <option value="84782"<?php echo(in_array('84782', $_GET['postal_code']))? 'selected="selected"':"";?>>84782</option>
                      <option value="86046"<?php echo(in_array('86046', $_GET['postal_code']))? 'selected="selected"':"";?>>86046</option>
                      <option value="86413"<?php echo(in_array('86413', $_GET['postal_code']))? 'selected="selected"':"";?>>86413</option>
                      <option value="86441"<?php echo(in_array('86441', $_GET['postal_code']))? 'selected="selected"':"";?>>86441</option>
                      <option value="86445"<?php echo(in_array('86445', $_GET['postal_code']))? 'selected="selected"':"";?>>86445</option>
                      <option value="87401"<?php echo(in_array('87401', $_GET['postal_code']))? 'selected="selected"':"";?>>87401</option>
                      <option value="89001"<?php echo(in_array('89001', $_GET['postal_code']))? 'selected="selected"':"";?>>89001</option>
                      <option value="89002"<?php echo(in_array('89002', $_GET['postal_code']))? 'selected="selected"':"";?>>89002</option>
                      <option value="89003"<?php echo(in_array('89003', $_GET['postal_code']))? 'selected="selected"':"";?>>89003</option>
                      <option value="89004"<?php echo(in_array('89004', $_GET['postal_code']))? 'selected="selected"':"";?>>89004</option>
                      <option value="89005"<?php echo(in_array('89005', $_GET['postal_code']))? 'selected="selected"':"";?>>89005</option>
                      <option value="89007"<?php echo(in_array('89007', $_GET['postal_code']))? 'selected="selected"':"";?>>89007</option>
                      <option value="89008"<?php echo(in_array('89008', $_GET['postal_code']))? 'selected="selected"':"";?>>89008</option>
                      <option value="89010"<?php echo(in_array('89010', $_GET['postal_code']))? 'selected="selected"':"";?>>89010</option>
                      <option value="89011"<?php echo(in_array('89011', $_GET['postal_code']))? 'selected="selected"':"";?>>89011</option>
                      <option value="89012"<?php echo(in_array('89012', $_GET['postal_code']))? 'selected="selected"':"";?>>89012</option>
                      <option value="89013"<?php echo(in_array('89013', $_GET['postal_code']))? 'selected="selected"':"";?>>89013</option>
                      <option value="89014"<?php echo(in_array('89014', $_GET['postal_code']))? 'selected="selected"':"";?>>89014</option>
                      <option value="89015"<?php echo(in_array('89015', $_GET['postal_code']))? 'selected="selected"':"";?>>89015</option>
                      <option value="89016"<?php echo(in_array('89016', $_GET['postal_code']))? 'selected="selected"':"";?>>89016</option>
                      <option value="89017"<?php echo(in_array('89017', $_GET['postal_code']))? 'selected="selected"':"";?>>89017</option>
                      <option value="89018"<?php echo(in_array('89018', $_GET['postal_code']))? 'selected="selected"':"";?>>89018</option>
                      <option value="89019"<?php echo(in_array('89019', $_GET['postal_code']))? 'selected="selected"':"";?>>89019</option>
                      <option value="89020"<?php echo(in_array('89020', $_GET['postal_code']))? 'selected="selected"':"";?>>89020</option>
                      <option value="89021"<?php echo(in_array('89021', $_GET['postal_code']))? 'selected="selected"':"";?>>89021</option>
                      <option value="89022"<?php echo(in_array('89022', $_GET['postal_code']))? 'selected="selected"':"";?>>89022</option>
                      <option value="89025"<?php echo(in_array('89025', $_GET['postal_code']))? 'selected="selected"':"";?>>89025</option>
                      <option value="89027"<?php echo(in_array('89027', $_GET['postal_code']))? 'selected="selected"':"";?>>89027</option>
                      <option value="89029"<?php echo(in_array('89029', $_GET['postal_code']))? 'selected="selected"':"";?>>89029</option>
                      <option value="89030"<?php echo(in_array('89030', $_GET['postal_code']))? 'selected="selected"':"";?>>89030</option>
                      <option value="89031"<?php echo(in_array('89031', $_GET['postal_code']))? 'selected="selected"':"";?>>89031</option>
                      <option value="89032"<?php echo(in_array('89032', $_GET['postal_code']))? 'selected="selected"':"";?>>89032</option>
                      <option value="89034"<?php echo(in_array('89034', $_GET['postal_code']))? 'selected="selected"':"";?>>89034</option>
                      <option value="89039"<?php echo(in_array('89039', $_GET['postal_code']))? 'selected="selected"':"";?>>89039</option>
                      <option value="89040"<?php echo(in_array('89040', $_GET['postal_code']))? 'selected="selected"':"";?>>89040</option>
                      <option value="89041"<?php echo(in_array('89041', $_GET['postal_code']))? 'selected="selected"':"";?>>89041</option>
                      <option value="89042"<?php echo(in_array('89042', $_GET['postal_code']))? 'selected="selected"':"";?>>89042</option>
                      <option value="89043"<?php echo(in_array('89043', $_GET['postal_code']))? 'selected="selected"':"";?>>89043</option>
                      <option value="89044"<?php echo(in_array('89044', $_GET['postal_code']))? 'selected="selected"':"";?>>89044</option>
                      <option value="89045"<?php echo(in_array('89045', $_GET['postal_code']))? 'selected="selected"':"";?>>89045</option>
                      <option value="89046"<?php echo(in_array('89046', $_GET['postal_code']))? 'selected="selected"':"";?>>89046</option>
                      <option value="89048"<?php echo(in_array('89048', $_GET['postal_code']))? 'selected="selected"':"";?>>89048</option>
                      <option value="89049"<?php echo(in_array('89049', $_GET['postal_code']))? 'selected="selected"':"";?>>89049</option>
                      <option value="89052"<?php echo(in_array('89052', $_GET['postal_code']))? 'selected="selected"':"";?>>89052</option>
                      <option value="89060"<?php echo(in_array('89060', $_GET['postal_code']))? 'selected="selected"':"";?>>89060</option>
                      <option value="89061"<?php echo(in_array('89061', $_GET['postal_code']))? 'selected="selected"':"";?>>89061</option>
                      <option value="89074"<?php echo(in_array('89074', $_GET['postal_code']))? 'selected="selected"':"";?>>89074</option>
                      <option value="89081"<?php echo(in_array('89081', $_GET['postal_code']))? 'selected="selected"':"";?>>89081</option>
                      <option value="89084"<?php echo(in_array('89084', $_GET['postal_code']))? 'selected="selected"':"";?>>89084</option>
                      <option value="89085"<?php echo(in_array('89085', $_GET['postal_code']))? 'selected="selected"':"";?>>89085</option>
                      <option value="89086"<?php echo(in_array('89086', $_GET['postal_code']))? 'selected="selected"':"";?>>89086</option>
                      <option value="89101"<?php echo(in_array('89101', $_GET['postal_code']))? 'selected="selected"':"";?>>89101</option>
                      <option value="89102"<?php echo(in_array('89102', $_GET['postal_code']))? 'selected="selected"':"";?>>89102</option>
                      <option value="89103"<?php echo(in_array('89103', $_GET['postal_code']))? 'selected="selected"':"";?>>89103</option>
                      <option value="89104"<?php echo(in_array('89104', $_GET['postal_code']))? 'selected="selected"':"";?>>89104</option>
                      <option value="89105"<?php echo(in_array('89105', $_GET['postal_code']))? 'selected="selected"':"";?>>89105</option>
                      <option value="89106"<?php echo(in_array('89106', $_GET['postal_code']))? 'selected="selected"':"";?>>89106</option>
                      <option value="89107"<?php echo(in_array('89107', $_GET['postal_code']))? 'selected="selected"':"";?>>89107</option>
                      <option value="89108"<?php echo(in_array('89108', $_GET['postal_code']))? 'selected="selected"':"";?>>89108</option>
                      <option value="89109"<?php echo(in_array('89109', $_GET['postal_code']))? 'selected="selected"':"";?>>89109</option>
                      <option value="89110"<?php echo(in_array('89110', $_GET['postal_code']))? 'selected="selected"':"";?>>89110</option>
                      <option value="89113"<?php echo(in_array('89113', $_GET['postal_code']))? 'selected="selected"':"";?>>89113</option>
                      <option value="89115"<?php echo(in_array('89115', $_GET['postal_code']))? 'selected="selected"':"";?>>89115</option>
                      <option value="89117"<?php echo(in_array('89117', $_GET['postal_code']))? 'selected="selected"':"";?>>89117</option>
                      <option value="89118"<?php echo(in_array('89118', $_GET['postal_code']))? 'selected="selected"':"";?>>89118</option>
                      <option value="89119"<?php echo(in_array('89119', $_GET['postal_code']))? 'selected="selected"':"";?>>89119</option>
                      <option value="89120"<?php echo(in_array('89120', $_GET['postal_code']))? 'selected="selected"':"";?>>89120</option>
                      <option value="89121"<?php echo(in_array('89121', $_GET['postal_code']))? 'selected="selected"':"";?>>89121</option>
                      <option value="89122"<?php echo(in_array('89122', $_GET['postal_code']))? 'selected="selected"':"";?>>89122</option>
                      <option value="89123"<?php echo(in_array('89123', $_GET['postal_code']))? 'selected="selected"':"";?>>89123</option>
                      <option value="89124"<?php echo(in_array('89124', $_GET['postal_code']))? 'selected="selected"':"";?>>89124</option>
                      <option value="89128"<?php echo(in_array('89128', $_GET['postal_code']))? 'selected="selected"':"";?>>89128</option>
                      <option value="89129"<?php echo(in_array('89129', $_GET['postal_code']))? 'selected="selected"':"";?>>89129</option>
                      <option value="89130"<?php echo(in_array('89130', $_GET['postal_code']))? 'selected="selected"':"";?>>89130</option>
                      <option value="89131"<?php echo(in_array('89131', $_GET['postal_code']))? 'selected="selected"':"";?>>89131</option>
                      <option value="89134"<?php echo(in_array('89134', $_GET['postal_code']))? 'selected="selected"':"";?>>89134</option>
                      <option value="89135"<?php echo(in_array('89135', $_GET['postal_code']))? 'selected="selected"':"";?>>89135</option>
                      <option value="89138"<?php echo(in_array('89138', $_GET['postal_code']))? 'selected="selected"':"";?>>89138</option>
                      <option value="89139"<?php echo(in_array('89139', $_GET['postal_code']))? 'selected="selected"':"";?>>89139</option>
                      <option value="89141"<?php echo(in_array('89141', $_GET['postal_code']))? 'selected="selected"':"";?>>89141</option>
                      <option value="89142"<?php echo(in_array('89142', $_GET['postal_code']))? 'selected="selected"':"";?>>89142</option>
                      <option value="89143"<?php echo(in_array('89143', $_GET['postal_code']))? 'selected="selected"':"";?>>89143</option>
                      <option value="89144"<?php echo(in_array('89144', $_GET['postal_code']))? 'selected="selected"':"";?>>89144</option>
                      <option value="89145"<?php echo(in_array('89145', $_GET['postal_code']))? 'selected="selected"':"";?>>89145</option>
                      <option value="89146"<?php echo(in_array('89146', $_GET['postal_code']))? 'selected="selected"':"";?>>89146</option>
                      <option value="89147"<?php echo(in_array('89147', $_GET['postal_code']))? 'selected="selected"':"";?>>89147</option>
                      <option value="89148"<?php echo(in_array('89148', $_GET['postal_code']))? 'selected="selected"':"";?>>89148</option>
                      <option value="89149"<?php echo(in_array('89149', $_GET['postal_code']))? 'selected="selected"':"";?>>89149</option>
                      <option value="89156"<?php echo(in_array('89156', $_GET['postal_code']))? 'selected="selected"':"";?>>89156</option>
                      <option value="89158"<?php echo(in_array('89158', $_GET['postal_code']))? 'selected="selected"':"";?>>89158</option>
                      <option value="89161"<?php echo(in_array('89161', $_GET['postal_code']))? 'selected="selected"':"";?>>89161</option>
                      <option value="89166"<?php echo(in_array('89166', $_GET['postal_code']))? 'selected="selected"':"";?>>89166</option>
                      <option value="89169"<?php echo(in_array('89169', $_GET['postal_code']))? 'selected="selected"':"";?>>89169</option>
                      <option value="89178"<?php echo(in_array('89178', $_GET['postal_code']))? 'selected="selected"':"";?>>89178</option>
                      <option value="89179"<?php echo(in_array('89179', $_GET['postal_code']))? 'selected="selected"':"";?>>89179</option>
                      <option value="89183"<?php echo(in_array('89183', $_GET['postal_code']))? 'selected="selected"':"";?>>89183</option>
                      <option value="89301"<?php echo(in_array('89301', $_GET['postal_code']))? 'selected="selected"':"";?>>89301</option>
                      <option value="89310"<?php echo(in_array('89310', $_GET['postal_code']))? 'selected="selected"':"";?>>89310</option>
                      <option value="89311"<?php echo(in_array('89311', $_GET['postal_code']))? 'selected="selected"':"";?>>89311</option>
                      <option value="89314"<?php echo(in_array('89314', $_GET['postal_code']))? 'selected="selected"':"";?>>89314</option>
                      <option value="89317"<?php echo(in_array('89317', $_GET['postal_code']))? 'selected="selected"':"";?>>89317</option>
                      <option value="89318"<?php echo(in_array('89318', $_GET['postal_code']))? 'selected="selected"':"";?>>89318</option>
                      <option value="89319"<?php echo(in_array('89319', $_GET['postal_code']))? 'selected="selected"':"";?>>89319</option>
                      <option value="89410"<?php echo(in_array('89410', $_GET['postal_code']))? 'selected="selected"':"";?>>89410</option>
                      <option value="89415"<?php echo(in_array('89415', $_GET['postal_code']))? 'selected="selected"':"";?>>89415</option>
                      <option value="89419"<?php echo(in_array('89419', $_GET['postal_code']))? 'selected="selected"':"";?>>89419</option>
                      <option value="89429"<?php echo(in_array('89429', $_GET['postal_code']))? 'selected="selected"':"";?>>89429</option>
                      <option value="89431"<?php echo(in_array('89431', $_GET['postal_code']))? 'selected="selected"':"";?>>89431</option>
                      <option value="89510"<?php echo(in_array('89510', $_GET['postal_code']))? 'selected="selected"':"";?>>89510</option>
                      <option value="89815"<?php echo(in_array('89815', $_GET['postal_code']))? 'selected="selected"':"";?>>89815</option>
                      <option value="89883"<?php echo(in_array('89883', $_GET['postal_code']))? 'selected="selected"':"";?>>89883</option>
                      <option value="92277"<?php echo(in_array('92277', $_GET['postal_code']))? 'selected="selected"':"";?>>92277</option>
                      <option value="92309"<?php echo(in_array('92309', $_GET['postal_code']))? 'selected="selected"':"";?>>92309</option>
                      <option value="92509"<?php echo(in_array('92509', $_GET['postal_code']))? 'selected="selected"':"";?>>92509</option>
                      <option value="96753"<?php echo(in_array('96753', $_GET['postal_code']))? 'selected="selected"':"";?>>96753</option>
                      <option value="96780"<?php echo(in_array('96780', $_GET['postal_code']))? 'selected="selected"':"";?>>96780</option>
                      <option value="99611"<?php echo(in_array('99611', $_GET['postal_code']))? 'selected="selected"':"";?>>99611</option>
                      <option value="99999"<?php echo(in_array('99999', $_GET['postal_code']))? 'selected="selected"':"";?>>99999</option>
                    </select>
                  </div>


                  City <input type="radio" name="address_type" id='select_city' value='city_name' checked>
                  County <input type="radio" name="address_type" id='select_county' value='county_name'>
                  Postal Code <input type="radio" name="address_type" id='select_postal_code' value='postal_code_name'>



              </div>
          </div>
</div>

<div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                    
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="result_per_page">Address</label> 
                  <div>
                  Number:  <input type="text" name="house_number" id='house_number' class="input-md">
                  Direction:<input type="text" name="house_deriction" id='house_deriction' class="input-md">

                  Name:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="house_name" id="house_name"> 
                  </div>

                  </div>
              </div>
          </div>
</div>





<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_advance_search"> </label>
  <div class="col-md-4">
    <button id="submit_advance_search" name="submit_address_search" class="search-btn" type='submit'>Search</button>
    <input id="reset_search" name="reset_search" class="btn btn-info reset-btn" type='reset' value="Reset">
  </div>
</div>
<br/>

</form>
  </div>
</div>
<?php
if(isset($_GET['submit_address_search'])){
$retsnew = new Rets($_GET, 'address_search');
$search_result = $retsnew->call();
//echo '<pre>';
//print_r($search_result);
//echo '</pre>';
 echo get_property_listing($search_result);
}?>
</div>
<script>
  jQuery(document).ready(function(){
   $('#city').multiselect();
   $('#listing_city').multiselect();
   $('#status').multiselect();
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
   $('.all_city').removeClass('hide');
   $('#city').multiselect();
   $('#county').multiselect();
   $('#postal_code').multiselect();
  });

  $("input[type='radio']").click(function(){
    var address_type_value=$("input[name='address_type']:checked").val();
    if(address_type_value=='city_name'){
     $('.all_city').removeClass('hide'); 
     $('.all_county').addClass('hide'); 
     $('.all_postal_codes').addClass('hide');
    }if(address_type_value=='county_name'){
      $('.all_city').addClass('hide'); 
      $('.all_county').removeClass('hide');
      $('.all_postal_codes').addClass('hide'); 
    }if(address_type_value=='postal_code_name'){
      $('.all_city').addClass('hide'); 
      $('.all_county').addClass('hide');
     $('.all_postal_codes').removeClass('hide'); 
    }
  });
  $('#reset_search').click(function(){
    $('.all_city').removeClass('hide');
    $('.all_county').addClass('hide');
    $('.all_postal_codes').addClass('hide'); 
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.tab-click').click(function(){
      var datatab = $(this).children('a').data('tab');
      $("#tabs-1").css('display','none');
      $("#tabs-2").css('display','none');
      $("#tabs-3").css('display','none');
      $("#" + datatab).css('display','block');
      $(this).siblings('li').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>

<?php if(!isset($_GET['tab-value'])){?>
<script type="text/javascript">
   $(document).ready(function(){
    $("#tabs-1").css('display','block');
   });
</script>
<?php }?>
</div>

