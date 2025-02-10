# To-Do List Application (Laravel & MySQL)

## Installation & Setup

Follow these steps to set up and run the To-Do List application using Laravel and MySQL.

### Prerequisites
- **PHP** (>= 8.0)
- **Composer**
- **MySQL**
- **Laravel** (>= 9.x)

### Step 1: Clone the Repository
```sh
git clone https://github.com/your-repo/todo-list-laravel.git
cd todo-list-laravel
```

### Step 2: Install Dependencies
```sh
composer install
```


### Step 3: Configure Environment
 #### Copy the .env.example file and rename it to .env:
```sh
cp .env.example .env
```
#### Edit the .env file and update the database credentials:
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo_list
DB_USERNAME=root
DB_PASSWORD=
```



### Step 4: Generate Application Key
```sh
php artisan key:generate
```


### Step 5: Run Database Migrations
```sh
php artisan migrate
```
Step 6: Start the Development Server
```sh
php artisan serve
```
#### The application will be available at http://127.0.0.1:8000.

### Usage
#### Add a Task: Enter a task in the input field and submit.
#### Mark as Completed: Click on "Complete" next to a task.
#### Delete a Task: Click on "Delete" to remove a task.
