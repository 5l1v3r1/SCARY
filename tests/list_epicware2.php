<?php
# Original epicware code: 
while(list($header,$value)=each($HTTP_POST_VARS)) 
eval("$".$header."=\"$value\";");
?>