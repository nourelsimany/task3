<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <ul>
    <?php 
// Problem 1 : while loop
    $x=1;
    while ($x<=12){
        ?>
      <li> <?php echo $x ; echo "<br/>" ;?> </li> 
      <?php   
       $x++;
       continue;
      }
 echo "<br/>";
// Problem 2  : do while
    $y=1;
    do {
    ?>
    <li> <?php echo $y ; echo "<br/>" ;?> </li> 
     <?php $y++;
      }
    while ($y<=12);
  echo "<br/>";  

// Problem 3  : for loop
   for($num =1 ; $num<=12 ; $num++){
    echo "$num";
    echo "<br/>";
   }
   echo "<br/>"; 

//Prbblem 4 : define constant value and print it in h1 html header
  
  define("pi", 3.14);    
  ?>
  <h1> <?php echo pi ;?> </h1>
  <?php
 echo "<br/>"; 

// Problem 5:
  // if statement:
  
  $grade=92;
  if ($grade>=50 && $grade<60){
    echo "<h1> Pass </h1>";
   }
   elseif($grade>=60 && $grade<70 ){
    echo "<h1> good </h1>";
    }
   elseif($grade>=70 && $grade<90){
    echo "<h1>very good </h1>";
   }
   elseif($grade>=90){
    echo "<h1>Excellent </h1>";
   }
   else {
    echo "<h1>fail </h1>";
   }
  echo "<br/>"; 

  // switch case:
    switch($grade){
      case 50:
      case 55:
        echo "Pass";
        break;
      case 60:
        echo "Good";
        break;
      case ($grade>=70 && $grade< 90):
        echo "Very good";
        break;
      case ($grade>=90):
        echo "Excellent";
        break;
      default:
      echo "There is a mistake";

    }
  echo "<br/>";  
  ?>
  </ul>
</body>
</html>


