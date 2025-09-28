                                                                    Task Manager (Laravel + Blade + AJAX)
A Task Management module built with Laravel 10, where users can dynamically add multiple tasks on the same page using a repeater field and submit them together without reloading the page (AJAX based).

                                                                            Features
                                                                                  
Add multiple tasks dynamically with repeater input fields.

AJAX form submission without page reload.

Server-side validation for all tasks.

Bulk task insertion into database with optimized query.

Frontend built using Blade template + Bootstrap 5.

Clean separation of CSS, JS, Blade files for maintainability.

                                                                            Tech Stack

Backend: Laravel 10 (PHP 8+)

Frontend: Blade, Bootstrap 5

Database: MySQL

AJAX: Vanilla JS (Fetch API)

                                                                        Setup Instructions
Clone the Repository
git clone <>
cd Task-Assignment
Install Dependencies
composer install

Configure Environment
cp .env.example .env
php artisan key:generate


Update .env file with m database credentials:w

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_app
DB_USERNAME=root
DB_PASSWORD=

Run Migrations
php artisan migrate

Serve the Application
php artisan serve
Visit: http://127.0.0.1:8000

                                                              Project Structure
Task-App/
│
├── app/Http/Controllers/TaskController.php   
├── app/Models/Task.php                       
├── database/migrations/xxxx_xx_xx_create_tasks_table.php
│
├── public/css/style.css                      
├── public/js/task.js                         
│
├── resources/views/tasks.blade.php           
├── routes/web.php                           
│
└── README.md 

                                                             API Documentation (Postman)

You can test the API using Postman.  
Import the collection file [postman_collection.json](./postman_collection.json) directly into Postman.

It contains sample requests for:
- Creating multiple tasks


                                                                 How It Works

User clicks “+ Add Task” → new task input row is added dynamically.

User fills out multiple tasks → clicks Submit.

Data is sent to backend via AJAX (Fetch API).

Laravel validates all tasks → inserts them into DB in bulk.

Response is shown in the frontend as JSON (success/error).

Scalability

Bulk Insert ensures performance optimization for large task submissions.

Can be extended into a full-featured Task Manager with authentication, pagination, task editing, etc.

Frontend can easily be migrated to Vue/React if needed.

                                                                        License

This project is licensed under the MIT License.


