<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

<form action="ruukku2.php" method="POST">
<label>Nimi</label>
<input type="text" name="nimi">
<label>Teksti</label>
<input type="text" name="txt">
<label>Arvosana</label>
<input type="number" name="arvosana">
<button value="true" type="submit" name="send"> Lähetä</button>


</form>

<?php
$nimi = $_POST["nimi"];
$txt = $_POST["txt"];
$arvosana = $_POST["arvosana"];
$send = $_POST["send"];
 
include "settings.php";
 
$sql = 'INSERT INTO 533V_verkkokauppa VALUES 
(
NULL,
"'.$nimi.'",
"'.$txt.'",
"'.$arvosana.'",
"'.$id.'"
)';

// arvostelun lisääminen
if($send == "true"){
  $my -> query($sql);
}

?>
</body>
</html>