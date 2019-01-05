<html>
<head>
    <?php require_once("layout/head.php"); ?>
</head>
<body>
<style>
    /*.top-img-img {*/
    /*width: 100%;*/
    /*height: 100%;*/
    /*position: absolute;*/
    /*top: 0;*/
    /*left: 0;*/
    /*z-index: -1;*/
    /*background-repeat:repeat-x;*/
    /*background-repeat:repeat-y;*/
    /*background-image: url("/img/1.jpg");*/
    /*background-position: center center;*/
    /*background-size: cover;*/
    /*}*/

    /*.top-img {*/
    /*width: 100%;*/
    /*height: 100%;*/
    /*text-align: center;*/
    /*color: white;*/
    /*}*/
    .top-img p {
        /*text-align: center;*/
        /*color:white;*/
    }

    .top-img-text {
        /*padding-top:15%;*/
    }
</style>
<!--<div class="top-img">-->
<!--    <div class="top-img-text">-->
<!--        <div style="height:30vh;"></div>-->
<!--        <div class="mdui-typo-display-3">三体&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;宇宙</div>-->
<!--<!--        <div style="height:20px;"></div>-->
<!--        <div class="mdui-typo"><h4>ThreeBody.Space</h4></div>-->
<!--    </div>-->
<!--<!--    <img src="/img/1.jpg" class="top-img-img">-->
<!--    <div class="top-img-img"></div>-->
<!--</div>-->
<style>

    /* Style for our header texts
    * --------------------------------------- */
    h1 {
        /*font-size: 5em;*/
        /*font-family: arial,helvetica;*/
        color: #fff;
        margin: 0 !important;
        padding: 0;
        color: white !important;
    }

    /* Centered texts in each section
    * --------------------------------------- */
    .section {
        text-align: center;
    }

    /* Backgrounds will cover all the section
    * --------------------------------------- */
    .section {
        background-size: cover;
    }

    .slide {
        background-size: cover;
    }

    /* Defining each section background and styles
    * --------------------------------------- */
    #section_index {
        background-image: url(/img/1.jpg);
    }

    #section_index h1 {
        /*top: 50%;*/
        /*transform: translateY(-50%);*/
        /*position: relative;*/
        padding-top: 30vh;
        font-size: 56px;
        font-weight: 320;
        text-shadow: h-shadow v-shadow blur color;
    }

    #section_introduce {
        background-image: url(/img/2.jpg);
        text-align: left;
        padding-left: 5vw;
        padding-right: 5vw;
    }

    #section_introduce h1 {
        padding-top: 5vh;
        font-size: 56px;
        font-weight: 320;
        text-shadow: h-shadow v-shadow blur color;
    }

    #section_introduce h2 {
        /*padding-top:10vh;*/
        /*font-size: 56px;*/
        font-weight: 400;
        color: white;
    }

    #section2 {
        background-image: url(imgs/bg3.jpg);
        padding: 6% 0 0 0;
    }

    #section3 {
        background-image: url(imgs/bg4.jpg);
        padding: 6% 0 0 0;
    }

    #section3 h1 {
        color: #000;
    }

    /*Adding background for the slides
    * --------------------------------------- */
    .video_div {
        padding-left: 20vw;
        padding-right: 20vw;

    }

    #section_video_slide1 {
        /*background-image: url(imgs/bg2.jpg);*/
        background-image: url(img/3.jpg);
        padding: 6% 0 0 0;
    }

    #section_video_slide2 {
        background-image: url(img/4.jpg);
        padding: 6% 0 0 0;
    }

    /* Bottom menu
    * --------------------------------------- */
    #infoMenu li a {
        color: #fff;
    }

    .blue h1 {
        text-decoration: none !important;
        -webkit-transition: all 0.5s !important;
        -moz-transition: all 0.5s !important;
        transition: all 0.5s !important;

        -webkit-animation: neon2 1.5s ease-in-out infinite alternate !important;
        -moz-animation: neon2 1.5s ease-in-out infinite alternate !important;
        animation: neon2 1.5s ease-in-out infinite alternate !important;

        /*font-size:1.5em;*/
        /*color:#228DFF;*/
        /*font-family:Iceland;*/
    }


</style>

<div id="fullpage">
    <!--第一页 - 标题-->
    <div class="section " id="section_index">
        <div class="mdui-typo blue"><h1>三体&nbsp;&nbsp;&nbsp;&nbsp;宇宙</h1></div>
        <div class="mdui-typo"><h4 style="color:white;">ThreeBody.Space</h4></div>
        <div class="mdui-typo"><h6 style="color:white;font-size: 0.85em;">一个《三体》迷以及《我的三体》粉丝制作的网站</h6></div>
        <!--        <div class="mdui-typo"><h6 style="color:white;font-size: 0.85em;">↓鼠标滚轮往下↓</h6></div>-->
    </div>
    <!--第二页 - 介绍-->
    <div class="section " id="section_introduce">
        <div class="mdui-typo"><h1>介绍</h1></div>
        <div class="mdui-typo"><h4 style="color:white;">《三体》是什么？</h4></div>
        <div class="mdui-typo"><h6 style="color:white;">
                刘慈欣创作的系列长篇科幻小说，由《三体》、《三体Ⅱ·黑暗森林》、《三体Ⅲ·死神永生》组成，第一部于2006年5月起在《科幻世界》杂志上连载，第二部于2008年5月首次出版，第三部则于2010年11月出版。<br>作品讲述了地球人类文明和三体文明的信息交流、生死搏杀及两个文明在宇宙中的兴衰历程。其第一部经过刘宇昆翻译后获得了第73届雨果奖最佳长篇小说奖。
            </h6></div>
        <div class="mdui-typo"><h4 style="color:white;">《我的三体》是什么？</h4></div>
        <div class="mdui-typo"><h6 style="color:white;">
                国产动画番剧，采用MC风格制作，改编自刘慈欣的科幻小说《三体》。旨在用方块游戏《Minecraft（我的世界）》作为引擎把《三体》的故事做成游戏动画，播出平台主要为Bilibili、Acfun及优酷。除正片外，制作团队还制作了一系列符合原著描写的角色歌。<br>《我的三体》现已更新到第二季罗辑传系列，《我的三体·罗辑传》动画效果较第一季有了较大的变化，但仍保留MC风格。同时，与原著小说《三体》故事内容相比，动画剧情有删改。
            </h6></div>


        <div class="mdui-typo"><h6 style="color:white;font-size: 0.9em;">摘自百度百科</h6></div>
        <!--        <div class="mdui-typo"><h6 style="color:white;font-size: 0.85em;">↓鼠标滚轮往下↓</h6></div>-->
    </div>

    <!--第三页 - 视频-->
    <div class="section" id="section1">
        <!--第一个视频-->
        <div class="slide" id="section_video_slide2" style="padding-top:15vh;">
            <!--            <h1>Slide Backgrounds</h1>-->
            <div class="video_div">
                <div class="mdui-video-container">
                    <iframe src="//player.bilibili.com/player.html?aid=26206476&cid=44977752&page=1" scrolling="no"
                            border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
        <!--第二个视频-->
        <div class="slide" id="section_video_slide1" style="padding-top:15vh;">
            <!--            <h1>Slide Backgrounds</h1>-->
            <div class="video_div">
                <div class="mdui-video-container">
                    <iframe src="//player.bilibili.com/player.html?aid=20523785&cid=33561210&page=1" scrolling="no"
                            border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section2"><h1>Lovely images <br/>for a lovely page</h1></div>
    <div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: false
    });
</script>

</body>
</html>