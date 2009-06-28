<?
/* Author file: Domenico M.
 * Date may 2009
 * Project: Karma - Html libs in Php
 *
 *
 *
*/

/* html.classes.php */
/** Classes that make html structure in Karma
 * 
 *
 *
 *
 *
 *
 *
 *
 *
 **************************************************
 * Autore : Domenico Monaco, kiuz.4ever@gmail.com *
 **************************************************
 */

class htmlStruct {

//Intrinsic events
var $attrib = array(
	'onblur'=>'onblur="%s"',
	'onchange'=>'onchange="%s"',
	'onclick'=>'onclick="%s"',
	'ondblclick'=>'ondbclick="%s"',
	'onfocus'=>'onfocus="%s"',
	'onkeydown'=>'onkeydown="%s"',
	'onkeypress'=>'onkeypress="%s"',
	'onkeyup'=>'onkeyup="%s"',
	'onload '=>'onload="%s"',
	'onmousedown'=>'onmousedown="%s"',
	'onmousemove'=>'onmousemove="%s"',
	'onmouseout'=>'onmouseout="%s"',
	'onmouseover'=>'onmouseover="%s"',
	'onmouseup'=>'onmouseup="%s"',
	'onreset'=>'onreset="%s"',
	'onselect'=>'onselect="%s"',
	'onsubmit'=>'onsubmit="%s"',
	'onunload'=>'onunload="%s"',
);

//Others attibuts
var $othattrib = array (
	'lang'=>'lang="%s"',
	'title'=>'title="%s"',
	'style'=>'style="%s"',
	'align'=>'align="%s"',
);

var $tag = array(
	
	'div' => '<div id="%s" %s >%s</div>',
	'span' => '<span id="%s" %s >%s</span>',
	'divend' => '</div>',
	'divstart' => '<div%s>',
		
	'class'=>'class="%s"',
	'liTest'=>'<li id="%s" %s >%s</li>',	
	'hTest'=>'<h1 id="%s" %s >%s</h1>',
	'hs'=>'<h1>%s</h1>',
	'hX'=>'<h%s id="%s">%s</h%s>',
	
	
	'li' => '<li id="%s" class="ulc-%s uli-%s">%s</li>',

	'ul' => '<ul id="%s" class="lic-%s lii-%s">%s</ul>',
		
		
		'button' => '<input type="%s" %s/>',
		'charset' => '<meta http-equiv="Content-Type" content="text/html; charset=%s" />',
		'checkbox' => '<input type="checkbox" name="%s" %s/>',
		'checkboxmultipleend' => '',
		'checkboxmultiple' => '<input type="checkbox" name="%s[]"%s />',
		'checkboxmultiplestart' => ' ',
	'css' => '<link rel="%s" type="text/css" href="%s" %s/>',

		'error' => '<div%s>%s</div>',
		'fieldsetend' => '</fieldset>',
		'fieldset' => '<fieldset%s>%s</fieldset>',
		'fieldsetstart' => '<fieldset><legend>%s</legend>',
		'file' => '<input type="file" name="%s" %s/>',
		'file_no_model' => '<input type="file" name="%s" %s/>',
		'formend' => '</form>',
		'form' => '<form %s>',
		'hidden' => '<input type="hidden" name="%s" %s/>',

	'img' => '<img src="%s"/>',

	'image' => '<img src="%s" %s/>',

		'input' => '<input name="%s" %s/>',
		'label' => '<label for="%s"%s>%s</label>',
		'legend' => '<legend>%s</legend>',
		
		'link' => '<a href="%s"%s>%s</a>',
		
		'mailto' => '<a href="mailto:%s" %s>%s</a>',
		
		'metalink' => '<link href="%s"%s/>',
		
		'meta' => '<meta%s/>',
		
		'ol' => '<ol%s>%s</ol>',
		
		'optiongroupend' => '</optgroup>',
		'optiongroup' => '<optgroup label="%s"%s>',
		'para' => '<p%s>%s</p>',
		'parastart' => '<p%s>',
		'password' => '<input type="password" name="%s" %s/>',
		'radio' => '<input type="radio" name="%s" id="%s" %s />%s',
		'selectempty' => '<option value=""%s>&nbsp;</option>',
		'selectend' => '</select>',
		'selectmultiplestart' => '<select name="%s[]"%s>',
		'selectoption' => '<option value="%s"%s>%s</option>',
		'selectstart' => '<select name="%s"%s>',
		'style' => '<style type="text/css"%s>%s</style>',
		'submitimage' => '<input type="image" src="%s" %s/>',
		'submit' => '<input type="submit" %s/>',
		'tablecell' => '<td%s>%s</td>',
		'tableheaderrow' => '<tr%s>%s</tr>',
		'tableheader' => '<th%s>%s</th>',
		'tablerow' => '<tr%s>%s</tr>',
		'tagend' => '</%s>',
		'tag' => '<%s%s>%s</%s>',
		'tagstart' => '<%s%s>',
		'textarea' => '<textarea name="%s" %s>%s</textarea>',
		'b'=>'<b>%s</b>',
	);


// Riceve in input l'attributo che si desidera utilizzare, e il contenuto da inserire al suo interno e ne stampa l'atributo completo
// Utilizzabile in qualsiasi tag che supporti l'attributo selezionato
// 
public function setAttrib($sAttrib,$script){
	$attr=$this->attrib[sAttrib];
	printf($attr, $script);
#return $outAttrib= sprintf($attrib, $script);
}

public function img($img_loc){
	$img=$this->tag['img'];
	printf($img, $img_loc);
}


private function setLink($inlink,$path){
$link=$this->tag['link'];
return $outLink= sprintf($link, $path,'',$inlink);
}

private function seths($inhs){
$hs=$this->tag['hs'];
return $ouths= sprintf($hs, $inhs);
}

private function sethx($inhx,$size){
$hx=$this->tag['hX'];
return $outhx= sprintf($hx, $size, 'title', $inhx, $size);
}


private function setb($inb){
$b=$this->tag['b'];
return $outb= sprintf($b, $inb);
}


//processa i contenuti Complessi
private function procContent($content){

#$outPut = sizeof($content[0]);
#echo $outPut;

// is_array($content)
	if(is_array($content)){
	for ($i=0;$i<$imax=sizeof($content);$i++){
	$row=$content[$i]; // Mette a riga il primo contenuto
	$out=$row[0]; // in output mette la prima riga

		if(!($row[1]=='')){ //verifica se ha l'opzione link attivo
		#echo 'Link Attivo <br />';
		$out=$this->setLink($row[0],$row[1]);
		//richiama la funzione settaLink e mette il risultato in Out, pronto per essere processato dala codizione successiva
		}
		
		if($row[1]=='' OR $row[1]==NULL){#echo 'Link Non Attivo <br />';#$out= $row[0];
		}
			
		if(($row[2]>=1)){ //verifica se l'opzione Title è selezionata
		#echo 'Title Attivo <br />';
		$out=$this->sethx($out,$row[2]);
		}

		if($row[2]=='0' OR $row[2]==NULL OR $row[2]==''){#echo 'Title Non Attivo <br />';#$out=$row[0];
		}
				
		if($row[4]=='1'){
		#echo 'Bold Attivo <br />';
		$out=$this->setb($out);
		}

		if($row[4]=='0'){
		#echo 'Bold Non Attivo <br />';
		#$out=$row[0];
		}
			
	$outConcat=$outConcat.$out; 
	//unisce i contenuto se sono divisi in righe di un array
		//dovrebbe dividerli in Div anche ma ancora non lo fà

	#echo $out; // debugging
	}//end for
	}//endIF
	
	if(!(is_array($content))){
	return $content;	
	}
	return $outConcat;
}


#Gestisce l'inserimento delle classi
public function setClass($classVar){
	$cl=$this->tag['class'];
	$outClass= sprintf($cl,$classVar);
return $outClass;
}

/*
public function printElement($h){
$shs=$this->tag[$h];
$as=$this->setClass('provaClass');
printf($shs, 'sd', $as,'contenuto Div');
}
*/

public function genElement($inTag,$varsID,$varsClass,$inContent){
/*

Genera un elemento generico con attributi ID concatenati,

*/

$gTag=$this->tag[$inTag];

	
	for ($i=0;$i<$imax=sizeof($varsID);$i++){
		if($i<$imax){
			if($i<($imax-1)){
				$gID=$gID.$varsID[$i].' ';
			}
			else{
				$gID=$gID.$varsID[$i];
			}
		}
	}
	
	for ($c=0;$c<$cmax=sizeof($varsClass);$c++){
		if($c<$cmax){
			if($c<($cmax-1)){
				$gClass=$gClass.$varsClass[$c].' ';
			}
			else{
				$gClass=$gClass.$varsClass[$c];
			}
		}
	}

$goClass=$this->setClass($gClass);

$goContent=$this->procContent($inContent);

printf($gTag, $gID, $goClass, $goContent);

#echo $goContent;
}





public function listItem($upI,$ulID,$liID,$title,$list){

# include ("htmlib.php");

# 'li' => '<li id="%s" class="ulc-%s uli-%s">%s</li>',

# 'ul' => '<ul id="%s" class="lic-%s lii-">%s</ul>'
		
	
	$iu=floor($upI&1);
	
	$ul=$this->tag['ul'];
	$il=$this->tag['li'];
	
	$subelement=$this->LIlist($list,$liID);
	
	if(!($title=='')){
	echo "<h2 class='".$ulID."-title h-".$upI."'>".$title."</h2>";	
	}
	printf($ul, $ulID, $upI, $iu, $this->LIlist($list,$liID));
	
}


public function LIlist($list,$liID){

for ($i=0;$i<$imax=sizeof($list);$i++){
		$ic=floor($i&1);
		#$element=$element.'<li>'.$list[$i].'</li>';
		printf($li, $liID, 'cia','shs', $list[$i]);
	}

	#return $element;
}




// tagsCheck(); serve per la verifica dei tag supportati su richiesta del metodo
private function tagsCheck($BasicTags,$btag){
	$ver='no'; //setto la variabile di controllo su False
	for($bi=0;$bi<$bimax=sizeof($BasicTags);$bi++){ //confronto per l'array di tags supportato se si è selezionato il tag esatto
		if ($btag==$BasicTags[$bi]){$ver='yes';} //quando lo trova setta TRUE
	}
	return $ver;
}






/// INIZIO METODI VERI E PROPRI

// Syntax BASIC METHOD: $nome-oggetto->basic($variabile,'<TAG>', '<ID_TAGS>','<CLASS_TAGS>');

/*
 * $nome-oggetto->basic($variabile,'<TAG>', '<ID_TAGS>','<CLASS_TAGS>');
 * <TAG>: span, div, link, hX
 * <ID_TAGS>: singola variabile o array
 * <CLASS_TAGS>: singola variabile o array
*/

public function basic($content,$btag,$bids,$classes){
	$BasicTags=array('span','div','hX'); //limito l'utilizzo dei Tag, per evitare errori gravi

	$ok = $this->tagsCheck($BasicTags,$btag); // chiama la funzione per la verifica dei Tag supportati

	if($ok=='no'){print '<div id="k-error">ERRORE DI SINTASSI: TAGS non SUPPORTATO, Basic Methods.</div>';}
	if($ok=='yes'){echo $this->genElement($btag,$bids,$classes,$content);}//Syntax Help: genElement($inTag,$varsID,$varsClass,$inContent)
}

//$ComplexContent=array(array('cont'=>'','ifLink'=>'','ifTitleD'=>'','ifLi'=>'','ifBold'=>'','ifCorsivo'=>''));
} //end Class HtmlStruct



?>
