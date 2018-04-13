<?php
  class Courses extends Controller
  {
      public function __construct()
      {
          //Check Model
          $this->courseModel = $this->model('Course');
          $this->classModel = $this->model('ClassModel');
          $this->userModel = $this->model('User');
          $this->departmentModel = $this->model('Department');
      }

      // View and Register [GET/POST]
      public function otherIndex()
      {

         // Are GET set?
          $semester = isset($_GET['semester']) ? trim($_GET['semester']) : false;
          $department = isset($_GET['semester']) ? trim($_GET['semester']) : false;


          // Get Class Data
          $classes = $this->classModel->findAllPag();
          $departments = $this->departmentModel->findAll();

          foreach ($classes['classes'] as $class) {
              $teachers[$class['teacher_id']] = $this->userModel->findById($class['teacher_id']);
              $courses[$class['course_id']] = $this->courseModel->findById($class['course_id']);
          }

          foreach ($departments as $department) {
              $departmentCount[$department['id']] = $this->departmentModel->departmentCourseCount($department['id']);
              // echo $this->departmentModel->departmentCourseCount($department['id']);
          }

          // Get: Show all Users with Pagination
          $data = [
          'title' => 'Courses',
          'classes' => $classes['classes'],
          'teachers' => $teachers,
          'courses' => $courses,
          'departments' => $departments,
          'departmentCourseCount' => $departmentCount,
          'pagination' => $classes['paginationLinks']
        ];

          $this->view('courses/index', $data);
      }

      public function index()
      {
          $department = isset($_GET['semester']) ? trim($_GET['semester']) : false;

          // Get Class Data
          $courses = $this->courseModel->findAllPag();
          $departments = $this->departmentModel->findAll();

          foreach ($courses['courses'] as $course) {
              $departmentInfo[$course['department_id']] = $this->departmentModel->findById($course['department_id']);
          }

          foreach ($departments as $department) {
              $departmentCount[$department['id']] = $this->departmentModel->departmentCourseCount($department['id']);
              // echo $this->departmentModel->departmentCourseCount($department['id']);
          }

          // Get: Show all Users with Pagination
          $data = [
           'title' => 'Courses',
           'courses' => $courses['courses'],
           'departmentInfo' => $departmentInfo,
           'departments' => $departments,
           'departmentCourseCount' => $departmentCount,
           'pagination' => $courses['paginationLinks']
          ];

          $this->view('courses/index', $data);
      }

      public function getCourse($id, $semester = 'SPR2018'){

           // Get Course Value
           $course = $this->courseModel->findById($id);
           $classes = $this->classModel->findByCourseSemester($id, $semester);
           $departments = $this->departmentModel->findAll();
           $allTeachers = $this->userModel->findAllByRole('teacher');

           foreach ($classes as $class) {
                $teachers[$class['teacher_id']] = $this->userModel->findById($class['teacher_id']);
           }

           $data = [
            'title' => 'Edit Courses: ' . $id,
            'semester' => $semester,
            'course' => $course,
            'classes' => $classes,
            'teachers' => $teachers,
            'allTeachers' => $allTeachers,
            'departments' => $departments
           ];

           $this->view('courses/edit', $data);
      }

      // Functions
      private function isErrors($errors)
      {
          foreach ($errors as $key => $value) {
              if (!empty($value)) {
                  return true;
              } else {
                  return false;
              }
          }
      }
  }
