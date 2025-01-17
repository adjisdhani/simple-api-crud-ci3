<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
        $this->load->helper('url');
        $this->load->helper('json'); // Helper untuk JSON response
    }

    public function handler($id = NULL) {
        $method = $this->input->method(); // Dapatkan metode HTTP (GET, POST, PUT, DELETE)

        switch ($method) {
            case 'get':
                if ($id === NULL) {
                    $this->index(); // GET all students
                } else {
                    $this->show($id); // GET a specific student
                }
                break;

            case 'post':
                $this->store(); // POST: Add a new student
                break;

            case 'put':
                $this->update($id); // PUT: Update a student
                break;

            case 'delete':
                $this->destroy($id); // DELETE: Delete a student
                break;

            default:
                show_404(); // Jika metode HTTP tidak dikenal
                break;
        }
    }

    public function index() {
        $data = $this->Student_model->get_all();
        json_response($data); // Helper function untuk mengirim response JSON
    }

    public function show($id) {
        $data = $this->Student_model->get_by_id($id);
        if ($data) {
            json_response($data);
        } else {
            json_response(['error' => 'Student not found'], 404);
        }
    }

    public function store() {
        $input = json_decode(file_get_contents('php://input'), true);
        $insert = $this->Student_model->insert($input);
        if ($insert) {
            json_response(['message' => 'Student added successfully'], 201);
        } else {
            json_response(['error' => 'Failed to add student'], 400);
        }
    }

    public function update($id) {
        $input = json_decode(file_get_contents('php://input'), true);
        $update = $this->Student_model->update($id, $input);
        if ($update) {
            json_response(['message' => 'Student updated successfully']);
        } else {
            json_response(['error' => 'Failed to update student'], 400);
        }
    }

    public function destroy($id) {
        $delete = $this->Student_model->delete($id);
        if ($delete) {
            json_response(['message' => 'Student deleted successfully']);
        } else {
            json_response(['error' => 'Failed to delete student'], 400);
        }
    }
}