<!doctype html>
<html>
    <head>
        <link href="style.css" rel="stylesheet">
        <title>add-company </title>
        <script type="text/javascript">
            function display()
                 {
                 var com=document.getElementById('company-name');
                 if(com.value == null || com.value=="")
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
    </head>
    <body>
     <div class="admin-container">
            <div class="header-company">
            <h2> ADD COMPANY </h2>
             </div>
               <form name="company" action="index.php?insert=true" method="post" onsubmit="return display();">
                <div class="contents">
                    <div class="labelcontrol">
                     company name:
                     <input type="text" name="company-name" id="company-name"></div>
                     <div class="button"><input type="submit" name="submit" value="submit"></div>
            </div>   
          </form> 
        </div>
          </body>
</html>