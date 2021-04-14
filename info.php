<html>
<head><title>Hello World</title></head>
<body>

<?php

  $name = $_POST["name"];
  echo "Hello, " . $name;

  $design = $_POST["design"];
  echo "$name" . "wants" . "a" . "$design";

  $color = $_POST["color"];
  echo "$name" . "wants" . "a" . "$color" . "$design";

?>

</body>
</html>