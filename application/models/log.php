<?php
class Log extends CI_Model{
    
    public function verify($arr)
    {  //function for checking admin and users.
        $nam=$arr['username'];
        $password=crypt($arr['password'],"rl");
        $qry ="select * from admin_panel where username='$nam' and password ='$password'";
        $qr=mysql_query($qry);
        if(mysql_num_rows($qr)>0)
         {
        while($arr=mysql_fetch_array($qr))
        {$this->load->library('session');
        $this->session->set_userdata(array(
        'username'      => $arr['username'],
        'company_name'  => $arr['company_name'],
        'user_role'     => $arr['role']                           
        ));
                           
        if($arr['role']==1)
        {
         header("location:index.php?home=true");  
        }
        else 
        {
        header("location:index.php?sign=true");
        }
        }
        }
        else
        {
        echo '<script type="text/javascript">alert("ENTER A VALID USERNAME....");</script>'; 
        return 0;
        }
        }
    
        public function validate()
        {//function for inserting session
        $this->load->library('session');
        return $this->session->userdata;
        }
    }

    

   
   
    
       
    
    

