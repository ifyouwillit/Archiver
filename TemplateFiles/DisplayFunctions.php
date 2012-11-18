<?php
function DisplayListOfBits($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->title) {
			$exists=1;
			?>
<div class="ItemContainer">
	<div class="TextContainer">
		<div class="ListItemTitle"><?=$ListDataItem->title?></div>
	</div>

	<div class="ImageContainer">
	    <?="<img src='".$ListDataItem->profile_image."' class='ListImageAttributes'>"?>
	</div>
</div>
<?php
		}
	}
	if (!$exists){
?>
<div class="ItemContainer">
	<div class="TextContainer">
	Aw Shucks, nothin here :(
	</div>
	</div>
<?php 
}

}
?>