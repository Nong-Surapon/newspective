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
<legend>รายการโครงการ</legend>
<div class="row">


 

 <table class="table table-striped">
      <thead>
        <tr>
          <th>ลำดับที่</th>
          <th>ชื่อโครงการ</th>
          <th>ลายละเอียด</th>        
          <th>สถานะ</th>
          <th>แก้ไข</th>        
        </tr>
      </thead>
      <tbody>

<?php
$i=1;
  $result = whileProject();
    while ($project = $result->fetch_assoc()) {
?>
          <tr>
          <th scope="row"><?php echo $i;?></th>
          <td><?php echo $project['name']?></td>
          <td><?php echo $project['detail']?></td>
  
          <td><?php if($project['status']==1){ echo "ใช้งานปกติ"; }else{ echo "ยกเลิกการใช้งาน"; }?></td>
          <td>
            <a href="advance.php?id=<?php echo $project['id'];?>"><img src="image/cre.png"> </a>
            <a href="project-view.php?id=<?php echo $project['id'];?>"><img src="image/view.png"> </a>
            <a href="project-edit.php?id=<?php echo $project['id'];?>"><img src="image/update.png"> </a>
            <a href="project-del.php?id=<?php echo $project['id'];?>" onclick="return confirm('ท่านต้องการลบข้อมูลนี้ใช่หรือไม่ ?')"><img src="image/delete.png"></a>
          </td>       
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
$("#aThis a:contains('โครงการ ')").parent().addClass('active');
$("#aThis a:contains('รายการโครงการ')").parent().addClass('active');
</script>
</body>
</html>