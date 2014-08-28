<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet"/>
        <script type="text/javascript">
            function display()
            {
              var usr=document.getElementById('username');
              var pas=document.getElementById('password');
               if(usr.value==null || usr.value=="")
               {
                   alert("Enter the user name");
                   usr.focus();
                   return false;
               }
               else if(pas.value==null || pas.value=="")
               {
                   alert("enter the password");
                   pas.focus();
                   return false;
               }
               else
               {
                   return true;
               }
            }
            
        </script>
        <title>
            login page
        </title>
    </head>
    <body>
        <div class="container">
                       <form name="login" action="index.php?login=true" method="post" onsubmit="return display()">
                            <div class="content">
                              <div class="contents_control"> 
                                  <h1 class="heading"> login here</h2>
                            <div class="label">
                                <div class="labelcontrol">username:<input type="text" name="username" id="username"></div></div>
                            <div class="labelcontrol">password:<input type="password" name="password" id="password"></div>
                            <div class="labelcontrol"><input type="submit" name="submit" value="submit"/></div>
                           </div>
                       </form>
                       </div></div>
    </body>
</html>
