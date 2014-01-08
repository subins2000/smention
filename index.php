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
   <form action="validate.php" method="POST" id="sm-demo">
    <h2>Works On Inputs</h2>
    <input type="text" name="input" size="40"/><br/>
    <h2>As well as Textareas</h2>
    <textarea name="textarea" cols="40" rows="10"></textarea><br/>
    <input type="submit" value="Server Validate" name="submit"/>
   </form>
   <script>
   $(document).ready(function(){
    $("#sm-demo input, #sm-demo textarea").smention("get_users.php",{
     avatar:true,
     extraParams:{lk:"a"}
    });
   });
  </script>
 <?$_GET['url']=$parr[$id]['url'];include("../../footer.php");?>
 </body>
</html>
