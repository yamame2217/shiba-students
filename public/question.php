<!DOCTYPE html>
<html lang="ja" dir="ltr">
<?php 
require_once('included_function.php'); //processing of PHP//
require_once('include/head.php'); //head//
?> 
<body>
<?php require_once('include/header.php');?> <!--header-->
<div id="main_area">
<article>
<!--利用事項-->
<p>▼初めて利用する方はこちらをご一読ください。</p>
<label for="tos_sliding" class="use_policy">利用にあたって</label>
<input id="tos_sliding" type="checkbox">
<div class="tos_panel">
<p>利用事項</p>
<ul>
    <li>過去問のやり取りは行わないでください。（勉強の仕方や分からないところの相談は可）
</ul>
<p>注意点</p>
<p>不快な投稿があった場合</p>    
</div>
<!--利用事項　ここまで-->
<!--質問投稿欄-->
<form method="POST" action="#">
<label for="question">内容</label>
<textarea id="question_content" name="your_question" rows="8" cols="40" placeholder="ここに質問を入力してください"></textarea>
<input type="submit" value="投稿する">
</form>
</article>
<?php require_once('include/aside.php');?> <!--aside-->
</div>
<?php require_once('include/footer.php');?> <!--footer-->
</body>
</html>