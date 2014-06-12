<?php 
$departamentos=require 'empleados.php';

echo "\nNombre | Sueldo | Departament | IVA | ISR | Total";
foreach ($departamentos as $departamento => $empleados) {
 echo "\n$departamento";
 $totaldepartamento=0;
 array_walk($empleados,function($empleado)
  use ($departamento, &$totaldepartamento) {
 $iva =$empleado['sueldo']*.15;
 $isr=$empleado['sueldo']*.1;
 $total=$empleado['sueldo'] -$iva -$isr;
 $totaldepartamento+=$total;
 echo "\n{$empleado['nombre']} | {$empleado['sueldo']}|";
 echo "$departamento | $iva | $isr | $total";

  });
  echo "\n$totaldepartamento";
 }
 $departamentos['ventas']= [];
 $departamentos['ventas'][]= ['nombre'=>'Roberto Hernandez',
 'sueldo'=>3500,
 ];
 