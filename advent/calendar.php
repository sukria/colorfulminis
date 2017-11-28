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
?>
<div style="width:678px; height:613px; position:relative; background:url(calendar-background-2017.jpg); color:rgba(255,255,255,0.20);">
<?php
    $count = 1;
    $ligne = 0;
    $colonne = 0;

    foreach ($days as $d) {
        
        $top = 125 + $ligne * 68;
        $left = 310 + $colonne * 68;
        
        $thisdate = sprintf("%02d-12-2017", $d);
        ?><div style="width:68px; height:68px; position:absolute; top:<?php echo $top; ?>px; left:<?php echo $left; ?>px; text-align:center; font-family: 'Permanent Marker', cursive; font-size:36px;"><?php
        if ($today >= new DateTime($thisdate)){
            ?><a href="#" style=" color:rgba(255,255,255,1.00); text-decoration:none;" onMouseOver="this.style.color='#c51711'" onMouseOut="this.style.color='#FFF'"><?php echo $d ?></a><?php
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
