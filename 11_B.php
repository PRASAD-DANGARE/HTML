<!--

Function Name    :  Display The Multiplication Table From User
Function Author  :  Prasad Dangare
Function Date    :  01 Jan 2021
Output           :  Display A Warning But Program Is Still Running And Display The Table

-->

<html>

    <head>
        <title>Table</title>
    </head>

    <body>
        <form method = "POST">
            <input type = "text" name = "number" size = "20" > <br>
            <input type = "submit" name = "table" value = "get table">
        </form>

        <?php
            echo "Program Is Running Successfully Its Just An Warning <br><br>";
             
            $num=$_POST["number"];
            if($num<=20)
            {
                for ($i=1; $i<=10; $i++)
                {
                    $mul=$num*$i;
                    echo "$mul <br></center>";
                }
            }
            else
            {
                echo "envalid entry</center>";
            }    
        ?>
    </body>
</html>
