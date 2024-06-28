<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPの基本</title>
</head>
<body>
<?php
print 'Hello World!';
$data=['1','2','3','4','5','6','7'];
print_r(array_splice($data,4,1,['a','b']));
print_r($data);
?>    
</body>
</html>