<?php
/////////////1/////////////
// $nums=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];
// $count = count(array_filter($nums, function($num){
//     return $num>0;
// }));
// $total=array_sum(array_filter($nums, function($num){
//     return $num<0;
// }));

// print_r($count .",".$total);




/////2/////
// function myFunc($x){
//     if ($x%2==0){
//         echo "even";
//     }
//     else {
//         echo "odd";
//     }
// };
// $x=39;
// myFunc($x);



////////////3////////////
// function myFunc($x){
//     if ($x>=0){
//         return -$x;
//     }
//     else {
//         return $x;
//     }
// };
// $x=-5;
// myFunc($x);


///////////////4//////////////
// same with first


///////////////5//////////////

// function myFunc($x){
    // if (empty($x)){
    //     return "0";
    // }
    // else {
    //     $total = array_sum($x);
    //     return $total;
    // }
// }

// $x = [1];
// myFunc($x);



////////////////6///////////////
// function myFunc($string){
//     return $string==strtoupper($string);
// }



///////////////7///////////////
// function myFunc($string){
//     var_dump(explode(" ",$string));
// }
// $string="hello how are you";
// myFunc($string);


/////////////8//////////////
// function myFunc($string){
//     print_r(str_repeat($string,6) );
// }
// $string="salam";
// myFunc($string);



///////////////9////////////
// $rows = 5; 

// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>"; 
// }

///////////////10///////////////
// function fact ($n)  
// {  
//     if($n <= 1)   
//     {  
//         return 1;  
//     }  
//     else   
//     {  
//         return $n * fact($n - 1);  
//     }  
// }  
// echo fact(6);



/////////////////11//////////////
// $string="w3resource";
// for($i=0; $i<strlen($string);$i++){
//     for($k=0;$k<strlen($string);$k++){
//         if($string[$i] == $string[$k] && $i != $k){
//             echo $string[$k] .$i; 
              
//         }
  
//     }
// }

/////////////////12////////////////
// $rows = 7; 
// $columns = 5; 

// for ($i = 1; $i <= $rows; $i++) {
//     for ($j = 1; $j <= $columns; $j++) {
//         if (($i == 1 || $i == 4 || $i == 7) && $j <= 5) {
//             echo "*";
//         } elseif ($j == 1) {
//             echo "*";
//         } else {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }


////////////13////////////////
// $month=date("M");
// echo $month;

// $monthNumber = 5; 

// switch ($monthNumber) {
//     case 1:
//         echo "January";
//         break;
//     case 2:
//         echo "February";
//         break;
//     case 3:
//         echo "March";
//         break;
//     case 4:
//         echo "April";
//         break;
//     case 5:
//         echo "May";
//         break;
//     case 6:
//         echo "June";
//         break;
//     case 7:
//         echo "July";
//         break;
//     case 8:
//         echo "August";
//         break;
//     case 9:
//         echo "September";
//         break;
//     case 10:
//         echo "October";
//         break;
//     case 11:
//         echo "November";
//         break;
//     case 12:
//         echo "December";
//         break;
//     default:
//         echo "Invalid month number";
// }



//////////////14//////////
// $day = "5";

// switch ($day) {
//     case "1":
//         echo "Today is Monday. Clean your house.";
//         break;
//     case "2":
//         echo "Today is Tuesday. Buy some food.";
//         break;
//     case "3":
//         echo "Today is Wednesday. Visit a doctor.";
//         break;
// 	case "4":
//         echo "Today is Thursday. Repair your car.";
//         break;
//     case "5":
//         echo "Today is Friday. Party tonight.";
//         break;
//     case "6":
//         echo "Today is Saturday. It's movie time.";
//         break;
// 	case "7":
//         echo "Today is Sunday. Do some rest.";
//         break;
//     default:
//         echo "No information available for that day.";
// }

/////////////15///////////////
// function BMI($weight,$height){
//     $calcHeight=($height/100);
//     $bmi =$weight/($calcHeight*$calcHeight);

    
//     if(!is_numeric($weight)||!is_numeric($height)){
//         echo "eded daxil et";
//         return;
//         $weight=(float)$weight;
//         $height=(float)$height;

//     }
//     if ($bmi < 18.5 && $bmi>=0 ){
//         echo "az cheki";
//     }
//     elseif ($bmi >= 18.5 && $bmi <25.0) {
//         echo "normal";
//     }elseif ($bmi >=25.0 && $bmi < 30.0) {
//         echo "artiq cheki";
//     }elseif ($bmi >= 30 ) {
//         echo "obez";
//     }

// }
// BMI(70,174);









$array=["name1"=>"alma", "name2"=>"armud"];
$array["name1"];






?>