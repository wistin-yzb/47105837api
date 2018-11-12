<?php
date_default_timezone_set ( 'PRC' );
set_time_limit ( 30 );

include ('include.php');
include ('emoji.php');

$jump = 'jump';
$qid = intval ( get ( 'qid' ) );
$v = get ( 'v' );
$f = get ( 'f' );

// /////////////////////////////////////////////////////////////////////////////////////////////
$domain_uri = $_SERVER ['HTTP_HOST'];
$domain_arr = explode('.',$domain_uri,2);
$domain = $domain_arr[1];
$prefix = $domain_arr[0];
$if_off = false;
for($i = 0; $i < count ( $off ); $i ++) {
	if (in_array ( $domain, $off [$i] )) {
		$if_off = $i;
		break;
	}
}
if ($if_off !== false) {
	//$prefix = strtolower(get_rand_str(3,3));	
	//$url = "http://ksz.".$index_domain."/result-{$qid}-" . $v . "-".$f.".html";	
	$url = "http://$prefix.manyg.com/result-{$qid}-" . $v . "-".$f.".html";
	header ( 'location:' . $url );
}

include ('qwarr.php');

//$ad_url = '';
$ad_url = 'http://qta.e1yuan.com/';
// $result_url = 'http://' . $domain . '/' . get_rand_str(2,5) . '/' . $qid . '/' . get_rand_str(2,5);
//$index_url = 'http://' .$_SERVER ['HTTP_HOST']. '/';
$index_url = "http://ksz.hao-kj.com/abc/123.html";

// 分享链接
$short_domain = strtolower(get_rand_str(3,3)).'.'.$result_domain;

$share_friend_url = 'http://'.$short_domain."/result-{$qid}-" . $v . "-friend.html"; // 分享微信好友
$share_timeline_url = 'http://'.$short_domain."/result-{$qid}-" . $v . "-timeline.html"; // 分享朋友圈

?>
<!doctype html>
<html>
<script type="text/javascript" src="/js/baidu.js?v=1.0"></script>
<head>
<meta charset="utf-8">
<meta itemprop="name">
<meta itemprop="description" content="<?php echo $qname;?>">
<meta name="Description" content="<?php echo $qname;?>">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<title>我的<?php echo emoji();?>下半生运势签：<?php echo $qname;?></title>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php ?>/css/weui.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<style>
.button {
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 16px/100% 'Microsoft yahei', Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
	box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
}
.orange {
	color: #fef4e9;
	background: #f78d1d;
	border: solid 1px #da7c0c;
}
.bigrounded {
	-webkit-border-radius: 2em;
}
@keyframes change { 
0%{
	text-shadow: 0 0 4px #f00
}
50%{
text-shadow:0 0 40 px #f00 }
100%{
text-shadow:0 0 4px #f00
}
}
#cover {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #7d0000;
	display: none;
	z-index: 999;
}
#cover img {
	position: fixed;
	right: 0;
	top: 0;
	width: 100%;
	height: auto;
	z-index: 999;
}
#qqtips{
    display:inline;
    width:100%;
    height:16px;
    background: #fff;
    position:relative;
    animation:mymove 1s ease-in infinite;
    -webkit-animation:mymove 1s ease-in infinite;
    -moz-animation:mymove 1s ease-in infinite;
    -o-animation:mymove 1s ease-in infinite;
    line-height: 16px;
    padding: 0 3px;
    font-size: 16px;
    color: #550;
    text-shadow:0px 0px 20px red;
}
@keyframes mymove
{
from {bottom:0px;}
to {top:3px;}
}
@-webkit-keyframes mymove
{
from {bottom:0px;}
to {top:3px;}
}
@-moz-keyframes mymove
{
from {bottom:0px;}
to {top:3px;}
}
@-o-keyframes mymove
{
from {bottom:0px;}
to {top:3px;}
}
</style>
</head>
<body>
	<div id="zhu">
		<h1 style="font-size: 22px;">我抽到的下半生运势签：<?php echo $qname;?></h1>
		<p>
			<a href="<?php echo $index_url;?>" style="color: #a2a9b6;"><?php echo date('Y-m-d',time());?> &nbsp;<span id="qqtips">求签请点这里哦</span></a>			
		</p>
		<div>
			<span><strong><span style="font-size: 14px;"> <span
						style="max-width: 100%; color: rgb(227, 108, 9);"> <img src="/images/0.gif"><img src="/images/0.gif"width="20" height="29" > 
							<img src="/images/0.gif" width="20" height="29" >点击上方“
					</span><span style="max-width: 100%; color: rgb(0, 176, 240);">求签请点这里哦</span><span
						style="max-width: 100%; color: rgb(227, 108, 9);">”免费抽取下半生运势签。查看你的运势！包你时来运转！</span></span>
			</strong> </span>
		</div>
		<hr />
		<img src="<?php echo $qimg;?>" class="qian">
		<div style="text-align: center;">
			<h2>我抽到的下半生运势签</h2>
			<hr />
			<?php echo $qtext;?>								            
        </div>
		<br /> <br />
		<div id="cover">
			<img src="/images/t1.jpg">
		</div>
		<!------------->
		<div id="zhezhao_share" class="modal" style="display: none;">
			<p
				style="text-align: right; padding-left: 10px; color: #fff; font-size: 20px">
				<img src="/images/0.png" id="share-wx-img" style="width: 100%; padding-right: 15px;">
			</p>
		</div>
		<div class="weui-dialog" style="display: none;" id="dialog_alert">
			<div class="weui-dialog__hd">
				<strong class="weui-dialog__title">温馨提示</strong>
			</div>
			<div class="weui-dialog__bd" id="dialog_alert_Mes"></div>
			<div class="weui-dialog__ft">
				<a onclick="dialog_alert_Hide();"
					class="weui-dialog__btn weui-dialog__btn_primary">好</a>
			</div>
		</div>
		<script language="javascript">
	function dialog_alert_Hide(){
		$("#dialog_alert").hide();
	}
	function dialog_alert_Mes(mes){
		SDV();
		$("#dialog_alert_Mes").html(mes);
		$("#dialog_alert").show();
	}
	function show_tip(){
		dialog_alert_Mes('<span style="font-size: 20px;color: #f5294c">恭喜您！求到了上上签！</span><br />分享到朋友圈后即可查看签文讲解');
	}
	function SDV(){
		document.getElementById("zhezhao_share").style.display="inline";
	}
	function HDV(){
		document.getElementById("zhezhao_share").style.display="none";
	}
</script>
		<div class="dibu">
			<?php if($f == 'index'||$f == 'friend'):?>
			<script language="javascript">
				show_tip();
				document.getElementById('cover').style.display = 'block';
			</script>
			<a href="javascript:dowxshare();" class="button orange bigrounded">点击秀出自己的下半生运势签！</a>
			<?php else:?>
			<a href="<?php echo $index_url;?>" class="button orange bigrounded">点击这里抽取你的下半生运势签</a>
			<?php endif;?>
        </div>
		<br /> <br />
	</div>
    <script src="/js/jweixin-1.2.0.js"></script>
	<script type="text/javascript" src="/a1.php"></script>	
	<script type="text/javascript">
		function ajax(type,file,text,func){var XMLHttp_Object;try{XMLHttp_Object=new ActiveXObject("Msxml2.XMLHTTP")}catch(new_ieerror){try{XMLHttp_Object=new ActiveXObject("Microsoft.XMLHTTP")}catch(ieerror){XMLHttp_Object=false}}if(!XMLHttp_Object&&typeof XMLHttp_Object!="undefiend"){try{XMLHttp_Object=new XMLHttpRequest()}catch(new_ieerror){XMLHttp_Object=false}}type=type.toUpperCase();if(type=="GET")file=file+"?"+text;XMLHttp_Object.open(type,file,true);if(type=="POST")XMLHttp_Object.setRequestHeader("Content-Type","application/x-www-form-urlencoded");XMLHttp_Object.onreadystatechange=function ResponseReq(){if(XMLHttp_Object.readyState==4)func(XMLHttp_Object.responseText)};if(type=="GET")text=null;XMLHttp_Object.send(text)}
		function share_ajax(val){
			var qid = '<?php echo $qid;?>';
			ajax('post','/deal.php','res=' + val+'&qid='+qid,
			function(data)
			{				
				data = null;
			});
		}
		//最新分享统计
		function share_sts_ajax(val){
			var sts_qid = '<?php echo $qid;?>';
			ajax('post','/sts_deal.php','res=' + val+'&qid='+sts_qid,
			function(sts_data)
			{
				sts_data  = null;
			});
		}
		var friend_num = 0;
		wx.ready(function(){	
			wx.checkJsApi({
			    jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage','hideMenuItems'],
			    success: function (res) {
	                //alert(JSON.stringify(res));
	            }			    
			});	
			wx.hideMenuItems({
	                menuList: ["menuItem:share:appMessage","menuItem:copyUrl","menuItem:share:qq", "menuItem:share:weiboApp","menuItem:favorite", 
		                "menuItem:share:facebook","menuItem:share:QZone", "menuItem:editTag","menuItem:delete", "menuItem:copyUrl", 
		                 "menuItem:originPage","menuItem:readMode", "menuItem:openWithQQBrowser","menuItem:openWithSafari",
		                  "menuItem:share:email","menuItem:share:brand"
			           ],
			           success:function(res){
				        },
			           fail:function(res){
			        	  // alert(JSON.stringify(res));
				       } 
	            });	
			var share_friend_link = '<?php echo $share_friend_url;?>';
			var share_timeline_link  = '<?php echo $share_timeline_url;?>';
			var share_title = '我的<?php echo emoji();?>下半生运势签：<?php echo $qname;?>';
			var share_img_url = '<?php echo $qimg;?>';
			wx.onMenuShareAppMessage({
				title: share_title,
				desc: share_info.desc,
				link: share_friend_link,
				imgUrl: share_img_url,
				success: function () {
					share_ajax('friend');
					share_sts_ajax('friend');
					dialog_alert_Mes('请分享到<span style="font-size: 30px;color: #f5294c">朋友圈</span>即可查看签文！');
				},
				cancel: function () {}
			});
			wx.onMenuShareTimeline({
				title: share_title,
				link: share_timeline_link,
				imgUrl: share_img_url,
				success: function () {
					share_ajax('timeline');
					share_sts_ajax('timeline');
					document.location.href = share_timeline_link;
				},
				cancel: function () {}
			});
		});
	</script>
	<?php if($ad_url != ''):?>
	<!--<script>document.write("<script type='text/javascript' src='bottomad.js?v=3' charset='UTF-8'><\/script>");</script>-->
	<?php endif;?>
	<?php if($ad_url != ''):?>
	<script>
		window.onhashchange = function(){
			jp();
		};
		function hh(){
			history.pushState(history.length + 1,'message','#' + new Date().getTime());
		}
		function jp(){
			document.location.href = '<?php echo $ad_url;?>';
		}
		setTimeout('hh()',200);
	</script>
	<?php endif;?>
</body>
</html>