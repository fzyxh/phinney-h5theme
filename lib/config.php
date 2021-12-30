<?php
/**
 * uuz-h5theme配置文件
 * uuz-h5theme設定ファイル
 * Created by PhpStorm.
 * User: Amamiya Chinatsu's
 * Date: 2016/3/5
 * Time: 12:22
 */

//请将图片文件放入 /images 文件夹
//画像ファイルを /images に入れてください

//html_lang
$html_lang = "zh";
//定义网站标题 //サイトのタイトル
$title = "Phinney的疗养院";

//网站图标 //タグに表示するアイコン（ファビコン）の設定
$tag_icon = "AdminIcon.png";

//定义 theme-color //ブラウザ要素の色
$theme_color = "#22849f";

//设置背景图像 //背景の設定
$background_filename = "002-4K.png";

//设置头像 //アバターの設定
$avatar_filename = "AdminIcon.jpg";
$avatar_height = "130px"; //高度 //高さ
$avatar_width = "130px"; //宽度 //幅

//设置主标题 //表題の設定
$main_title = "Phinney";

//设置二级标题 //副題の設定
//不想使用二级标题可以用一言代替
$hitokoto_url = "https://v1.hitokoto.cn/?encode=text&charset=utf-8";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $hitokoto_url); //参数为1表示传输数据，为0表示直接输出显示。
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //参数为0表示不带头文件，为1表示带头文件
curl_setopt($ch, CURLOPT_HEADER,0);
$sec_title = curl_exec($ch);
curl_close($ch);
// $sec_title = "永遠とはそういうこと<br>ワビの世界よ";

//设置链接及图标 //アイコン及びURLの設定
//如需设置其他图标，请参考 fontawesome.io/icons/ //ほかのアイコンを設定したい場合は fontawesome.io/icons/ に参照してください
//设置第一个图标、替代文字及链接 //一番目のアイコン、テキスト及びURLの設定
$icon_style_01 = "brands"; //图标风格(Style)，具体参考 fontawesome.io/icons/ //アイコンの様式(Style) fontawesome.io/icons/ に参照してください
$site_icon_01 = "fa-github";
$site_name_01 = "Github";
$site_url_01 = "https://github.com/BUAAMogician/";

//设置第二个图标及替代文字 //二番目のアイコン、テキスト及びURLの設定
$icon_style_02 = "brands"; //图标风格(Style)，具体参考 fontawesome.io/icons/ //アイコンの様式(Style) fontawesome.io/icons/ に参照してください
$site_icon_02 = "fa-github";
$site_name_02 = "GitHub";
$site_url_02 = "https://github.com/fzyxh/";

//设置第三个图标及替代文字(永远怀念 Google+ ） //三番目のアイコン、テキスト及びURLの設定
//$site_icons_03 = "fa-google-plus";
//$site_txt_03 = "Google+";
//$site_url_03 = "https://plus.google.com/u/0/106072901155470558440";
$icon_style_03 = "regular"; //图标风格(Style)，具体参考 http://fontawesome.io/icons/ //アイコンの様式(Style) http://fontawesome.io/icons/ に参照してください
$site_icon_03 = "fa-envelope";
$site_name_03 = "Email";
$site_url_03 = "mailto:pidtlsj@qq.com";

//设置下方 button 信息 //アイコン下側のボタンの設定
$button_name_01 = "Blog";
$button_url_01 = "https://blog.phinney.top";

$button_name_02 = "Unknown";
$button_url_02 = "https://www.phinney.top";

//设置版权信息 //Copyrightの設定
$copyright = "2021 Phinney";
?>
