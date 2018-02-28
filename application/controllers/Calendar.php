<?php if ( ! defined('BASEPATH')) exit('No direct script access  allowed');
class Calendar extends MX_Controller
{

 function index()
{

    $this -> display( $year=null, $month=null);

}

function display($year=null,$month=null) 
{   
    if( ! $this->bitauth->logged_in())
    {       
        $this->session->set_userdata('redir', current_url());
        redirect('access/login');
    }
    $data['header']=Modules::run('header/header/index'); 
    $data['footer']=Modules::run('footer/footer/index');

    $conf=array(

        'start_day'=>'monday',
        'day_type'=> 'long',
        'show_next_prev'=>true,
        'next_prev_url'=>'http://datacentral.demo/calendar/'

        );

    $this->load->library('calendar',$conf);

    $this->load->view('calendar',$data);


}
}