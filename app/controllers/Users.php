<?php
  class Users extends Controller {

    public function __construct(){
      //Check Model
      $this->userModel = $this->model('User');
    }

    public function index(){

      // Results & Data
      $userResult = $this->userModel->findAllUsersPag();
      $userAdminCount = $this->userModel->userRoleCount('admin');
      $userTeacherCount = $this->userModel->userRoleCount('teacher');
      $userStudentCount = $this->userModel->userRoleCount('student');
      $totalUsers = $this->userModel->allUserCount();

      //Check for Post
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Process Form

        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'title' => 'Users',
          'first_name' => trim($_POST['first_name']),
          'last_name' => trim($_POST['last_name']),
          'email' => trim($_POST['email']),
          'phone' => trim($_POST['phone']),
          'role' => trim($_POST['role']),
          'gender' => trim($_POST['gender']),
          'major' => trim($_POST['major']),
          'address' => trim($_POST['address']),
          'city' => trim($_POST['city']),
          'state' => trim($_POST['state']),
          'zip' => trim($_POST['zip']),
          'first_name_err' => '',
          'last_name_err' => '',
          'email_err' => '',
          'userList' => $userResult['userList'],
          'paginationLinks' => $userResult['paginationLinks']
        ];

        // Validate Email
        if (empty($data['email'])) {
          $data['email_err'] == 'Please enter Email';
        }

        // Validate First & Last Name
        if (empty($data['first_name'])) {
          $data['first_name_err'] == 'Please enter First Name';
        }

        if (empty($data['last_name'])) {
          $data['last_name_err'] == 'Please enter Last Name';
        }

        // Make sure error are empty to process form
        if (empty($data['email_err']) && empty($data['first_name_err']) && empty($data['last_name_err'])) {
          $this->userModel->first_name = trim($_POST['first_name']);
          $this->userModel->last_name = trim($_POST['last_name']);
          $this->userModel->email = trim($_POST['email']);
          $this->userModel->phone = trim($_POST['phone']);
          $this->userModel->role = trim($_POST['role']);
          $this->userModel->gender = trim($_POST['gender']);
          $this->userModel->major = trim($_POST['major']);
          $this->userModel->address = trim($_POST['address']);
          $this->userModel->city = trim($_POST['city']);
          $this->userModel->state = trim($_POST['state']);
          $this->userModel->zip = trim($_POST['zip']);
          $this->userModel->registerUser();
          $this->view('users/index', $data);
        } else {
          $this->view('users/index', $data);
        }

      } else {

        $data = [
          'title' => 'Users',
          'first_name' => '',
          'last_name' => '',
          'email' => '',
          'phone' => '',
          'role' => '',
          'gender' => '',
          'address' => '',
          'city' => '',
          'state' => '',
          'zip' => '',
          'first_name_err' => '',
          'last_name_err' => '',
          'email_err' => '',
          'userList' => $userResult['userList'],
          'paginationLinks' => $userResult['paginationLinks'],
          'userAdminCount' => $userAdminCount,
          'userTeacherCount' => $userTeacherCount,
          'userStudentCount' => $userStudentCount,
          'totalUsers' => $totalUsers,
        ];

        $this->view('users/index', $data);
      }
    }
  }
