<!DOCTYPE html>
<html>
<head>
    <style>
      .agua{
        text-align: center;
        border-radius: 4px;
        background-color: #79b6c9;
        display: inline-block;
        width: 20px;
        height: 20px;
      }
      .tierra{
        text-align: center;
        border-radius: 4px;
        background-color: #6b8e23;
        display: inline-block;
        width: 20px;
        height: 20px;
      }
      .urbano{
        text-align: center;
        border-radius: 4px;
        background-color: orange;
        display: inline-block;
        width: 20px;
        height: 20px;
      }
      .urbanoAfectado{
        text-align: center;
        border-radius: 4px;
        background-color: red;
        display: inline-block;
        width: 20px;
        height: 20px;
      }
      .tierraAfectada{
        text-align: center;
        border-radius: 4px;
        background-color:rgb(112, 28, 38);
        display: inline-block;
        width: 20px;
        height: 20px;
      }
      .marAfectado{
        text-align: center;
        border-radius: 4px;
        background-color: #B43757;
        display: inline-block;
        width: 20px;
        height: 20px;
      }
    </style>
</head>
<body>

<?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //0
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //1
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //2
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'], //3
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //4
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'], //5
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'], //6
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'], //7
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'], //8
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //9
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'], //10
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'], //11
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'], //12
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'], //13
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'], //14
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'], //15
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'], //16
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'], //17
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'], //18
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'], //19
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //20
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'], //21
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'], //22
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'] //23
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL

echo "<b>MAPA ORIGINAL:</b>";
showMap($pomodoroHaters);
echo "<br><br><br><br>";
echo "<b>MAPA ORIGINAL PINTADO:</b>";
pintarMapa($pomodoroHaters);
echo "<br><br><br><br>";

echo "<b>MAPA CON IMPACTOS URBANOS:</b>";
$zonasAfectadas = nucleosAfectados($pomodoroHaters, $impacts);
showMap($zonasAfectadas);
echo "<br><br><br><br>";
echo "<b>MAPA CON IMPACTOS URBANOS PINTADO:</b>";
pintarMapa($zonasAfectadas);
echo "<br><br><br><br>";

$personas = cantidadPersonas($zonasAfectadas);
$litros = $personas * 0.025;
echo number_format($personas) . " personas necesitarán un total de $litros litros de colirio.";
echo "<br><br><br><br>";

echo "<b>MAPA CON IMPACTOS TOTALES:</b>";
$zonasAfectadas = zonasImpactadas($zonasAfectadas, $impacts);
showMap($zonasAfectadas);
echo "<br><br><br><br>";
echo "<b>MAPA CON IMPACTOS TOTALES PINTADO:</b>";
pintarMapa($zonasAfectadas);
echo "<br><br><br><br>";

$daños = dañosTotales($zonasAfectadas);
echo "El total de daños es de " . number_format($daños) . "€";
echo "<br><br><br>";

$totalMar = cantidadMar($zonasAfectadas);
$totalMarAfectado = cantidadMarAfectado($zonasAfectadas);
echo "Hay $totalMar km^2 de mar, de los cuales $totalMarAfectado km^2 han sido afectados.";
echo "<br><br><br>";

$toneladasBacalado = 2000*$totalMarAfectado/$totalMar;
$totalVentas = $toneladasBacalado * 1000 * 5;
echo "La ONG recaudará aproximadamente " . number_format((float)$totalVentas) . "€ por " . round($toneladasBacalado) . " toneladas de bakalao.";
echo "<br><br><br>";

//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES

function showMap($mapa): void{
    for($i=0; $i<count($mapa);$i++){
        echo "<br>";
        for($j=0; $j<24; $j++){
            echo $mapa[$i][$j];
        }
    }
}

function nucleosAfectados($mapa, $impactos):array{
    for($i=0; $i<count($impactos);$i++){
        for($j=0; $j<2; $j++){
            $x = $impactos[$i][0];      //list ($x, $y) --- $data = [3, 12]
            $y = $impactos[$i][1];
            if($mapa[$x][$y] == "A"){
                $mapa[$x][$y] = "C";
            }
        }
    }
    return $mapa;
}

function cantidadPersonas($nucleosAfectados): int{
    $genteAfectada = 0;
    for($i=0; $i<count($nucleosAfectados);$i++){
        for($j=0; $j<24; $j++){
            if($nucleosAfectados[$i][$j] == "C"){
                $genteAfectada += 5000;
            }
        }
    }
    return $genteAfectada;
}

function zonasImpactadas($mapa2, $impactos): array{
    for($i=0; $i<count($impactos);$i++){
        for($j=0; $j<2; $j++){
            $x = $impactos[$i][0];
            $y = $impactos[$i][1];
            if($mapa2[$x][$y] == "0"){
                $mapa2[$x][$y] = "X";
            } elseif($mapa2[$x][$y] == "~"){
                $mapa2[$x][$y] = "S";
            }
        }
    }
    return $mapa2;
}

function dañosTotales($mapa3):int{
    $costes = 0;
    for($i=0; $i<count($mapa3);$i++){
        for($j=0; $j<24; $j++){
            if($mapa3[$i][$j] == "C"){
                $costes += 200000;
            } elseif ($mapa3[$i][$j] == "X"){
                $costes += 50000;
            }
        }
    }
    return $costes;
}

function cantidadMar($mapa3){ 
    $cont = 0;
    for($i=0; $i<count($mapa3);$i++){
        for($j=0; $j<24; $j++){
            if($mapa3[$i][$j] == "~" || $mapa3[$i][$j] == "S"){
                $cont++;
            }
        }
    }
    return $cont;
}

function cantidadMarAfectado($mapa3){ 
    $cont = 0;
    for($i=0; $i<count($mapa3);$i++){
        for($j=0; $j<24; $j++){
            if($mapa3[$i][$j] == "S"){
                $cont++;
            }
        }
    }
    return $cont;
}

// A PINTAR :DDD


function pintarMapa ($mapa){
    for($i=0; $i<count($mapa); $i++){
        echo "<br>";
        for($j=0; $j<24; $j++){
            switch($mapa[$i][$j]){
                case "~":
                    $clase = "agua";
                    break;
                case "0":
                    $clase = "tierra";
                    break;
                case "A":
                    $clase = "urbano";
                    break;
                case "C":
                    $clase = "urbanoAfectado";
                    break;
                case "X":
                    $clase = "tierraAfectada";
                    break;
                case "S":
                    $clase = "marAfectado";
                    break;
            }
            echo "<div class='$clase'>" .  $mapa[$i][$j] . "</div>";        //¿Qué es div?
        }
    }
}

?>

</body>
</html>