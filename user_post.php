<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<?php
 $conn = mysqli_connect(
 'localhost',
 'todolist',
 '1234',
 'todolist_db');
 
 $sql = "select * from user";
 $result = mysqli_query($conn, $sql); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
</head>
<body>
<h2>�� ȸ������</h2>
<form  name="user_form" method="post" action="user_postprint.php">
  <input type="hidden" name="title" value="ȸ������ ���"> 
  <table border="1" width="640" cellspacing="1" cellpadding="4">
  <tr>
    <td align="right">* ���̵� :</td>
    <td><input type="text" size="15" maxlength="12" name="login_id" value="guest"></td>
  </tr>
  <tr>
    <td align="right"> * ��й�ȣ :</td>
    <td><input type="password" size="15" maxlength="10" name="password"  value="1234"></td>
  </tr>
  <tr>
    <td align="right"> * �г��� :</td>
    <td><input type="text" size="50" name="nickname"></td>
  </tr>
  </table>
  <br>
  <table border="0"  width="640">
     <tr><td align="center">
         <input type="submit" value="Ȯ��">
         <input type="reset" value="�ٽ��ۼ�"></td>
     </tr>
  </table>
</form>
</body>
</html>