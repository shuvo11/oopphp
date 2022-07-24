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
   
class employee{
public $name;
public $age;
public $salary;

function __construct($n,$a,$s){
    $this->name =$n;
    $this->age =$a;
    $this->salary =$s;
}

function info(){

    echo "<h1>Employee name : $this->name</h1>";
    echo "<h1>Employee name : $this->age</h1>";
    echo "<h1>Employee name : $this->salary</h1>";
}



}

class manager extends employee{

public $ta = 1000;
public $phone = 300;
public $totalsalary;


    function info(){

        $this->totalsalary = $this->ta + $this->phone + $this->salary;

        echo "<h1>Employee name : $this->name</h1>";
        echo "<h1>Employee name : $this->age</h1>";
        echo "<h1>Employee name : $this->totalsalary</h1>";
    }

}


$e1 = new manager("shuvo",27,16800);

$e2 = new employee("shiblo",27,10000);

$e1->info();
$e2->info();
// class vagatable extends fruts{


// }



    ?>
</body>
</html>