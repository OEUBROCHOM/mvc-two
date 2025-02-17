<?php
class UserModel{
    private $db;

    function __construct(){
        $this->db = new Database("localhost", "rd_store_db", "root","");
    }

    public function getUsers(){
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addUser($name,$email,$role){
        try{
            $this->db->query(
                "INSERT INTO users (name,email,role) VALUES (:name, :email, :role)",
                [
                    ':name' => $name,
                    ':email' => $email,
                    ':role' => $role
                ]
            );

        }catch(PDOException $e){
            echo "Error adding user" . $e->getMaessage();
        }
    }

    public function getUserById($id){
        $result=$this->db->query("SELECT * FROM users WHERE id = :id", [':id' => $id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $name, $email, $role){
        try{
            $this->db->query(
                "UPDATE users SET name = :name, email = :email, role = :role WHERE id = :id",
                [
                    ':id' => $id,
                    ':name' => $name,
                    ':email' => $email,
                    ':role' => $role
                ]
            );
        }catch(PDOException $e){
            echo "Error updating user" . $e->getMaessage();
        }
    }

    public function deleteUser($id){
        try{
            $this->db->query("DELETE FROM users WHERE id = :id", [':id' => $id]);
        }catch(PDOException $e){
            echo "Error deleting user" . $e->getMaessage();
        }
    }

}