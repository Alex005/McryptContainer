<?php

require 'Mcrypt.php';

$source = new McryptResource();
$source->createResource(MCRYPT_RIJNDAEL_192, MCRYPT_MODE_CBC);

$cipher = Mcrypt::encrypt($source, 'Key', 'PlaintextToBeEncrypted');

var_dump($cipher);
echo "<br>";

$source2 = new McryptResource();
$source2->createResource(MCRYPT_RIJNDAEL_192, MCRYPT_MODE_CBC);

var_dump(Mcrypt::decrypt($source2, 'Key', $cipher));
echo "<br>";
