<?php

$artist = "Russ Warren";
$img_path = "/artists/Warren/images/2014/";

$items = array();

$j = 0;

$items[$j]['img'] = $img_path . '9.jpg';
$items[$j]['data'] = 'La Infanta, 2014, Acrylic on canvas| 4 panels| each 60 x 36, total| 60 x 144"'; $j++;

$items[$j]['img'] = $img_path . '1.jpg';
$items[$j]['data'] = 'La Infanta, 2013, Acrylic| rope and newspaper on canvas| triptych| each panel 60 x 36", or 60 x  108 total inches'; $j++;

$items[$j]['img'] = $img_path . '2.jpg';
$items[$j]['data'] = 'El Perro de la Infanta, 2013, Acrylic on canvas, 24 x 36"'; $j++;

$items[$j]['img'] = $img_path . '3.jpg';
$items[$j]['data'] = 'Infanta with Court Maiden, 2013, Acrylic on canvas, 48 x 36"'; $j++;

$items[$j]['img'] = $img_path . '4.jpg';
$items[$j]['data'] = 'Infanta with Maidservant, 2013, Acrylic on canvas, 48 x 36"'; $j++;

$items[$j]['img'] = $img_path . '5.jpg';
$items[$j]['data'] = 'Infanta with Spotted Dog, 2013, Acrylic on canvas, 48 x 36"'; $j++;

$items[$j]['img'] = $img_path . '6.jpg';
$items[$j]['data'] = 'Blue Infanta, 2014, Acrylic and newspaper on canvas, 48 x 36"'; $j++;

$items[$j]['img'] = $img_path . '7.jpg';
$items[$j]['data'] = 'Infanta with Blue Dog, 2014, Acrylic and newspaper on canvas, 48 x 36"'; $j++;

$items[$j]['img'] = $img_path . '8.jpg';
$items[$j]['data'] = 'Infanta with Red Cape, 2014, Acrylic and newspaper on canvas, 48 x 36"'; $j++;


/*
$items[$j]['img'] = $img_path . 'aaaaaaaaaaaaaa';
$items[$j]['data'] = 'aaaaaaaaaaaaaaaaaaaaaaaa'; $j++;
*/





        
echo '<textarea style="width:100%;height:100%;">';
for ($i=0; $i<count($items); $i++) {
    $rtst = (isset($items[$i]['artist']) ? $items[$i]['artist'] : $artist);
    $data = explode(',', $items[$i]['data']);
    $final_part = trim($data[3]) . (isset($data[4]) ? ', '.trim($data[4]) : '') . (isset($data[5]) ? ', '.trim($data[5]) : '') ;
    echo '
<p class="body_copy_or_art_description">
    <a href="'.$items[$i]['img'].'" target="_blank">
        <img src="'.$items[$i]['img'].'" alt="'.str_replace('|', ',', $data[0]).' by ' . $rtst . ' at Les Yeux du Monde Art Gallery" width="360">
    </a><br>
    <img src="/images/spacer.gif" width="5" height="5"><br>
    ' . $rtst . '.  <em>'.trim(str_replace('|', ',', $data[0])).'</em>, '.trim($data[1]).'.<br>'.str_replace('|', ',', ucfirst(trim($data[2]))).', '.$final_part.'. 
</p>
    
    ';
}
echo '</textarea>';
?>