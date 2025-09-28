<<<<<<< HEAD
# Task-Assignment
=======
Task Manager – Laravel Project

Project Overview
This is a Task Management Application built with Laravel. It allows users to:
- Add multiple tasks dynamically from a form
- Store tasks in the database through an API (bulk insert)
- Manage task attributes: Title, Description, Status (pending, in_progress, completed)
- View success/error responses instantly without page reload

The project uses Laravel (backend + API), Blade (frontend template), Bootstrap (styling), and custom JavaScript & CSS for dynamic task handling.

---

Setup Instructions

1. Clone the Repository
   ```bash
   git clone < >
   cd Task-App
   ```
2. Install Dependencies
   ```bash
   composer install
   ```
3. Configure Environment
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Update `.env` with your database credentials:
   ```
   DB_DATABASE=your_db_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
4. Run Database Migrations
   ```bash
   php artisan migrate
   ```
5. Start Development Server
   ```bash
   php artisan serve
   ```
   Visit: http://localhost:8000

---

Architecture

Main Folders and Files:

- app/Http/Controllers/TaskController.php – Handles validation and bulk insert logic
- app/Models/Task.php – Eloquent model for tasks
- database/migrations/ – Migration for tasks table
- routes/web.php – Web route for Blade view
- routes/api.php – API route for bulk insert
- resources/views/tasks.blade.php – Main frontend view
- public/js/task.js – Frontend logic for dynamic task addition and AJAX
- public/css/style.css – Custom styles

Flow:
- User adds tasks in the frontend form (Blade + JS)
- Tasks are sent via AJAX to the API endpoint
- Controller validates and inserts all tasks in bulk
- Success/error feedback is shown instantly

---

Features

- Add multiple tasks dynamically
- Bulk insert into database (efficient)
- Validation with error handling
- Responsive UI with Bootstrap
- API-driven architecture

---

Scalability

- Bulk Insert: Efficient for large numbers of tasks, reduces database load
- API-first: Easily extendable to other frontends (React, Vue, etc.)
- Separation of Concerns: Controller, Model, Route, View, and Assets are separated for maintainability
- Extensible: Easy to add new features (update, delete, authentication)

---

API Endpoint

- POST /api/tasks/multiple
  - Request: Array of tasks (title, description, status)
  - Response: Success or error message

---

Flow Chart

Task-App/
├── app/
├── bootstrap/
├── database/
│   └── migrations/   
├── public/
├── resources/
│   ├── css/
│   │   └── style.css 
│   ├── js/
│   │   └── task.js
│   └── views/
│       └── task.blade.php
├── routes/
│   └── api.php      
└── README.md


---

License
MIT
>>>>>>> 289f8b2 (version 1)
