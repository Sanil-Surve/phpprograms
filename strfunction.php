<html>
  <head>
    <form method="post">
         <h1>Enter a String:</h1> <input type="text" name="input"><br><br>
         <input type="submit" name="submit" value="Submit">

    </form>
  </head>

  <body>
  <?php
    $str = "Sanil is Handsome";
    if($_POST)
    {
      $input =$_POST['input'];
      switch ($str) {
        case "":
          echo "Your String is:".$str;
          break;
        case "":
          echo "The length of the String is:".strlen($str);
          break;
        case "":
          echo "The word count of the String is:".str_word_count($str);
          break;
        default:
          echo "Your favorite color is neither ,, nor !";
    }
  }
  ?>
  </body>
</html>
