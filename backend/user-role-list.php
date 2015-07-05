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
  <link href="../css/style.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>
<body id="aThis">
	<?php include_once("navbar.php");?>





  <div class="container">
<legend>รายการตำแหน่ง</legend>
<div class="row">


 

 <table class="table table-striped">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>ตำแหน่ง</th>
          <th>รายละเอียด</th>
          <th>สถานะ</th>
          <th colspan="3" aling="center" class="text-center col-md-1">แก้ไข</th>          
        </tr>
      </thead>
      <tbody>

<?php
$i=1;
  $result = whilePositAll();
    while ($row = $result->fetch_assoc()) {
?>
          <tr>
          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['detail']?></td>
          <td><?php if($row['status']==1){ echo "ใช้งานปกติ"; }else{ echo "ยกเลิกการใช้งาน"; }?></td>          
          <td><a href="user-role-view.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a></td>  
          <td><a href="user-role-edit.php?id=<?php echo $row['id'];?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="user-role-del.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></a></td>
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
$("#aThis a:contains('รายการตำแหน่ง')").parent().addClass('active');
$("#aThis a:contains('ตำแหน่ง ')").parent().addClass('active');
</script>
</body>
</html>