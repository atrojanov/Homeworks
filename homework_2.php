<html>
<head>
<title>Second Homework Atanas Troqnov</title>
</head>
<body>
<?php
$array = range(20,1000,37);

find_3_prime();

check_exist();



function  find_3_prime(){
echo "<p><b>find_3_prime</b></p>";
include ('homework_1.php');
Global $array;
$count = 0;
foreach($array as $value){
   if(!(is_composite($value))){
       $count ++ ;
   }
   if($count == 3){
       echo "<p>$value</p>";
       break;   
   }
  }
}


function check_exist() {
echo "<p><b>check_exist:</b></p>";
Global $array;
$find = array(146,284,871);
 foreach($find as $i){
    if(in_array($i,$array)){
       echo "<p>The number $i exist in the array</p>";
    }
    else{
	   echo "<p>The number $i does not exist in the array</p>";
	}
  }
}
 
?>
</body>
</html>