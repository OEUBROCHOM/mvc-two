<?php
require_once "Models/UserModel.php";
class UserController extends BaseController{
    private $users;

    public function __construct() {
        $this->users = new UserModel();
    }
    
    public function index() {
        $result = $this->users->getUsers();
        $this->view('users/user', ['users' => $result]);
    }

    public function create() {
        $this->view('users/create');
    }

    public function store() {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $role = htmlspecialchars($_POST['role']);
        $this->users->addUser($name, $email, $role);
        $this->redirect('/users');
    }

    public function edit($id) {
        $result = $this->users->getUserById($id);
        $this->view('users/edit', ['user' => $result]);
    }

    public function update($id) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $role = htmlspecialchars($_POST['role']);
        $this->users->updateUser($id, $name, $email, $role);
        $this->redirect('/users');
    }
    
    public function destroy($id) {
        $this->users->deleteUser($id);
        $this->redirect('/users');
    }
}