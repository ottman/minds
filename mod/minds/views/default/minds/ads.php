<?php

$type = elgg_extract('type', $vars, 'content-side');

if($type == 'content-side'){
	if(elgg_get_plugin_user_setting('adblock', elgg_get_page_owner_guid(), 'minds')){
		echo elgg_get_plugin_user_setting('adblock', elgg_get_page_owner_guid(), 'minds');
	} else {
	echo '<script type="text/javascript"><!--
                google_ad_client = "ca-pub-9303771378013875";
                /* Minds large block */
                google_ad_slot = "5788264423";
                google_ad_width = 336;
                google_ad_height = 280;
                //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>';
	}
	echo '<script type="text/javascript"><!--
		google_ad_client = "ca-pub-9303771378013875";
		/* Minds large block */
		google_ad_slot = "5788264423";
		google_ad_width = 336;
		google_ad_height = 280;
		//-->
		</script>
		<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>';
} elseif ($type == 'content-side-single'){
  echo '<script type="text/javascript"><!--
                google_ad_client = "ca-pub-9303771378013875";
                /* Minds large block */
                google_ad_slot = "5788264423";
                google_ad_width = 336;
                google_ad_height = 280;
                //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>';
} elseif ($type == 'content-side-single-user'){
	if(elgg_get_plugin_user_setting('adblock', elgg_get_page_owner_guid(), 'minds')){
                echo elgg_get_plugin_user_setting('adblock', elgg_get_page_owner_guid(), 'minds');
        } else {
        echo '<script type="text/javascript"><!--
                google_ad_client = "ca-pub-9303771378013875";
                /* Minds large block */
                google_ad_slot = "5788264423";
                google_ad_width = 336;
                google_ad_height = 280;
                //-->
                </script>
                <script type="text/javascript"
                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>';
        }
} elseif($type == 'content-foot'){
/*	echo '<script id="mNCC" language="javascript">  
			medianet_width="728";  
			medianet_height= "90";  
			medianet_crid="451826483";  
		 </script> 
		 <script id="mNSC" src="http://contextual.media.net/nmedianet.js?cid=8CU21QO2U" language="javascript"></script>';
*/
	echo '<script type="text/javascript"><!--
		google_ad_client = "ca-pub-9303771378013875";
		/* Content Bottom Banner */
		google_ad_slot = "9810862421";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>
		<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>';
			
} elseif($type == 'news'){
 echo '<script type="text/javascript"><!--
google_ad_client = "ca-pub-9303771378013875";
/* News */
google_ad_slot = "6842535224";
google_ad_width = 300;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
	
} elseif($type == 'large-block'){
	echo '<script type="text/javascript"><!--
google_ad_client = "ca-pub-9303771378013875";
/* Large ad */
google_ad_slot = "1083059623";
google_ad_width = 300;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';
} elseif($type == 'small-banner'){
	echo '<script type="text/javascript"><!--
			google_ad_client = "ca-pub-9303771378013875";
			/* Minds Small Banner WIKI */
			google_ad_slot = "4244373227";
			google_ad_width = 234;
			google_ad_height = 60;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>';
}
elseif($type == 'search-ad'){
	echo '<script type="text/javascript"><!--
			google_ad_client = "ca-pub-9303771378013875";
			/* Search ad, square */
			google_ad_slot = "1151306021";
			google_ad_width = 125;
			google_ad_height = 125;
			//-->
			</script>
			<script type="text/javascript"
			src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>';
} elseif($type == 'content.ad'){
	        echo '<div class="contentad"><div id="contentad9733"></div>
<script type="text/javascript">
    (function() {
        var params =
        {
            id: "67c8c761-6755-4867-92be-6317f1ea173a",
            d:  "bWluZHMuY29t",
            wid: "9733",
            cb: (new Date()).getTime()
        };

        var qs="";
        for(var key in params){qs+=key+"="+params[key]+"&"}
        qs=qs.substring(0,qs.length-1);
        var s = document.createElement("script");
        s.type= "text/javascript";
        s.src = "http://api.content.ad/Scripts/widget.aspx?" + qs;
        s.async = true;
        document.getElementById("contentad9733").appendChild(s);
    })();</script> </div>';

}

