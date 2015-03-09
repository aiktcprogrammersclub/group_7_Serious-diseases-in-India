<?php
$salt='SHIFTLEFT';
$hello='welcome';

$hello2=md5(md5($hello) .$salt);
?>
<html>
<head>

<script>
window.onbeforeunload = function () {
return "Do you really want to close?";

};
</script>
</head>
<body>
<?php echo $hello2;
$len = strlen($hello2);
echo $len;
?>
hey
</body>
</html>