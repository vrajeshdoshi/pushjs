<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="push.min.js"></script>
</head>
<body>
<button onclick="showMesg()">Notification</button>
<script>
function showMesg(){
Push.create('Hello World!',{
	body:"Hey Friends this is Vrajesh",
	onClick:function(){
		window.location="http://samparkyds.org/login.php";
		this.close();
	}
});
}
</script>
</body>
</html>