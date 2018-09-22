<?php
$videos = array(
  "https://www.youtube.com/watch?v=F9GujgK0y2M"
, "https://www.youtube.com/watch?v=Tb7cOADLccE"
, "https://www.youtube.com/watch?v=xJseXY2sup8&list=PLsRdPvQ2xMkH8c2BOnQ_O1KZ9lyyL_eGB"
, "https://mega.nz/#!7c03mIwA!LuHyurR4l-UCajxrUeB9vUl1DjaJBJ6Wp0G3iURHAVU"
, "https://medium.freecodecamp.org/what-can-you-do-with-python-the-3-main-applications-518db9a68a78"
, "https://mega.nz/#!gj4mEaCb!XEWBZVX0UJhbsYW1crgBkIydtqR9_6dj3xB5LI4-tqU"
, "https://mega.nz/#!GAd0CR7B!sRyCCMkvzcvYOiiKRTyuml1CmhiWm5jBJiT0AMDzVJk"	
, "https://www.youtube.com/watch?v=gZuNOqaDnSQ"
, "https://www.youtube.com/channel/UCDrekHmOnkptxq3gUU0IyfA/videos"
, "https://www.youtube.com/watch?v=QVpNsWWt8M4"
, "https://www.youtube.com/user/g7harris"
, "https://www.youtube.com/user/escueladigitalperu/videos"
, "https://innokabi.com/tecnicas-periodista-redactar-articulos-blog/"
, "https://www.youtube.com/watch?v=vlx5gm_wJOc&feature=youtu.be"
, "https://www.youtube.com/watch?v=Xmc0D1oqYoM&app=desktop"
, "https://elpais.com/elpais/2018/07/10/buenavida/1531218138_618478.html?id_externo_rsoc=FB_CC"
, "https://www.youtube.com/watch?v=f3EbDbm8XqY"
, "https://www.youtube.com/watch?v=ySa67e0jKNA"
);
	$long = count($videos);
	for ($i=1; $i < $long; $i++) { 
		echo "<a href='".$videos[$i]. "' target='_blank'>Video N° ".$i."</a>";
		echo "<br>";
	}
?>