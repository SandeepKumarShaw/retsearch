<!-- pagination start-->
<div class='col-md-12 custom-pagination'>
  
 <?php $result_count= $search_result->fullcount;
 //print_r($search_result);
 //echo $limit; 
 //echo $offset;
  ?>
Total Search Result : <?php if(isset($result_count)) {echo $result_count;} ?>

<?php /* Setup vars for query. *///
/////////////////////////////////////////////////////////


    if(isset($_GET['city']) && $_GET['city']!=""):
        $cities = implode(",",$_GET['city']);
    endif;

    if(isset($_GET['property_type']) && $_GET['property_type']!=""):
        $property_type = $_GET['property_type'];
    endif;

    if(isset($_GET['status']) && $_GET['status']!=""):
        $status = implode(",",$_GET['status']);
    endif;

    if(isset($_GET['property_sub_type']) && $_GET['property_sub_type']!=""):
        $pst = implode(",",$_GET['property_sub_type']);
    endif;
    
    $retsObj = new Rets($_GET);

$total_pages=$result_count;
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
//echo $base_url;
 $url = $base_url.$_SERVER["REQUEST_URI"];
 $targetpage = $url;
 $last_record = $limit*($result_count-1);
      $start=0;
     // $limit=3;
      if(isset($_GET['limit']) && $_GET['limit'] != ""){
    $limit=$_GET['limit'];
  }else{
    $limit=25;
  }
      $id=1;
      $count = 1;
      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        //echo ($id);
        $start=($id-1)*$limit;
        //echo ($start);
      } 
      $rows= $result_count; 
      $whichpage = ($offset/$limit)+1;
      $total=ceil($rows/$limit);       
        //last page minus 1
/* 
          Now we apply our rules and draw the pagination object. 
          We're actually saving the code to a variable in case we want to draw it more than once.
        */
        if($id>1){
            echo "<a href='?id=".($id-1)."&offset=".($id-2)*$limit."&limit=".$limit."'> << </a>" ;
            //echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
        }
        echo "<ul class='pagination'>";
        for($i=1;$i<=$total;$i++){
            if($i==$id) { echo "<li class='select-pagin'><a>".$i."</a></li>"; }

            else { //echo "<li><a href='?id=".$i."&offset=".($i-1)*$limit."&limit=".$limit."'>".$i."</a></li>"; 
                if($count <= 5){
                    echo "<li><a href='?".$retsObj->getQueryString($_GET)."&id=".$i."&offset=".($i-1)*$limit."&limit=".$limit."'>".$i."</a></li>";
                }
            }
            $count++;
        }
        if($total > 5){
            if($whichpage != $total && $whichpage<($total-5)) {
                echo "<li><span>...</span></li>";
                echo "<li><a href='?id=".$last_record."&offset=".$last_record."&limit=".$limit."'>".$total."</a></li>";
            }
            if($id!=$total) {
                  echo "<a href='?id=".($id+1)."&offset=".($id)*$limit."&limit=".$limit."' class='button'> >> </a>";
            }
        }
        echo "</ul>";
  ?>

</div>
<!-- pagination end-->
<div id="map" style="width:100%;height:450px;"> </div>
      <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
          
      <?php foreach(array_slice($search_result->listing, $start, $limit) as $search_value) { ?>
      <?php //echo '<pre>'; print_r($search_value->propertyimage);die(); ?>
        <div class="block">
          <div class="block-pic">
            <a href="<?php echo site_url();?>/view-more/?slug=rets-search&Matrix_Unique_ID=<?php echo $search_value->Matrix_Unique_ID;?>&city=<?php echo $_POST->city;?>&community=<?php echo $_POST->search-community;?>&sort_by=<?php echo $_POST->sort_by;?>&min_price=<?php echo $_POST->min_price;?>&max_price=<?php echo $_POST->max_price;?>&limit=<?php echo $_POST->limit;?>&square_feet=<?php echo $_POST->square_feet; ?>&max_days_listed=<?php echo $_POST->max_days_listed;?>&status=<?php echo(isset($_POST->status) && $_POST->status!="")?implode(",",$_POST->status):'';?>">
<!--             <img src="<?php //echo 'data:'.$search_value->propertyimage[0]->contentType.';base64,'.$search_value->propertyimage[0]->Encoded_image;?>" alt="img">
 -->            <?php //echo $search_value->propertyimage[0]->ContentType; die(); ?>
            <?php if(!empty($search_value->propertyimage[0]->ContentType)){?>
              <img src="<?php echo 'data:'.$search_value->propertyimage[0]->ContentType.';base64,'.$search_value->propertyimage[0]->Encoded_image;?>" alt="img">
            <?php }else{?>
            <img class="prop-dummy-img" src="<?php echo get_template_directory_uri();?>/images/noPhotoFull.png" style="width:34%" alt="img">
            <?php }?>
            </a>
            <span><img src="<?php echo get_template_directory_uri();?>/images/GLVAR_Logo.png" alt="img"></span>  
          </div>
          <?php 
          //if($search_value->PublicAddressYN ==1)
          //{
          ?>
          <h2>
          <?php 
          if($search_value->StreetNumber != ""){
            echo $search_value->StreetNumber.',';
          }
          if($search_value->StreetName != ""){
            echo $search_value->StreetName.',';
          }
          if($search_value->City != ""){
            echo $search_value->City;
          }
          
          ?> 
          </h2>
          <?php //} else{ ?><!-- <h2>Address Not Available</h2> --><?php //} ?>
            <div class="table-responsive block-table">
              <table class="table table-bordered table-striped">
                <tr>
                  <td>
                    <strong>Listing Price:</strong>
                    <?php echo "$".number_format($search_value->ListPrice); ?>
                  </td>
                  <td>
                    <strong>Status:</strong>
                    <?php echo $search_value->Status; ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Bedrooms:</strong>
                    <?php echo $search_value->BedroomsTotalPossibleNum; ?>
                  </td>
                  <td>
                    <strong>Total Baths:</strong>
                    <?php echo (int)$search_value->BathsTotal; ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Full Baths:</strong>
                    <?php echo $search_value->BathsFull; ?>
                  </td>
                  <td>
                    <strong>Partial Baths:</strong>
                    <?php echo $search_value->BathsHalf; ?>
                  </td>
                </tr>
                <tr>
                  <!--<td>
                    <strong>View Dump Data:</strong>
                    <a href="<?php //echo site_url();?>/search-details?Matrix_Unique_ID=<?php //echo $search_value->Matrix_Unique_ID;?>" target="_blank">click to view</a>
                  </td>-->

                  <td>
                    <strong>Square Feet:</strong>
                    <?php echo $search_value->SqFtTotal; ?>
                  </td>

                  <?php if($search_value->NumAcres!=""){ ?>
                  <td>
                    <strong>Acres:</strong>
                    <?php echo $search_value->NumAcres; ?>
                  </td>
                  <?php } ?>
                  
                </tr>
                
                <tr>
                <td>
                <strong>Listing ID:</strong>
                    <?php echo $search_value->MLSNumber; ?>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" style="text-align:center">
                    <?php 
                    //echo get_option('RS_Advanced');
                    global $post;
                    $post_slug=$post->post_name;
                      

                    if( $post_slug == get_option('RS_Advanced')){

                    ?>
                    <a class="more-btn" href="<?php echo site_url().'/'. get_option('RS_NewSearch');?>/?slug=rets-advanced-search&property_type=<?php echo $_GET['property_type']; ?>&Matrix_Unique_ID=<?php echo $search_value->Matrix_Unique_ID;?>&tab-value=<?php echo $_GET['tab-value'];?>&submit_advance_search=1&city=<?php echo $cities; ?>&community=<?php $_GET['search-community'];?>&sort_by=<?php echo $_GET['sort_by'];?>&min_price=<?php echo $_GET['min_price'];?>&max_price=<?php echo $_GET['max_price'];?>&limit=<?php echo $_GET['limit'];?>&square_feet=<?php echo $_GET['square_feet']; ?>&max_days_listed=<?php echo $_GET['max_days_listed'];?>&property_sub_type=<?php echo $pst; ?>&status=<?php echo $status;?>">View More</a>
                    <?php }else{?>
                    <a class="more-btn" href="<?php echo site_url().'/'. get_option('RS_NewSearch');?>/?slug=rets-search&Matrix_Unique_ID=<?php echo $search_value->Matrix_Unique_ID;?>&city=<?php echo $_GET['city']; ?>&community=<?php $_GET['search-community'];?>&sort_by=<?php echo $_GET['sort_by'];?>&min_price=<?php echo $_GET['min_price'];?>&max_price=<?php echo $_GET['max_price'];?>&limit=<?php echo $_GET['limit'];?>&square_feet=<?php echo $_GET['square_feet']; ?>&max_days_listed=<?php echo $_GET['max_days_listed'];?>&status=<?php echo(isset($_GET['status']) && $_GET['status']!="")?implode(",",$_GET['status']):'';?>">View More</a>

                    <?php } ?>
                  </td>  
                </tr>
              </table>
              <hr>
              <a class="btn btn-default btn-sm rets-search-btn" href="<?php echo site_url().'/'. get_option('RS_ModifiedSearchPage');?>?Matrix_Unique_ID=<?php echo $search_value->Matrix_Unique_ID;?>" target="_blank">Photo Gallery(<?php echo $search_value->PhotoCount; ?>)</a>
              <?php if($search_value->VirtualTourLink != ""){?>
              <a class="btn btn-default btn-sm rets-search-btn" href="<?php echo $search_value->VirtualTourLink;?>" target="_blank" >Virtual Tour</a>
              <?php }?>
              
              <!--<a class="btn btn-default btn-sm rets-search-btn">Save Property</a>-->
          </div>  
        </div>
    <?php } ?>
      </div>  
    </div>
   


     <?php // if($_POST->check_search == 1){?>
<!--        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#submit_search').unbind().trigger('click');

            });
  
        </script>-->
    <?php 
//        echo '<pre>';
//        print_r($data);
//        die();
        
// }?>
    
 <script type="text/javascript">

       function initialize() {
    var locations = <?php echo json_encode($data); ?>;
    var locations = $.map(locations, function(value, index) {
    return [value];
    });
    
    var uluru = {lat: 37.0902, lng: -95.7129};
    window.map = new google.maps.Map(document.getElementById('map'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 5,
        center: uluru
    });
    var infoWindowContent = [
            ['<div class="info_content">' +
            '<h3>London Eye</h3>' +
            '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' + '</div>'],
            ['<div class="info_content">' +
            '<h3>Palace of Westminster</h3>' +
            '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
            '</div>']
        ];
    var infowindow = new google.maps.InfoWindow();
    var bounds = new google.maps.LatLngBounds();
    var marker, i;
    
    for (i = 0; i < locations.length; i++) {

      if(locations[i]['latitude']!=null && locations[i]['longitude']!=null){
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i]['latitude'], locations[i]['longitude']),
            map: map,
            title: locations[i]['formatted_address']
        });
      
        bounds.extend(marker.position);
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i]['formatted_address']);
                infowindow.open(map, marker);
            }
        })(marker, i));
      }
    }
    map.fitBounds(bounds);
    var listener = google.maps.event.addListener(map, "idle", function () {
        map.setZoom(10);
        google.maps.event.removeListener(listener);
    });
}
function loadScript() {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDSAFJNI-cBvYbEyBGEGY9B5m62_mWFqRc=&callback=initialize';
    document.body.appendChild(script);
    //old key    AIzaSyDMXQxDIV1IivtZX-olMVz9f3iB-QsWpYs
}
 
window.onload = loadScript;
 
    </script>