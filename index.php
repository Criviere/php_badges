<?php
$data = file_get_contents('https://www.codeschool.com/users/Criviere.json');
$json_data = json_decode($data, true);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo "$json_data['user']['username']" ?></title>
</head>
<body>

</body>
</html>
