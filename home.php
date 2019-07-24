<html>
<head>
    <?php require_once("layout/head.php");
    require_once './UA/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $Mobile = $detect->isMobile();
    ?>
    <title>三体·宇宙</title>
</head>
<body>
<?php if ($Mobile == false): ?>
    <div class="music" id="music">
        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86
                src="//music.163.com/outchain/player?type=2&id=416892104&auto=0&height=66"></iframe>
    </div>
<?php endif; ?>
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
    <?php if ($Mobile == false): ?>
        <!--第三页 - 视频-->
        <div class="section" id="section1">
            <!--第一个视频-->
            <div class="slide" id="section_video_slide2" style="padding-top:15vh;">
                <div class="video_div">
                    <div class="mdui-video-container">
                        <iframe src="//player.bilibili.com/player.html?aid=26206476&cid=44977752&page=1" scrolling="no"
                                border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>
                    </div>
                </div>
            </div>
            <!--第二个视频-->
            <div class="slide" id="section_video_slide1" style="padding-top:15vh;">
                <div class="video_div">
                    <div class="mdui-video-container">
                        <iframe src="//player.bilibili.com/player.html?aid=20523785&cid=33561210&page=1" scrolling="no"
                                border="0" frameborder="no" framespacing="0" allowfullscreen="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="section" id="section_good_text">
        <div class="mdui-typo"><h1>书中好句</h1></div>

        <div class="mdui-typo"><h4 style="color:white;" id="good_text">
                正在加载好句...
            </h4></div>
        <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo" onclick="load_text();">换一句</button>

    </div>
    <div class="section" id="section_article">
        <div class="mdui-typo"><h1>相关文章</h1></div>
        <div class="mdui-typo"><h4 style="color:white;"><a href="http://cul.huanqiu.com/toutiao/2019-06/14995721.html"
                                                           target="_blank">环球网：《三体》雄霸畅销书榜引冷思考：科幻文学能靠一人独撑？</a></h4></div>
        <div class="mdui-typo"><h4 style="color:white;"><a href="https://baijiahao.baidu.com/s?id=1636311942384205245"
                                                           target="_blank">叶文洁的女儿杨冬为何要自杀？刘慈欣《三体》中隐含的逆火效应</a></h4></div>
        <div class="mdui-typo"><h4 style="color:white;"><a href="http://fun.youth.cn/gnzx/201904/t20190418_11930008.htm"
                                                           target="_blank">中国青年网：《三体》为什么不能交给好莱坞拍？刘慈欣这样说</a></h4></div>
        <div class="mdui-typo"><h4 style="color:white;"><a
                        href="http://www.bjnews.com.cn/culture/2018/11/30/526402.html" target="_blank">新京报：刘慈欣：我也不知道为什么《三体》那么火</a>
            </h4></div>
        <div class="mdui-typo"><h4 style="color:white;"><a href="https://www.huxiu.com/article/270963.html?h_s=f2"
                                                           target="_blank">虎嗅网：《三体》再获奖，刘慈欣的变与不变</a></h4></div>
    </div>
    <div class="section" id="section_about">
        <div class="mdui-typo"><h1>关于本站</h1></div>

        <div class="mdui-typo"><h4 style="color:white;">
                首先，欢迎你访问本站噢~
            </h4></div>
        <div class="mdui-typo"><h5 style="color:white;">
                起初无聊注册了这个看起来很有趣的域名，但不知道该做什么，浪费又觉得可惜。便挂了一个看起来很炫酷的提示页面，鸽着没有管了。但我没有想到的是，每天都有相当一部分访客访问，也有许多小伙伴加我提建议，我便决定把这个网站做完。<br>
                空间有限，<a href="#">点击这里</a> 查看详情~<br>
                另外，站长个人博客：<a href="https://rmb.moe">rmb.moe</a>，欢迎参观~
            </h5></div>

        <div class="mdui-typo"><h5 style="color:white;">
                -友情链接-<br>
                <a href="https://rmb.moe/" target="_blank">凛凛姬の家(站长个人博客)</a><br>
                <a href="https://www.popcz.com/" target="_blank">泡泡创作网</a>
            </h5></div>
    </div>
</div>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: false
    });

    load_text();

    function load_text() {
        var $$ = mdui.JQ;
        $$.ajax({
            url: "/sentence/sentence.php",
            async: true,
            type: 'GET',
            success: function (data) {
                $$('#good_text').text(data);
            }
        });
    }

</script>

</body>
</html>