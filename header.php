<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>英语学习助手</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<link href="css/pages/faq.css" rel="stylesheet">
<link href="css/pages/plans.css" rel="stylesheet">
<link href="css/pages/reports.css" rel="stylesheet">
<link href="css/pages/signin.css" rel="stylesheet">
<link href="css/pages/pricing.css" rel="stylesheet">
<script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/excanvas.min.js"></script>
    <script src="js/chart.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/base.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">英语学习助手</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> 账户 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">设置</a></li>
              <li><a href="javascript:;">帮助</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> by 田茜文 <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a onclick="shortcodes_action_to()">个人信息</a></li>
              <li><a href="javascript:;">退出</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!-- /container -->
  </div>
  <!-- /navbar-inner -->
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a onclick="index_action_to()" data-toggle="tab"><i class="icon-dashboard"></i><span onclick="index_action_to()">社交</span> </a> </li>
        <li><a onclick="reports_action_to()" data-toggle="tab"><i class="icon-list-alt"></i><span>新鲜事</span> </a> </li>
        <li><a onclick="guidely_action_to()" data-toggle="tab"><i class="icon-facetime-video"></i><span>看视频</span> </a></li>
        <li><a onclick="chart_action_to()" data-toggle="tab"><i class="icon-bar-chart"></i><span>记单词</span> </a> </li>
        <li><a onclick="shortcodes_action_to()" data-toggle="tab"><i class="icon-code"></i><span>测验</span> </a> </li>
        <li class="dropdown" data-toggle="tab"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a onclick="icons_action_to()">Icons</a></li>
            <li><a onclick="faq_action_to()">问答</a></li>
            <li><a onclick="pricing_action_to()">添加单词/文章1</a></li>
            <li><a onclick="login_action_to()">登录</a></li>
            <li><a onclick="signup_action_to()">注册</a></li>
            <li><a onclick="error_action_to()">404</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /container -->
  </div>
  <!-- /subnavbar-inner -->
</div>
</body>
<div id="index_page">


</div>
<script type="text/javascript">
function action_to(page){
    var xmlhttp1 = new XMLHttpRequest();

    xmlhttp1.onreadystatechange=function()
{
    if(xmlhttp1.readyState == 4 || xmlhttp1.readyState == "complete"){
        document.getElementById("index_page").innerHTML=xmlhttp1.responseText;
        var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
        var jsContained = xmlhttp1.responseText.match(regDetectJs);
        console.log(jsContained);
        if(jsContained) {
            var regGetJS = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;
            var jsNums = jsContained.length;
            for (var i=0; i<jsNums; i++) {
                var jsSection = jsContained[i].match(regGetJS);

                if(jsSection[2]) {
                    if(window.execScript) {
                        window.execScript(jsSection[2]);

} else {
    window.eval(jsSection[2]);

}

}

}

}

    }
}
xmlhttp1.open("POST",page,true);
xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp1.send();
};
function index_action_to(){
    action_to("./index.php")
};
function reports_action_to(){
    action_to("./reports.php");
};
function guidely_action_to(){
    action_to("./guidely.php");
};
function chart_action_to(){
    action_to("./charts.php");
};
function shortcodes_action_to(){
    action_to("./shortcodes.php");
};
function pricing_action_to(){
    action_to("./pricing.php");
}
function faq_action_to()
{
    action_to("./faq.php");
}
function error_action_to()
{
    action_to("./error.php");
}
function icons_action_to()
{
    action_to("./icons.php");
}
function login_action_to()
{
    action_to("./login.php");
}
function signup_action_to()
{
    action_to("./signup.php");
}
index_action_to();
</script>

