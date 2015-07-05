<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
  if(!isset($_SESSION['uid'])) {
    header("Location: login.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Newspective</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/newspective.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<body id="aThis">
	<?php include_once("navbar.php");?>

  <div class="container">
<legend>รายการผู้ใช้งาน</legend>
<div class="row">
 <table class="table table-striped">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>ชื่อ</th>
          <th>นามสกุล</th>
          <th>สิทธิในการใช้งาน</th>
          <th>สถานะ</th>
          <th colspan="3" aling="center" class="text-center col-md-1">แก้ไข</th>          
        </tr>
      </thead>
      <tbody>

<?php
$i=1;
  $result = whileUsers();
    while ($row = $result->fetch_assoc()) {
?>
          <tr>
          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $row['fname_th']?></td>
          <td><?php echo $row['lname_th']?></td>
          <td><?php echo $row['possibility']?></td>
          <td><?php if($row['status']==1){ echo "ใช้งานปกติ"; }else{ echo "ยกเลิกการใช้งาน"; }?></td>
          <td><a href="user-view.php?id=<?php echo $row['id'];?>" class="btn btn-gold"><span class="glyphicon glyphicon-search"></span></a></td>  
          <td><a href="user-edit.php?id=<?php echo $row['id'];?>" class="btn btn-gold"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="user-del.php?id=<?php echo $row['id'];?>" class="btn btn-gold" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
<?php
$i++;
    }
  
  ?>
       
      </tbody>
    </table>
  

    


    </div>



    <?php include_once("footer.php");?>

</div><!-- container -->
<script type="text/javascript">
$("#aThis a:contains('ราการผู้ใช้งาน')").parent().addClass('active');
$("#aThis a:contains('ผู้ใช้ระบบงาน ')").parent().addClass('active');
</script>
</body>
</html>