<!--

Function Name    :  Find Factorial Of A Number
Function Author  :  Prasad Dangare
Function Date    :  29 Jan 2021
Output           :  Display Factorial Of Number From User

-->

<html>
  
  <head>
    <title> Factorial Of Number </title>
  </head>

  <body>
    
    <form action = " " method = "post">
    
      <label> Enter No : </label>
      <input type = "number" name = "no" size = "2">
    
    </form>

  </body>
  
  <?php

    if($_POST)
    {
      
      $Fact = 1;
      $no = $_POST ['no'];
      
      echo "Factorial Of $no Is : ";
      
      for ($i = $no; $i >= 1; $i--)
      {
        $Fact = $Fact * $i;
      }
      
      print $Fact."<br>";
    }

  ?>

</html>
   