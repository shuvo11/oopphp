<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>



<?php 

class calculation{

public $a,$b,$c;

function sum(){ 
 $this->c = $this->a + $this->b;
 return $this->c;

}

function sub(){
 $this->c = $this->a - $this->b;
  return $this->c;
}


}


$c1 = new calculation();

$c1->a =10;
$c1->b =20;

echo "sum of value :". $c1->sum() ."\n";

$c2 = new calculation();

$c2->a =30;
$c2->b =50;

echo "sub of value :". $c1->sub();





?>











</body>
</html>