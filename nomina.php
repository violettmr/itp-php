<?php 
$departamentos=require 'empleados.php';

echo "\nNombre | Sueldo | Departament | IVA | ISR | Total";
foreach ($departamentos as $departamento => $empleados) {
 echo "\n$departamento";
 $totalDepartamento=0;
 foreach($empleados as $empleado){
 $iva =$empleado['sueldo']*.15;
 $isr=$empleado['sueldo']*.1;
 $total=$empleado['sueldo'] -$iva -$isr;
 $totalDepartamento+=$total;
 echo "\n{$empleado['nombre']} | {$empleado['sueldo']}|";
 echo "$departamento | $iva | $isr | $total";
  }
 echo "\n$totalDepartamento";
 }
 $departamentos['ventas']= [];
 $departamentos['ventas'][]= ['nombre'=>'Roberto Hernandez',
 'sueldo'=>3500,
 ];
 