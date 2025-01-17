# Simple Codeigniter 3 CRUD API

This is a simple Codeigniter 3 CRUD API project for managing a collection of books. It demonstrates basic CRUD operations, including creating, reading, updating, and deleting data, with endpoints accessible via RESTful API.

## Features
- View all students (GET `/api/students`)
- View a single students by ID (GET `/api/students/{id}`)
- Create a new students (POST `/api/students`)
- Update a students (PUT `/api/students/{id}`)
- Delete a students (DELETE `/api/students/{id}`)

## Requirements
- PHP 7.4 or higher
- Composer
- Codeigniter 3
- MySQL or MariaDB

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/adjisdhani/simple-api-crud-lumen8.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd simple-api-crud-lumen8
   ```

3. **Install dependencies**:
   ```bash
   composer install
   ```

4. **Configure the .env file**:
   ```bash
   DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=simple_api_crud_lumen8
	DB_USERNAME=root
	DB_PASSWORD=yourpassword
   ```

5. **Run the database migrations**:
   ```bash
    php artisan migrate
   ```

6. **Start the development server**:
   ```bash
    php artisan serve
   ```

7. **Access the API**:
   (http://127.0.0.1:8000/api/posts)

      ## API Endpoints 
    
    **1. Get All content**

    - Method: GET
    - Endpoint: /api/posts
    - Description: Retrieve a list of all content.

    **Example Response**:
   ```bash
   [
	    {
         "id": 1,
         "title": "Data Title 1",
         "content": "Data Content 1"
        }

	]
   ```
    
    **2. Get a Single Content by ID**
    
    - Method: GET
    - Endpoint: /api/posts/{id}
    - Description: Retrieve a single content by its ID.

    **Example Response**:
   ```bash
   [
	    {
         "id": 1,
         "title": "Data Title 1",
         "content": "Data Content 1"
      }
	]
   ```
    
    **3. Create a New Content**
    
    - Method: POST
    - Endpoint: /api/posts
    - <b>Body Parameters:</b>
      1. title (string, required)
      2. content (string, required)

    **Example Request**:
    ```bash
    [
        {
         "title": "Data Title 2",
         "content": "Data Content 2"
      }
    ]
    ```
    **Example Response**:
   ```bash
   [
	    {
         "id": 2,
         "title": "Data Title 2",
         "content": "Data Content 2"
      }
	]
   ```
    **4. Update a Content**
    
    - Method: PUT
    - Endpoint: /api/posts/{id}
    - <b>Body Parameters:</b>
      1. title (string, required)
      2. content (string, required)

    **Example Request**:
   ```bash
   [
	    {
         "title": "Data Title 2 Update",
         "content": "Data Content 2 Update"
      }

	]
   ```
    **Example Response**:
   ```bash
   [
	    {
         "id": 2,
         "title": "Data Title 2 Update",
         "content": "Data Content 2 Update"
      }
	]
   ```
    **4. Delete a Content**
    
    - Method: DELETE
    - Endpoint: /api/posts/{id}
    
    **Example Response**:
   ```bash
   [
	    {
            "message": "Content deleted successfully"
        }
	]
   ```
    ## Author
    Adjis Ramadhani Utomo

    ## License
    This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).