<?php
class Gallery{
    private $images;
    
    public function __construct(){
        foreach (new DirectoryIterator("/opt/lampp/htdocs/Projet3/originals") as $k => $v){
            if ($v->isDot()) {continue;}
                $a=$v->getPathname();
                $b=$v->getFilename();
                $i=new Image($a,$b);
                $this->images[]=$i;
        }
    }
    
    public function display():string{
        $s="";
        foreach($this->images as $img){
          $temp = $img->getResizedPath();
            $s.='<'.'img src='.$temp.' alt='."image".'>'.'<br>';
        }
        return $s;
    }
    public function getImages():array{return $this->images;}
    }

?>
