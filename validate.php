<?include("../../posts.php");$id=15;?>
<!DOCTYPE html>
<html>
 <head>
  <script src="//tpalace.com/Demos/local/cdn/js.php"></script>
  <script src="smention.js"></script>
  <link href="smention.css" rel="stylesheet"/>
  <title><?echo$parr[$id]['title'];?></title>
  <?include('../../track.php');?>
 </head>
 <body>
 <?include('../../top.php');?>
  <div id="content" style="margin-top:10px;height:100%;">
   <center>
    <h1>jQuery sMention Plugin</h1>
   </center>
   <?
   include("get_users.php");
   function smention($s,$t){
    global$users;
    $userid=$t[1];
    $nxs=strpos($s,"@$userid");
    $nxs=strlen("@$userid")+$nxs;
    $nxs=substr($s,$nxs,1);
    $name="";
    foreach($users as $k=>$v){
     if($v[2]==$userid){
      $name=$v[0];
     }
    }
    if($name==""){
     return"@$userid".$nxs;
    }else{
     $html="<a href='//open.subinsb.com/$userid'>@$name</a>".$nxs;
     return$html;
    }
   }
   if(isset($_POST['input'])){
    if($_POST['input']==""){
     echo"<h2>No value entered</h2>";
    }else{
     $q=htmlspecialchars($_POST['input']);
     $q=preg_replace_callback("/\@(.*?)(\s|\z)/", function($t) use ($q){return smention($q,$t);},$q);
     echo"<h2>The Parsed Value Of Input Data</h2><blockquote>$q</blockquote>";
    }
   }
   if(isset($_POST['textarea'])){
    if($_POST['textarea']==""){
     echo"<h2>No value entered</h2>";
    }else{
     $q=htmlspecialchars($_POST['textarea']);
     $q=preg_replace_callback("/\@(.*?)(\s|\z)/", function($t) use ($q){return smention($q,$t);},$q);
     echo"<h2>The Parsed Value Of Textarea Data</h2><blockquote>$q</blockquote>";
    }
   }
   if(!isset($_POST['textarea']) && !isset($_POST['input']))
   ?>
 <?$_GET['url']=$parr[$id]['url'];include("../../footer.php");?>
 </body>
</html>
