<?php
//assign adsense code to a variable
$googleadsensecode = '
<script type="text/javascript">
google_ad_client = "pub-123456789";
google_ad_slot = "123456";
google_ad_width = 180;
google_ad_height = 150;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
//now outputting this to HTML
echo $googleadsensecode;
?>