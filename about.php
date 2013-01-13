<!DOCTYPE HTML PUBLIC "-//W3C?//DTD HTML 4.01 TRANSITIONAL//EN">
<html>
	<head>
		<title>About me <- My homepage</title>
		
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<meta http-EQUIV="Content-Type" Content="text/html; charset=windows-1251">
		<link href="style.css" TYPE="text/css" rel="stylesheet">
		
		<script language = "JavaScript">
			var bigsize = "300";   // размер большой картинки
			var smallsize = "150"; // размер маленькой картинки
			function ChangeImageSize(im) 
			{
				if (im.height == bigsize) 
					im.height = smallsize;
				else 
					im.height = bigsize;
			}
		</script>
		
	</head>

	<body>
		<table width=100% CELLPADDING=0 CELLSPACING=0 border=0>
			<tr>
				<td colspan=2 width=100% height=153 bgcolor="#806b2a">
					<table width=100% CELLPADDING=0 CELLSPACING=0>
						<tr>
						<td><img src="images/zombie.png" alt="Зомби"></td>
						<td><img src="images/text.png" alt="Текст"></td>
						<td align=right><img src="images/author.png" alt="Me"></td>
						</TR>
					</table>
				
				</td>
			</tr>
			
			<tr>
				<td colspan=2 width=100% height=40 background="images/border1.jpg"></td>
			</tr>

			<tr>
				<td width=25% height=100% bgcolor="#f5f5dc">
					<div id="menu1">
                        <ul>
							<li><a href="index.php">Main page</a></li>
							<li><a href="about.php"><b>->About me<-</b></a></li>
							<li><a href="interests.php">My interests</a></li>
							<li><a href="photos.php">Photos</a></li>
							<li><a href="test.php">Test</a></li>
                        </ul>
                </div> </td>
				<td width=100% height=100% bgcolor="#f5f5dc">Я родился 1 ноября 1993 года в г. Севастополе. С 2000 по 2010 гг. учился в школе №58, которую окончил с серебрянной медалью. В 2010 году поступил в Севастопольский Национальный Технический университет на факультет Автоматики и вычислительной техники на кафедру Информационных систем. В текущий момент обучаюсь на 3-м курсе.
					<br><br>
					<table align="center">
						<td align="center">
							<img src="images/sevntu.jpg" height="150" alt="СевНТУ" title="СевНТУ" onclick="ChangeImageSize(this)">
							<br>
							<b>СевНТУ</b>
						</td>
					</table>
				</td>
			</tr>

			<tr>
				<td colspan=2 width=100% height=40 background="images/border1.jpg"> </td>
			</tr>

		</table>
	</body>
</html>