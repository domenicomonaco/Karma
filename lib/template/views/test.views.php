<?

/* 
 * 
 * 
 * Author file: Domenico M.
 * Date may 2009
 * Project: Karma - Html libs in Php
 *
 *
 *
*/
#echo 'test';


/*







$arry= array('primo','secondo','terzo','quarto','quinto');
$ss=new htmlStruct;
#$ss->setClass();
#$ss->printElement('div');
#$ss->img('/sjdh/sjshd.jpg');
#$ss->listItem('0','PRINCIPALE','SECONDARIO','TITOLO',$arry); #public function listItem($upI,$ulID,$liID,$title,$list)
#$ss->genElement('div');
#$ss->genElement('div',$varsID=array('PrimoID','SecondoID','TerzoID'),$varsClass=array('PrimoClass','SecondoClass','TerzoClass','quartoClass','quintoClass','SestoClass'));
#$ss->genElement('liTest',$varsID=array('PrimoID','SecondoID','TerzoID'),$varsClass=array('PrimoClass','SecondoClass','TerzoClass','quartoClass','quintoClass','SestoClass'));

#$ss->genElement('hTest',$varsID=array('titolo'),$varsClass=array('titolo-menu','primoTitolo'));




#On click Tag A e 

#Complex CONTENT PROCESSING

$ComplexContent=array(array('cont'=>'','ifLink'=>'','ifTitleD'=>'','ifLi'=>'','ifBold'=>'','if'=>''));


$ComplexContent[0]=array('contenuto0','index.php','1','0','0');
$ComplexContent[1]=array('contenuto1','list.php','3','0','0');
$ComplexContent[2]=array('contenuto2','folder.php','1','0','1');
$ComplexContent[3]=array('contenuto3','main.php','2','0','0');

$ComplexContent[4]=array('folder1','folder.php?id=233476438','','0','0');
#$ss->procContent($ComplexContent);

$ss->genElement('div',$varsID=array('contenuto'),$varsClass=array('contenuto','list'),$ComplexContent);

$menu[0]=array('home','index.php','','0','1');
$menu[1]=array('Folder','folder.php','','0','1');
$ss->genElement('div',$varsID=array('menu'),$varsClass=array('menu-principale','lista'),$menu);
$utente1= 'Giovanni';
$ss->genElement('div',$varsID=array('utente'),$varsClass=array('giallo','destra'),$utente1);

*/

function testing(){
#Sintassi di aiuto: basic($content,$tag,$ids,$classes)

	$contenuto = 'ciao';
	$idds=array('primo','secondo','terzo','quarto');
	$classss=array('classe','classe2');

$testing = new htmlStruct;
$testing->basic($contenuto,'div',$idds,$classss);
$testing->basic($contenuto,'link',$idds,$classss);
$testing->basic('spanniamo','span',$idds,$classss);

//$ComplexContent=array(array('cont'=>'','ifLink'=>'','ifTitleD'=>'','ifLi'=>'','ifBold'=>'','ifCorsivo'=>''));
$contenuto2=array(
array('home','index.php','','0','1'),array('home1','','','0','1'),array('home2','','1','1','1')
);
$testing->basic($contenuto2,'span',$idds,$classss);

}





?>
