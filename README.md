
## API
### Description
This project aim to create an API with two end point one is student and the other is subject.
Endpoint 1: /students
o This endpoint should return a JSON response containing a minimum of 10 
students, with each student's name and enrolled program clearly listed.
Endpoint 2: /subjects
o This endpoint should return a JSON response listing all subjects associated with 
your specific Software Engineering program, spanning from Year 1 through Year 
4. Structure your response clearly, indicating the academic year for each subject.
### Instruction Setup
Step 1: Set Up Your Development Environment
1. Install prerequisites:
PHP (8.0 or higher)
Composer
MySQL (or other RDBMS)
Git
2. Create a new Laravel project:
Step 2: Database Setup
1. Configure your .env file with database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cs421_assignment
DB_USERNAME=root
DB_PASSWORD=yourpassword
2. Create migrations for students and subjects
  php artisan make:migration create_students_table
  php artisan make:migration create_subjects_table
3. Edit the migrations
4. Run migrations
Step 3: Create Models and Seeders
1. Generate models and seeders
   php artisan make:model Student
php artisan make:model Subject
php artisan make:seeder StudentsTableSeeder
php artisan make:seeder SubjectsTableSeeder
2. Edit the seeders
3. Run seeders
Step 4: Create API Routes and Controllers
1. Create controllers
2. Edit the controllers
3. Define routes in routes/weeb.php
Step 5: Test Your API Locally
http://localhost:8000/students
http://localhost:8000/subjects
