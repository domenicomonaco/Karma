<?
/* Author file: Domenico M.
 * Date may 2009
 * Project: Karma - Html libs in Php
 *
 *
 *
*/


// Views Fondamentali
//
/* Funzione per includere Le views Extra
 * Provvede al riconosciento e inclusione di Views Extra
 * 
 */

#echo 'test Views'; //for debug

$dir = "./lib/template/views/"; //Set dir of view's files
$dh = opendir($dir);
 
while (($file = readdir($dh)) !== false) {
		
	#echo $file; //for debug
	#echo '<br />'; //for debug
	#echo end(explode(".", $file)); //for debug
	
	$fExt= end(explode(".", $file));
	#echo '<br />'; //for debug
	if ($fExt=='php'){ //if ext of file is php, then is a views, only php
		#echo 'riconosco un file php';
		$fViews[]=$file; //add file to array
	}
}

closedir($dh);

// recursive inlcuding of file of array
for ($d=0;$d<$dmax=(sizeof($fViews));$d++){
	require ($dir.$fViews[$d]);	
} // all of view's file are included in Karma

?>
