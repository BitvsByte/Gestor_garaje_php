<?php

$resultado=null;
$fca= "https://carnovo.com/wp-content/uploads/2017/01/FCA.png";
$bmwg="https://acnews.blob.core.windows.net/imgnews/large/NAZ_adc9828d001a4e07ac087ca6080781cf.jpg";
$lujo ="https://carnovo.com/wp-content/uploads/2017/01/daimler.png";
$ferr="https://carnovo.com/wp-content/uploads/2017/01/FERRARI-LOGO.png";
$for="https://carnovo.com/wp-content/uploads/2017/01/ford-logo-1.png";
$volv="https://carnovo.com/wp-content/uploads/2017/01/geely-logo.png";
$gm="https://carnovo.com/wp-content/uploads/2017/01/general-motors.png";
$honda="https://carnovo.com/wp-content/uploads/2017/01/honda-logo.png";
$hyu="https://carnovo.com/wp-content/uploads/2017/01/hyundai-logo.png";
$nis="https://logos-world.net/wp-content/uploads/2020/04/Nissan-Symbol.jpg";
$psa="https://carnovo.com/wp-content/uploads/2017/01/psa-groupe.png";
$su="https://carnovo.com/wp-content/uploads/2017/01/suzuki.jpg";
$toyo="https://carnovo.com/wp-content/uploads/2017/01/toyota-logo.png";
$vw="https://s1.eestatic.com/2021/01/13/motor/550956049_170273238_1024x576.jpg";
$tata="https://carnovo.com/wp-content/uploads/2017/01/tata-motors.png";


switch ($datosCoche['marca']) {
    case 'Alfa Romeo':
    case 'Abarth':
    case 'Chrysler':
    case 'Dodge':
    case 'Fiat':
    case 'Jeep':
    case 'Lancia':
    case 'Maserati':
        $resultado = $fca;
        break;
    case 'Mini':
    case 'Rolls Royce':
    case 'BMW':
        $resultado = $bmwg;
        break;
    case 'Maybach':
    case 'Mercedes Benz':
    case 'Smart':
        $resultado = $lujo;
        break;
    case 'Ferrari':
        $resultado = $ferr;
        break;
    case 'Ford':
    case 'The Lincoln Company':
    case 'Troller':
        $resultado = $for;
        break;
    case 'Volvo':
        $resultado = $volv;
        break;
    case 'Baojun':
    case 'Buick':
    case 'Cadillac':
    case 'Chevrolet':
    case 'GMC':
        $resultado = $gm;
        break;
    case 'Acura':
    case 'Honda':
        $resultado = $honda;
        break;
    case 'Kia':
    case 'Hyndai':
    case 'Genesis':
        $resultado = $hyu;
        break;
    case 'Renault':
    case 'Nissan':
    case 'Infiniti':
    case 'Mitsubishi':
    case 'Alpine':
    case 'Datsu':
    case 'Lada':
    case 'Dacia':
        $resultado = $nis;
        break;
    case 'Citroen':
    case 'DS Automoviles':
    case 'Peugeot':
    case 'Opel':
        $resultado = $psa;
        break;
    case 'Suzuki':
        $resultado = $su;
        break;
    case 'Tata':
    case 'Jaguar':
    case 'Land Rover':
        $resultado = $tata;
        break;
    case 'Daihatsu':
    case 'Lexus':
    case 'Toyota':
        $resultado = $toyo;
        break;
    case 'Audi':
    case 'Bentley':
    case 'Bugatti':
    case 'Lamborghini':
    case 'Porshe':
    case 'SEAT':
    case 'Skoda':
    case 'Volkswagen':
        $resultado = $vw;
        break;
    default:
        $resultado = 'https://noticias.coches.com/wp-content/uploads/2011/10/cars.jpg';
}

?>