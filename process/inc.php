<?php

//tag
$ireng ='<body bgcolor="black">';
 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
        $link = "https"; 
    else
        $link = "http"; 
    $link .= "://"; 
    $link .= $_SERVER['HTTP_HOST']; 
    $link .= $_SERVER['REQUEST_URI']; 
$pencetan = '<div id="steal"><a href="steal.php" rel="nofollow" target="_blank"><font face="Consolas" size="5" color="white"><b>STEAL<b/></font></a><p></div><div class="memek"><br>';
$subd = $_GET['subd'];
$c0 = $_GET['c0'];
$fat = $_GET['fat'];
$am0 = $_GET['am0'];
$tag = " <img width='220' height='320' src=";
$nhent = "https://i.nhentai.net/galleries/";

//form vendor

//hentai2read
$hentai2read = '<form action="index.php" method="get">
<font face="Consolas" size="3" color="green">
victim: <input type="text" style="width:20%;" placeholder="https://static.hentaicdn.com/hentai/14548/11/ccdn" name="subd"><br>
amount: <input type="text" style="width:2%;" placeholder="26" name="am0">
<select name="fat">
    <option value=".jpg">jpg</option>
    <option value=".png">png</option>
</select>
<br>
<input type="submit" name="h2r" value="LOCK">
</font>
<br>
</form>';

//nhentai
$nhentai = '<form action="index.php" method="get">    
<font face="Consolas" size="3" color="green">
code : <input type="text" style="width:4%;" placeholder="987560" name="c0">
amount: <input type="text" style="width:2%;" placeholder="26" name="am0">
<select name="fat">
    <option value=".jpg">jpg</option>
    <option value=".png">png</option>
</select>
    
<input type="submit" name="nhen" value="LOCK">
</font>
<br>
</form>';