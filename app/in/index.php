<?php
ob_start();
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 3600');
header('X-Powered-By:');
?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
    <meta charset="utf-8">
    <title>503 Service Temporarily Unavailable</title>
</head><body>
<h1 style="border-bottom: 1px solid black; padding-bottom: 25px;">503 Service Unavailable</h1>
<p>HTTP Error 503. The service is unavailable.</p>
</body></html>