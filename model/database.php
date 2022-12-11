<?php 

session_start();

    class database{
        private $servername;
        private $username;
        private $password;
        private $dbname;


        protected function connect(){
            $this->servername='localhost';
            $this->username='root';
            $this->password='';
            $this->dbname='travigo';

            $conn = new mysqli($this->servername,$this->username, $this->password,$this->dbname); 

            return $conn;
        }
    }
class login extends database{
    public $id;
    public function login($username_email,$password){
        $sql = "SELECT * FROM admin WHERE username = '$username_email' OR email = '$username_email' ";
        $result = $this->connect()->query($sql);
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row['password']){
                $this->id = $row['id'];
                return 1;
            }
        }else{
            return 100;
        }
    }

    public function idUser(){
        return $this->id;
    }
}
    