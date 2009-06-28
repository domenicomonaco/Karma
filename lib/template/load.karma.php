<?
/* Author file: Domenico M.
 * Date may 2009
 * Project: Karma - Html libs in Php
 *
 *
 *
*/


# load.template.php _> Provvede all'inizializazione del Template Managere

/*
 * 1) Verifica se il tema è stato settato in Settings
 * 2) Verifica l'esistenza dei vari file di Template del tema appena riconosciuto
 * 3) Include il File Destinato alle Views
 * 4) Ne avvia la visualizazione della pagina in base a: Tema selezionato ($theme), Tipo di pagina ($pVar)

*/

require './config/karma-conf.php'; //contiene le varibili per il funzionamento di Sasha
require 'html.classes.php'; // Struttre Html e Metodi
#require 'main.template.php'; OMESSO NON ESISTE PIù // Contiene le classi basi per il funzionamento del template engine, è utiizzato soprattutto da template_views


#verifica corretta impostazione template ed esistenza

function detect_template($theme,$path_theme,$type_page,$pVar){
	$ThemeVar = array(
	'name'=>$theme,
	'path'=>$path_theme,
	);

	#Error Debugging
	#print "<br />".$theme;
	#echo "<br />".$path_theme;
	#echo "<br />".$path_theme.'index.php';
	#echo "<br />".$path_theme."style.css";

	if ($theme==''){
		print 'Error: Theme not set in settings.php';
	}

	if (!($theme=='')){ // se la voce tema in Settings è settata

		#print 'OK';
		$filename = $path_theme.'index.php';

		if (file_exists($filename)) {
			#echo "The file $filename exists";
			#echo '<br />';

		}
		else {
			echo "The file $filename does not exist";
			echo '<br />';
		}

		//Setta la path al file css e ne verifica l'esistenza;
		$filename2 = $path_theme.'style.css';
		if (file_exists($filename2)) {
			#echo "The file $filename2 exists";
			#echo '<br />';
		}
		else {
			echo "The file $filename2 does not exist";
			echo '<br />';
		}

	$pVar['StylePath']=$path_theme.'style.css';
	require 'template.views.php'; // Contiene le funzioni che generano le viste per Karma, di fatto richiamabili in ogni file del template
	
	#echo $path_theme;
	#require $path_theme."template_function.php";
	#require $path_theme . $type_page . ".php"; //Visualizza pagina di Template
	require $path_theme.$pVar['type'].".php";
	#echo $pVar['type'];
	}
}

detect_template($theme,$path_theme,$page,$pVar);
#echo 'test load';
?>
