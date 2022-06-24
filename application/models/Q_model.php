
<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Q_model extends CI_Model
 {

    
    public function __construct()
    {
        parent::__construct();
    //    $this->load->database();
    }
    
   public function show()
    {
       
        $query = $this->db->get('Questions');

        foreach ($query->result() as $row)
        {
              return $row;
        }
     

    }

}

/* End of file ModelName.php */





?>