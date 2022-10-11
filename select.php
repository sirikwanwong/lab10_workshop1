<html>
<body>
<?php
   if(empty($_COOKIE["lang"])){
    setcookie("lang",$_GET["language"],time()+3600*24);
}
   if(isset($_COOKIE["lang"])){
    setcookie("lang",$_GET["language"],time()+3600*24);
}
?>

</body>
</html>