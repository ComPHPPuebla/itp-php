<?php
$empleados = require 'empleados.php';

nomina_foreach($empleados);
nomina_for($empleados);
nomina_while($empleados);
nomina_while($empleados, .16);
function nomina_while(
        $empleados, $porcentajeIVA = .15, $porcentajeISR = .1
)
{
    echo "Nombre          | Sueldo\n";
    $i = 0;
    while ($i < count($empleados)) {
        $sueldo = $empleados[$i]['sueldo']
            - $empleados[$i]['sueldo'] * $porcentajeIVA
            - $empleados[$i]['sueldo'] * $porcentajeISR;
        echo "{$empleados[$i]['nombre']}  | $sueldo\n";
        $i++;
    }
}

function nomina_for($empleados)
{
    echo "Nombre          | Sueldo\n";
    for ($i = 0; $i < count($empleados); $i++) {
        $sueldo = $empleados[$i]['sueldo']
            - $empleados[$i]['sueldo'] * .15
            - $empleados[$i]['sueldo'] * .1;
        echo "{$empleados[$i]['nombre']}  | $sueldo\n";
    }
}

function nomina_foreach($empleados)
{
    echo "Nombre          | Sueldo\n";
    foreach ($empleados as $empleado) {
        $sueldo = $empleado['sueldo']
        - $empleado['sueldo'] * .15
        - $empleado['sueldo'] * .1;

        echo "{$empleado['nombre']}  | $sueldo\n";
    }
}
