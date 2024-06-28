<header>
<h1 class="title_area">
<a class="page_title"  href="index.php"><?php print $title ?></a>
</h1>
<!--メニュー欄-->
<div class="menu_area">
    <input type="checkbox" id="menu_bar"/>
    <div class="side_menu">
        <label for="menu_bar" class="menu_trigger">
        <span></span>
        </label>
        <a class="page_title"  href="index.php"><?php print $title ?></a>
        <p class="enpty_class"></p>     <!--CSSにて均等配置時にタイトルを中央にするための空要素-->
    </div>
    <section class="main_navigation">
    <nav>
        <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="question.php">質問する</a></li>
            <li><a href="q&a.html">Q&A一覧</a></li>
            <li><a href="#.html">タグ一覧</a></li>
            <li><a href="notice.html">お知らせ</a></li>
            <li><a href="rink.html">リンク</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav>
    </section>
</div>
<!--メニュー欄ここまで-->
<ul class="shortcut">
    <li><a href="question.php">質問する</a></li>
    <li><a href="#.html">カテゴリー</a></li>
    <li><a href="faq.html">Q&A一覧</a></li>
</ul>
<!--サイト内検索-->
<form id="site_search"　action="#" method="get">
    <label for="site_search"><img class="search_icon" src="images/icon-search.png" alt="検索アイコン"></label>
    <div class="search">
    <input type ="text" id="search_box" name="site_search" placeholder="キーワードを入力"/>
    <input type="submit" id="search_button" value="検索"/>
    </div>
</form>
</header>