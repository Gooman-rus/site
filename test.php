<!DOCTYPE HTML PUBLIC "-//W3C?//DTD HTML 4.01 TRANSITIONAL//EN">

<html>
	<head>
		<title>Test <- My homepage</title>
		
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<meta http-EQUIV="Content-Type" Content="text/html; charset=windows-1251">
		<link href="style.css" TYPE="text/css" rel="stylesheet">
	</head>

	<body>
		<table width=100% CELLPADDING=0 CELLSPACING=0 border=0>
			<tr>
				<td colspan=2 width=100% height=153 bgcolor="#806b2a">
					<table width=100% CELLPADDING=0 CELLSPACING=0>
						<tr>
						<td><img src="images/zombie.png" alt="�����"></td>
						<td><img src="images/text.png" alt="�����"></td>
						<td align=right><img src="images/author.png" alt="�����"></td>
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
							<li><a href="about.php">About me</a></li>
							<li><a href="interests.php">My interests</a></li>
							<li><a href="photos.php">Photos</a></li>
							<li><a href="test.php"><b>->Test<-</b></a></li>
                        </ul>
                </div> </td>
			
				<td width=100% height=100% bgcolor="#f5f5dc">
					<form method="test" action="test.php"> 
						<input name="mycolor" type="checkbox" value="red" checked>�������(������ �� ���������) 
						<input name="mycolor" type="checkbox" value="blue">����� 
						<input name="mycolor" type="checkbox" value="black">������ 
						<input name="mycolor" type="checkbox" value="white">�����
						<br><br><br><br>
						  
						  
						 <table border="0" align="center">
							 <tr>
							 <td>�����:</td>
							 <td><input type="text" name="login" size="30">
							 </td>
							 </tr>
						  
							 <tr >
							 <td>������:</td>
							 <td><input type="password" name="pass" size="30">
							 </td>
							 </tr>
		
							 <tr>
							 <td colspan="2" align="center">
							 <input type="submit" value="���������">
							 <input type="reset" value="��������">
							 </td>
							 </tr>
						 </table>
						
						<b>�������� ���� ��:</b>
						<br>
						<select name="spisok" size="1"> 
							<option value="1">Windows XP</option> 
							<option value="2">Ubuntu</option> 
							<option value="3">Mac OS</option> 
							<option value="4">Android</option> 
							<option value="5">iOS</option> 
						</select>
					  <br><br>
					  
					  <?
						//���������� � ����� ������
						$link = mysql_connect ("localhost", "root", "") or die ("Could not connect");
						//����� ���� ������ 
						$base = mysql_select_db ("notebook");
						mysql_query("SET NAMES cp1251");

						//������ � ���� ������
						//$query = "select * from nt where city = '�����������'";	
						$query = "select * from main";
					?>
					<CENTER>It works!
						<TABLE width=500 border=1>
							<TR>
								<TD><center><b>�.�.�.</b></center></TD>
								<TD><center><b>���</b></center></TD>
								<TD><center><b>�����</b></center></TD>
								<TD><center><b>���</b></center></TD>
								<TD><center><b>�������</b></center></TD>
							</TR>
							<?
								$res = mysql_query ($query) or die ("�� ���� ������� ���������.<br> ������ � �������: ".$query);
								while (list($id,$fio,$gender,$town,$house,$phone) = mysql_fetch_array($res))
								{
							?>	
							<TR>
								<TD> <?=$fio?>  </TD>
								<TD> <center><?=$gender?> </center> </TD>
								<TD> <?=$town?>  </TD>
								<TD> <center><?=$house?></center>  </TD>
								<TD> <center><?=$phone?></center> </TD>
							</TR>
							<?
								}
							?>	
						</TABLE>
					</CENTER>
					
					</form>
				
				</td>
			</tr>
			
			<tr>
				<td colspan=2 width=100% height=40 background="images/border1.jpg"> </td>
			</tr>

		</table>
	</body>
</html>