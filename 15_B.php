<!--

Function Name    :  Store Employee Data And Display It
Function Author  :  Prasad Dangare
Function Date    :  01 Feb 2021
Output           :  Display All Employee Details 

-->

<html>
  <body>
    <form method = "post" action = " " <?php echo $_SERVER ['PHP_SELF'] ;?> >
      <h2>  Ename : <input type = "text" name = "fname" outofocus required> <br> </h2>
      
      <h2>  Desg : <input type = "desi" name = "desi" outofocus required><br> </h2>
      
      <h2>  Dept : <select name = "Department"> <br> </h2>
                      <option value = "-1" selected> [Choose Dept] </option>
                      <option value = "Research"> Research </option>
                      <option value= "Accounts"> Accounts </option>
                      <option value = "Admin"> Admin </option>
                    </select> <br>

      <h2> Gender : </h2>
        
      <h3> <input type = "radio" name = "gender" value = "male"> Male <br> </h3>
      <h3>  <input type = "radio" name = "gender" value = "female"> Female <br> </h3>
    
      <h2>  Salary : <input type = "Salary" name = "Salary" outofocus required><br> </h2>
    
      <input type = "Submit">
    </form>
    
    <?php
      
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
          $name=$_REQUEST['fname'];
          $desg=$_REQUEST['desi'];
          
          $dept=$_REQUEST['Department'];
          $gender=$_REQUEST['gender'];
          $salary=$_REQUEST['Salary'];
          
          echo $name;
          echo "<br>";
          
          echo $desg;
          echo "<br>";
          
          echo $dept;
          echo "<br>";
          
          echo $gender;
          echo "<br>";
          echo $salary;
      }
    ?>
  </body>
</html>