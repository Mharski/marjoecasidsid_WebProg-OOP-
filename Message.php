<?php 
   

class Message{
	private $_name;
    private $_email;
	private $_message;
    private $_date_posted;
    private $_is_approved;


	public function __construct($config){
        if (isset($config['name'])) {
            $this->_name = $config['name'];
        }
        if (isset($config['message'])) {
            $this->_message = $config['message'];
        }
        if (isset($config['email'])) {
            $this->_email = $config['email'];
        }
        if (isset($config['date_posted'])) {
            $this->_date_posted = $config['date_posted'];
        }
        if (isset($config['_is_approved'])) {
            $this->_is_approved = $config['_is_approved'];
        }
    }

    public function getMessage() {
        return $this->_message;
    }
    public function getName() {
        return $this->_name;
    }
    public function getEmail() {
        return $this->_email;   
    }
    public function getDate_Posted() {
        return $this->_date_posted;   
    }
    public function isApproved() {
        // return ($this->_is_approved == 'Y') ? true: false;
        if ($this->_is_approved == 'Y') {
            return true;
        } else {
            return false;
        }
    }
}

 ?> 
