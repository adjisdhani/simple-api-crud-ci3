# Simple Codeigniter 3 CRUD API

This is a simple Codeigniter 3 CRUD API project for managing a collection of books. It demonstrates basic CRUD operations, including creating, reading, updating, and deleting data, with endpoints accessible via RESTful API.

## Features
- View all students (GET `/api/students`)
- View a single students by ID (GET `/api/students/{id}`)
- Create a new students (POST `/api/students`)
- Update a students (PUT `/api/students/{id}`)
- Delete a students (DELETE `/api/students/{id}`)

## Requirements
- PHP 7.4
- Composer
- Codeigniter 3
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-api-crud-ci3.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd simple-api-crud-ci3
   ```

3. **Configuration your database (application/database.php)**:
   ```bash
	   $db['default'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'yourusername',
		'password' => 'yourpassword',
		'database' => 'simple_api_crud_ci3',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
   ```

4. **Set your baseurl for routing (application/config)**:
   ```bash
    $config['base_url'] = 'http://localhost/simple-api-crud-ci3/';
   ```

5. **Set your autoload (application/config/autoload.php)**:
   ```bash
    $autoload['helper'] = array('url');
    $autoload['libraries'] = array('database');
   ```

6. **Create Table in your databases**:
   ```bash
    CREATE TABLE students (
	    id INT AUTO_INCREMENT PRIMARY KEY,
	    NAME VARCHAR(100) NOT NULL,
	    student_number VARCHAR(20) NOT NULL UNIQUE,
	    major VARCHAR(100) NOT NULL
	);
   ```

7. **Access the API**:
   (http://localhost/simple-api-crud-ci3/)

      ## API Endpoints 
    
    **1. Get All students**

    - Method: GET
    - Endpoint: /api/students
    - Description: Retrieve a list of all content.

    **Example Response**:
   ```bash
   [
	    {
	        "id": 1,
	        "name": "Data 1",
	        "student_number": "9999",
	        "major": "Information Systems"
	    }

	]
   ```
    
    **2. Get a Single student by ID**
    
    - Method: GET
    - Endpoint: /api/students/{id}
    - Description: Retrieve a single student by its ID.

    **Example Response**:
   ```bash
   [
	    {
	        "id": 1,
	        "name": "Data 1",
	        "student_number": "9999",
	        "major": "Information Systems"
	    }
	]
   ```
    
    **3. Create a New student**
    
    - Method: POST
    - Endpoint: /api/students
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. student_number (string, required)
      3. major (string, required)

    **Example Request**:
    ```bash
    [
        {
		    "name": "Data 2",
		    "student_number": "99992",
		    "major": "Information Systems 2"
		}
    ]
    ```
    **Example Response**:
   ```bash
   [
	    {
		    "message": "Student added successfully"
		}
	]
   ```
    **4. Update a Content**
    
    - Method: PUT
    - Endpoint: /api/students/{id}
    - <b>Body Parameters:</b>
      1. name (string, required)
      2. student_number (string, required)
      3. major (string, required)

    **Example Request**:
   ```bash
   [
	    {
		    "name": "Data 2 (Update)",
		    "student_number": "999920",
		    "major": "Information Systems 2 (Update)"
		}

	]
   ```
    **Example Response**:
   ```bash
   [
	    {
		    "message": "Student updated successfully"
		}
	]
   ```
    **4. Delete a Content**
    
    - Method: DELETE
    - Endpoint: /api/students/{id}
    
    **Example Response**:
   ```bash
   [
	    {
		    "message": "Student deleted successfully"
		}
	]
   ```
    ## Author
    Adjis Ramadhani Utomo

    ## License
    This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).