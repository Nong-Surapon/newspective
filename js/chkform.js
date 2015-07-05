
function checkInt(id)
{
  var x=document.getElementById(id).value;
  var x = x.replace(",", "");
  if (isNaN(x)) 
  {
      
      var newStr = x.substring(0, x.length-1);
        document.getElementById(id).value=newStr;
    alert("กรุณาป้อนค่าที่เป็นตัวเลขเท่านั้น.");
    return false;
  }
}
