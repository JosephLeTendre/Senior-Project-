<html>
  <head>
  	<title>My Calendar </title>
	<style type = "text/css">
		.calendar {
			font-family: Arial; font-size: 100px;
		}
		table.calendar{
			margin: auto; border-collapse: collapse;
		}
		.calender .days td{
			width: 80px; height:80px; padding: 4px;
			border: 1px solid #999;
			vertical-align: top;
			background-color: #DEF;
		}
	</style>
</head>
<body>

<?php echo $calendar; ?>
</body>
</html>