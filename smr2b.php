<a href="http://192.168.0.139/smr2b_David/smr2b.php">David</a>
Mario
<a href="http://192.168.0.123/smr2b_fernandoherrero/smr2b.php">Fernando</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>