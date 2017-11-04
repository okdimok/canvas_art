<!DOCTYPE html>
<?php $номерЦвета = (@$_REQUEST['n'])?:5;
$начало = (@$_REQUEST['s'])?:0;
?>
<html>
	<head>
		<script type="text/javascript" src="/luxeweek/js/jquery.js"></script>
		<style>body {background-color:black;color:white;} div {height:100px; width:100px;}</style>
	</head>
	<body>
		<script>
			<?php echo "var start = $начало; var num = $номерЦвета;\n";?>
			for (var j = 0; j < num; j++) {
				var c= 'hsl(' + (start+j*360./num) + ',100%,50%)';
				$('body').append($('<div/>').css({'display':'inline-block', 'background-color': c}).html('&nbsp;'));
			}
		</script>
	</body>
</html>
