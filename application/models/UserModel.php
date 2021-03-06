<?php

class UserModel extends Model {
	
    public function getAllUsers()
    {
        $result = $this->notorm()->users();
        return $result;
    }
    
    public function getUser($id = null)
    {
        if(empty($id)) die('Missing parameter.');
        
        $result = $this->notorm()->user[$id];
        return $result;
    }
    
    public function getUserByEmail($email = null)
    {
        if(empty($email)) die('Missing parameter.');
        
        $result = $this->notorm()->users()->where( array("email" => $email) );
        return $result;
    }

    public function getUserLogin($username = null, $password = null)
    {
        if(empty($username)) die( 'Missing parameter.');
        
        $result = $this->notorm()->users()->where( array("username" => $username, "password" => $password) );
        return $result;
    }

    public function saveProfile($array = null)
    {
        $result = $this->notorm()->user[$array['id']];
        $result->update($array);
    }

    public function addUser($array = null)
    {
        $this->notorm()->users()->insert($array);
    }

    public function deleteUser($id = null)
    {
        $result = $this->notorm()->user[$id];
        $result->delete();
    }

    public function saveUser($array = null)
    {
        if(empty($array['id'])){
            $this->notorm()->users()->insert($array);
        } else {
            $result = $this->notorm()->user[$array['id']];
            $result->update($array);
        }
    }
}

?>
