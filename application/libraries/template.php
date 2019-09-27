<?php
class Template{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template,$data=null){
        $data['content']=$this->_CI->load->view($template,$data,true);
        $data['header']=$this->_CI->load->view('template/header',$data,true);
        $data['sidebar']=$this->_CI->load->view('template/sidebar',$data,true);
        $this->_CI->load->view('template/layout',$data);
    }
}
?>