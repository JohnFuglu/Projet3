<?php
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
             <?php echo $gallery->display();?>
        </div>
    </body>
</html>
