<?php
error_reporting(0);
require __DIR__ . '/vendor/autoload.php';
use andipedia\nickscrape;

$a = new NickScrape();

if ($_GET['game_code'] === 'ML') {
    $id = $_GET['user_id'];
    $zone = $_GET['zone_id'];
    if ($id == null && $zone == null) {
        echo "Please input user_id and zone_id game!";
    }
    echo $a->getMobileLegendsNickname($id, $zone);
} else if ($_GET['game_code'] === 'FF') {
    $id = $_GET['user_id'];
    if ($id == null) {
        echo "Please input user_id game!";
    }
    echo $a->getFreeFireNickname($id);
} else if ($_GET['game_code'] === 'HD') {
    $id = $_GET['user_id'];
    if ($id == null) {
        echo "Please input user_id game!";
    }
    echo $a->getHiggsDominoNickname($id);
} else if ($_GET['game_code'] === 'AL') {
    $id = $_GET['user_id'];
    if ($id == null) {
        echo "Please input user_id game!";
    }
    echo $a->getApexLegendsNickname($id);
} else if ($_GET['game_code'] === 'VAL') {
    $id = $_GET['user_id'];
    if ($id == null) {
        echo "Please input user_id game!";
    }
    echo $a->getValorantNickname($id);
} else if ($_GET['game_code'] === 'GI') {
    $id = $_GET['user_id'];
    $server = $_GET['server'];
    if ($id == null && $server == null) {
        echo "Please input user_id and server game!";
    }
    echo $a->getGenshinImpactNickname($id, $server);
} else if ($_GET['game_code'] === 'LWC') {
    $id = $_GET['user_id'];
    if ($id == null) {
        echo "Please input user_id game!";
    }
    echo $a->getLeagueOfLegendWC($id);
} else {
    echo "Error, not support game code!";
}