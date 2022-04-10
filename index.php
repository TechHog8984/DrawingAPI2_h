<?
$handle = fopen("https://gitlab.com/te4224/Scripts/-/raw/main/DrawingApi2/script/v1.9.lua", "rb");
$contents = stream_get_contents($handle);
fclose($handle);

echo $contents;

?>
