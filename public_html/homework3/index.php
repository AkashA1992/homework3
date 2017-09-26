<?php
	$obj=new string();
	$text="AKASH";
  $uctext="akash";
  $hello="This is Hello World";
  
	$obj->stringLength($text);
	$obj->stringRev($text);	
	$obj->stringTrim($hello);
  $obj->stringToLower($text);
  $obj->wordCount($hello);
  $obj->stringShuffle($text);
  $obj->ucFirst($uctext);
  $obj->explode();
  $obj->htmlentities();
  $obj->numberFormat();
  
	class string
	{
		public function __construct()
		{
			echo 'Hello I am Constructor!!!!!! </br>';
		}
   
		public function stringLength($text)
		{
      echo '<h3>10 string functions </h3> <hr>';
			echo '<h2>1.String Length Function </h2>';
			print 'Length of '.$text.' is '. strlen($text);
      echo $message;
			echo '<hr>';
		}

		public function stringRev($text)
		{
			echo '<h2>2.Reverse String Function </h2>';
			print 'String: '.$text.' |Reverse String: '.strrev($text);
			echo '<hr>';
		}

		public function stringTrim($hello)
		{
			echo '<h2>3.String Trim Function </h2>';
			print 'String: '.$hello.' |Trimmed String: '.trim($hello,"This is ");
			echo '<hr>';
		}
   
    public function stringToLower($hello)
		{
			echo '<h2>4.String ToLower Function </h2>';      
			print 'String: '.$hello.' |ToLower String: '.strtolower($hello);
			echo '<hr>';
		}
   
    public function wordCount($hello)
		{
			echo '<h2>5.Word Count Function </h2>';      
			print 'String: '.$hello.' |Word Count: '.str_word_count($hello);
			echo '<hr>';
		}
    
    public function stringShuffle($hello)
		{
			echo '<h2>6.String Shuffle Function </h2>';      
			print 'String: '.$hello.' |Shuffled Word: '.str_shuffle($hello);
			echo '<hr>';
		}
   
     public function ucFirst($ucfirst)
     {
      echo '<h2>7.Uppercase first charachter Function </h2>';      
			print 'String: '.$ucfirst.' |UC Charachter: '.ucfirst($ucfirst);
			echo '<hr>';
		 }
      
     public function explode()
     {
        echo '<h2>8.Explode Function </h2>';    
        $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo 'String:'.$pizza.'<br>';
        echo 'pieces[0]:'.$pieces[0]; // piece1
        echo 'pieces[1]:'.$pieces[1]; // piece2			  
			  echo '<hr>';
     }
     
     public function htmlentities()
     {
       echo '<h2>9.Htmlentities Function </h2>';    
       $str = "A 'quote' is <b>bold</b>";
       echo htmlentities($str);       
       echo '<hr>';
     }
     
     public function numberFormat()
     {
       echo '<h2>10.Number Format Function </h2>';
       $number = 1234.56;
       echo 'Number:'.$number.'</br>';       
       echo '<hr>';
     }
	}
   $arrayObj=new myArray();
   $array=array(1,2,3,4,5,6,7);
   $arrayObj->printArray($array);
   $arrayObj->arrayChunks($array);
   $records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
   );
   $arrayObj->arrayColumn($records);
   $arrayObj->arrayFill();
   $arrayObj->arrayCombine($array);
   $arrayObj->arrayCountValue($array);
   $arrayObj->arrayKey($array);
   $arrayObj->arrayPop($array);
   $arrayObj->arrayRand($array);
   $arrayObj->arrayShuffle($array);
   
   class myArray
   {
     public function __construct()
     {
       echo 'I am Array Constructor!!! <br>';
     }
     
     public function printArray($array)
     {
     echo '<h2>1. Print array function </h2>';
     print_r($array);
     echo '<hr>';
     }  
     
     public function arrayChunks($array)
     {
       echo '<h2>2. Array Chunk Function </h2>';
       print_r(array_chunk($array, 2));
       echo'<hr>';
     }
     
     public function arrayColumn($records)
     {
       echo '<h2>3. Array Column Function </h2>';
       $first_names = array_column($records, 'first_name');
       print_r($first_names);
       echo '<hr>';
     }
     
     public function arrayFill()
     {
       echo '<h2>4. Array Fill Function </h2>';
       $a=array_fill(3,5,'Hi');
       print_r($a);
       echo '<hr>';
     }
     
     public function arrayCombine($array)
     {
       echo '<h2>5. Array Combine Function </h2>';
       $b=array('a','b','c','d','e','f','g');
       $c=array_combine($array,$b);
       print_r($c);
       echo '<hr>';
     }
     
     public function arrayCountValue($array)
     {
       echo '<h2>6. Array Count Value Function </h2>';
       print_r(array_count_values($array));
       echo '<hr>';
     }     
     
     public function arrayKey($array)
     {
       echo '<h2>7. Array Key Function </h2>';
       print_r(array_keys($array));
       echo '<hr>';
     }
     
     public function arrayPop($array)
     {
       echo '<h2>8. Array Pop function </h2>';
       $numbers=array_pop($array);
       print_r($array);
       echo '<hr>';
     }
     
     public function arrayRand($array)
     {
       echo '<h2>9. Array Rand function </h2>';
       print_r(array_rand($array));
       echo '<hr>';
     }
     
     public function arrayShuffle($array)
     {
       echo '<h2>10. Array Shuffle function </h2>';
       shuffle($array);
       foreach($array as $array){
         print_r(array[$array]);
       }
       echo '<hr>';
     }      
   }
?>
	  
