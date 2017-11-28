<?php
$today = new DateTime();
if ($_GET['day']) {
    $today = new DateTime($_GET['day']);
}
?>
<div style="width:678px; height:613px; position:relative; background:url(calendar-background-2017.jpg); color:rgba(255,255,255,0.20);">
<?php
    for ($i=1; $i<=24; $i++) {
        $daynumber = sprintf("%02d", $today);
        $thisdate = sprintf("%02d-12-2017", $i);
        ?><div style="width:68px; height:68px; position:absolute; top:125px; left:310px; text-align:center; font-family: 'Permanent Marker', cursive; font-size:36px;"><?php
        if ($today >= new DateTime($thisdate)){
            ?><a href="#" style=" color:rgba(255,255,255,1.00); text-decoration:none;" onMouseOver="this.style.color='#c51711'" onMouseOut="this.style.color='#FFF'"><?php echo $i ?></a><?php
        }
        else if ($i < 24) {
            echo $i
        }
        else {
            ?><span style="color:rgba(197,23,17,0.60);">24</span><?php
        }
        ?></div>
    <?php } ?>
</div>
