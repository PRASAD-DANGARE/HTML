<!--

Function Name    :  Display Odd No In Green & Even No In Red Colour
Function Author  :  Prasad Dangare
Function Date    :  01 Feb 2021
Output           :  Display Odd & Even Numbers In Different Colour

-->

<?php

    for($i = 1; $i <= 15; $i++)
    {
        if($i % 2 == 0)
        echo "<font color = red>".$i."<br>";
        
        else
        echo "<font color = green>".$i."<br>";
    }
?>