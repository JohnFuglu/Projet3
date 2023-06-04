<?php
 class Image{
     private GdImage $image;
     private $name;
     private $originalPath;
     private $resizedPath;
     private $h;
     private $w;
     private $quality=50;
     
     public function __construct($path,$name){
        $this->originalPath=$path;
        list($height,$width)= getimagesize($path);
        $this->h=$height;
        $this->w=$width;
        $this->name=$name;
        $this->save($path);
    }
    public function display(){
     
 }
 public function load($path){
     
 }
 public function save($path){
     $image = $this->resize($path);
     ob_start();
     imagejpeg($image);
     $data = ob_get_clean();
     $this->resizedPath='/Projet3/gallery/'.$this->name;
     file_put_contents('/opt/lampp/htdocs/Projet3/gallery/'.$this->name,$data);
 }
 public function resize($path): GdImage{
    $original=  imagecreatefromjpeg($path);
    $res=imagescale($original,($this->w*5)/100);
    imagejpeg($res,null,$this->quality);//50% qualité //,$t[$i-1]
    imagedestroy($original);
     imagedestroy($res);
    return $res;
 }
 public function setWidth(int $width){$this->width=$width;}
 public function setQuality(int $qual){$this->quality=$qual;}
 public function getOriginalPath():string{return $this->originalPath;}
 public function getResizedPath():string{return $this->resizedPath;}
 }
?>