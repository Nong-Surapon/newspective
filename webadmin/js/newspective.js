function chkSize(id)
            {
                //alert('xxx');
                if ((Math.round(document.getElementById(id).files[0].size) / (1024 * 1024)) > 2)
                {
                    alert('Maximum file size is restricted to 2MB.Please try again !!');
                    document.getElementById(id).value="";
                    return false;
                }
            }