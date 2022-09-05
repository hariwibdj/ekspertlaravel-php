<?php
$arr = array(1,2,3,4,5);
$target = NULL;
$targetIndex = NULL;
Foreach($arr as $key =>$value){
If($value<4 && $value>2){
$target = $value;
$targetIndex = $key;
}
}

echo "Ketemu nih, aku ada di index $targetIndex dengan nilai $target";

?>
