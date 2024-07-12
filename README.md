# Task Manager

Task Manager is a web application built with Laravel, Livewire, and Bootstrap that allows users to manage their tasks efficiently. Users can add new tasks, mark them as completed, and paginate through the list of tasks.

## Features

- Add new tasks
- Mark tasks as completed or not completed
- Paginate through the list of tasks
- Responsive design using Bootstrap

## Requirements

- PHP 8.0 or higher
- Composer
- MySQL
- Node.js and NPM

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/sosmongare/task-manager-livewire.git
   cd task-manager
   ```

2. **Install dependencies:**

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Set up the environment:**

   Copy the `.env.example` file to `.env` and update the database credentials:

   ```bash
   cp .env.example .env
   ```

   Edit the `.env` file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_manager
   DB_USERNAME=root
   DB_PASSWORD=password
   ```

4. **Generate application key:**

   ```bash
   php artisan key:generate
   ```

5. **Run migrations:**

   ```bash
   php artisan migrate
   ```

6. **Serve the application:**

   ```bash
   php artisan serve
   ```

7. **Access the application:**

   Open your browser and navigate to `http://127.0.0.1:8000`.

## Usage

1. **Register a new user or login with an existing user.**

2. **Navigate to the task manager:**

   - Add a new task by clicking on the "Add Task" button, filling in the task details in the modal, and submitting the form.
   - View the list of tasks in the table. Use the pagination controls at the bottom to navigate through the tasks.
   - Mark tasks as completed by checking the checkbox next to each task.

## File Structure

- `app/Http/Livewire/TaskManager.php`: Livewire component for managing tasks.
- `resources/views/layouts/app.blade.php`: Main layout file with Bootstrap and Livewire styles and scripts.
- `resources/views/livewire/task-manager.blade.php`: View file for the TaskManager component.
- `routes/web.php`: Routes for accessing the task manager.
