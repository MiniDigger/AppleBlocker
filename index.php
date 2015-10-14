<html>
<body>
<?php
$goodAgents = array('Windows','Linux','Andorid');
$good = false;
foreach($goodAgents as $agent) {
    if(strpos($_SERVER['HTTP_USER_AGENT'],$agent)){
       $good = true;
    }
}
if($good !== true){
 die('<center><h1>403 - Forbidden:<br>Apple Users cant access this page!</h1></center></body></html>');
}
?>
<h1>You are a good boy!</h1>
</body>
</html>
