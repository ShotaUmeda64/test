<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="keywords" content="コーディング,html,CSS" />
<meta name="Description" content="ディスクリプションが入ります。説明欄" />
<title>株式会社ケセラセラ｜Web</title>
<link rel="stylesheet" href="./lib/cmn_css/normalize.css"/><!--normalize.cssを先頭で読み込んでリセット-->
<link rel="stylesheet" href="./css/slider-pro.min.css"/><!--MVのスライダーのCSS-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script><!--ヘッダーをスライドで表示非表示させるJS-->
<script src="./libs/jquery-1.11.0.min.js"></script><!--MVのスライダーのJS-->
<script src="./js/jquery.sliderPro.min.js"></script><!--MVのスライダーのJS-->
<!--MVのスライダーのJS-->
<script>
  $(document).ready(function(){
        $( '#slider1' ).sliderPro({
          width: "80%",
        height: 500,
        aspectRatio: 2,
        arrows: true,
        buttons: true,
        autoplay: true,
        loop: true,
        visibleSize: '100%',
        forceSize: 'fullWidth'
        });
    });
</script>
<style>
body {
    background-color: #FFFFCC;
}
.content01 {
    vertical-align: middle;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    margin-bottom: 100px;
}
.content02 {
    vertical-align: middle;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    margin-bottom: 100px;
}
.g_map {
    text-align: center;
    background-image: url("./img/g_map.jpg");
    height: 400px;
}
.content03 li {
    display: inline-block;
}
.content03 li a {
    display: block;
    width: 100%;
    height: 100%;
}
.content03 img {
    width: 300px;
    height: 250px;
    margin-bottom: 20px;
}
h2 {
    border-bottom: 3px dotted #bbb8b8;
    margin-bottom: 40px;
    margin-top: 150px;

}
.h2_p {
    margin-bottom: 10px;
}
.content04 {
    background-image: url("./img/bg-img001.jpg");
    height: 500px;
    width: 100%;
}
.content {
    width: 1000px;
    margin-right: auto;
    margin-left : auto;
}
.con01 img {
    width: 100px !important;
}
</style>
<script>
$(function(){
    $('a img').hover(
        function(){$(this).fadeTo(1, 0.6);},
        function(){$(this).fadeTo(1, 1.0);}
    );
});
</script>
</head>

<body>
<?php include('./lib/inc/header.php'); ?>
<!-- ▲▲ header ▲▲ -->

<!--MV Slider-->
<div class="slider-pro" id="slider1">
    <div class="sp-slides">
        <div class="sp-slide">
            <img class="sp-image" src="img/001.jpg"/>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="img/002.jpg"/>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="img/003.jpg"/>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="img/004.jpg"/>
        </div>
    </div>
</div>
<!--MV Slider-->



<!--Content001-->
<div class="content"><!--Content-->

<h2><p class="h2_p">CONTENT01</p></h2>

<div class="con01">
    <!--Content01-->
    <div class="content01">
        <ul>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
        </ul>
    </div>
    <!--Content01-->
    <!--Content02-->
    <div class="content02">
        <ul>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
            <li><img src="img/001.jpg"/><p>ダミーダミー</p></li>
        </ul>
    </div>
    <!--Content02-->
</div>
<!--Content001-->

<h2><p class="h2_p">Google Map</p></h2>
<!--Google Map-->
<div class="g_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13120.81655941653!2d135.4950251!3d34.7000307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1906ea7570cd6019!2z5qCq5byP5Lya56S-44Kx44K744Op44K744OpIOWkp-mYquacrOekvg!5e0!3m2!1sja!2sjp!4v1488338904534" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!--Google Map-->

<!--Content003-->
<h2><p class="h2_p">CONTENT03</p></h2>
<div class="content03" style="margin-bottom: 300px;">
        <ul>
            <li><a href="#" style="text-decoration: none;"><img src="img/002.jpg"/><br><font color="#FF0000;" onmouseover="this.style.fontWeight='bolder'" onmouseout="this.style.fontWeight='normal'">ダミーダミー</font></a></li>
            <li><a href="#" style="text-decoration: none;"><img src="img/002.jpg"/><br><font color="#FF0000;" onmouseover="this.style.fontWeight='bolder'" onmouseout="this.style.fontWeight='normal'">ダミーダミー</font></a></li>
            <li><a href="#" style="text-decoration: none;"><img src="img/002.jpg"/><br><font color="#FF0000;" onmouseover="this.style.fontWeight='bolder'" onmouseout="this.style.fontWeight='normal'">ダミーダミー</font></a></li>
        </ul>
</div>
<!--Content003-->

<!--Content004-->
<h2><p class="h2_p">CONTENT04</p></h2>
<div class="content04">
</div>
<!--Content004-->

</div><!--Content-->


<?php include('./lib/inc/footer.php'); ?>
<!-- ▲▲ footer ▲▲ -->

</body>
</html>
