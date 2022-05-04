<html>
  <body>
    <?php
      class Student {
      public $name;
      public $age;

          function __construct($name) {
           $this->name = $name;
          }
          function get_name() {
           return $this->name;
          }
      }

      $full_info = new Student("Sanil Suyog Omkar");
      echo $full_info ->get_name();
   ?>
 </body>
</html>
