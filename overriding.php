<?php 


    class p{

public $name = "parant class";

public function cal($a,$b){
    return $a * $b;
}
      
}



    class child extends p {

       public $name = "child class";
        
           public function cal($a,$b){
            return $a + $b;
           }

     }



        $test = new p();

    echo $test->cal(10,5);




?>