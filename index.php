<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="push.min.js"></script>
</head>
<body>
<button onclick="showMesg()">Notification</button>
<script>
function showMesg(){
Push.create('Hello World!');
}
</script>
</body>
</html>