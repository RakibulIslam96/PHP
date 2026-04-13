<?php
$store ="123456";
echo base64_encode($store);//encode shudu password ke onno akta code translate kore//
echo "<br>";
echo base64_decode("MTIzNDU2"); //decode translate kora msg ta ager code/password baniyea dey//
echo "<br>";


$password = "admin";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
echo "<br>";

$pass= "1245583";
$key="faimchowdhury";
$method="AES-128-CBC";
$iv = "2564856235648152";
$encrypted = openssl_encrypt($pass, $method, $key, 0,$iv);
$decrypted = openssl_decrypt($encrypted,$method, $key,0, $iv );
echo "Original: " .$pass."<br>";
echo "Encrypted: " .$encrypted."<br>";
echo "Decrypted: " .$decrypted."<br>";



echo "<br>";

$pass= "1455454523";
$key="s123";
$method="AES-128-CBC";
$iv = openssl_random_pseudo_bytes(16);
$encrypted = openssl_encrypt($pass, $method, $key, OPENSSL_RAW_DATA,$iv);
$decrypted = openssl_decrypt($encrypted,$method, $key,OPENSSL_RAW_DATA, $iv );
echo "Original: " .$pass."<br>";
echo "Encrypted: " .$encrypted."<br>";
echo "Decrypted: " .$decrypted."<br>";

echo "<br>";
$pass= "1455454523";
$key="s123";
$method="AES-128-CBC";
$iv = openssl_random_pseudo_bytes(16);
$encrypted = openssl_encrypt($pass, $method, $key, OPENSSL_ZERO_PADDING,$iv);
$decrypted = openssl_decrypt($encrypted,$method, $key,OPENSSL_ZERO_PADDING, $iv );
echo "Original: " .$pass."<br>";
echo "Encrypted: " .$encrypted."<br>";
echo "Decrypted: " .$decrypted."<br>";


?>