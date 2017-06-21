<?php
$sort_by=$_GET['sort_by'];
$rets = new Rets($_GET);
$search_result = $rets->call();
 if(isset($_GET['limit']) && $_GET['limit'] != ""){
       $limit=$_GET['limit'];
    }else{
      $limit=25;
    }
    if(isset($offset)){
  $start_page=($offset-1)*$limit;
}else{
  $offset=0;
}
?>
 <div class="container">

  <form name='rets_search' class="form-horizontal" id='rets_search_form' action="" method="GET"> 
  <?php if($_GET['check_search'] == 1){?>
  <input id="postal_code" name="postal_code"  class="form-control input-md" type="hidden" value="<?php if(isset($_GET['postal_code'])){echo $_GET['postal_code'];}?>" >
  <input id="listing_id" name="listing_id"  class="form-control input-md" type="hidden" value="<?php if(isset($_GET['listing_id'])){echo $_GET['listing_id'];}?>" >
  <?php }?>
  
 
      <div class="col-md-4 col-sm-4">
          <div class="single-form">
              <div class="form-group">
                    
                  <div class="col-md-12 align-left">
                  <label class="control-label" for="city">City</label>
                    <select class='form-control' name='city' id='city'>
                        <option value="">--select city--</option>
                        <option value="ALAMO"<?php if($_GET['city']=='ALAMO'){echo "selected";}?>>Alamo</option>
                        <option value="ARMAGOSA" <?php if($_GET['city']=='ARMAGOSA'){echo "selected";}?>>Amargosa</option>
                        <option value="BEATTY" <?php if($_GET['city']=='BEATTY'){echo "selected";}?>>Beatty</option>
                        <option value="BLUEDIAM" <?php if($_GET['city']=='BLUEDIAM'){echo "selected";}?>>Blue Diamond</option>
                        <option value="BOULDERC" <?php if($_GET['city']=='BOULDERC'){echo "selected";}?>>Boulder City</option>
                        <option value="CALIENTE" <?php if($_GET['city']=='CALIENTE'){echo "selected";}?>>Caliente</option>
                        <option value="CALNEVAR" <?php if($_GET['city']=='CALNEVAR'){echo "selected";}?>>Cal-Nev-Ari</option>
                        <option value="COLDCRK" <?php if($_GET['city']=='COLDCRK'){echo "selected";}?>>Cold Creek</option>
                        <option value="ELY" <?php if($_GET['city']=='ELY'){echo "selected";}?>>Ely</option>
                        <option value="GLENDALE" <?php if($_GET['city']=='GLENDALE'){echo "selected";}?>>Glendale</option>
                        <option value="GOODSPRG" <?php if($_GET['city']=='GOODSPRG'){echo "selected";}?>>Goodsprings</option>
                        <option value="HENDERSON" <?php if($_GET['city']=='HENDERSON'){echo "selected";}?>>Henderson</option>
                        <option value="INDIANSP" <?php if($_GET['city']=='INDIANSP'){echo "selected";}?>>Indian Springs</option>
                        <option value="JEAN" <?php if($_GET['city']=='JEAN'){echo "selected";}?>>Jean</option>
                        <option value="LASVEGAS" <?php if($_GET['city']=='LASVEGAS'){echo "selected";}?>>Las Vegas</option>
                        <option value="LAUGHLIN" <?php if($_GET['city']=='LAUGHLIN'){echo "selected";}?>>Laughlin</option>
                        <option value="LOGANDAL" <?php if($_GET['city']=='LOGANDAL'){echo "selected";}?>>Logandale</option>
                        <option value="MCGILL" <?php if($_GET['city']=='MCGILL'){echo "selected";}?>>Mc Gill</option>
                        <option value="MESQUITE" <?php if($_GET['city']=='MESQUITE'){echo "selected";}?>>Mesquite</option>
                        <option value="MOAPA" <?php if($_GET['city']=='MOAPA'){echo "selected";}?>>Moapa</option>
                        <option value="MTNSPRG" <?php if($_GET['city']=='MTNSPRG'){echo "selected";}?>>Mountain Spring</option>
                        <option value="NORTHLAS" <?php if($_GET['city']=='NORTHLAS'){echo "selected";}?>>North Las Vegas</option>
                        <option value="OTHER" <?php if($_GET['city']=='OTHER'){echo "selected";}?>>Other</option>
                        <option value="OVERTON" <?php if($_GET['city']=='OVERTON'){echo "selected";}?>>Overton</option>
                        <option value="PAHRUMP" <?php if($_GET['city']=='PAHRUMP'){echo "selected";}?>>Pahrump</option>
                        <option value="PALMGRDNS" <?php if($_GET['city']=='PALMGRDNS'){echo "selected";}?>>Palm Gardens</option>
                        <option value="PANACA" <?php if($_GET['city']=='PANACA'){echo "selected";}?>>Panaca</option>
                        <option value="PIOCHE" <?php if($_GET['city']=='PIOCHE'){echo "selected";}?>>Pioche</option>
                        <option value="SANDYVLY" <?php if($_GET['city']=='SANDYVLY'){echo "selected";}?>>Sandy Valley</option>
                        <option value="SEARCHLT" <?php if($_GET['city']=='SEARCHLT'){echo "selected";}?>>Searchlight</option>
                        <option value="TONOPAH" <?php if($_GET['city']=='TONOPAH'){echo "selected";}?>>Tonopah</option>
                        <option value="URSINE" <?php if($_GET['city']=='URSINE'){echo "selected";}?>>Ursine</option>
                     </select>
                  </div>
              </div>
          </div>
          <div class=" single-form">
              <div class="form-group">
                
                <div class="col-md-12 col-sm-12 align-left">
                  <label class="control-label" for="community">Community</label> 
                  <select class='form-control' name='search-community' id='community'>
                    <option value="">--select community--</option>
                    <option value='ALIANTE' <?php if($_GET['search-community']=='ALIANTE'){echo "selected";}?>> Aliante</option>
                    <option value='ALTAMIRA' <?php if($_GET['search-community']=='ALTAMIRA'){echo "selected";}?>> Alta Mira</option>
                    <option value='ANTHEM' <?php if($_GET['search-community']=='ANTHEM'){echo "selected";}?>> Anthem</option>
                    <option value='AnthemCC' <?php if($_GET['search-community']=='AnthemCC'){echo "selected";}?>> Anthem Country Club
                    </option>
                    <option value='ARDIENTE' <?php if($_GET['search-community']=='ARDIENTE'){echo "selected";}?>> Ardiente</option>
                    <option value='ARLNRNCH' <?php if($_GET['search-community']=='ARLNRNCH'){echo "selected";}?>> Arlington Ranch</option>
                    <option value='ARTESIA' <?php if($_GET['search-community']=='ARTESIA'){echo "selected";}?>> Artesia</option>
                    <option value='BLKMTNVIST' <?php if($_GET['search-community']=='BLKMTNVIST'){echo "selected";}?>> Black Mountain Vistas</option>
                    <option value='BURSONRCH' <?php if($_GET['search-community']=='BURSONRCH'){echo "selected";}?>>  Burson Ranch</option>
                    <option value='CADENCE' <?php if($_GET['search-community']=='CADENCE'){echo "selected";}?>> Cadence</option>
                    <option value='CALICORDGE' <?php if($_GET['search-community']=='CALICORDGE'){echo "selected";}?>> Calico Ridge</option>
                    <option value='CANYONGATE' <?php if($_GET['search-community']=='CANYONGATE'){echo "selected";}?>> Canyon Gate</option>
                    <option value='CENTENHILL' <?php if($_GET['search-community']=='CENTENHILL'){echo "selected";}?>> Centennial Hills</option>
                    <option value='CHAMPION' <?php if($_GET['search-community']=='CHAMPION'){echo "selected";}?>> Champion Village</option>
                    <option value='COMSTKPK' <?php if($_GET['search-community']=='COMSTKPK'){echo "selected";}?>> Comstock Park</option>
                    <option value='CORONARCH' <?php if($_GET['search-community']=='CORONARCH'){echo "selected";}?>>  Coronado Ranch</option>
                    <option value='COTTONWDS' <?php if($_GET['search-community']=='COTTONWDS'){echo "selected";}?>>  Cottonwoods</option>
                    <option value='DESERTINN' <?php if($_GET['search-community']=='DESERTINN'){echo "selected";}?>>  Desert Inn Country Club</option>
                    <option value='DESERTSHRE' <?php if($_GET['search-community']=='DESERTSHRE'){echo "selected";}?>> Desert Shores</option>
                    <option value='DSRTGRNS' <?php if($_GET['search-community']=='DSRTGRNS'){echo "selected";}?>> Desert Greens</option>
                    <option value='DSRTTRLS' <?php if($_GET['search-community']=='DSRTTRLS'){echo "selected";}?>> Desert Trails</option>
                    <option value='ELDORADO' <?php if($_GET['search-community']=='ELDORADO'){echo "selected";}?>> Eldorado</option>
                    <option value='ELKHORNRCH' <?php if($_GET['search-community']=='ELKHORNRCH'){echo "selected";}?>> Elkhorn Ranch</option>
                    <option value='ELKORNSPR' <?php if($_GET['search-community']=='ELKORNSPR'){echo "selected";}?>>  Elkhorn Springs</option>
                    <option value='FTHLSMACRC' <?php if($_GET['search-community']=='FTHLSMACRC'){echo "selected";}?>> Foothills at Mac Donald Ranch</option>
                    <option value='GREENVLLEY' <?php if($_GET['search-community']=='GREENVLLEY'){echo "selected";}?>> Green Valley</option>
                    <option value='GREENVLYSO' <?php if($_GET['search-community']=='GREENVLYSO'){echo "selected";}?>> Green Valley South</option>
                    <option value='GRNVLERCH' <?php if($_GET['search-community']=='GRNVLERCH'){echo "selected";}?>>Green Valley Ranch</option>
                    <option value='HIGHRANCH' <?php if($_GET['search-community']=='HIGHRANCH'){echo "selected";}?>>  Highlands Ranch</option>
                    <option value='HILLSBORO' <?php if($_GET['search-community']=='HILLSBORO'){echo "selected";}?>>  Hillsboro</option>
                    <option value='INSPIRADA' <?php if($_GET['search-community']=='INSPIRADA'){echo "selected";}?>>  Inspirada</option>
                    <option value='IRNMTNRCH' <?php if($_GET['search-community']=='IRNMTNRCH'){echo "selected";}?>>  Iron Mountain Ranch</option>
                    <option value='LAKELASV' <?php if($_GET['search-community']=='LAKELASV'){echo "selected";}?>> Lake Las Vegas</option>
                    <option value='LASCAS' <?php if($_GET['search-community']=='LASCAS'){echo "selected";}?>> Las Casitas</option>
                    <option value='LASVCC' <?php if($_GET['search-community']=='LASVCC'){echo "selected";}?>> Las Vegas Country Club</option>
                    <option value='LEGACY' <?php if($_GET['search-community']=='LEGACY'){echo "selected";}?>> Legacy</option>
                    <option value='LONEMTN' <?php if($_GET['search-community']=='LONEMTN'){echo "selected";}?>>  Lone Mountain</option>
                    <option value='LONEMTNW' <?php if($_GET['search-community']=='LONEMTNW'){echo "selected";}?>> Lone Mountain West</option>
                    <option value='LOSPRADOS' <?php if($_GET['search-community']=='LOSPRADOS'){echo "selected";}?>>  Los Prados</option>
                    <option value='LYNBROOK' <?php if($_GET['search-community']=='LYNBROOK'){echo "selected";}?>> Lynbrook</option>
                    <option value='MACDHGLD' <?php if($_GET['search-community']=='MACDHGLD'){echo "selected";}?>> MacDonald Highlands</option>
                    <option value='MACDNLRC' <?php if($_GET['search-community']=='MACDNLRC'){echo "selected";}?>>MacDonald Ranch</option>
                    <option value='MADCNYN' <?php if($_GET['search-community']=='MADCNYN'){echo "selected";}?>>  Madeira Canyon</option>
                    <option value='MCNEILL' <?php if($_GET['search-community']=='MCNEILL'){echo "selected";}?>>  McNeill</option>
                    <option value='MESAVERDE' <?php if($_GET['search-community']=='MESAVERDE'){echo "selected";}?>>  Mesa Verde</option>
                    <option value='MIRAVILLA' <?php if($_GET['search-community']=='MIRAVILLA'){echo "selected";}?>>  Mira Villa</option>
                    <option value='MONACO' <?php if($_GET['search-community']=='MONACO'){echo "selected";}?>> Monaco</option>
                    <option value='MONTECITO' <?php if($_GET['search-community']=='MONTECITO'){echo "selected";}?>>  Montecito</option>
                    <option value='MOUNTNEDGE' <?php if($_GET['search-community']=='MOUNTNEDGE'){echo "selected";}?>> Mountains Edge</option>
                    <option value='MTCHGOLF' <?php if($_GET['search-community']=='MTCHGOLF'){echo "selected";}?>> Mt. Charleston Golf Estates</option>
                    <option value='MTNFALLS' <?php if($_GET['search-community']=='MTNFALLS'){echo "selected";}?>> Mountain Falls</option>
                    <option value='NONE' <?php if($_GET['search-community']=='NONE'){echo "selected";}?>> None</option>
                    <option value='NRTHSH' <?php if($_GET['search-community']=='NRTHSH'){echo "selected";}?>> North Shores</option>
                    <option value='NVTRLS' <?php if($_GET['search-community']=='NVTRLS'){echo "selected";}?>> Nevada Trails</option>
                    <option value='PAINTEDDES' <?php if($_GET['search-community']=='PAINTEDDES'){echo "selected";}?>> Painted Desert</option>
                    <option value='PARADISEHI' <?php if($_GET['search-community']=='PARADISEHI'){echo "selected";}?>> Paradise Hills</option>
                    <option value='PECCOLERCH' <?php if($_GET['search-community']=='PECCOLERCH'){echo "selected";}?>> Peccole Ranch</option>
                    <option value='PKHGLDS' <?php if($_GET['search-community']=='PKHGLDS'){echo "selected";}?>>  Park Highlands</option>
                    <option value='PROVIDENCE' <?php if($_GET['search-community']=='PROVIDENCE'){echo "selected";}?>>Providence</option>
                    <option value='QUEENSRDG' <?php if($_GET['search-community']=='QUEENSRDG'){echo "selected";}?>>  Queensridge</option>
                    <option value='RCHCIR' <?php if($_GET['search-community']=='RCHCIR'){echo "selected";}?>> Rancho Circle </option>
                    <option value='RCHLASPALM' <?php if($_GET['search-community']=='RCHLASPALM'){echo "selected";}?>> Rancho Las Palmas</option>
                    <option value='REDRCKCC' <?php if($_GET['search-community']=='REDRCKCC'){echo "selected";}?>> Red Rock Country Club</option>
                    <option value='RHODESRNC' <?php if($_GET['search-community']=='RHODESRNC'){echo "selected";}?>>  Rhodes Ranch</option>
                    <option value='RIDGES' <?php if($_GET['search-community']=='RIDGES'){echo "selected";}?>> The Ridges</option>
                    <option value='SCOTCHATES' <?php if($_GET['search-community']=='SCOTCHATES'){echo "selected";}?>> Scotch 80s</option>
                    <option value='SEVENHILLS' <?php if($_GET['search-community']=='SEVENHILLS'){echo "selected";}?>> Seven Hills</option>
                    <option value='SHADOWHL' <?php if($_GET['search-community']=='SHADOWHL'){echo "selected";}?>> Shadow Hills</option>
                    <option value='SHGHLANDS' <?php if($_GET['search-community']=='SHGHLANDS'){echo "selected";}?>>  Southern Highlands</option>
                    <option value='SIENA' <?php if($_GET['search-community']=='SIENA'){echo "selected";}?>>  Siena</option>
                    <option value='SILVERADO' <?php if($_GET['search-community']=='SILVERADO'){echo "selected";}?>>  Silverado Ranch</option>
                    <option value='SILVERSPRG' <?php if($_GET['search-community']=='SILVERSPRG'){echo "selected";}?>> Silver Springs</option>
                    <option value='SILVERSTON' <?php if($_GET['search-community']=='SILVERSTON'){echo "selected";}?>> Silverstone Ranch</option>
                    <option value='SMMRLIN' <?php if($_GET['search-community']=='SMMRLIN'){echo "selected";}?>>  Summerlin</option>
                    <option value='SNMACDNLRC' <?php if($_GET['search-community']=='SNMACDNLRC'){echo "selected";}?>> Sunridge at Mac Donald Ranch</option>
                    <option value='SOLE' <?php if($_GET['search-community']=='SOLE'){echo "selected";}?>> Solera</option>
                    <option value='SOUTHFORK' <?php if($_GET['search-community']=='SOUTHFORK'){echo "selected";}?>>  Southfork</option>
                    <option value='SOUTHSHORE' <?php if($_GET['search-community']=='SOUTHSHORE'){echo "selected";}?>> South Shore</option>
                    <option value='SOUTHTER' <?php if($_GET['search-community']=='SOUTHTER'){echo "selected";}?>> Southern Terrace</option>
                    <option value='SOUTHVLYRN' <?php if($_GET['search-community']=='SOUTHVLYRN'){echo "selected";}?>> South Valley Ranch</option>
                    <option value='SPANISHHIL' <?php if($_GET['search-community']=='SPANISHHIL'){echo "selected";}?>> Spanish Hill</option>
                    <option value='SPANISHOAK' <?php if($_GET['search-community']=='SPANISHOAK'){echo "selected";}?>> Spanish Oaks</option>
                    <option value='SPANISHTRL' <?php if($_GET['search-community']=='SPANISHTRL'){echo "selected";}?>> Spanish Trail</option>
                    <option value='SPRNGMTNR' <?php if($_GET['search-community']=='SPRNGMTNR'){echo "selected";}?>>  Spring Mountain Ranch</option>
                    <option value='SPRNGVL' <?php if($_GET['search-community']=='SPRNGVL'){echo "selected";}?>>Spring Valley</option>
                    <option value='STALLNMTN' <?php if($_GET['search-community']=='STALLNMTN'){echo "selected";}?>>  Stallion Mountain</option>
                    <option value='SUMMERLINH' <?php if($_GET['search-community']=='SUMMERLINH'){echo "selected";}?>> Summerlin Hills</option>
                    <option value='SUNCITYALI' <?php if($_GET['search-community']=='SUNCITYALI'){echo "selected";}?>> Sun City Aliante</option>
                    <option value='SUNCITYANT' <?php if($_GET['search-community']=='SUNCITYANT'){echo "selected";}?>> Sun City Anthem</option>
                    <option value='SUNCITYMCD' <?php if($_GET['search-community']=='SUNCITYMCD'){echo "selected";}?>> Sun City MacDonald Ranch</option>
                    <option value='SUNCITYSUM' <?php if($_GET['search-community']=='SUNCITYSUM'){echo "selected";}?>>Sun City Summerlin</option>
                    <option value='SWRANCH' <?php if($_GET['search-community']=='SWRANCH'){echo "selected";}?>>  Southwest Ranch</option>
                    <option value='THEBLUFFS' <?php if($_GET['search-community']=='THEBLUFFS'){echo "selected";}?>>  The Bluffs</option>
                    <option value='THELAKES' <?php if($_GET['search-community']=='THELAKES'){echo "selected";}?>> The Lakes</option>
                    <option value='TIERADLPAL' <?php if($_GET['search-community']=='TIERADLPAL'){echo "selected";}?>> Tierra De Las Palmas</option>
                    <option value='TUSCANY' <?php if($_GET['search-community']=='TUSCANY'){echo "selected";}?>>  Tuscany</option>
                    <option value='TWNCENTER' <?php if($_GET['search-community']=='TWNCENTER'){echo "selected";}?>>  Town Center</option>
                    <option value='WHITNEYRC' <?php if($_GET['search-community']=='WHITNEYRC'){echo "selected";}?>>  Whitney Ranch</option>
                    <option value='WINERY' <?php if($_GET['search-community']=='WINERY'){echo "selected";}?>> Winery</option>
                    <option value='WOODCREST' <?php if($_GET['search-community']=='WOODCREST'){echo "selected";}?>>  Woodcrest</option>
                    <option value='WSMMRLIN' <?php if($_GET['search-community']=='WSMMRLIN'){echo "selected";}?>> Summerlin West</option>

                   </select>
                </div>
              </div>
          </div> 
           <div class="single-form">
            <div class="form-group">
              <div class="col-md-12 col-sm-12 align-left">
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


      </div>
      <div class="col-md-4 col-sm-4">
          <div class="single-form">
            <div class="form-group">
              <div class="col-md-12 col-sm-12 align-left">
                <label class="control-label" for="min_price">Minimum Price</label>
                
                  <input id="min_price" name="min_price"  class="form-control input-md" type="text" value="<?php if(isset($_GET['min_price'])){echo $_GET['min_price'];}?>" >
              </div>
            </div>  
          </div>
          <div class="single-form">
            <div class="form-group">
              <div class="col-md-12 col-sm-12 align-left">
              <label class="control-label" for="max_price">Maximum Price</label>
              <input id="max_price" name="max_price"  class="form-control input-md" type="text" value="<?php if(isset($_GET['max_price'])){echo $_GET['max_price'];}?>">
              </div>
            </div>  
          </div>
          <div class="single-form">
            <div class="form-group">

              <div class="col-md-12 col-sm-12 align-left">
                  <label class="control-label" for="limit">Result Per Page</label>
                  <select class='form-control' name='limit' id='limit'>
                  <option value="25" <?php if($_GET['limit']=='25'){echo "selected";} ?>>25</option>
                  <option value="50" <?php if($_GET['limit']=='50'){echo "selected";} ?>>50</option>
                  <option value="75" <?php if($_GET['limit']=='75'){echo "selected";} ?>>75</option>
                  <option value="100" <?php if($_GET['limit']=='100'){echo "selected";} ?>>100</option>
                      </select>

              </div>
            </div>  
          </div> 



      </div>


      <div class="col-md-4 col-sm-4">
          <div class="single-form">
            <div class="form-group">
              <div class="col-md-12 col-sm-12 align-left">
              <label class="control-label" for="square_feet">Square Feet</label> 
              <input id="square_feet" name="square_feet"  class="form-control input-md" type="text" value="<?php if(isset($_GET['square_feet'])){echo $_GET['square_feet'];}?>">
              </div>
            </div>  
          </div>
          <div class="single-form">
            <div class="form-group">
              <div class="col-md-12 col-sm-12 align-left">
              <label class="control-label" for="max_days_listed">Max Days Listed</label> 
              <input id="max_days_listed" name="max_days_listed"  class="form-control input-md" type="text" value="<?php if(isset($_GET['max_days_listed'])){echo $_GET['max_days_listed'];}?>">
              </div>
            </div>  
          </div>

          <div class="single-form">
              <div class="form-group">
                  <div class="col-md-12 align-left custom-select status-filter">
                  <label class="control-label" for="status">Status</label> 
                  <select class='form-control' name='status[]' id='status' multiple>
                    <option value="Leased" <?php echo(in_array('Leased', $_GET['status']))?'selected="selected"':"";?>>Leased</option>
                    <option value="Sold" <?php echo(in_array('Sold', $_GET['status']))?'selected="selected"':"";?>>Sold</option>
                  </select>
                  </div>
              </div>
          </div>
      </div>  



<!-- Button -->
<div class="col-md-12">
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_search">&nbsp;</label>
  <div class="col-md-4">
  <br>
    <button id="submit_search" name="submit_search" class="search-btn" type='submit'>Search</button>
    <a href="<?php echo site_url().'/'. get_option('RS_Advanced').'/?city='.$_GET["city"].'&postal_code='.$_GET["postal_code"].'&address='.$_GET["address"].'&search-community='.$_GET["search-community"].'&listing_id='.$_GET["listing_id"].'&limit='.$_GET["limit"].'&sort_by='.$_GET["sort_by"].'&check_search=1';?>" id="advance-search-submit-btn" class="search-btn-adv">Advance Search</a>
  </div>
</div>
</div>
</form>

<?php if($_GET['check_search'] == 1){?>
<?php echo get_property_listing($search_result);  ?>
<?php }?>
     
<?php
if(isset($_GET['submit_search'])){
$retsnew = new Rets($_GET, 'homepage_listing');
$search_result = $retsnew->call();
//echo '<pre>';
//print_r($search_result);
//echo '</pre>';
echo get_property_listing($search_result); 
}?>

  </div> 


     <?php if($_GET['check_search'] == 1){?>
        <script type="text/javascript">
          jQuery(document).ready(function($){
          $('#submit_search').unbind().trigger('click');

        });
  
        </script>
        <?php }?>
  

<script type="text/javascript">

  jQuery(document).ready(function() {
    $('#status').multiselect();
    $('#advance-search-submit-btn').click(function(){
      var city = $('#hidden_city').val();
      var status = $('#hidden_status').val();
      var min_price = $('#hidden_min_price').val();
      var max_price = $('#hidden_max_price').val();
      var square_feet = $('#hidden_square_feet').val();
      var max_days_listed = $('#hidden_max_day_list').val();
      var sort_by = $('#hidden_sort_by').val();
      var limit = $('#hidden_limit').val();

     var url = '<?php echo site_url();?>/advance-search?city='+city+'&status='+status+'&min_price='+min_price+'&max_price='+max_price+'&square_feet='+square_feet+'&max_days_listed='+max_days_listed+'&sort_by='+sort_by+'&limit='+limit;
      
      window.location.href = url;
    });
  });
    $(document).on('click','#offset', function(e){  
        e.preventDefault();
    var id = $(this).data('id');
    var submit_search=$('#submit_search').val();
     $('<input />').attr('type', 'hidden')
          .attr('name', "offset")
          .attr('value',id)
          .appendTo('#rets_search_form');
          $('<input />').attr('type', 'hidden')
          .attr('name', "submit_search")
          .attr('value',submit_search)
          .appendTo('#rets_search_form');
          console.log( $( '#rets_search_form' ).serialize() );
      
      $('#rets_search_form').submit();
  });
</script>
