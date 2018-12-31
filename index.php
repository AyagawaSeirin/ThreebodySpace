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
    .top-img-text{
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
    h1{
        /*font-size: 5em;*/
        /*font-family: arial,helvetica;*/
        color: #fff;
        margin:0!important;
        padding:0;
        color:white!important;
    }

    /* Centered texts in each section
    * --------------------------------------- */
    .section{
        text-align:center;
    }


    /* Backgrounds will cover all the section
    * --------------------------------------- */
    .section{
        background-size: cover;
    }
    .slide{
        background-size: cover;
    }

    /* Defining each section background and styles
    * --------------------------------------- */
    #section0{
        background-image: url(/img/1.jpg);
    }
    #section0 h1{
        /*top: 50%;*/
        /*transform: translateY(-50%);*/
        /*position: relative;*/
        padding-top:30vh;
        font-size: 56px;
        font-weight: 400;
    }
    #section2{
        background-image: url(imgs/bg3.jpg);
        padding: 6% 0 0 0;
    }
    #section3{
        background-image: url(imgs/bg4.jpg);
        padding: 6% 0 0 0;
    }
    #section3 h1{
        color: #000;
    }


    /*Adding background for the slides
    * --------------------------------------- */
    #slide1{
        background-image: url(imgs/bg2.jpg);
        padding: 6% 0 0 0;
    }
    #slide2{
        background-image: url(imgs/bg5.jpg);
        padding: 6% 0 0 0;
    }


    /* Bottom menu
    * --------------------------------------- */
    #infoMenu li a {
        color: #fff;
    }
</style>

<div id="fullpage">
    <div class="section " id="section0">
<!--        <div style="height:30vh;">-->
        <div class="mdui-typo"><h1>三体&nbsp;&nbsp;&nbsp;&nbsp;宇宙</h1></div>
        <div class="mdui-typo"><h4 style="color:white;">ThreeBody.Space</h4></div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
        <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
    </div>
    <div class="section" id="section2"><h1>Lovely images <br />for a lovely page</h1></div>
    <div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>

<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        verticalCentered: false
    });
</script>

</body>
</html>