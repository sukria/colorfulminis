<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head><?php
$today = new DateTime();
if ($_GET['day']) {
    $today = new DateTime($_GET['day']);
}

$days = array( 
    21, 15, 4, 6, 10, 
    8, 7, 18, 1, 16, 
    24, 20, 23, 14, 12, 
    3, 22, 19, 2, 11,
    13, 17, 5, 9
);

$articles = array(
    1 => "/les-rois-du-ring-un-jeu-dapero-imagine-par-chien-sauvage/",
    2 => "/joan-of-arc-les-figurines/",
    3 => "/sub-terra-unboxing-et-critique/",
    4 => "/warhammer-underworlds-shadespire-decouverte-et-avis-a-chaud/",
    5 => "/retrospective-sur-les-gammes-de-peinture/",
    6 => "/masterclass-de-peinture-du-nmm-acier-sur-la-figurine/",
    7 => "/pot-a-eau-et-poignee-de-peintre-citadel/",
    8 => "/gerer-sa-peinturotheque-avec-paintrack/",
    9 => "/unboxing-en-folie-et-si-on-ouvrait-des-boites-avant-noel/",
    10 => "/descent-voyages-dans-les-tenebres-galerie-de-figurines-peintes/",
    11 => "/decouverte-de-xcom-the-board-game/",
    12 => "#",
    13 => "#",
    14 => "#",
    15 => "#",
    16 => "#",
    17 => "#",
    18 => "#",
    19 => "#",
    21 => "#",
    22 => "#",
    23 => "#",
    24 => "#"
);

?>
<div style="width:678px; height:613px; position:relative; background:url(calendar-background-2017.jpg); color:rgba(255,255,255,0.20);">
<?php
    $count = 1;
    $ligne = 0;
    $colonne = 0;

    foreach ($days as $d) {
        
        $top = 125 + $ligne * 68;
        $left = 310 + $colonne * 68;
        
        $thisdate = sprintf("%02d-12-2017 08:00", $d);
        ?><div style="width:68px; height:68px; position:absolute; top:<?php echo $top; ?>px; left:<?php echo $left; ?>px; text-align:center; font-family: 'Permanent Marker', cursive; font-size:36px;"><?php
        if ($today >= new DateTime($thisdate)){
            ?><a target="_parent" href="http://colorfulminis.com<?php echo $articles[$d] ?>" style=" color:rgba(255,255,255,1.00); text-decoration:none;" onMouseOver="this.style.color='#c51711'" onMouseOut="this.style.color='#FFF'"><?php echo $d ?></a><?php
        }
        elseif ($d < 24) {
            echo $d;
        }
        else {
            ?><span style="color:rgba(197,23,17,0.60);">24</span><?php
        }
        ?></div>
    <?php
        $count++;
        $colonne++;
        if (($count - 1) % 5 == 0) {
            $ligne++;
        }
        if (($count - 1) % 5 == 0) {
            $colonne = 0;
        }
    } ?>
</div>
