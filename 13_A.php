<!--

Function Name    :  Find Number Of Vowels In A String From User
Function Author  :  Prasad Dangare
Function Date    :  01 Jan 2021
Output           :  Display No Of Vowels 

-->

<html>

    <body>
        <h2> Find Number Of Vowels In A String </h2>
        
        <form action = "" method = "post">
            <input type = "text" name = "string" /> <br><br>
            <input type = "submit" value = "submit"/>
        
        </form>
    </body>
</html>

<?php
    if($_POST)
    {
        $string = strtolower($_POST['string']);
        $num = preg_match_all('/[aeiou]/i', $string, $matches);
        echo "Number Of Vowels Is : ". $num;
    }
?>