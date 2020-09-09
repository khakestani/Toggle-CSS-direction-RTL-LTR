<?php
	/*======== modify fourth pack styles ========*/
	$ptrn1 ="/(padding|margin|border-width)\:\s*(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)/";
	$codes = preg_replace( $ptrn1 , "$1:$2 $8 $6 $4" , $codes );	
	
	/*======== modify fourth pack border radius styles ========*/
	$ptrn1 ="/(border-radius)\:\s*(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)\s+(-?[0-9]+(px|%|em)?)/";
	$codes = preg_replace( $ptrn1 , "$1:$4 $2 $6 $8" , $codes );		
	
	/*======== modify margin ========*/
	$ptrn1 ="/margin-right\s*:/";
	$codes = preg_replace( $ptrn1 , "margin-lft:" , $codes );
	$ptrn1 ="/margin-left\s*\:/";
	$codes = preg_replace( $ptrn1 , "margin-right:" , $codes );	
	$ptrn1 ="/margin-lft\s*\:/";
	$codes = preg_replace( $ptrn1 , "margin-left:" , $codes );	
	
	/*======== modify padding ========*/
	$ptrn1 ="/padding-right\s*\:/";
	$codes = preg_replace( $ptrn1 , "padding-lft:" , $codes );
	$ptrn1 ="/padding-left\s*\:/";
	$codes = preg_replace( $ptrn1 , "padding-right:" , $codes );	
	$ptrn1 ="/padding-lft\s*\:/";
	$codes = preg_replace( $ptrn1 , "padding-left:" , $codes );	
	
	/*======== modify border ========*/
	$ptrn1 ="/border-right\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-lft:" , $codes );
	$ptrn1 ="/border-left\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-right:" , $codes );	
	$ptrn1 ="/border-lft\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-left:" , $codes );					
	
	/*======== modify float ========*/
	$ptrn1 ="/float\s*\:\s*right\s*\;/";
	$codes = preg_replace( $ptrn1 , "float:lft;" , $codes );
	$ptrn1 ="/float\s*\:\s*left\s*\;/";
	$codes = preg_replace( $ptrn1 , "float:right;" , $codes );	
	$ptrn1 ="/float\s*\:\s*lft\s*\;/";
	$codes = preg_replace( $ptrn1 , "float:left;" , $codes );
	
	/*======== modify text-align ========*/
	$ptrn1 ="/text-align\s*\:\s*right/";
	$codes = preg_replace( $ptrn1 , "text-align:lft" , $codes );
	$ptrn1 ="/text-align\s*\:\s*left/";
	$codes = preg_replace( $ptrn1 , "text-align:right" , $codes );	
	$ptrn1 ="/text-align\s*\:\s*lft/";
	$codes = preg_replace( $ptrn1 , "text-align:left" , $codes );	
	
	/*======== modify left and right ========*/
	$ptrn1 ="/(;|\s+)right\s*\:/";
	$codes = preg_replace( $ptrn1 , "$1lft:" , $codes );
	$ptrn1 ="/(;|\s+)left\s*\:/";
	$codes = preg_replace( $ptrn1 , "$1right:" , $codes );	
	$ptrn1 ="/(;|\s+)lft\s*\:/";
	$codes = preg_replace( $ptrn1 , "$1left:" , $codes );	
	
	/*======== modify background ========*/
	$ptrn1 ="/background\s*\:\s*(.*)(right)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background:$1lft$3" , $codes );
	$ptrn1 ="/background\s*\:\s*(.*)(left)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background:$1right$3" , $codes );	
	$ptrn1 ="/background\s*\:\s*(.*)(lft)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background:$1left$3" , $codes );	

	function changePercent1($codes)
	{
		return 'background:'.$codes[1].(100-$codes[2]).'%'.$codes[3];
	}	
	/*======== modify background position ========*/
	$ptrn1 ="/background[\s]?\:[\s]?(.+)?\s([0-9^a-z^A-Z]+)\%(\s+([0-9]+)\%(.*)?(\s+|\;))/";
	$codes = preg_replace_callback(  $ptrn1 , 'changePercent1' , $codes );	
		
	/*======== modify background position ========*/
	$ptrn1 ="/background-position\s*\:\s*(right)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background-position:lft$2" , $codes );
	$ptrn1 ="/background-position\s*\:\s*(left)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background-position:right$2" , $codes );	
	$ptrn1 ="/background-position\s*\:\s*(lft)(\s+|\;)/";
	$codes = preg_replace( $ptrn1 , "background-position:left$2" , $codes );	

	function changePercent2($codes)
	{
		return 'background-position:'.(100-$codes[1]).'%'.$codes[2];
	}	
	/*======== modify background position ========*/
	$ptrn1 ="/background-position\s*\:\s*([0-9]+)\%(\s+|\;)/";
	$codes = preg_replace_callback(  $ptrn1 , 'changePercent2' , $codes );
	
	/*======== modify border top radius ========*/
	$ptrn1 ="/border-top-right-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-top-lft-radius:" , $codes );
	$ptrn1 ="/border-top-left-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-top-right-radius:" , $codes );	
	$ptrn1 ="/border-top-lft-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-top-left-radius:" , $codes );	
	
	/*======== modify border bottom radius ========*/
	$ptrn1 ="/border-bottom-right-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-bottom-lft-radius:" , $codes );
	$ptrn1 ="/border-bottom-left-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-bottom-right-radius:" , $codes );	
	$ptrn1 ="/border-bottom-lft-radius\s*\:/";
	$codes = preg_replace( $ptrn1 , "border-bottom-left-radius:" , $codes );

	$codes = preg_replace( $ptrn1 , "border-bottom-left-radius:" , $codes );

	$ptrn1 ="/direction\s*\:\s*rtl/";
	$codes = preg_replace( $ptrn1 , "direction:@@@ltr@@@" , $codes );	

	$ptrn1 ="/direction\s*\:\s*ltr/";
	$codes = preg_replace( $ptrn1 , "direction:rtl" , $codes );	

	$ptrn1 ="/direction\s*\:\s*@@@ltr@@@/";
	$codes = preg_replace( $ptrn1 , "direction:ltr" , $codes );	
	
?>