<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index-资讯</title>
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<script type="text/javascript" src="js/myfocus-2.0.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/zhuye.css" />

<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->

<!-- 返回顶部调用 begin -->
<script type="text/javascript" src="js/up/jquery.js"></script>
<script type="text/javascript" src="js/up/js.js"></script>
<script type="text/javascript">
//设置
myFocus.set({
	id:'myFocus',//ID
	pattern:'mF_fancy'//风格
});
</script>  
<!-- 返回顶部调用 end-->
<style>

</style>

</head>

<body style="background-color:#eee">

<div class="biaotilan1">
    My Blog 创作中心
</div>
<div class="biaotilan2">
	<br />
   <a href='writeBlog.php'>
    <button style=" width:100px;height:40px;background-color:#eee; font-size:20px; color:#666; font-weight:bolder; border:none; outline:none">写博客
</button>
</a>
</div>   
 
<div class="biaotilan3"  style="padding-top:34px;">  	
<?php
	include("conn.php");
	session_start();
   	$phone = $_SESSION['phone'];
	$sql = mysql_query("SELECT name FROM register WHERE phone = $phone ");

	while($row = mysql_fetch_array($sql))
  	{
  		echo  $row['name'];
  		echo "<br />";
  	}

	mysql_close($conn);
?>
</div>   
 
<div class="biaotilan4" style="padding-top:34px;">  
	
   <a href="index.php">退出登录</a>
</div>  

<div class="bigbox">
    <div class="nav">
    <ul>
    <li><a href='zhuye.php' >推荐</a></li>
    <li><a href='zuixinwenzhang.php'>最新文章</a></li>                      
    <li><a href='zixun.php'style="background-color:#cc0000">资讯</a></li>
    <li><a href='youxikaifa.php'>游戏开发</a></li>
    <li><a href='qianduan.php'>前端</a></li>
    <li><a href='yunwei.php'>运维</a></li>
    <li><a href='dashuju.php'>大数据</a></li>
    <li><a href='jisuanjijichu.php'>计算机基础</a></li>
    <li><a href='qita.php'>其他</a></li>
    </ul>
    </div>
    <div class="graybox"></div>

    <div id="section">
        <div id="myFocus"><!--焦点图盒子-->
           <div class="loading"></div>
            <!--载入画面(可删除)-->
            <div class="pic"><!--图片列表-->
              <ul>
                <li><a href="#1"><img src="img/1.jpg" thumb="" alt="111" text="图片1更详细的描述文字" /></a></li>
                <li><a href="#2"><img src="img/2.jpg" thumb="" alt="111" text="图片2更详细的描述文字" /></a></li>
                <li><a href="#3"><img src="img/3.jpg" thumb="" alt="111" text="图片3更详细的描述文字" /></a></li>
                <li><a href="#4"><img src="img/4.jpg" thumb="" alt="111" text="图片4更详细的描述文字" /></a></li>
                <li><a href="#5"><img src="img/5.jpg" thumb="" alt="111" text="图片5更详细的描述文字" /></a></li>
              </ul>
            </div>
          </div>
        </div>	
        <div class="focustext f_r">
          <section class="ft01">
            <h3><a href="/" target="_blank">住在手机里的朋友</a></h3>
            <p>通信时代，无论是初次相见还是老友重逢，交换联系方式，常常是彼此交换名片</p>
          </section>
          <section class="ft02">
            <h3><a href="/" target="_blank">教你怎样用欠费手机拨...</a></h3>
            <p>在快节奏的生活里，我们不知不觉中就成为住在别人手机里的朋友。</p>
          </section>
        </div>
    
        <div class="topnews">
          <h2><span><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a><a href="/" target="_blank">栏目标题</a></span>
          <b>文章</b>推荐</h2>
          <div class="blogs">
            <figure><img src="images/01.jpg"></figure>
            <ul>
              <h3><a href="/">住在手机里的朋友</a></h3>
              <p> ...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/02.jpg"></figure>
            <ul>
              <h3><a href="/">教你怎样用欠费手机拨打电话</a></h3>
              <p>...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/03.jpg"></figure>
            <ul>
              <h3><a href="/">原来以为，一个人的勇敢是，删掉他的手机号码...</a></h3>
              <p>... </p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/04.jpg"></figure>
            <ul>
              <h3><a href="/">手机的16个惊人小秘密，据说99.999%的人都不知</a></h3>
              <p>...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/05.jpg"></figure>
            <ul>
              <h3><a href="/">你面对的是生活而不是手机</a></h3>
              <p>...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/06.jpg"></figure>
            <ul>
              <h3><a href="/">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></h3>
              <p>...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          <div class="blogs">
            <figure><img src="images/04.jpg"></figure>
            <ul>
              <h3><a href="/">手机的16个惊人小秘密，据说99.999%的人都不知</a></h3>
              <p>...</p>
              <p class="autor"><span class="lm f_l"><a href="/">MyBlog</a></span><span class="dtime f_l">2014-02-19</span>
              <span class="viewnum f_r">浏览（<a href="/">459</a>）</span><span class="pingl f_r">评论（<a href="/">30</a>）</span></p>
            </ul>
          </div>
          
          
        </div>
      </div>
    </div> 


</div>
<br/><br/><br/>
</body>
</html>
