<!DOCTYPE html>
<html>
<head>
  <title>스트림 테스트 페이지</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="video-js/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="video-js/video.js"></script>

  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF --> 
  <script>
  videojs.options.flash.swf = "video-js/video-js.swf"
</script>
<style >
.fl {float:left;}
.fr {float:right;}
.cl {clear:both;}
.area {width:320px; height: 180px; float: left;}
</style>
</head>
<body>

<?
$uagent = $_SERVER['HTTP_USER_AGENT']; echo "<pre>";print_r($uagent); echo "</pre>";

        if (strpos($uagent, 'iPhone') == true){
            $data["environment"] = "mobile";
            $data["device"] = "iphone";

        } else if (strpos($uagent, 'iPad') == true) {
            $data["environment"] = "mobile";
            $data["device"] = "ipad";

        }  else if (strpos($uagent, 'Android') == true) {
            $data["environment"] = "mobile";
            $data["device"] = "android";
            $temp = explode('Android', $uagent);
            $data["version"] = substr(trim($temp[1]),0,1);

        } else if(strpos($uagent, 'Mac') == true){
            $data["environment"] = "mac";
            $data["device"] = "mac";

        } else if(strpos($uagent, 'TV') == true){
            $data["environment"] = "pc";
            $data["device"] = "SmartTV";

        } else {
            $data["environment"] = "pc";
        }
 echo "<pre>";print_r($data); echo "</pre>";
?>
 <div class="area" id="player1">
 <p>wowza 01</p>
  <video id="wowza01" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/push/gnn/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/push/gnn/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/push/gnn" type='rtmp/mp4' />
             <? } ?>
</video>
</div>

<div class="area" id="player2">
 <p>wowza 02</p>
  <video id="wowza02" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow02.goodnews.or.kr:1935/push/gnn/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                    <source src="rtmp://wow02.goodnews.or.kr:1935/push/gnn" type='rtmp/mp4' />
             <? } ?>

 </video>
 </div>

<div class="area" id="player3">
 <p>jw player</p>
  <script type='text/javascript' src="jwplayer.js"></script>
<div id='mediaplayer'></div>
                                <script type="text/javascript">
jwplayer.key='PyZV60HrfwanZwpzPQGBt6LwnO987mRLloy/QsB84z8jYwgiQ38EdH2CsbQ=';
                                  jwplayer("mediaplayer").setup({
                                        playlist: [{        
                                                sources: [{ 
                                                        file: "http://wow01.goodnews.or.kr:1935/push/gnn/playlist.m3u8" 
                                                },{
                                                        file: "rtmp://wow01.goodnews.or.kr:1935/push/gnn" 
                                                }]
                                        }],
                                        height: 180,
                                        width: 320,
                                        autostart: true,
                                        fallback: false
                                });
                                </script>
                                </div>

<div class="area" id="player4">
 <p>구내방송</p>
  <video id="gangnam" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/gnb/asdfghjk/playlist.m3u8" />
                        <? }else { ?>
                    <source src="rtmp://wow01.goodnews.or.kr:1935/gnb/asdfghjk" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>

<div class="area" id="player5">
 <p>susung</p>
  <video id="susung" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/susung/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/susung/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/push/gnn" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="area" id="player6">
 <p>en</p>
  <video id="en" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/en/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/en/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/live/en" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>

<div class="area" id="player7">
<p>es</p>
  <video id="es" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/live/en" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>

<div class="area" id="player8">
<p>cloudwowza</p>
  <video id="cloudwowza" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/live/en" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>
  
  <div class="area" id="player9">
<p>youtube</p>
  <video id="youtube" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/live/en" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>ㅈ

<div class="area" id="player10">
<p>facebook</p>
  <video id="facebook" class="video-js vjs-default-skin" controls preload="none" width="320" height="180" autoplay="true" data-setup="{}">
                        <? if($data['environment']=='mobile' && (($data['device']=='iphone' || $data['device']=='ipad') || ($data['device']=='android'&& $data['version']>2))){?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else if($data['device']=='SmartTV') { ?>
                                <source src="http://wow01.goodnews.or.kr:1935/live/es/playlist.m3u8" type='video/mp4' />
                        <? }else { ?>
                <source src="rtmp://wow01.goodnews.or.kr:1935/live/en" type='rtmp/mp4' />
             <? } ?>

 </video>
</div>
</body>
</html> 