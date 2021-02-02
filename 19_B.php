<!--

Function Name    :  Reverse A String 
Function Author  :  Prasad Dangare
Function Date    :  01 Feb 2021
Output           :  dasarP eragnaD

-->

<?php  

    $string = "Dangare Prasad";  
    $length = strlen($string);  
    
    for ($i = ($length - 1); $i >= 0; $i--)   
    {  
        echo $string[$i];  
    }     
?> 