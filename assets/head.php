<?php



// $sec = "20";
// header("Refresh: $sec");

// $connect_db = new mysqli($servername, $username, $password, $dbname);

$oddzial = $_GET['o'];

//$query = $connect_db->query("SELECT * FROM service_order ORDER BY start_date ASC");
//$oczekujace_lacznie = $connect_db->query("SELECT * FROM service_order WHERE department_group_id==$oddzial AND state_id='2'");
//$zaplanowane_lacznie = $connect_db->query("SELECT * FROM service_order WHERE department_group_id==$oddzial AND state_id='1'");
//$zaakceptowane_lacznie = $connect_db->query("SELECT * FROM service_order WHERE department_group_id==$oddzial AND state_id='4'");
//$rozpoczete_lacznie = $connect_db->query("SELECT * FROM service_order WHERE department_group_id==$oddzial AND state_id='8'");

//$wszystkie = mysqli_num_rows($query);
//$oczekujace = mysqli_num_rows($oczekujace_lacznie);
//$zaplanowane = mysqli_num_rows($zaplanowane_lacznie);
//$rozpoczete = mysqli_num_rows($rozpoczete_lacznie);


if ($oddzial == '19') {
    $wybrany_oddzial = "Gdańsk";
} elseif ($oddzial == '20') {
    $wybrany_oddzial = "Olsztyn";
} elseif ($oddzial == '21') {
    $wybrany_oddzial = "Bydgoszcz";
} elseif ($oddzial == '26') {
    $wybrany_oddzial = "Koszalin";
} elseif ($oddzial == '28') {
    $wybrany_oddzial = "Gdańsk Rębiechowo";
} elseif ($oddzial == '29') {
    $wybrany_oddzial = "Giżycko";
} elseif ($oddzial == '36') {
    $wybrany_oddzial = "Grudziądz";
} elseif ($oddzial == '1') {
    $wybrany_oddzial = "Poznań";
} elseif ($oddzial == '2') {
    $wybrany_oddzial = "Piła";
} elseif ($oddzial == '3') {
    $wybrany_oddzial = "Szczecin";
} elseif ($oddzial == '30') {
    $wybrany_oddzial = "Ostrów Wielkopolski";
} elseif ($oddzial == '33') {
    $wybrany_oddzial = "Gorzów Wielkopolski";
} elseif ($oddzial == '43') {
    $wybrany_oddzial = "Szczecin Goleniów";
} elseif ($oddzial == '4') {
    $wybrany_oddzial = "Kraków";
} elseif ($oddzial == '5') {
    $wybrany_oddzial = "Rzeszów";
} elseif ($oddzial == '6') {
    $wybrany_oddzial = "Kielce";
} elseif ($oddzial == '9') {
    $wybrany_oddzial = "Kraków Balice";
} elseif ($oddzial == '37') {
    $wybrany_oddzial = "Tarnów";
} elseif ($oddzial == '39') {
    $wybrany_oddzial = "Nowy Targ";
} elseif ($oddzial == '15') {
    $wybrany_oddzial = "Warszawa";
} elseif ($oddzial == '22') {
    $wybrany_oddzial = "Warszawa Okęcie";
} elseif ($oddzial == '13') {
    $wybrany_oddzial = "Lublin";
} elseif ($oddzial == '14') {
    $wybrany_oddzial = "Łódź";
} elseif ($oddzial == '17') {
    $wybrany_oddzial = "Radom";
} elseif ($oddzial == '18') {
    $wybrany_oddzial = "Białystok";
} elseif ($oddzial == '27') {
    $wybrany_oddzial = "Płock";
} elseif ($oddzial == '40') {
    $wybrany_oddzial = "Siedlce";
} elseif ($oddzial == '10') {
    $wybrany_oddzial = "Wrocław";
} elseif ($oddzial == '34') {
    $wybrany_oddzial = "Wrocław Strachowice";
} elseif ($oddzial == '11') {
    $wybrany_oddzial = "Zielona Góra";
} elseif ($oddzial == '12') {
    $wybrany_oddzial = "Lubin";
} elseif ($oddzial == '31') {
    $wybrany_oddzial = "Wałbrzych";
} elseif ($oddzial == '38') {
    $wybrany_oddzial = "Leszno";
} elseif ($oddzial == '7') {
    $wybrany_oddzial = "Katowice";
} elseif ($oddzial == '32') {
    $wybrany_oddzial = "Katowice Pyrzowice";
} elseif ($oddzial == '8') {
    $wybrany_oddzial = "Częstochowa";
} elseif ($oddzial == '25') {
    $wybrany_oddzial = "Bielsko-Biała";
} elseif ($oddzial == '36') {
    $wybrany_oddzial = "Opole";
} elseif ($oddzial == '41') {
    $wybrany_oddzial = "Rybnik";
}
// GRUPA GDAŃSK
$link_id_gdansk = "o=19";
$link_id_olsztyn = "o=20";
$link_id_bydgoszcz = "o=21";
$link_id_koszalin = "o=26";
$link_id_rebiechowo = "o=28";
$link_id_gizycko = "o=29";
$link_id_grudziadz = "o=36";

// GRUPA POZNAŃ
$link_id_poznan = "o=1";
$link_id_pila = "o=2";
$link_id_szczecin = "o=3";
$link_id_ostrow_wielkopolski = "o=30";
$link_id_gorzow_wielkopolski = "o=33";
$link_id_goleniow = "o=43";

// GRUPA KRAKÓW
$link_id_krakow = "o=4";
$link_id_rzeszow = "o=5";
$link_id_kielce = "o=6";
$link_id_krakow_balice = "o=9";
$link_id_tarnow = "o=37";
$link_id_nowy_targ = "o=39";

// GRUPA WARSZAWA
$link_id_warszawa = "o=15";
$link_id_warszawa_okecie = "o=22";
$link_id_lublin = "o=13";
$link_id_lodz = "o=14";
$link_id_radom = "o=17";
$link_id_bialystok = "o=18";
$link_id_plock = "o=27";
$link_id_siedlce = "o=40";

// GRUPA WROCŁAW
$link_id_wroclaw = "o=10";
$link_id_wroclaw_strachowice = "o=34";
$link_id_zielona_gora = "o=11";
$link_id_lubin = "o=12";
$link_id_walbrzych = "o=31";
$link_id_leszno = "o=38";

// GRUPA KATOWICE
$link_id_katowice = "&o=7";
$link_id_katowice_pyrzowice = "o=32";
$link_id_czestochowa = "o=8";
$link_id_bielsko_biala = "o=25";
$link_id_opole = "o=36";
$link_id_rybnik = "o=41";
?>

<head>

    <meta charset="utf-8" />
    <title>Kaizen Rent S.A. - SoRent v2.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Michał Bajor" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.svg">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />


</head>