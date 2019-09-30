<a href="http://192.168.0.139/smr2b_David/smr2b.html">David</a>
Mario
<a href="http://192.168.0.144/smr2b_fernandoherrero/smr2b.html">Fernando</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>