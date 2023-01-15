<?php

// SMS Göndermek istediğiniz numaraları virgülle ayırın.
$cepno = "543XXXXXXX,544XXXXXXX";

// NetGSM Santral Numaranızı yazın
   $cepnokullanici = "850XXXXXXX";
// NetGSM'den aldığınız passcode'ı yazın
   $cepnopass = "XXXXXXXX";
// SMS Mesajı
   $mesajyaz ="Göndermek istediğiniz SMS Mesajı buraya gelecek";

    $url= 'https://api.netgsm.com.tr/sms/send/get/?usercode='.$cepnokullanici.'&password='.$cepnopass.'&gsmno='.$cepno.'&message='.$mesajyaz.'&msgheader=İzinli SMS Başlığı Buraya Yazılacak';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $http_response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  if($http_code != 200){
    return false;
  }
    $balanceInfo = $http_response;
   echo 'Mesaj Gönderildi'
  return $balanceInfo;

 } else {

 }

?>