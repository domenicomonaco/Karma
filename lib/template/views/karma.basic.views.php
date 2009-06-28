<?

/* 
 * $Id: Karma.Basic.views.php
 * 
 * 
 * 
 * 
 * Author file: Domenico M.
 * Date may 2009
 * Project: Karma - Html libs in Php
 *
 *
 *
*/

# karma.basic.views.php _> Fornisce alcune Views Essenziali per il funzionamento di Karma.
# 

function getPageTitle($pVar){
echo $pVar['title'];
}

function getFooter(){
echo "<div id=\"main_footer\"><p>Karma - Html libs in Php - License Creative Commons By-Nc-Sa 3.0 - Autor: Kiuz - <a href=\"http://www.kiuz.it\">http://www.kiuz.it</a></p></div>";
}

function closePage(){
echo "</body></html>";
}


function getHeader($pVar){
echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" /><title>";
getPageTitle($pVar);
echo "</title>";
echo "<link href=\"";
echo $pVar['StylePath'];
echo "\" type=\"text/css\" rel=\"stylesheet\"></style></head><body>";
}


?>
