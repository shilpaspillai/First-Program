<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
         <script type="text/javascript">
                function display()
                {//function for validate fields
                var nam=document.getElementById('username');
                var pas=document.getElementById('password');
                var com=document.getElementById('companyname');
                if(nam.value == null || nam.value=="")
                {
                 alert("ENTER THE USERNAME");
                 nam.focus();
                 return false;
                 }
                else if(pas.value == null || pas.value=="")
                   {
                    alert("ENTER THE PASSWORD");
                    pas.focus();
                    return false;
                  }
                else if(com.value == null || com.value=="")
                  {
                  alert("ENTER THE COMPANY");
                  com.focus();
                  return false;
                 }
                 else 
                 {
                 return true;
                 }
            }
                    
      </script>
        <title>add-user</title>
    </head>
    <body>
        <div class="admin-container">
            <form name="user" method="post" action="index.php?usr1=true" onsubmit="return display();">
                <div class="header">
                    <h1>user details</h1>
                </div>   
                <div class="labelcontrol">
                    username <input type="text" name="username" id="username">
                   password:<input type="password" name="password" id="password">
                </div>   
                <div class="ac"> company: <select name="companyname" id="companyname" class="form-control"></div>
                       <option> </option>
                <?php 
                 foreach($groups as $rowd)
                       { 
                       echo '<option value="'.$rowd->company_name.'">'.$rowd->company_name.'</option>';
                      }
                ?>
                 </select>
                   <input type="submit" name="submit" value="submit">
            </form>
        </div>
    </body>
</html>