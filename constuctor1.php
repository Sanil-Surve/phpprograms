<html>
  <body>
    <?php
        class Student {
        public $name;
        public $age;

            function __construct($name,$age) {
             $this->name = $name;
             $this->age = $age;
            }
            function get_name() {
             return $this->name;
            }
            function get_age() {
             return $this->age;
            }
        }

        $full_info = new Student("Name: Sanil Pradip Surve",20);
        echo $full_info ->get_name();
        echo "<br>";
        echo $full_info ->get_age();
    ?>
  </body>
<html>
