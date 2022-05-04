<html>
  <body>
    <?php
      class Student
      {
        public $name;
        public $roll_no;

        function set_name($name)
        {
          $this -> name = $name;
        }
        function get_name()
        {
          return $this -> name;
        }
      }

      $full_name = new Student();
      $rollno = new Student();

      // $full_name -> set_name("Sanil Pradip Surve");
      // $rollno -> set_name(3434);

      $full_name -> set_name("Omkar Balkrishna Mahadik");
      $rollno -> set_name(3427);
      //
      // $full_name -> set_name("Suyog Sudhir Shinde");
      // $rollno -> set_name(3403);

      echo $full_name -> get_name();
      echo "<br>";
      echo $rollno -> get_name();



    ?>
  </body>
</html>
