<?php 

$rets = new Rets($_GET,'photo_gallery/'.$_GET['Matrix_Unique_ID']);

$results = $rets->call();


$i = 0;




//print_r($search);
echo '<div class="container">';
foreach($results as $listing) {
 
    if($i == 0){
    echo '<h2 class="photo-head">Photo Gallery - Listing ID:'.$listing->Matrix_Unique_ID.'</h2>';

    echo '<ul>';
    echo '<li>';
    echo '<span>Listing Price: $'.number_format($listing->ListPrice).'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Status: '.$listing->Status.'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Address: '.$listing->propertyadditional->PublicAddress.'</span>';
    echo '</li>';
     echo '<li>';
    echo '<span>Bedrooms: '.$listing->BedroomsTotalPossibleNum.'</span>';
    echo '</li>';
    echo '<li>';
    echo '<span>Acres: '.$listing->NumAcres.'</span>';
    echo '</li>';
    echo '<li>';
    echo '<span>Square Feet: '.$listing->SqFtTotal.'</span>';
    echo '</li>';
    echo '</ul>';

    $photos = $listing->propertyimage;
 
    foreach ($photos as $photo) {
        $listing = $photo->ContentId;
        $number = $photo->ObjectId;

    if ($photo->Success == true) {
        $contentType = $photo->ContentType;
        //$base64 = base64_encode($photo->Encoded_image); 
        echo "<img class='gallery-img' src='data:{$contentType};base64,{$photo->Encoded_image}' />";
        echo '<div>';
        echo $photo->ContentDesc;
        echo '</div>';
    }
    else {
        echo "({$listing}-{$number}): {$photo->ReplyCode} = {$photo->ReplyText}\n";
    }
  }
  }
  $i++;
}

?>
</div>