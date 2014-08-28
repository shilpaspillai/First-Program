<?php

class Logout extends CI_Model
{
    public function log_out()
    { //function for session destroy.
        $this->load->library('session');
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
        if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
        $this->session->unset_userdata($key);
        }
        }
        $this->session->sess_destroy();
    }
	  
}
?>
    
