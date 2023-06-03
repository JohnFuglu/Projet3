<?php
class gallery{
    private $images;
    
    public function __construct(){
        foreach (new DirectoryIterator("../originals") as $k => $v){
            if ($v->isDot()) {continue;}
            $a=$v->getPathname();
            $b=$v->getFilename();
            $i=new Image($a,$b);
            $images[]=$i;
        }
    }
    public function getImages():array{return $images;}
    public function mini(){
      
    }

}
?>
