<html>
<head>
<title>First Homework Atanas Troqnov</title>
<style type="text/css">
paragraph.red {color:red;}
paragraph.blue {color:blue;}
paragraph.black {color:black;}
body {background-color:green}
</style>
</head>
<body>
<?php


if(array_key_exists("number",$_GET)){
				 
$parameter = $_GET["number"];

$array = array( "not_number"=>"<paragraph class=\"red\">The parameter is not a number</paragraph><br/>", 
                   "within_range"=>"<paragraph class=\"red\">The parameter  is within the range [0,19999]</paragraph><br/>",
				   "prime"=>"<paragraph class=\"black\">The  number PARAMETER is prime !</paragraph><br/>",
				   "composite"=>"<paragraph class=\"blue\">The number PARAMETER is NOT prime !</paragraph><br/>"
				 );

check($parameter,$array);
 
 }
 
function is_composite($parameter){
            for($i = 2; $i <= sqrt($parameter); $i++) {
            if($parameter % $i == 0) {
	        return true;
	        break; }
			}
	} 
 
function check( $parameter,$arr){ 
   if (  is_numeric($parameter) )  {
       $arr = str_replace("PARAMETER",$parameter,$arr);
       $parameter = (int)$parameter; //Avoid error
       if($parameter > 0 and $parameter < 19999) {
	      
	      echo $arr["within_range"];
	   }
	   if (is_composite($parameter)){
	        	
	      echo $arr["composite"];	
	   }
	   else{
	      echo $arr["prime"];
	   }
	}
   else{
      echo $arr["not_number"];
   }
}
?>
</body>
</html>