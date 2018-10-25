     <?php
    $txt="Iam a Student <br><br>";
    $num=02;
    echo $txt; 
    echo $num;
function variable(){
      $a=6;
      echo $a;
}
echo "<br> VARIABLES <br>";
variable();
 define ("GREETING", " This is first php program ");
  echo GREETING;
//DATA TYPES
echo "<br> DATA TYPES <br>";
    $b=10.365;
    var_dump($b);
    echo PHP_INT_MAX; 
echo "<br> CONDITION <br>";
     $i=10;
     $j=10;
     if($i>$j){
          echo "<br> i is bigger than j <br>";
      }
    elseif($i==$j){
           echo "<br> i is equal to j <br>";        
}
     else{
          echo "<br> i is smaller than j <br>";         
}
echo "<br> ARRAY <br>";
   $student = array("ajay","vijay","Sujay");
   echo "<br>Mr " .$student[0]. " is elder than " .$student[1]. " and " .$student[2]. ".";   
?>
