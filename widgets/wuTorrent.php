<?php
$wIndex["wuTorrent"] = array("name" => "uTorrent", "type" => "inline", "function" => "widgetuTorrent();");

function widgetuTorrent() {
	global $utorrent_url;
	echo "<iframe src='".$utorrent_url."' frameborder='0' scrolling='auto' width='100%' height='300'></iframe>";
}

?>