<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @package : ux school management system
 * @version : 5.0
 * @developed by : uxCoder
 * @support : usmansyedid@gmail.com
 * @author url : http://codecanyon.net/user/uxCoder
 * @filename : Errors.php
 * @copyright : Reserved uxCoder Team
 */

class Errors extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('errors/error_404_message.php');
    }
}
