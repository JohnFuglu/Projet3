<?php
/*define('GALLERY_PATH','../gallery/');
function creeMiniature($path,$width){
    $t= explode('/',$path);   
    $i=count($t);
    $original=  imagecreatefromjpeg('./'.$path);
    $res=imagescale($original, $width);
    imagejpeg($res,$t[$i-1],50);//50% qualité //,$t[$i-1]
    imagedestroy($original);
    imagedestroy($res);
}
foreach (new DirectoryIterator("../originals") as $k => $v){
      if ($v->isDot()) {continue;}
         creeMiniature($v->getPathname(),90);
}*/
require '/opt/lampp/htdocs/Projet3/classes/image.class.php';
require '/opt/lampp/htdocs/Projet3/classes/gallery.class.php';
?>
<!doctype html>
<html>
    <head>
        <title>Affichage</title>
    </head>
    <body>
        <div>
         <?php $gallery = new Gallery();?>
        </div>
    </body>
</html>
