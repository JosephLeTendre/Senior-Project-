<html>
  <head>
  	<title>My Calendar </title>
	<style type = "text/css">
		.calendar {
			font-family: Arial; font-size: 12px;
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
<<<<<<< HEAD
=======
		.calendar .days td:hover{
			background-color: #FFF;
		}
		.calendar .highlight{
			font-weight: bold; color:#00f;
		}
>>>>>>> 9c908da49ee23828b3dc6b9f7b27761274ac5772
	</style>
</head>
<body>

<?php echo $calendar; ?>
</body>
</html>