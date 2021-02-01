<!--

Function Name    :  Change The Background Colour Every Day Using Switch Statement
Function Author  :  Prasad Dangare
Function Date    :  01 Jan 2021
Output           :  Display The Day With Background Colour 

-->

<html>
 
        <?php
                
                $day = date("D");
                echo $day;
                switch($day)
                {
                        case "Mon":
                        echo "<body bgcolor = red></body>";
                        break;

                        case "Tue":
                        echo "<body bgcolor = pink></body>";
                        break;

                        case "Wed":
                        echo "<body bgcolor = orange></body>";
                        break;

                        case "Thus":
                        echo "<body bgcolor = green></body>";
                        break;
        
                        case "Fri";
                        echo "<body bgcolor = yellow></body>";
                        break;

                        case "Sat":
                        echo "<body bgcolor = gray></body>";
                        break;

                        case "Sun":
                        echo "<body bgcolor = brown></body>";
                        break;
                }
        ?>
</html>    