<?php
$foo = 32.04 ;
echo gettype($foo), "<br/>" ;
settype($foo, "integer") ;
echo gettype($foo), "<br/>" ;
settype($foo, "string") ;
echo gettype($foo), "<br/>" ;
?>