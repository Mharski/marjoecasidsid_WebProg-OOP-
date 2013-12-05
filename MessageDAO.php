<?php
    include "Config.php";

class MessageDAO {

    public static function createMessage($_name,$_email,$_message) {
        $_is_approved = 'N';
        $query = "INSERT INTO message(name,email,message,date_posted,is_approved) VALUES ('{$_name}','{$_email}','{$_message}',CURRENT_DATE,'{$_is_approved}')";
        $result = mysql_query($query);
    }

    
    public static function getMessage() {
        $query = "SELECT * FROM message WHERE is_approved = 'Y'";
        $result = mysql_query($query);
        $row = array();
        if(mysql_num_rows($result) > 0){
            
            while($record = mysql_fetch_assoc($result)){
                $row[] = $record;
            }
         return $row;   
        }else{
            $return=mysql_query($query);
            if(!$return){
            die ("Somethong went wrong. ".mysql_error());
            }
        }
    }

    /**
     * @return Array of Message objects
     */
    public static function getAllMessages() {
        $query = "SELECT * FROM message";
        $result = mysql_query($query);

        if(mysql_num_rows($result) > 0 ){
            $row = array();
            while($record = mysql_fetch_assoc($result)){
                $row[] = $record;
            }
            return $row;
        }
    }

    /**
     * @param Message object
     * @return Boolean is the message updated or not
     */
    public static function deleteMessage($id) {
        $query = "DELETE FROM message WHERE id = '{$id}'";
        mysql_query($query);
    }
    public static function approveMessage($id) {
        $query = "UPDATE message SET is_approved = 'Y' WHERE id = '$id'";
        $result = mysql_query($query);
    }

    /**
     * Set is_approved to 'N'
     * @param Integer id number
     * @return Boolean
     */
    public static function rejectMessage($id) {
        $query = "UPDATE message SET is_approved = 'N' WHERE id = '$id'";
        $result = mysql_query($query);
    }
}
