<?PHP
echo "\nconvirtiendo tipos\n";
$age = 30;
$age = (string) $age;	//lo convierte a cadena
var_dump($age);		//var_dump muestra el tipo y la longuitud de la var
$age = (boolean) $age;
var_dump($age);
$age = (float) $age;
var_dump($age);
$age = (array) $age;
var_dump($age);
?>
