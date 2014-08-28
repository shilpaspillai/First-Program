<?php
class Data_list extends CI_Model{
        public function __construct()
        {
        parent::__construct();
        }

        function getAllGroups()
         {//function for display companies.
         $query = $this->db->query('SELECT company_name FROM add_company');
         return $query->result();
         }
        function get_data($arr)
         {//function for inserting users.
        $nam=$arr['username'];
        $pas=crypt($arr['password'],"rl");
        $cname=$arr['companyname'];
        $qr="insert into users(username,password,company_name)values('$nam','$pas','$cname')";
        $qry=mysql_query($qr);
         if($qry)
        {
        echo '<script type="text/javascript">alert("user data entered successfully");</script>';
        header("location:index.php?enter=true");
        }
        else
        {
        echo '<script type="text/javascript">alert("user data not entered successfully");</script>';
        }
        }
}
?>