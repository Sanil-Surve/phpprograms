<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

session_unset();
session_destroy();
echo "<b>"."<I>"."Session are destroyed";
?>

</body>
</html>