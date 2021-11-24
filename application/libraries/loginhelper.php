<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class loginhelper
{
    private $session=null;
    function set($session)
    {
     $this->session=$session;
    }
    public function exists()
    {
        if(count($this->session)==0)
            {
                header("Refresh:3; url=index.php");
            }else{
                return true;
            }
            
    }
    
}