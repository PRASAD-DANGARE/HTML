<!--

Function Name    :  Change Background Colour According To The Day
Function Author  :  Prasad Dangare
Function Date    :  01 Jan 2021
Output           :  Display The Webpage

-->

<html>
 
    <?php
        $day = date("D");
        echo $day;
        switch($day)
        {
            case "Mon" :
            echo "<body bgcolor = red> </body>";
            
            break;
            case "Tues" :
            echo "<body bgcolor = blue> </body>";
   
            break;
            case "Wed" :
            echo "<body bgcolor = green> </body>";
   
            break;
            case "Thurs" :
            echo "<body bgcolor = pink> </body>";
            
            break;
            case "Fri" :
            echo "<body bgcolor = orange> </body>";
   
            break;
            case "Sat" :
            echo "<body bgcolor = purple> </body>";
            
            break;
            case "Sun" :
            echo "<body bgcolor = white> </body>";
            break;
        }
    ?>
</html>