<?php
function view ($uid) {
	$db = $GLOBALS['db'];
	$sql = "SELECT name, desp FROM user WHERE uid=".$uid.";";
	$res = $db->query($sql);
	$data = $res->fetch_assoc();
	echo "
			<div id=\"main\">
				<div class=\"centerbox\">
					<div class=\"close\">
						<a href=\"main.php\">
							<img src=\"img/close.png\">
						</a>
					</div>
					<h1>".$data['name']."</h1>
					<h2>Beschreibung</h2>
					<p>".$data['desp'].".</p>
				</div>
			</div>";
}
?>