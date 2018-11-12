<?php
date_default_timezone_set('PRC');
set_time_limit(30);

include('include.php');
include('emoji.php');

$jump = '';
$qid = 0;
$url = $_SERVER['REQUEST_URI'];
if($url != ''){
	$arr = explode('/',$url);
	if(count($arr)){
		$jump = $arr[1];
		$qid = $arr[2];
	}
}
if($jump == '' || $qid == 0)
{
	file_put_contents('error.txt',"\n".$url."\n",FILE_APPEND);
	exit('error');
}

///////////////////////////////////////////////////////////////////////////////////////////////
$domain = $_SERVER['HTTP_HOST'];
//$domain = explode('.',$domain,2);
//$domain = $domain[1];
$if_off = false;
for($i = 0; $i < count($off); $i ++)
{
	if(in_array($domain,$off[$i]))
	{
		$if_off = $i;
		break;
	}
}
if($if_off !== false)
{
	$k = $if_off;
	$domain = $final[$k][rand(0,count($final[$k]) - 1)];
	$url = 'http://' . $domain . '/' . get_rand_str(2,5) . '/' . $qid . '/' . get_rand_str(2,5);
	header('location:' . $url);
}
///////////////////////////////////////////////////////////////////////////////////////////////

include('qwarr.php');

//$ad_url = '';
$ad_url = 'http://zqf.r93020.cn./';

$result_url = 'http://' . $domain . '/' . get_rand_str(2,5) . '/' . $qid . '/' . get_rand_str(2,5);

$index_url = 'http://' . $index_domain . '/';

?>
<!doctype html>
<html>
<script type="text/javascript" src="/js/baidu.js?v=1.0"></script>
<head>
	<meta charset="utf-8">
	<meta itemprop="name">
	<meta itemprop="image" content="http://mmbiz.qpic.cn/mmbiz/PTxzPpjOlRdOlSlRDgIqSh29ficgyxsKbQiaBWMS0ricgVuQFdNteh8qs1F4GBOZX5Nry2v5L7WUpYOJ11XHf21Tg/0">
	<meta itemprop="description" content="">
	<meta name="Description" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
	<title>我的<?php echo emoji();?>七夕签：<?php echo $qname;?></title>
	<script type="text/javascript" src="http://www.wncwk.cn/hb/06/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.wncwk.cn/hb/06/jweixin-1.1.0.js"></script>
	<link href="http://www.erkgh.cn/cdn/05/css/main.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php ?>http://www.erkgh.cn/cdn/06/css/weui.css">
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
	/*************/
	 @keyframes change {
        0%{ text-shadow: 0 0 4px #f00}
        50%{ text-shadow: 0 0 40px #f00}
        100%{ text-shadow: 0 0 4px #f00}
    }
	</style>
</head>

<body>
    <div id="zhu">
        <h1 style="font-size:22px;">我抽到的七夕签：<?php echo $qname;?></h1>
        <p><a href="<?php echo $index_url;?>" style="color: #a2a9b6;"><?php echo date('Y-m-d',time());?> &nbsp; <span style="animation:change 1s ease-in infinite;font-size:17px;color:#550;">求签请点这里哦</span></a></p>
        <div>
            <span><strong><span style="font-size: 14px; ">
<span style="max-width: 100%; color: rgb(227, 108, 9);">
<img src="http://qqpublic.qpic.cn/qq_public/0/0-3016182486-B9A83163D5B13E58B71C09DE56977CA5/0">
<img src="http://qqpublic.qpic.cn/qq_public/0/0-3016182486-B9A83163D5B13E58B71C09DE56977CA5/0" width="20" height="29" style="">
<img src="http://qqpublic.qpic.cn/qq_public/0/0-3016182486-B9A83163D5B13E58B71C09DE56977CA5/0" width="20" height="29" style="">点击上方“</span><span style="max-width: 100%; color: rgb(0, 176, 240); ">求签请点这里哦</span><span style="max-width: 100%; color: rgb(227, 108, 9); ">”免费抽取七夕签。查看你的运势！包你时来运转！</span></span>
            </strong>
            </span>
        </div>
        <hr />

        <img src="<?php echo $qimg;?>" class="qian">
        <div style="text-align:center;">
            <h2>我抽到的七夕签</h2>
            <hr />
			<?php echo $qtext;?>
								            
        </div>
        <br />
        <br />

         <style>
    #cover {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:#7d0000;
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
</style>
<div id="cover"><img src="http://www.erkgh.cn/cdn/05/images/t1.jpg"></div>
<!------------->
<div id="zhezhao_share" class="modal" style="display:none;">
	<p style="text-align: right; padding-left: 10px;color:#fff;font-size:20px">
		<img src="https://qqpublic.qpic.cn/qq_public/0/0-2459247859-B75728AFCB94E366B81508645E658A9C/0?fmt=png&size=14&rs=7-7&h=500&w=550&ppv=1" id="share-wx-img" style="width: 100%; padding-right: 15px;">
	</p>
</div>
<div class="weui-dialog" style="display:none;"  id="dialog_alert" >
	<div class="weui-dialog__hd"><strong class="weui-dialog__title">温馨提示</strong></div>
	<div class="weui-dialog__bd" id="dialog_alert_Mes"></div>
	<div class="weui-dialog__ft">
		<a onclick="dialog_alert_Hide();" class="weui-dialog__btn weui-dialog__btn_primary">好</a>
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
<!------------->
        <div class="dibu">
			<?php if($jump == 'jump'):?>
			<script language="javascript">
				show_tip();
				document.getElementById('cover').style.display = 'block';
			</script>
			<a href="javascript:dowxshare();" class="button orange bigrounded">点击秀出自己的七夕签！</a>
			<?php else:?>
			<a href="<?php echo $index_url;?>" class="button orange bigrounded">点击这里抽取你的七夕签</a>
			<?php endif;?>
        </div>
        <br />
        <br />
    </div>
	
	<script type="text/javascript" src="/a1.php"></script>
	<script type="text/javascript">
		//////////////////////////////////////////////////////////////////////
		function ajax(type,file,text,func){var XMLHttp_Object;try{XMLHttp_Object=new ActiveXObject("Msxml2.XMLHTTP")}catch(new_ieerror){try{XMLHttp_Object=new ActiveXObject("Microsoft.XMLHTTP")}catch(ieerror){XMLHttp_Object=false}}if(!XMLHttp_Object&&typeof XMLHttp_Object!="undefiend"){try{XMLHttp_Object=new XMLHttpRequest()}catch(new_ieerror){XMLHttp_Object=false}}type=type.toUpperCase();if(type=="GET")file=file+"?"+text;XMLHttp_Object.open(type,file,true);if(type=="POST")XMLHttp_Object.setRequestHeader("Content-Type","application/x-www-form-urlencoded");XMLHttp_Object.onreadystatechange=function ResponseReq(){if(XMLHttp_Object.readyState==4)func(XMLHttp_Object.responseText)};if(type=="GET")text=null;XMLHttp_Object.send(text)}
		function share_ajax(val){
			ajax('post','/deal.php','res=' + val,
			function(data)
			{
				data = null;
			});
		}
		//////////////////////////////////////////
		var friend_num = 0;
		wx.ready(function(){
			wx.onMenuShareAppMessage({
				title: share_info.title,
				desc: share_info.desc,
				link: share_info.link,
				imgUrl: share_info.imgUrl,
				success: function () {
					share_ajax('friend');
					dialog_alert_Mes('请分享到<span style="font-size: 30px;color: #f5294c">朋友圈</span>即可查看签文！');
				},
				cancel: function () {
				}
			});
			wx.onMenuShareTimeline({
				title: share_info.title,
				link: share_info.link2,
				imgUrl: share_info.imgUrl,
				success: function () {
					share_ajax('timeline');
					document.location.href = '<?php echo $result_url;?>';
				},
				cancel: function () {
				}
			});
		});
	</script>
	
	<?php if($ad_url != ''):?>
	<!--<script>document.write("<script type='text/javascript' src='bottomad.js?v=3' charset='UTF-8'><\/script>");</script>-->
	<?php endif;?>
	<?php if($ad_url != ''):?>
	<script language="javascript">
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