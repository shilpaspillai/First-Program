<?php
class Add_company extends CI_Model{
    
    public function detail($arr)
         {
            $nam=$arr['company-name'];
            $qry ="select * from add_company where company_name='$nam'";
            $qr=mysql_query($qry);
            if(mysql_num_rows($qr)>0)
            {
            echo '<script type="text/javascript">alert("COMPANY ALREADY ENTERED..");</script>';
            return 0;
            }
            $qry="insert into add_company(company_name)values('$nam')";
            $qr=mysql_query($qry);
            if($qr)
            { echo '<script type="text/javascript">alert("company details added successfully");</script>';
            return 1;
            }
         }
}
?>