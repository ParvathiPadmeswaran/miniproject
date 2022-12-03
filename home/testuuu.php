<?php
if(isset($_POST['sign'])){
  $sign=$_POST['sign'];
  

  $sign=htmlspecialchars($sign);
  $sign=rawurlencode($sign);
  $audio=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$sign.'&tl=en-IN');
  $speech="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
  echo $speech;
}
?>
