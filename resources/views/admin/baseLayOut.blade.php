<!DOCTYPE html>
<!--[if lt IE 8]>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<![endif]-->
<html>
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <title>小鹅通，专注于知识服务与社群运营的SaaS云</title>
    <link rel='icon' href='logo-64.ico' type='image/x-ico'/>
    {{-- 禁止数字识自动别为电话号码 --}}
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="description" content="小鹅通，专注于知识服务与社群运营的聚合型工具">
    <meta name="author" content="小鹅技术">
    <meta name="keywords" content="小鹅通,自媒体,新媒体,媒体,微信,微信公众平台,公众号,订阅号,服务号,粉丝,社群,
    用户画像,大数据,小程序,内容付费,知识服务,内容变现,知识变现,
    社群经济,粉丝经济,网红经济,流量变现,小鹅,小鹅通工具,KOL,大V,知识电商">
    <link type=text/css rel="stylesheet" href="../css/admin/pageBase.css?{{env('timestamp')}}">
    @yield('page_css')
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?32573db0e6d7780af79f38632658ed95";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <!--[if lt IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="../css/ie/ie.css">-->
    <!--<script src="../js/external/html5shiv.min.js"></script>-->
    <![endif]-->
</head>

<body>
{{--导航栏--}}
<div class="navHeader">
    <div class="indexLogo">
        <a href="/">
        <img class="logoLight" src="../images/homepage/logo.svg" style="display: none">
        <img class="logoDark" src="../images/homepage/logo_black.svg" style="display: none">
        </a>
    </div>
    <div class="nav">
        <div class="navContent">
            <div class="navPart homePageNav" data-operate_type="home_page" >首页</div>
            <div class="navPart productFunctionNav" data-operate_type="function" >功能</div>
            <div class="navPart versionSelectNav" data-operate_type="version" >版本</div>
            <div class="navPart excellentCaseNav" data-operate_type="excellent_case" >案例</div>
            <div class="navPart partIntro" data-operate_type="about_us">关于我们</div>
        </div>
    </div>
    <div class="btnBlue loginBtn loginLink">登录</div>
</div>

@yield('mainContent')
<div class="footer">
    <div class="footerCol">
        <div class="footerColContent">
            <div class="footerColPart">
                <div class="footerColTitle">产品</div>
                <div class="footerColSection productFunctionNav" data-operate_type="function"><a href="javascript:">功能</a></div>
                <div class="footerColSection versionSelectNav"><a href="javascript:">版本</a></div>
                <div class="footerColSection excellentCaseNav" data-operate_type="excellent_case"><a href="javascript:">案例</a></div>
            </div>
            <div class="footerColPart">
                <div class="footerColTitle">公司</div>
                <div class="footerColSection"><a href="/aboutUs#aboutUsLink">加入我们</a></div>
                <div class="footerColSection"><a href="/aboutUs">关于我们</a></div>
                <div class="footerColSection"><a href="/aboutUs#report">媒体报道</a></div>
                <div class="footerColSection"><a target="_blank" href="https://admin.xiaoe-tech.com/charge_protocol_page">服务条款</a></div>
            </div>

            <div class="footerColPart">
                <div class="footerColTitle">服务</div>
                <div class="footerColSection"><a target="_blank" href="https://admin.xiaoe-tech.com/help_document">帮助中心</a></div>
            </div>
            <div class="footerColContact">
                <div class="footerColTitle">联系我们</div>
                <div class="footerColSection">18124689845  18126391294</div>
                <div class="footerColSection">support@xiaoe-tech.com</div>
                <div class="footerColSection">客服办公时间：9:00-19:00，周末不休</div>
                <div class="wxIcon">
                    <img src="../images/homepage/icon-wechat.png" alt="">
                    <div class="wxQrcodeBox" style="display: none">
                        <div>在微信里<br/>使用小鹅通</div>
                        <div class="QrcodeBoxImg">
                            <img src="../images/homepage/xe_qrcode.jpg" alt="">
                        </div>
                        <div class="boxTriangle"></div>
                        <div class="qrcodeBoxBar"></div>
                    </div>
                </div>
                <div class="weiboIcon">
                    <img src="../images/homepage/icon-weibo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="webInfo">Copyright © 2015-2017 深圳小鹅网络技术有限公司 ALL Rights Reserved. 粤ICP备15020529号-1</div>
</div>
{{--客服按钮--}}
<a href='javascript:;' class="serviceBtn z-depth-2" onclick='easemobim.bind({
    //请使用自己的租户ID
    tenantId: "43372",
})'></a>
<script type="text/javascript" src="../js/admin/jquery-1.js"></script>
<script type="text/javascript" src="../js/admin/pageBase.js?{{env('timestamp')}}"></script>
@yield('page_js')
<script src='//kefu.easemob.com/webim/easemob.js?tenantId=43372&hide=true&sat=false' async='async'></script>
<script>
    window.easemobim = window.easemobim || {};
    easemobim.config = {
        hide: true,     //是否隐藏小的悬浮按钮
        autoConnect: true    //自动连接
    };
</script>
</body>

</html>