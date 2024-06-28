<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Comoatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<title>
    <?php 
    switch ($file_name){
        case 'index.php':
          print "$title|トップページ";
          break;
        case 'question.php':
          print "$title|質問する";
          break;
        default:
          print 'タイトル';
          break;
    }
    ?>
</title>
<meta name="twitter:card" content="summary" />
<meta property="og:url" content="記事のURL"/>
<meta property="og:title" content="<?php print $file_name; ?>"/>
<meta property="og:description" content="北里大学非公式の在学生向けQ&Aサイト"/>
<meta property="og:image" content="../images/shiba-picture.jpeg"/>
<link rel="stylesheet"  href="css/ress.css">
<link rel="stylesheet" href="css/style.css">
</head>