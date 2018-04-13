<?php
  class Classes extends Controller
  {
      public function __construct()
      {
          //Check Model
          $this->courseModel = $this->model('Course');
          $this->classModel = $this->model('ClassModel');
          $this->userModel = $this->model('User');
          $this->departmentModel = $this->model('Department');
      }

      public function getClass($id)
      {

          // Get Class Data
          $class = $this->classModel->findById($id);
          $course = $this->courseModel->findById($class['course_id']);
          $teacher = $this->userModel->findById($class['teacher_id']);


          // Get: Show all Users with Pagination
          $data = [
           'title' => 'Classes / ' . $course['name'],
           'teacher' => $teacher
          ];

          $this->view('classes/view', $data);
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
