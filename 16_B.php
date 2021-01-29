<!--

Function Name    :  Creating Array And Performing Some Operations
Function Author  :  Prasad Dangare
Function Date    :  25 Jan 2021
Output           :  Operations are count, sort, reverse, search

-->

<html>
    
    <?php
          $season[0] = "Summer";
          $season[1] = "Winter";
          $season[2] = "Spring";
          $season[3] = "Autumn";
          
          echo "Season Are : <br><br> $season[0], <br> $season[1], <br> $season[2], <br> $season[3] <br>";
          echo "<br> Toatl Seasons : <br><br>";
          
          echo Count($season);
          
          echo "<br><br> Season In Sorted Manner : <br><br>";
          
          Sort($season);
          
          foreach($season as $s)
          {
               echo "$s <br>";
          }
          
          echo " <br><br> Reverse Of Array : <br><br>";
          
          $reverseseason = array_reverse ($season);
          
          foreach($reverseseason as $s)
          {
               echo "$s <br> ";
          }
          
          echo "<br><br> Search Winter : <br><br>";

          echo "Find In ";
          $key = array_search('Winter', $season);

          echo $key;
          echo " Position From Index ";
     
    ?>

</html>