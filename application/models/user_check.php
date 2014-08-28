<?php
class User_check extends CI_Model{
    
    public function check($arr)
    {  //function for inserting users
        $nam=$arr['username'];
        $pas=crypt($arr['password'],"rl");
        $cnam=$arr['companyname'];
        $qry="select * from admin_panel where username='$nam'";
        $qr=mysql_query($qry);
        if(mysql_num_rows($qr))
        {
        echo '<script type="text/javascript">alert("user already exisit...");</script>';
        return 0;
        }
        else 
        {
        $qr="insert into admin_panel(username,password,company_name,role)values('$nam','$pas','$cnam',2)";
        $qry=mysql_query($qr);
        if($qry)
        {  
        echo '<script type="text/javascript">alert("user data entered successfully..");</script>';
        return 1;
        }
        }
        }
    }
?>
