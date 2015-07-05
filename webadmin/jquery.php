<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>clone demo</title>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <style type="text/css">
.inputForm:first-child{display:none; }
  </style>
</head>
<body>
 
<div class="container">
 <table class="table table-bordered">
			<thead>
				<tr >
					<th>Supplier</th>
					<th>Product</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				
				<tr id="inputForm" class="inputForm">
					<td><input type="text"></td>
					<td>yyy</td>
					<td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
				<tr class="inputForm">
					<td>xxx</td>
					<td>yyy</td>
					<td class="deleteRow"><button type="button" class="btn btn-danger " ><span class="glyphicon glyphicon-trash"></span></button></td>
				</tr>
			</tbody>
		</table>
<button type="button" id="add" class="addMoreRow">Click Me!</button>

<script>
$(function(){
	$('td.deleteRow').click(function(){
				$(this).parent('.inputForm').remove();
			});

	$('.addMoreRow').click(function(){
		$('#inputForm').clone(true).insertAfter('tr.inputForm:last');
		return false;
	
	$('td.deleteRow').click(function(){
		$(this).parent('.inputForm').remove();
	});
});
});

</script>
 
</body>
</html>