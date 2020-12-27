<?php
/////////////////Question1////////////////
echo"<hr>";
echo "Question 1";
echo"<hr>";
for($i=1 ; $i<10 ;$i++){
echo $i."-";

};
echo $i;
/* for($i=1 ; $i<=10 ;$i++){
    if ($i==10){
        echo $i;
    }
    else{
    echo $i."-"; 
    }
    }; */
   

echo"<hr>";
/////////////////Question2////////////////
echo "Question 2";
echo"<hr>";
$sum=0;
for($i=0 ; $i <30 ;$i++){
    $sum+=$i;
   
    
    };
echo $sum;
echo"<hr>";
/////////////////Question3c////////////////
echo "Question 3c";
echo"<hr>";

$const_char ='A';
$var_char ='A';
$x=1;
for($i=5; $i > 0;$i--){
    for($j=$i-1;$j>0;$j--){
        echo $const_char." ";  
    }
    echo str_repeat($var_char.'&nbsp;',$x++);
        
    $var_char++;
    echo "<br>";
    
    };
    echo "<hr>";
/////////////////Question3b////////////////
    echo "Question 3b";
    echo"<hr>";
    
    $const_char =1;
    $var_char =1;
    $x=1;
    for($i=5; $i > 0;$i--){
        for($j=$i-1;$j>0;$j--){
           
            echo $const_char." ";  
            
        }
        echo str_repeat($var_char.'&nbsp;',$x++);
            
        $var_char++;
        echo "<br>";
        
        };
  
        echo "<hr>";
    /////////////////Question4////////////////
        echo "Question 4";
        echo"<hr>";
        
             
            for($i=1;$i<=5;$i++){
                
                for ($j=1;$j<=5;$j++){
                    if ($i==$j){
                        echo $i." ";
                    }
                    else{
                        echo "0"." ";
                    }
                   
                }
                echo "<br>";
             };
            
        echo "<hr>";
    /////////////////Question5////////////////
        echo "Question 5";
        echo"<hr>";      
        $num=3;
        $factorial=1;
        for($i=$num;$i>0;$i--){
            $factorial*=$i;
        }  
        echo $factorial;
        echo"<hr>";
    /////////////////Question6////////////////     
        echo "Question 6";
        echo"<hr>";  
        $num1=0;
        $num2=1;
        $num3=0;
        echo $num1.",".$num2.",";
        for($i=1;$i<20;$i++){
           $num3=$num1+$num2;
           echo $num3.",";
           $num1=$num2;
           $num2=$num3;
              
        }

        echo"<hr>"; 
    /////////////////Question7////////////////    
        echo "Question 7";
        echo"<hr>";
        $str="OrangeAcademy";
        $arr = str_split($str);
        
        $count=0;
        foreach ($arr as $value) {
           if($value=="c"||$value=="C"){
               $count++;
           }
          }
        echo $count ;  
       
        echo"<hr>";
    /////////////////Question8////////////////     
        echo "Question 8";
        echo"<hr>";
        echo "<table border='1' cellpadding='3px' cellspacing='0px'>";
        
        for($i=1;$i<=6;$i++){
        echo"<tr>";
         for($j=1;$j<=5;$j++){
        echo"<td>$i * $j =".$i*$j."</td>";  
         }
         echo"</tr>";
        };
           

        echo "</table>";
        

?>