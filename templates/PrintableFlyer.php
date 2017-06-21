<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Las Vegas</title>

<link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
<!--<link href="css/style.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" href="<?php echo plugins_url(); ?>/rets-search/assets/css/PrintableFlyer.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/fonts/font-awesome/css/font-awesome.min.css">

<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
$rets = new Rets($_GET,'printable_flyer/'.$_GET['Matrix_Unique_ID']);
$results = $rets->call();
/*echo '<pre>';
print_r($results);
exit;*/

//print_r($search);
foreach($results as $listing) {

   /* echo '<pre>';
    print_r($listing);	
	echo '</pre>'; die();*/
    //$photos = $rets->GetObject("Property", "LargePhoto", $listing['Matrix_Unique_ID'], "*", 0);
    //print_r(expression)
    $photos = $listing->propertyimage;
     ?>
     <section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="pagewrapper row">
					<p class="top-txt">For more information on this property, contact GLVAR at 702-784-5000 or martin.kenney@gmail.com</p>
					<h1><?php echo $listing->PublicAddress.', '.$listing->City.', '.$listing->StateOrProvince.' '.$listing->PostalCode ;?> </h1>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="detaildivpic row">
							<?php 
							$key=0;
							foreach ($photos as $photo) {
						        
								if($key==1){break;}	
						        $listing2 = $photo->ContentId;
						        $number = $photo->ObjectId;

						    if ($photo->Success == true) {
						        $contentType = $photo->ContentType;
						        //$base64 = base64_encode($photo->Encoded_image); 
						        echo "<img class='gallery-img' src='data:{$contentType};base64,{$photo->Encoded_image}' width='100%'/>";
						        
						    }
						    else {
						        //echo "({$listing}-{$number}): {$photo['ReplyCode']} = {$photo['ReplyText']}\n";
						    }
						    $key++;
						  } 
						  ?>
						
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="detaildiv">
							<h2>Price: $<?php echo $listing->ListPrice?></h2>
							<!--<p>Est. Monthly Payment: $94,480.61 <a href="#">See Details</a></p>-->
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Listing ID:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->Matrix_Unique_ID;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Status:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->Status;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Bedrooms:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->BedroomsTotalPossibleNum;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Total Baths:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo (int)$listing->BathsTotal;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Partial Baths:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->BathsHalf;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Square Feet:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->SqFtTotal;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Acres:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->NumAcres;?></p>
									</div>
								</div>
							</div>
							<div class="eachline">
								<div class="col-md-3 col-xs-3">
									<div class="row">
										<p class="fieldLabel">Year Built:</p>
									</div>
								</div>
								<div class="col-md-9 col-xs-3">
									<div class="row">
										<p class="fieldData"><?php echo $listing->propertyfeature->YearBuilt;?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="socialshare">
						
					</div>
				</div>
				<div class="row">
					<div class="section">
						<h3>Property Description:</h3>
						<p><?php echo $listing->PublicRemarks;?></p>
					</div>
				</div>
				<div class="row">
					<div class="section">
						<h3>Primary Features:</h3>
						<div class="col-md-6">
							<p><strong>County:</strong> 
								<?php echo $listing->propertyfeature->CountyOrParish;?></p>
							<p><strong>Property Type:</strong> 
								<?php echo $listing->propertyfeature->PropertyType;?></p>
						</div>
						<div class="col-md-6">
							<p><strong>Year Built:</strong>
								<?php echo $listing->propertyfeature->YearBuilt;?></p>
							<p><strong>Zoning:</strong>
								<?php echo $listing->propertyfeature->Zoning;?></p>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="section">
						<h3>External Features:</h3>
						<div class="col-md-6">
							<p><strong>Building Description:</strong> <?php echo $listing->propertyexternalfeature->BuildingDescription;?></p>
							<p><strong>Built Description:</strong><?php echo $listing->propertyexternalfeature->BuiltDescription;?></p>
							<p><strong>Construction Description:</strong> <?php echo $listing->propertyexternalfeature->ConstructionDescription;?></p>
							<p><strong>Converted Garage:</strong> 
								<?php $Con_gar= $listing->propertyexternalfeature->ConvertedGarageYN;
								if($Con_gar=='0'){echo 'No';}else{echo 'Yes';}
								?>
							</p>
							<p><strong>Equestrian Description:</strong> 
								<?php echo $listing->propertyexternalfeature->EquestrianDescription;?></p>
							<p><strong>Exterior Description:</strong>
								<?php echo $listing->propertyexternalfeature->ExteriorDescription;?></p>
							<p><strong>Fence:</strong>
								<?php echo $listing->propertyexternalfeature->Fence;?></p>
							<p><strong>Fence Type:</strong>
								<?php echo $listing->propertyexternalfeature->FenceType;?></p>
							<p><strong>Garage:</strong>
								<?php echo $listing->propertyexternalfeature->Garage;?></p>
							<p><strong>Garage Description:</strong>
								<?php echo $listing->propertyexternalfeature->GarageDescription;?></p>
							<p><strong>House Views:</strong>
								<?php echo $listing->propertyexternalfeature->HouseViews;?></p>
						</div>
						<div class="col-md-6">
							<p><strong>Landscape Description:</strong>
								<?php echo $listing->propertyexternalfeature->LandscapeDescription;?></p>
							<p><strong>Lot Description:</strong>
								<?php echo $listing->propertyexternalfeature->LotDescription;?></p>
							<p><strong>Lot SqFt:</strong>
								<?php echo $listing->propertyexternalfeature->LotSqft;?></p>
							<p><strong>Parking Description:</strong>
								<?php echo $listing->propertyexternalfeature->ParkingDescription;?></p>
							<p><strong>Pool Description:</strong>
								<?php echo $listing->propertyexternalfeature->PoolDescription;?></p>
							<p><strong>Private Pool:</strong>
								<?php echo $listing->propertyexternalfeature->PvPool;?></p>
							<p><strong>Roof Description:</strong>
								<?php echo $listing->propertyexternalfeature->RoofDescription;?></p>

									<p><strong>Sewer:</strong> 
										<?php echo $listing->propertyexternalfeature->Sewer;?></p>
								
									<p><strong>Solar Electric:</strong> 
										<?php echo $listing->propertyexternalfeature->SolarElectric;?></p>
								
									<p><strong>Type:</strong> 
										<?php echo $listing->propertyexternalfeature->Type;?></p>
								
									<p><strong>Built Description:</strong> 
										<?php echo $listing->propertyexternalfeature->BuiltDescription;?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="section">
						<h3>Additional:</h3>
						<div class="col-md-6">
							
									<p><strong>Age Restricted Community:</strong><?php echo $listing->propertyadditional->AgeRestrictedCommunityYN;?></p>
								
									<p><strong>Assessment:</strong> <?php echo $listing->propertyadditional->Assessments;?></p>
								
									<p><strong>Association Features Available:</strong><?php echo $listing->propertyadditional->AssociationFeaturesAvailable;?></p>
								
									<p><strong>Association Fee Includes :</strong><?php echo $listing->propertyadditional->AssociationFeeIncludes;?></p>
								
									<p><strong>Association Name:</strong><?php echo $listing->propertyadditional->AssociationName;?></p>
								
									<p><strong>Builder:</strong><?php echo $listing->propertyadditional->Builder;?></p>
								
									<p><strong>Census Tract:</strong><?php echo $listing->propertyadditional->CensusTract;?></p>
								
									<p><strong>Court Approval:</strong><?php if($listing->propertyadditional->CourtApproval=='0'){echo 'no';}else{echo 'yes';}?></p>
								
									<p><strong>Days on Market:</strong><?php echo $listing->propertyadditional->DOM;?></p>
								
									<p><strong>Gated:</strong><?php if($listing->propertyadditional->GatedYN=='0'){echo 'no';}else{echo 'yes';}?></p>
								
									<p><strong>Green Building Certification:</strong><?php if($listing->propertyadditional->GreenBuildingCertificationYN=='0'){echo 'no';}else{echo 'yes';}?></p>
								
									<p><strong>Half Baths:</strong><?php echo $listing->propertyadditional->BathsHalf;?></p>
								
									<p><strong>Listing Agreement Type:</strong><?php echo $listing->propertyadditional->ListingAgreementType;?></p>
								
									<p><strong>Litigation:</strong><?php echo $listing->propertyadditional->Litigation;?></p>	
						</div>
						<div class="col-md-6">
							
									<p><strong>Master Plan Fee MQYN:</strong> <?php echo $listing->propertyadditional->MasterPlanFeeMQYN;?></p>
								
									<p><strong>Miscellaneous Description:</strong> <?php echo $listing->propertyadditional->MiscellaneousDescription;?></p>
								
									<p><strong>Model:</strong><?php echo $listing->propertyadditional->Model;?></p>
								
									<p><strong>Owner Licensee:</strong><?php echo $listing->propertyadditional->OwnerLicensee;?></p>
								
									<p><strong>Ownership:</strong><?php echo $listing->propertyadditional->Ownership;?></p>
								
									<p><strong>Power On/Off:</strong><?php echo $listing->propertyadditional->PoweronorOff;?></p>
								
									<p><strong>Property Description:</strong><?php echo $listing->propertyadditional->PropertyDescription;?></p>
								
									<p><strong>Property Sub Type:</strong><?php echo $listing->propertyadditional->PropertySubType;?></p>
								
									<p><strong>Public Address:</strong><?php echo $listing->propertyadditional->PublicAddress;?></p>
								
									<p><strong>Realtor:</strong><?php if($listing->propertyadditional->RealtorYN=='0'){echo 'no';}else{echo 'yes';}?></p>
								
									<p><strong>Refrigerator:</strong><?php if($listing->propertyadditional->RefrigeratorYN=='0'){echo 'no';}else{echo 'yes';}?></p>
								
									<p><strong>Spa:</strong><?php echo $listing->propertyadditional->Spa;?></p>
								
									<p><strong>Spa Description:</strong><?php echo $listing->propertyadditional->SpaDescription;?></p>
								
									<p><strong>Year Round School:</strong><?php if($listing->propertyadditional->YearRoundSchoolYN=='0'){echo 'no';}else{echo 'yes';}?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="section">
						<h3>Interior Features:</h3>
							<div class="col-md-6">
								
									<p><strong>Approximate Total Living Area:</strong><?php echo $listing->propertyinteriorfeature->ApproxTotalLivArea;?></p>
								
									<p><strong>Bath Downstairs:</strong><?php if($listing->propertyinteriorfeature->BathDownYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Bath Downstairs Description:</strong><?php echo $listing->propertyinteriorfeature->BathDownstairsDescription;?></p>
								
									<p><strong>Bedroom Downstairs :</strong><?php if($listing->propertyinteriorfeature->BedroomDownstairsYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Bedrooms Total Possible Number ofber:</strong><?php echo $listing->propertyinteriorfeature->BedroomsTotalPossibleNum;?></p>
								
									<p><strong>Cooling Description:</strong><?php echo $listing->propertyinteriorfeature->CoolingDescription;?></p>
								
									<p><strong>Cooling Fuel:</strong><?php echo $listing->propertyinteriorfeature->CoolingFuel;?></p>
								
									<p><strong>Dishwasher:</strong><?php if($listing->propertyinteriorfeature->DishwasherYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Disposal:</strong><?php if($listing->propertyinteriorfeature->DisposalYN=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Dryer Included:</strong><?php if($listing->propertyinteriorfeature->DryerIncluded=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Dryer Utilities:</strong><?php echo $listing->propertyinteriorfeature->DryerUtilities;?></p>
								
									<p><strong>Energy Description:</strong><?php echo $listing->propertyinteriorfeature->EnergyDescription;?></p>
								
									<p><strong>Fireplace Description:</strong><?php echo $listing->propertyinteriorfeature->FireplaceDescription;?></p>
								
									<p><strong>Fireplace Location:</strong><?php echo $listing->propertyinteriorfeature->FireplaceLocation;?></p>
								
									<p><strong>Fireplaces:</strong><?php echo $listing->propertyinteriorfeature->Fireplaces;?></p>
								
									<p><strong>Flooring Description:</strong><?php echo $listing->propertyinteriorfeature->FlooringDescription;?></p>
							</div>
							<div class="col-md-6">
								
									<p><strong>Furnishings Description:</strong> <?php echo $listing->propertyinteriorfeature->FurnishingsDescription;?></p>
								
									<p><strong>Heating Description:</strong><?php echo $listing->propertyinteriorfeature->HeatingDescription;?></p>
								
									<p><strong>Heating Fuel:</strong><?php echo $listing->propertyinteriorfeature->HeatingFuel;?></p>
								
								
									<p><strong>Interior:</strong><?php echo $listing->propertyinteriorfeature->Interior;?></p>
								
									<p><strong>Number of Den Other:</strong><?php echo $listing->propertyinteriorfeature->NumDenOther;?></p>
								
									<p><strong>Other Appliance Description:</strong><?php echo $listing->propertyinteriorfeature->OtherApplianceDescription;?></p>
								
									<p><strong>Oven Description:</strong><?php echo $listing->propertyinteriorfeature->OvenDescription;?></p>
								
									<p><strong>Room Count:</strong> <?php echo $listing->propertyinteriorfeature->RoomCount;?></p>
									<p>Three Quarter Baths:</strong> <?php echo $listing->propertyinteriorfeature->ThreeQtrBaths;?></p>
									<p><strong>Utility Information:</strong> <?php echo $listing->propertyinteriorfeature->UtilityInformation;?></p>
								
									<p><strong>Washer Included:</strong> <?php if($listing->propertyinteriorfeature->WasherIncluded=='0'){echo 'No';}else{echo 'Yes';}?></p>
								
									<p><strong>Washer/Dryer Location:</strong> <?php echo $listing->propertyinteriorfeature->WasherDryerLocation;?></p>
								
									<p><strong>Water:</strong> <?php echo $listing->propertyinteriorfeature->Water;?></p>
							</div>
								
								
							
						</div>
                	</div>
				
				<div class="row">
					<div class="section">
						<h3>Location Information:</h3>
						
							<div class="col-md-6">
								
									<p><strong>Area:</strong><?php echo $listing->propertylocation->Area;?></p>
								
									<p><strong>Community Name:</strong> <?php echo $listing->propertylocation->CommunityName;?></p>
								
									<p><strong>Elementary School 3-5:</strong><?php echo $listing->propertylocation->ElementarySchool35;?></p>
								
									<p><strong>Elementary School K-2 :</strong><?php echo $listing->propertylocation->ElementarySchoolK2;?></p>
								
									<p><strong>High School:</strong><?php echo $listing->propertylocation->HighSchool;?></p>
								
									<p><strong>House Faces:</strong><?php echo $listing->propertylocation->HouseFaces;?></p>
								</div>
							<div class="col-md-6">
								
									<p><strong>Jr High School:</strong> <?php echo $listing->propertylocation->JrHighSchool;?></p>
								
									<p><strong>Parcel Number:</strong><?php echo $listing->propertylocation->ParcelNumber;?></p>
								
									<p><strong>Street Number Numeric:</strong><?php echo $listing->propertylocation->StreetNumberNumeric;?></p>
								
									<p><strong>Subdivision Name:</strong><?php echo $listing->propertylocation->SubdivisionName;?></p>
								
									<p><strong>Subdivision Number:</strong><?php echo $listing->propertylocation->SubdivisionNumber;?></p>
								
									<p><strong>Subdivision Number Search:</strong><?php echo $listing->propertylocation->SubdivisionNumSearch;?></p>
								
									<p><strong>Tax District:</strong><?php echo $listing->propertylocation->TaxDistrict;?></p>
							</div>
                			</div>
						</div>
					</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>
<div class="clear"></div>
  <?php  
}
//$rets->FreeResult($search);
?>
<!-- Main Content Start -->

</body>
</html>