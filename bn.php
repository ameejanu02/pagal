<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('myToken');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=5&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);
$tas=array( '😍','💖','😺','😋','💝','💛','💙','💜','💚','👀','😂','💘','💖','🍸','😔','😒','😲','😷','😼','❤','💔','💗','💓','💘','🌹','☀','💐','⚡','🍁','🌙','☔','🎁','🎉','🎈','💝','📣','🎭','🎭','🎭','📺','📞','📱','💩','🌟','👮','🌾','⛄','🍎','🍉','🍓','🍺','🎶','💽','📀','🍅','🍔','🍟','🚲','🐠','🐒','🐟','🌹' ,);
$hamzaemo = $tas[rand(0,count($tas) - 1)];

$tas=array('👈😍👉','👈💖👉','👈😺👉','','👈💝👉','👈💛👉','👈💙👉','👈💜👉','👈💚👉','👈👀👉','👈😂👉','👈💘👉','👈💖👉','👈🍸👉','👈😔👉','👈😒👉','👈😲👉','👈😷👉','👈😼👉','👈❤👉','👈💔👉','👈💗👉','👈💓👉','👈💘👉','👈🎉👉','👈💑👉','👈👀👉','👈💃👉','👈💀👉','👈⚡👉','👈📣👉','👈💐👉','👈🍁👉','👈☔👉','👈⛄👉' ,);
$zrilta= $tas[rand(0,count($tas) - 1)];

$tas=array('👈🐺👉','👈👄👉','👈🐒👉','👈🎍👉','👈🎁👉','👈💛👉','👈👀👉','👈🐠👉','👈💙👉','👈🍁👉','👈☀👉','👈🐬👉','👈🌾👉','👈🎄👉','👈📀👉','👈🍃👉','👈💾👉','👈📺👉','👈📻👉','👈🔈👉','👈🎶👉','👈🎵👉','👈🎺👉','👈🎷👉','👈🀄👉','👈🎾👉','👈⚽👉','👈🏀👉','👈🏈👉' ,);
$hamza= $tas[rand(0,count($tas) - 1)];

$tas=array('😍','📣','📞','📱','📀','💽','📺','📻','💾','🎭','🔰','🎫','💛','🐍','🌱','⚡','☀','🍂','🍁','⚡','⛄','☔','🌹','🎁','🎉','😚','😝','👮','👷','👶','👦','👧','👀' ,);
$hamzu= $tas[rand(0,count($tas) - 1)];

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);

$hr = $hari[gmdate('N',time()+60*60*7)];
	$tgl = gmdate('j',time()+60*60*7);
	$bln = $bulan[gmdate('n',time()+60*60*7)];
	$thn = gmdate('Y',time()+60*60*7);
	$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
	$TimeZone="+05:00";
	$hour=gmdate("H", time() + ($TimeZone * 60 * 60));
	if ($hour > 20) $greetings = " gσσ∂ иιgнт  ";
	else if ($hour > 17) $greetings = " gσσ∂ єνєиιиg ";
	elseif ($hour > 11) $greetings = " gσσ∂ αfтєяиσσи  ";
	elseif ($hour < 12) $greetings = " gσσ∂ мσяиιиg  "; 
	
$emo=array (
'😍','📣','📞','📱','📀','💽','📺','📻','💾','🎭','🔰','🎫','💛','🐍','🌱','⚡','☀','🍂','🍁','⚡','⛄','☔','🌹','🎁','🎉','😚','😝','👮','👷',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$text = array(
' '.$hamzu.' '.$emoticon.' '.$greetings.' '.$tagged_name.' '.$emoticon.'  ѕтι¢кєя + мєитισи    '.$hamzu.' 
'.$hamza.' CHBOTTER <3 TOPPERZZ,TK  '.$zrilta.'  ',
);

$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' CHAUDHRYS BOTTER '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';

$react = array(
'WOW',
'LIKE',
'LOVE',
);
$stickers= array('1775283982712306','1193275907437966','597728107014572',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>