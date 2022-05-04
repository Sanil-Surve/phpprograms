<html>
   <head>
     <style>
        body {
          background-color: black;
          text-align: center;
          margin: 20vh;
        }
        h1 {
          color: yellow;
        }

        h2 {
          color: aqua;
        }
     </style>
  </head>

  <body>
      <title> Number is even or Odd? </title>

    <form method="POST">
      <h1>Enter a Number:</h1>
        <input type = "number" name = "number">
        <input type = "submit" value = "Submit">

    </form>

    <?php

       if($number%2==0)
         echo "<h2>"."$number is Even Number";
       else
         echo "<h2>"."$number is Odd Number";
      ?>
   </body>
</html>
