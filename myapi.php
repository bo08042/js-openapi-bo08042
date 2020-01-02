<?php
$mycurl=curl_init();

// 用戶代理
curl_setopt($mycurl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");

// 驗證SSL伺服器憑證
curl_setopt($mycurl,CURLOPT_SSL_VERIFYPEER,false);

// 設定URL
curl_setopt($mycurl,CURLOPT_URL,"https://opendata.epa.gov.tw/webapi/api/rest/datastore/355000000I-000259?sort=SiteName&offset=0&limit=1000");

// 執行
$result=curl_exec($mycurl);
?>