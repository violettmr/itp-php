<?PHP
echo "\nconvirtiendo tipos\n";
$age = 30;
$age = (string) $age;	//lo convierte a cadena
var_dump($age);		//var_dump muestra el tipo y la longitud de la var
$age = (boolean) $age;
var_dump($age);
$age = (float) $age;
var_dump($age);
$age = (array) $age;
var_dump($age);
var_dump('10'==10);
var_dump('5'. 5);
var_dump('2'+ 2);
$password ='Didi';
if($password === 'didi') {  //compara exactamente igual
echo "Password es correcto\n";
}else echo "Password  incorrecto  vuelve a intentar\n";
$color = 'red';
switch($color) {
case 'green':
          echo 'Verde';
          break;
 case 'blue':
          echo 'Azul';
 default:
         echo $color;
  }
 /* $product = [
  'name' => 'Ajax',
  'price' => 230,
  'available' => true,
  ];
  foreach($product as &field => &value)
  {
  echo "\n$field:$value";
  }
*/
 function test()
 {  $parameter1 = 'foo';
    $parameter2 = 'bar';
    if($parameter1 === 'baz'){
      die('terminate script');
 }
 return "\n$parameter1 $parameter2";
 }
 //return 'Luis';
 echo test();
 //exit(0);
 $configuration = require 'prog5.php';
 print_r($configuration);
 ?>
