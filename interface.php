<?php

  interface parant1{
    function cal($a,$b);

    
  }

  interface parant2{
    function sub($c,$d);

  }


  class child implements parant1, parant2{

    public function cal($a,$b){
        echo $a + $b ;
    }

    public function sub($c,$d){
        echo $c - $d ;
    }
  }


 $test = new child();

  $test->cal(10,5);
  echo "<br>";
  $test->sub(10,5);




?>