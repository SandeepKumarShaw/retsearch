<script src="<?php echo plugins_url(); ?>/rets-search/assets/js/jquery.bxslider.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/rets-search/assets/css/property-details.css">
<?php

$rets = new Rets($_GET,'property_desc/'.$_GET['Matrix_Unique_ID']);
$results = $rets->call(); 

$count = 0;
foreach($results as $listing) {

/*echo '<pre>';
echo $listing->propertyadditional->PublicAddress;
print_r($listing); 
echo '</pre>';*/
if($count == 0){
$agent_mls_id=(int)($listing->MLSNumber);
$urltopost = "http://members.lasvegasrealtor.com/get_members_data?mls_id=".base64_encode($agent_mls_id);
$ch = curl_init ($urltopost);
curl_setopt ($ch, CURLOPT_POST, true);
//curl_setopt ($ch, CURLOPT_POSTFIELDS);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$returndata = curl_exec ($ch);
$obj = json_decode($returndata,true);
?>

<?php
    $agent_name=$listing->propertyadditional->ListAgentFullName;
    list($fname, $lname) = explode(' ', $agent_name,2);
    $agent_fname= $fname;
    $agent_lname= $lname; 

    $agent_mls_id=(int)($listing->propertyadditional->ListAgentMLSID);
    $urltopost = "http://members.lasvegasrealtor.com/get_members_data?mls_id=".base64_encode($agent_mls_id);
    $ch = curl_init ($urltopost);
    curl_setopt ($ch, CURLOPT_POST, true);
    //curl_setopt ($ch, CURLOPT_POSTFIELDS);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    $returndata = curl_exec ($ch);
    $obj = json_decode($returndata,true);
//echo "<pre>";
//print_r($obj);
//var_dump(json_decode($returndata, true));
//echo '</pre>';
?>

<div class="container">
<div class="row">
<div class="col-md-8">
<div class="row">

<div class="butns">
<div class="searchbtn">


<?php
$backurl = $_GET['slug'];
?>
    <?php if( $backurl == 'rets-search'){?>
    <a href="<?php echo site_url().'/'. get_option('RS_Global_Result');?>" class="">New Search</a>
    <?php }elseif ($backurl == 'rets-advanced-search') {?>
    <a href="<?php echo site_url().'/'. get_option('RS_Advanced');?>" class="">New Search</a>

    <?php } ?>
</div>

<!-- <div class="modifybtn">
<a href="<?php //echo site_url();?>/advance-search">Modify Search</a>
</div> -->
<div class="modifybtn">
    <?php if($backurl == 'rets-search'){?>
<form name="search-details-frm" action="<?php echo site_url().'/'. get_option('RS_Global_Result');?>" method="GET">

<input type="hidden" name="city" value="<?php echo $_GET['city'];?>">
<input type="hidden" name="search-community" value="<?php echo(isset($_GET['community']) && $_GET['community']!="")?$_GET['community']:'';?>">
<input type="hidden" name="sort_by" value="<?php echo(isset($_GET['sort_by']) && $_GET['sort_by']!="")?$_GET['sort_by']:'';?>">
<input type="hidden" name="min_price" value="<?php echo(isset($_GET['min_price']) && $_GET['min_price']!="")?$_GET['min_price']:'';?>">
<input type="hidden" name="max_price" value="<?php echo(isset($_GET['max_price']) && $_GET['max_price']!="")?$_GET['max_price']:'';?>">
<input type="hidden" name="limit" value="<?php echo(isset($_GET['limit']) && $_GET['limit']!="")?$_GET['limit']:'';?>">
<input type="hidden" name="square_feet" value="<?php echo(isset($_GET['square_feet']) && $_GET['square_feet']!="")?$_GET['square_feet']:'';?>">
<input type="hidden" name="max_days_listed" value="<?php echo(isset($_GET['max_days_listed']) && $_GET['max_days_listed']!="")?$_GET['max_days_listed']:'';?>">

<input type="hidden" name="status" value="<?php echo $_GET['status'];?>">


<input type="hidden" name="property_type" value="<?php echo(isset($_GET['property_type']) && $_GET['property_type']!="")?$_GET['property_type']:'';?>">

<input type="hidden" name="bathrooms" value="<?php echo(isset($_GET['bathrooms']) && $_GET['bathrooms']!="")?$_GET['bathrooms']:'';?>">

<input type="hidden" name="bedrooms" value="<?php echo(isset($_GET['bedrooms']) && $_GET['bedrooms']!="")?$_GET['bedrooms']:'';?>">

<input type="hidden" name="acres" value="<?php echo(isset($_GET['acres']) && $_GET['acres']!="")?$_GET['acres']:'';?>">

<input type="hidden" name="result_per_page" value="<?php echo(isset($_GET['result_per_page']) && $_GET['result_per_page']!="")?$_GET['result_per_page']:'';?>">

<input type="hidden" name="property_sub_type" value="<?php echo $_GET['property_sub_type'];?>">


<input type="hidden" name="listing_id" value="<?php echo(isset($_GET['listing_id']) && $_GET['listing_id']!="")?$_GET['listing_id']:'';?>">

<input type="hidden" name="county" value="<?php echo $_GET['county'];?>">

<input type="hidden" name="postal_code" value="<?php echo $_GET['postal_code'];?>">


<input type="hidden" name="house_name" value="<?php echo(isset($_GET['house_name']) && $_GET['house_name']!="")?$_GET['house_name']:'';?>">

<input type="hidden" name="house_number" value="<?php echo(isset($_GET['house_number']) && $_GET['house_number']!="")?$_GET['house_number']:'';?>">

<input type="hidden" name="house_deriction" value="<?php echo(isset($_GET['house_deriction']) && $_GET['house_deriction']!="")?$_GET['house_deriction']:'';?>">

<input type="hidden" name="has_image" value="<?php echo(isset($_GET['has_image']) && $_GET['has_image']!="")?$_GET['has_image']:'';?>">

<input type="hidden" name="virtual_tour" value="<?php echo(isset($_GET['virtual_tour']) && $_GET['virtual_tour']!="")?$_GET['virtual_tour']:'';?>">

<input type="hidden" name="open_house" value="<?php echo(isset($_GET['open_house']) && $_GET['open_house']!="")?$_GET['open_house']:'';?>">


<input type="hidden" name="address_type" value="<?php echo(isset($_GET['address_type']) && $_GET['address_type']!="")?$_GET['address_type']:'';?>">


<input type="hidden" name="check_search" value="1">

<input type="submit" name="submit" class="search-details-btn" value="Modify Search">

</form>
<?php }elseif ($backurl == 'rets-advanced-search'){?> 
<??>
<form name="search-details-frm" action="<?php echo site_url().'/'. get_option('RS_Advanced');?>" method="GET">


<?php 
if(isset($_GET['city']) && $_GET['city']!=""):
$cities = explode(",",$_GET['city']);
endif;
?>
<?php foreach($cities as $city):?>
<input type="hidden" name="city[]" value="<?php echo $city;?>">
<?php endforeach;?>
<input type="hidden" name="tab-value" value="<?php echo(isset($_GET['tab-value']) && $_GET['tab-value']!="")?$_GET['tab-value']:'';?>">
<input type="hidden" name="submit_advance_search" value="<?php echo(isset($_GET['submit_advance_search']) && $_GET['submit_advance_search']!="")?$_GET['submit_advance_search']:'';?>">

<input type="hidden" name="search-community" value="<?php echo(isset($_GET['community']) && $_GET['community']!="")?$_GET['community']:'';?>">
<input type="hidden" name="sort_by" value="<?php echo(isset($_GET['sort_by']) && $_GET['sort_by']!="")?$_GET['sort_by']:'';?>">
<input type="hidden" name="min_price" value="<?php echo(isset($_GET['min_price']) && $_GET['min_price']!="")?$_GET['min_price']:'';?>">
<input type="hidden" name="max_price" value="<?php echo(isset($_GET['max_price']) && $_GET['max_price']!="")?$_GET['max_price']:'';?>">
<input type="hidden" name="limit" value="<?php echo(isset($_GET['limit']) && $_GET['limit']!="")?$_GET['limit']:'';?>">
<input type="hidden" name="square_feet" value="<?php echo(isset($_GET['square_feet']) && $_GET['square_feet']!="")?$_GET['square_feet']:'';?>">
<input type="hidden" name="max_days_listed" value="<?php echo(isset($_GET['max_days_listed']) && $_GET['max_days_listed']!="")?$_GET['max_days_listed']:'';?>">

<?php 
if(isset($_GET['status']) && $_GET['status']!=""):
$sts = explode(",",$_GET['status']);
endif;
?>
<?php foreach($sts as $st):?>
<input type="hidden" name="status[]" value="<?php echo $st;?>">
<?php endforeach;?>


<input type="hidden" name="property_type" value="<?php echo(isset($_GET['property_type']) && $_GET['property_type']!="")?$_GET['property_type']:'';?>">

<input type="hidden" name="bathrooms" value="<?php echo(isset($_GET['bathrooms']) && $_GET['bathrooms']!="")?$_GET['bathrooms']:'';?>">

<input type="hidden" name="bedrooms" value="<?php echo(isset($_GET['bedrooms']) && $_GET['bedrooms']!="")?$_GET['bedrooms']:'';?>">

<input type="hidden" name="acres" value="<?php echo(isset($_GET['acres']) && $_GET['acres']!="")?$_GET['acres']:'';?>">

<input type="hidden" name="result_per_page" value="<?php echo(isset($_GET['result_per_page']) && $_GET['result_per_page']!="")?$_GET['result_per_page']:'';?>">


<?php 
if(isset($_GET['property_sub_type']) && $_GET['property_sub_type']!=""):
$pst = explode(",",$_GET['property_sub_type']);
endif;
?>
<?php foreach($pst as $pt):?>
<input type="hidden" name="property_sub_type[]" value="<?php echo $pt;?>">
<?php endforeach;?>


<input type="hidden" name="listing_id" value="<?php echo(isset($_GET['listing_id']) && $_GET['listing_id']!="")?$_GET['listing_id']:'';?>">


<?php 
if(isset($_GET['county']) && $_GET['county']!=""):
$countys = explode(",",$_GET['county']);
endif;
?>
<?php foreach($countys as $cty):?>
<input type="hidden" name="county[]" value="<?php echo $cty;?>">
<?php endforeach;?>


<?php 
if(isset($_GET['postal_code']) && $_GET['postal_code']!=""):
$postals = explode(",",$_GET['postal_code']);
endif;
?>
<?php foreach($postals as $postal):?>
<input type="hidden" name="postal_code[]" value="<?php echo $postal;?>">
<?php endforeach;?>


<input type="hidden" name="house_name" value="<?php echo(isset($_GET['house_name']) && $_GET['house_name']!="")?$_GET['house_name']:'';?>">

<input type="hidden" name="house_number" value="<?php echo(isset($_GET['house_number']) && $_GET['house_number']!="")?$_GET['house_number']:'';?>">

<input type="hidden" name="house_deriction" value="<?php echo(isset($_GET['house_deriction']) && $_GET['house_deriction']!="")?$_GET['house_deriction']:'';?>">

<input type="hidden" name="has_image" value="<?php echo(isset($_GET['has_image']) && $_GET['has_image']!="")?$_GET['has_image']:'';?>">

<input type="hidden" name="virtual_tour" value="<?php echo(isset($_GET['virtual_tour']) && $_GET['virtual_tour']!="")?$_GET['virtual_tour']:'';?>">

<input type="hidden" name="open_house" value="<?php echo(isset($_GET['open_house']) && $_GET['open_house']!="")?$_GET['open_house']:'';?>">


<input type="hidden" name="address_type" value="<?php echo(isset($_GET['address_type']) && $_GET['address_type']!="")?$_GET['address_type']:'';?>">


<input type="hidden" name="check_search" value="1">

<input type="submit" name="submit" class="search-details-btn" value="Modify Search">

</form>

<?php }?> 


</div>

<div class="backbtn">


<a href='javascript:void(0);' onclick="window.history.back()">Back to Results</a> 

<!--<a href="#" class="">Back to Results</a>-->
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="links">
    <?php if ($listing->VirtualTourLink != NULL) {?>
<a href="<?php echo $listing->VirtualTourLink;?>">Virtual Tour</a>
<?php } ?>
<?php 
if ($listing->Status!="Leased" && $listing->propertyfeature->PropertyType!="Residential Rental"){
?>
<a href="<?php echo site_url().'/'. get_option('RS_Mortgagesearch');?>?Matrix_Unique_ID=<?php echo $listing->Matrix_Unique_ID;?>">Mortgage Calculator</a>
<?php } ?>
<a target="_blank" href="<?php echo site_url().'/'. get_option('RS_PrintableFlyer');?>?Matrix_Unique_ID=<?php echo $listing->Matrix_Unique_ID;?>">Printable Flyer</a>
</div>
</div>

<div class="row slide-sec">
<div class="sliderbox">
<div class="slide-main">
<ul class="bxslider">
<?php 

$photos = $listing->propertyimage;

$photos2 = $listing->propertyimage;

foreach ($photos as $photo) {
$listing = $photo->ContentId;
$number = $photo->ObjectId;
if ($photo->Success == true) {
$contentType = $photo->ContentType;
//$base64 = base64_encode($photo->Encoded_image); 
echo "<li><img class='gallery-img' src='data:{$contentType};base64,{$photo->Encoded_image}' /></li>";

}

else {
?>
<a data-slide-index="0" href=''><img src="<?php echo get_template_directory_uri();?>/images/noPhotoFull.png"></a>
<?php
}
}
//$rets->FreeResult($search);
?>
</ul>
</div>
<div id="bx-pager">
<?php 

$i=0;
foreach ($photos2 as $photo2) {
$listing = $photo2->ContentId;
$number = $photo2->ObjectId;
if ($photo2->Success == true) {
$contentType = $photo2->ContentType; 
echo "<a data-slide-index='".$i."' href=''><img class='gallery-img' src='data:{$contentType};base64,{$photo2->Encoded_image}' /></a>"; 

}
else {
?>

<a data-slide-index="0" href=''><img src="<?php echo get_template_directory_uri();?>/images/noPhotoFull.png"></a>
<?php
}
$i++;
}
//$rets->FreeResult($search);
?>
</div>
</div>
</div>
<?php 
}
$count++;
}
?>
<?php $c = 0;foreach($results as $listing) { if($c == 0){?>
<div class="clear"></div>
<div class="row">
<div class="viewgallery">
<a class="" href="<?php echo site_url().'/'. get_option('RS_ModifiedSearchPage');?>?Matrix_Unique_ID=<?php echo $listing->Matrix_Unique_ID;?>" target="_blank">View Photo Gallery(<?php echo $listing->PhotoCount; ?>)</a>

</div>
</div>

<div class="clear"></div>
<div class="row">
<div class="social-links">

</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detail-address">
<?php 

if($listing->PublicAddressYN ==1)
{
?>

<a href="#"><?php echo $listing->propertyadditional->PublicAddress;?></a>
<?php } else{ ?><h4>Address Not Available</h4><?php } ?>
</div>
</div>
<div class="row">
<div class="listing">
<div class="head">Listing: <?php echo $listing->MLSNumber;?></div>
<div class="list-body">
<div>
<p><strong>Listing Price:</strong> <span>$<?php echo number_format($listing->ListPrice);?></span></p>
</div>
<!--<span class="monthlypay">Est. Monthly Payment: $128,837.19 <a href="#">See Details </a></span>-->
<div>
<p><strong>Status: </strong> <?php echo $listing->Status;?></p>
</div>
<div>
<p><strong>Bedrooms: </strong> <?php echo $listing->BedroomsTotalPossibleNum;?></p>
</div>
<div>
<p><strong>Total Baths: </strong> <?php echo (int)$listing->BathsTotal;?></p>
</div>
<div>
<p><strong>Full Baths: </strong> <?php echo $listing->BathsFull;?></p>
</div>
<div>
<p><strong>Partial Baths: </strong> <?php echo $listing->BathsHalf;?></p>
</div>
<div>
<p><strong>Square Feet: </strong> <?php echo $listing->SqFtTotal;?></p>
</div>
<div>
<p><strong>Acres: </strong> <?php echo $listing->NumAcres;?></p>
</div>
<div>
<p><strong>Year Built: </strong> <?php echo $listing->YearBuilt;?></p>
</div>
<div>
<p><strong>Property Type: </strong><?php echo $listing->PropertyType;?></p>
</div>
<div>
<p><strong>Property Sub Type: </strong> <?php echo $listing->PropertySubType;?></p>
</div>

</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="description">
<?php echo $listing->propertyadditional->PublicRemarks;?>
</div>
</div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">Primary Features</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>County: </strong> <?php echo $listing->propertyfeature->CountyOrParish;?></p>
</div>
<div>
<p><strong>Property Type: </strong> <?php echo $listing->propertyfeature->PropertyType;?></p>
</div>
</div>
<div class="col-md-6">
<div>
<p><strong>Year Built: </strong> <?php echo $listing->propertyfeature->YearBuilt;?></p>
</div>
<div>
<p><strong>Zoning: </strong><?php echo $listing->propertyfeature->Zoning;?></p>
</div>
</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">External Features</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>Building Description: </strong> <?php echo $listing->propertyexternalfeature->BuildingDescription;?></p>
</div>
<div>
<p><strong>Built Description: </strong><?php echo $listing->propertyexternalfeature->BuiltDescription;?></p>
</div>
<div>
<p><strong>Construction Description: </strong> <?php echo $listing->propertyexternalfeature->ConstructionDescription;?></p>
</div>
<div>
<p><strong>Converted Garage: </strong> <?php $Con_gar= $listing->propertyexternalfeature->ConvertedGarageYN;if($Con_gar=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Equestrian Description: </strong> <?php echo $listing->propertyexternalfeature->EquestrianDescription;?></p>
</div>
<div>
<p><strong>Exterior Description: </strong> <?php echo $listing->propertyexternalfeature->ExteriorDescription;?></p>
</div>
<div>
<p><strong>Fence: </strong> <?php echo $listing->propertyexternalfeature->Fence;?></p>
</div>
<div>
<p><strong>Fence Type: </strong> <?php echo $listing->propertyexternalfeature->FenceType;?></p>
</div>
<div>
<p><strong>Garage: </strong> <?php echo $listing->propertyexternalfeature->Garage;?></p>
</div>
<div>
<p><strong>Garage Description: </strong> <?php echo $listing->propertyexternalfeature->GarageDescription;?></p>
</div>
<div>
<p><strong>House Views: </strong> <?php echo $listing->propertyexternalfeature->HouseViews;?></p>
</div>
</div>
<div class="col-md-6">
<div>
<p><strong>Landscape Description: </strong> <?php echo $listing->propertyexternalfeature->LandscapeDescription;?></p>
</div>
<div>
<p><strong>Lot Description: </strong> <?php echo $listing->propertyexternalfeature->LotDescription;?></p>
</div>
<div>
<p><strong>Lot SqFt: </strong> <?php echo $listing->propertyexternalfeature->LotSqft;?></p>
</div>
<div>
<p><strong>Parking Description: </strong> <?php echo $listing->propertyexternalfeature->ParkingDescription;?></p>
</div>
<div>
<p><strong>Pool Description: </strong> <?php echo $listing->propertyexternalfeature->PoolDescription;?></p>
</div>
<div>
<p><strong>Private Pool: </strong> <?php echo $listing->propertyexternalfeature->PvPool;?></p>
</div>
<div>
<p><strong>Roof Description: </strong> <?php echo $listing->propertyexternalfeature->RoofDescription;?></p>
</div><div>
<p><strong>Sewer: </strong> <?php echo $listing->propertyexternalfeature->Sewer;?></p>
</div>
<div>
<p><strong>Solar Electric: </strong> <?php echo $listing->propertyexternalfeature->SolarElectric;?></p>
</div><div>
<p><strong>Type: </strong> <?php echo $listing->propertyexternalfeature->Type;?></p>
</div><div>
<p><strong>Built Description: </strong> <?php echo $listing->propertyexternalfeature->BuiltDescription;?></p>
</div>

</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">Additional</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>Age Restricted Community: </strong><?php echo $listing->propertyadditional->AgeRestrictedCommunityYN;?></p>
</div>
<div>
<p><strong>Assessment: </strong> <?php echo $listing->propertyadditional->Assessments;?></p>
</div>
<div>
<p><strong>Association Features Available: </strong><?php echo $listing->propertyadditional->AssociationFeaturesAvailable;?></p>
</div>
<div>
<p><strong>Association Fee Includes: </strong><?php echo $listing->propertyadditional->AssociationFeeIncludes;?></p>
</div>
<div>
<p><strong>Association Name: </strong><?php echo $listing->propertyadditional->AssociationName;?></p>
</div>
<div>
<p><strong>Builder: </strong><?php echo $listing->propertyadditional->Builder;?></p>
</div>
<div>
<p><strong>Census Tract: </strong><?php echo $listing->propertyadditional->CensusTract;?></p>
</div>
<div>
<p><strong>Court Approval: </strong><?php if($listing->propertyadditional->CourtApproval=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>
<div>
<p><strong>Days on Market: </strong><?php echo $listing->propertyadditional->DOM;?></p>
</div>
<div>
<p><strong>Gated: </strong><?php if($listing->propertyadditional->GatedYN=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>
<div>
<p><strong>Green Building Certification: </strong><?php if($listing->propertyadditional->GreenBuildingCertificationYN=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>
<div>
<p><strong>Half Baths: </strong><?php echo $listing->propertyadditional->BathsHalf;?></p>
</div>
<div>
<p><strong>Listing Agreement Type: </strong><?php echo $listing->propertyadditional->ListingAgreementType;?></p>
</div>
<div>
<p><strong>Litigation: </strong><?php echo $listing->propertyadditional->Litigation;?></p>
</div>
</div>
<div class="col-md-6">
<div>
<p><strong>Master Plan Fee MQYN: </strong> <?php echo $listing->propertyadditional->MasterPlanFeeMQYN;?></p>
</div>
<div>
<p><strong>Miscellaneous Description: </strong> <?php echo $listing->propertyadditional->MiscellaneousDescription;?></p>
</div>
<div>
<p><strong>Model: </strong><?php echo $listing->propertyadditional->Model;?></p>
</div>
<div>
<p><strong>Owner Licensee: </strong><?php echo $listing->propertyadditional->OwnerLicensee;?></p>
</div>
<div>
<p><strong>Ownership: </strong><?php echo $listing->propertyadditional->Ownership;?></p>
</div>
<div>
<p><strong>Power On/Off: </strong><?php echo $listing->propertyadditional->PoweronorOff;?></p>
</div>
<div>
<p><strong>Property Description: </strong><?php echo $listing->propertyadditional->PropertyDescription;?></p>
</div>
<div>
<p><strong>Property Sub Type: </strong><?php echo $listing->propertyadditional->PropertySubType;?></p>
</div>
<div>
<p><strong>Public Address: </strong><?php 
if($listing->propertyadditional->PublicAddressYN ==1)
{
?><?php echo $listing->propertyadditional->PublicAddress;?><?php } else{ ?><h4>Address Not Available</h4><?php } ?></p>
</div>
<div>
<p><strong>Realtor: </strong><?php if($listing->propertyadditional->RealtorYN=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>
<div>
<p><strong>Refrigerator: </strong><?php if($listing->propertyadditional->RefrigeratorYN=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>
<div>
<p><strong>Spa: </strong><?php echo $listing->propertyadditional->Spa;?></p>
</div>
<div>
<p><strong>Spa Description: </strong><?php echo $listing->propertyadditional->SpaDescription;?></p>
</div>
<div>
<p><strong>Year Round School: </strong><?php if($listing->propertyadditional->YearRoundSchoolYN=='0'){echo 'no';}else{echo 'yes';}?></p>
</div>

</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">Financial Details</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>Annual Property Taxes: </strong><?php echo $listing->propertyadditional->AgeRestrictedCommunityYN;?></p>
</div>
<div>
<p><strong>Association Fee: </strong> <?php echo $listing->propertyadditional->Assessments;?></p>
</div>
<div>
<p><strong>Association Fee 1: </strong><?php echo $listing->propertyadditional->AssociationFeaturesAvailable;?></p>
</div>
<div>
<p><strong>Association Fee 1 MQYN : </strong><?php echo $listing->propertyadditional->AssociationFeeIncludes;?></p>
</div>
<div>
<p><strong>AVM: </strong><?php echo $listing->propertyadditional->AssociationName;?></p>
</div>
<div>
<p><strong>Current Price: </strong><?php echo $listing->propertyadditional->Builder;?></p>
</div>
<div>
<p><strong>Earnest Deposit: </strong><?php echo $listing->propertyadditional->CensusTract;?></p>
</div>

</div>
<div class="col-md-6">
<div>
<p><strong>Financing Considered: </strong> <?php echo $listing->propertyadditional->MiscellaneousDescription;?></p>
</div>
<div>
<p><strong>Foreclosure Commenced: </strong><?php echo $listing->propertyadditional->Model;?></p>
</div>
<div>
<p><strong>Master Plan Fee Amount: </strong><?php echo $listing->propertyadditional->OwnerLicensee;?></p>
</div>
<div>
<p><strong>Ratio Current Price By SqFt: </strong><?php echo $listing->propertyadditional->Ownership;?></p>
</div>
<div>
<p><strong>Reposession/REO: </strong><?php echo $listing->propertyadditional->PoweronorOff;?></p>
</div>
<div>
<p><strong>Short Sale: </strong><?php echo $listing->propertyadditional->PropertyDescription;?></p>
</div>
<div>
<p><strong>SID/LID: </strong><?php echo $listing->propertyadditional->PropertySubType;?></p>
</div>


</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">Interior Features</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>Approximate Total Living Area: </strong><?php echo $listing->propertyinteriorfeature->ApproxTotalLivArea;?></p>
</div>
<div>
<p><strong>Bath Downstairs: </strong><?php if($listing->propertyinteriorfeature->BathDownYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Bath Downstairs Description: </strong><?php echo $listing->propertyinteriorfeature->BathDownstairsDescription;?></p>
</div>
<div>
<p><strong>Bedroom Downstairs: </strong><?php if($listing->propertyinteriorfeature->BedroomDownstairsYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Bedrooms Total Possible Number ofber: </strong><?php echo $listing->propertyinteriorfeature->BedroomsTotalPossibleNum;?></p>
</div>
<div>
<p><strong>Cooling Description: </strong><?php echo $listing->propertyinteriorfeature->CoolingDescription;?></p>
</div>
<div>
<p><strong>Cooling Fuel: </strong><?php echo $listing->propertyinteriorfeature->CoolingFuel;?></p>
</div>
<div>
<p><strong>Dishwasher: </strong><?php if($listing->propertyinteriorfeature->DishwasherYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Disposal: </strong><?php if($listing->propertyinteriorfeature->DisposalYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Dryer Included: </strong><?php if($listing->propertyinteriorfeature->DryerIncluded=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Dryer Utilities: </strong><?php echo $listing->propertyinteriorfeature->DryerUtilities;?></p>
</div>
<div>
<p><strong>Energy Description: </strong><?php echo $listing->propertyinteriorfeature->EnergyDescription;?></p>
</div>
<div>
<p><strong>Fireplace Description: </strong><?php echo $listing->propertyinteriorfeature->FireplaceDescription;?></p>
</div>
<div>
<p><strong>Fireplace Location: </strong><?php echo $listing->propertyinteriorfeature->FireplaceLocation;?></p>
</div>
<div>
<p><strong>Fireplaces: </strong><?php echo $listing->propertyinteriorfeature->Fireplaces;?></p>
</div>
<div>
<p><strong>Flooring Description: </strong><?php echo $listing->propertyinteriorfeature->FlooringDescription;?></p>
</div>
</div>
<div class="col-md-6">
<div>
<p><strong>Furnishings Description: </strong> <?php echo $listing->propertyinteriorfeature->FurnishingsDescription;?></p>
</div>
<div>
<p><strong>Heating Description: </strong><?php echo $listing->propertyinteriorfeature->HeatingDescription;?></p>
</div>
<div>
<p><strong>Heating Fuel: </strong><?php echo $listing->propertyinteriorfeature->HeatingFuel;?></p>
</div>
<div>
<p><strong>Interior: </strong><?php echo $listing->propertyinteriorfeature->Interior;?></p>
</div>
<div>
<p><strong>Number of Den Other: </strong><?php echo $listing->propertyinteriorfeature->NumDenOther;?></p>
</div>
<div>
<p><strong>Other Appliance Description: </strong><?php echo $listing->propertyinteriorfeature->OtherApplianceDescription;?></p>
</div>
<div>
<p><strong>Oven Description: </strong><?php echo $listing->propertyinteriorfeature->OvenDescription;?></p>
</div>
<div>
<p><strong>Room Count: </strong> <?php echo $listing->propertyinteriorfeature->RoomCount;?></p>
</div>
<div>
<p><strong>Three Quarter Baths: </strong> <?php echo $listing->propertyinteriorfeature->ThreeQtrBaths;?></p>
</div>
<div>
<p><strong>Utility Information: </strong> <?php echo $listing->propertyinteriorfeature->UtilityInformation;?></p>
</div>
<div>
<p><strong>Washer Included: </strong> <?php if($listing->propertyinteriorfeature->WasherIncluded=='0'){echo 'No';}else{echo 'Yes';}?></p>
</div>
<div>
<p><strong>Washer/Dryer Location: </strong> <?php echo $listing->propertyinteriorfeature->WasherDryerLocation;?></p>
</div>
<div>
<p><strong>Water: </strong> <?php echo $listing->propertyinteriorfeature->Water;?></p>
</div>


</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="row">
<div class="detailscontainer">
<div class="head">
<a href="#">Location Information</a>
<i class="fa fa-caret-up up" aria-hidden="true"></i>
<i class="fa fa-caret-down down" aria-hidden="true"></i>
</div>
<div class="list-body">
<div class="col-md-6">
<div>
<p><strong>Area: </strong><?php echo $listing->propertylocation->Area;?></p>
</div>
<div>
<p><strong>Community Name: </strong> <?php echo $listing->propertylocation->CommunityName;?></p>
</div>
<div>
<p><strong>Elementary School 3-5: </strong><?php echo $listing->propertylocation->ElementarySchool35;?></p>
</div>
<div>
<p><strong>Elementary School K-2 : </strong><?php echo $listing->propertylocation->ElementarySchoolK2;?></p>
</div>
<div>
<p><strong>High School: </strong><?php echo $listing->propertylocation->HighSchool;?></p>
</div>
<div>
<p><strong>House Faces: </strong><?php echo $listing->propertylocation->HouseFaces;?></p>
</div>


</div>
<div class="col-md-6">
<div>
<p><strong>Jr High School: </strong> <?php echo $listing->propertylocation->JrHighSchool;?></p>
</div>
<div>
<p><strong>Parcel Number: </strong><?php echo $listing->propertylocation->ParcelNumber;?></p>
</div>
<div>
<p><strong>Street Number Numeric: </strong><?php echo $listing->propertylocation->StreetNumberNumeric;?></p>
</div>
<div>
<p><strong>Subdivision Name: </strong><?php echo $listing->propertylocation->SubdivisionName;?></p>
</div>
<div>
<p><strong>Subdivision Number: </strong><?php echo $listing->propertylocation->SubdivisionNumber;?></p>
</div>
<div>
<p><strong>Subdivision Number Search: </strong><?php echo $listing->propertylocation->SubdivisionNumSearch;?></p>
</div>
<div>
<p><strong>Tax District: </strong><?php echo $listing->propertylocation->TaxDistrict;?></p>
</div>


</div>
</div>
</div>
</div>
</div>
<div class="col-md-4 agent_details">
           
            <p><strong ><span style="font-size: 21px;">Realtor name : </span><?php echo $listing->propertyadditional->ListAgentFullName;?></strong></p> 
            <p><strong ><span style="font-size: 21px;">Realtor office : </span><?php echo $listing->propertyadditional->ListOfficeName;?></strong><p>
                <p>Contact info</p>
            <p><strong ><span style="font-size: 21px;">Phone : </span><?php echo $listing->propertyadditional->ListAgentDirectWorkPhone;?></strong><p>
            <p><strong ><span style="font-size: 21px;">Mls Id : </span><?php echo (int)$listing->propertyadditional->ListAgentMLSID;?></strong><p>
                
                
                
</div>

<div class="clear"></div>
</div>
</div>
<?php 
}
$c++;
}

?>

<script type="text/javascript">
$(document).ready(function(){
$('.head i.up').click(function(e){
var divlist = $(this).parent().parent().find($('.list-body'));
$(divlist).slideUp(500);
$(this).hide();
$(this).parent().find($('.down')).show();
e.preventDefault();
});
$('.head i.down').click(function(e){
var divlist = $(this).parent().parent().find($('.list-body'));
$(divlist).slideDown(500);
$(this).hide();
$(this).parent().find($('.up')).show();
e.preventDefault();
});
});
</script>
<script type="text/javascript">
jQuery(document).ready(function(){ 
    jQuery('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        auto: true,
    });
});
</script>