<?php

class Signup extends Dbh {
    private $username;
    private $pwd;
    private $email;

    public function __construct($username, $pwd, $email) {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    private function insertUser() {
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = parent::connect()->prepare($query);

        // $options = [
        //     'cost' => 12
        // ];

        // $hasnedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':pwd', $this->hasnedPwd);
        $stmt->bindParam(':email', $this->email);

        $stmt->execute();
    }

    private function isEmptySubmit() {
        if (isset($this->username) && isset($this->pwd) && isset($this->email)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser() {
        // Error handlers
        if($this->isEmptySubmit()) {
            header("Location: {$_SERVER['DOCUMENT_ROOT']}/index.php");
            die();
        }

        // If no error, signup user
        $this->insertUser();
    }
}