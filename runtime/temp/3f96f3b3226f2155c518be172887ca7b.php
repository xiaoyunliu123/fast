<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpstudy_pro\WWW\fastadmin\public/../application/admin\view\test\index.html";i:1609209863;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="collapse navbar-collapse nav-list" id="probootstrap-menu">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="index.html">网站首页</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false" href="about.html">关于我们</a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="./about_list.html">公司简介</a></li>
                <li><a class="nav-link" href="./about_list.html">公司文化</a></li>
                <li><a class="nav-link" href="./about_list.html">组织架构</a></li>
                <li><a class="nav-link" href="./about_list.html">员工风采</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false" href="services.html">业务介绍<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">业务范围</a></li>
                <li><a class="nav-link" href="#">贷款须知</a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="products.html">政策法规</a></li>
        <li class="nav-item"><a class="nav-link" href="recruitment.html">招贤纳士</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.html">联系我们</a></li>
    </ul>
</div>

</body>

<script>
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

    if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
        // alert("当前是电脑打开");
        $(document).ready(function () {
            $(document).off('click.bs.dropdown.data-api');
        });
    }
</script>
</html>