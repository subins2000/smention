<?
function smention($t){
 $userid=$t[1];
 // do stuff with the id
}
$text=$_POST['text'];
$s=preg_replace_callback("/\@(.*?)(\s|\z)/","smention",$text);
?>
