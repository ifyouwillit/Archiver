<?php
function DisplayListOfBits($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	$LastItem='';
	$TotalCount=0;
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->title && (strcmp($ListDataItem->title,$LastItem))!=0) {
			$exists=1;
			$TotalCount++;
			$currentFile = $_SERVER["PHP_SELF"];
			$parts = Explode('/', $currentFile);
			?>
<div class="ItemContainer">
	<div class="TextContainer">
		<div class="ListItemTitle"><a href="../ItemPage.php?q=<?=$ListDataItem->id?>&originalsearch=<?=urlencode($_GET['q'])?>&searchtype=<?=$parts[count($parts) - 1]?>" class="fancybox fancybox.iframe"> <?=substr($ListDataItem->title,0,50).'...'?></a></div>
		<div class="ListItemDescription"><?=$ListDataItem->title?></div>
		<div class="ListItemOtherInfo"><span class="Highlight"><a href="../Date/<?=date('Y-m-d',strtotime($ListDataItem->pubDate))?>.htm"><?=date('M d, Y',strtotime($ListDataItem->pubDate))?></a></span> 
		
		<?php if ($ListDataItem->user_location<>''){?>
		from <span class="Highlight"><a href="../Location/<? echo $ListDataItem->user_location;?>.htm"><? echo $ListDataItem->user_location;?></a></span> <? }?> via <?=$ListDataItem->service_name?> by 
		<span class="Highlight"><a href="../Profile/<?=$ListDataItem->user_screen_name?>.htm"><?=$ListDataItem->user_screen_name?></a><?php if (strtoupper($GLOBALS['authsn'])==strtoupper($ListDataItem->user_screen_name)){ echo "+"; }?></span> with <span class="Highlight"><a href="../Followers/<?=$ListDataItem->user_followers_count?>.htm"><?=$ListDataItem->user_followers_count?> followers</a></span></div>
	</div>

	<div class="ImageContainer">
	    <?="<img src='".$ListDataItem->profile_image."' class='ListImageAttributes' onerror='onImgErrorSmall(this)' alt='".$ListDataItem->user_screen_name." profile picture'>"?>
	</div>
</div>
<center><hr style=width:99%;></center>


<?php
//Place an Ad Between Every N Items in the List
if(substr(number_format(($TotalCount/15),2),-3) == ".00") {
include ('Scripts/HorizontalAd.php');
}

		}$LastItem=$ListDataItem->title;
	
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

function DisplayListOfBitsProfile($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	$LastItem='';
	$TotalCount=0;
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->textbody && (strcmp($ListDataItem->textbody,$LastItem))!=0) {
			$exists=1;
			$TotalCount++;
			$currentFile = $_SERVER["PHP_SELF"];
			$parts = Explode('/', $currentFile);
			?>
<div class="ItemContainer">
	<div class="TextContainerProfile">
		<div class="ListItemTitle"><a href="../ItemPage.php?q=<?=$ListDataItem->id?>&originalsearch=<?=urlencode($_GET['q'])?>&searchtype=<?=$parts[count($parts) - 1]?>" class="fancybox fancybox.iframe"> <?=substr($ListDataItem->textbody,0,50).'...'?></a></div>
		<div class="ListItemDescription"><?=$ListDataItem->textbody?></div>
		<div class="ListItemOtherInfo"><span class="Highlight"><a href="../Date/<?=date('Y-m-d',strtotime($ListDataItem->date_long))?>.htm"><?=date('M d, Y',strtotime($ListDataItem->date_long))?></a></span> 
		
		<?php if ($ListDataItem->user_location<>''){?>
		from <span class="Highlight"><a href="../Location/<? echo $ListDataItem->user_location;?>.htm"><? echo $ListDataItem->user_location;?></a></span> <? }?> via <?=$ListDataItem->service_name?> by 
		<span class="Highlight"><?=$ListDataItem->user_screen_name?><?php if (strtoupper($GLOBALS['authsn'])==strtoupper($ListDataItem->user_screen_name)){ echo "+"; }?></span> with <span class="Highlight"><a href="../Followers/<?=$ListDataItem->user_followers_count?>.htm"><?=$ListDataItem->user_followers_count?> followers</a></span></div>
	</div>

	<div class="ImageContainer">
	    <?="<img src='".$ListDataItem->profile_image."' class='ListImageAttributes' onerror='onImgErrorSmall(this)' alt='".$ListDataItem->user_screen_name." profile picture'>"?>
	</div>
</div>
<center><hr style=width:99%;></center>


<?php
//Place an Ad Between Every N Items in the List
if(substr(number_format(($TotalCount/15),2),-3) == ".00") {
include ('Scripts/HorizontalAd.php');
}

		}$LastItem=$ListDataItem->textbody;
	
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


function DisplayCloud($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	$LastItem='';
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->title && (strcmp($ListDataItem->title,$LastItem))!=0) {
			$exists=1;
			?>
	
	<div class="CloudImageContainer">
	    <a href="../Profile/<?=$ListDataItem->user_screen_name?>.htm"><?="<img src='".$ListDataItem->profile_image."' onerror='onImgErrorSmall(this)' class='CloudImageAttributes' alt='".$ListDataItem->user_screen_name." profile picture'>"?></a>
	</div>


<?php
		}$LastItem=$ListDataItem->title;
	
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

function DisplayBit($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	$LastItem='';
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->textbody) {
			$exists=1;
			?>
	
	<span class="BitContainer">
	<?=$LastItem=$ListDataItem->textbody?>
	</span><br>
			<div class="ListItemOtherInfo"><span class="Highlight"><a href="Date/<?=date('Y-m-d',strtotime($ListDataItem->date_created))?>.htm" onclick="parent.location='Date/<?=date('Y-m-d',strtotime($ListDataItem->date_created))?>.htm';parent.$.fancybox.close();"><?=date('M d, Y',strtotime($ListDataItem->date_created))?></a></span> 
		
		<?php if ($ListDataItem->user_location<>''){?>
		from <span class="Highlight"><a href="Location/<?=$ListDataItem->user_location?>.htm" onclick="parent.location='Location/<?=$ListDataItem->user_location?>.htm';parent.$.fancybox.close();"><?=$ListDataItem->user_location?></a></span> <? }?> via <?=$ListDataItem->service_name?> by <span class="Highlight"><a href="Profile/<?=$ListDataItem->user_screen_name?>.htm" onclick="parent.location='Profile/<?=$ListDataItem->user_screen_name?>.htm';parent.$.fancybox.close();"><?=$ListDataItem->user_screen_name?></a></span></div>
	


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

function ListItemCategories($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	if (strpos($ListDataString,"entry")<>0){
	$LastItem='';
		//var_dump ($ListDataArray->entry);
		?><div class="LeftPanePadding">
	<h2 class="CategoryHeading"><a href="../Category/<?=$ListDataArray->entry->master?>.htm" class="WikiLinks"><?=$ListDataArray->entry->master?></a> &rarr; <a href="../Category/<?=$ListDataArray->entry->category?>.htm" class="WikiLinks"><?=$ListDataArray->entry->category?></a> &rarr; <?=$_GET['q']?></h2><hr>
	<?
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->item) { 
			$exists=1;
			?>
	<?php if (strtoupper($ListDataItem->item) == strtoupper($_GET['q'])) { 
	$class="WikiLinksBold";
	} else {
$class="WikiLinks";
}?>
	<a href="../Category/<?=$LastItem=$ListDataItem->item?>.htm" class="<?=$class?>"><?=$LastItem=$ListDataItem->item?></a>
	<br>	


<?php
		}
	
	}?></div><?}else{

}

}

function ListPrimaryCategories($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	if (strpos($ListDataString,"entry")<>0){
		$LastItem='';

		?><div class="LeftPanePadding">
	<h2 class="CategoryHeading"><?=$_GET['q']?> Categories</h2><hr>
	<?
	foreach ( $ListDataArray as $ListDataItem ) {
		if ($ListDataItem->category) {
			$exists=1;
			?>
	
	<a href="../Category/<?=$LastItem=$ListDataItem->category?>.htm" class="WikiLinks"><?=$LastItem=$ListDataItem->category?></a>
<br>	


<?php
		}
	
	}?></div><?}else{

}

}

function GetUserInfo($ListDataString) {
	$ListDataArray = (simplexml_load_string ( $ListDataString ));
	//var_dump ( $ListDataArray );
	if (strpos($ListDataString,"entry")<>0){
		$LastItem='';

	$GLOBALS['archiverprofileimage']=$ListDataArray->entry->profile_image;
	$GLOBALS['archiverprofileusername']=$ListDataArray->entry->user_name;
	$GLOBALS['archiverprofileuserscreenname']=$ListDataArray->entry->user_screen_name;
	$GLOBALS['archiverprofileuserurl']=$ListDataArray->entry->user_url;
	$GLOBALS['archiverprofileuserlocation']=$ListDataArray->entry->user_location;
	$GLOBALS['archiverprofileuserdescription']=$ListDataArray->entry->user_description;
	
	?><?}else{

}

}
?>