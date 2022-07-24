<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   class person{

public $name, $age;

function __construct($name , $age){

    $this->name = $name;
    $this->age = $age;
}

function show(){

    echo $this->name ."". $this->age;
}

}

  $p1 = new person("shuvo",27);
  $p1->show();

    ?>
</body>
</html>