<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+14698091479"><?php  echo $_POST['To'];?></Dial>
</Response>
