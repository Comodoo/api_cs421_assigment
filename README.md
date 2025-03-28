
## API
## Description
This project aim to create an API with two end point one is student and the other is subject.
Endpoint 1: /students
o This endpoint should return a JSON response containing a minimum of 10 
students, with each student's name and enrolled program clearly listed.
Endpoint 2: /subjects
o This endpoint should return a JSON response listing all subjects associated with 
your specific Software Engineering program, spanning from Year 1 through Year 
4. Structure your response clearly, indicating the academic year for each subject.
### Instruction Setup
### Step 1: Set Up Your Development Environment
1. Install prerequisites:
PHP (8.0 or higher)
Composer
MySQL (or other RDBMS)
Git
2. Create a new Laravel project:
### Step 2: Database Setup
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
### Step 3: Create Models and Seeders
1. Generate models and seeders
   php artisan make:model Student
php artisan make:model Subject
php artisan make:seeder StudentsTableSeeder
php artisan make:seeder SubjectsTableSeeder
2. Edit the seeders
3. Run seeders
### Step 4: Create API Routes and Controllers
1. Create controllers
2. Edit the controllers
3. Define routes in routes/weeb.php
Step 5: Test Your API Locally
http://localhost:8000/students
http://localhost:8000/subjects
### Step 5: Version Control with Git
1. Initialize a Git repo
   git init
   git add .
   git commit -m "Initial commit for API"
2. Create a GitHub repository and push
   git remote add origin <your-github-repo-url>
   git branch -M main
   git push -u origin main

### Step 6: Deploy to AWS
1. Launch an Ubuntu AWS instance
2. Configure Security Group
   Click on the Inbound Rules and Edit them to allow:
    HTTP (Port 80)
    HTTPS (Port 443)
    Custom TCP Rule (Port 8000, if using Laravel's built-in server)
    SSH (Port 22) for access
4. Connect to Your AWS Instance via SSH
   ssh -i your-key.pem ubuntu@your-public-ip
5. Update and Install Required Software
   sudo apt update && sudo apt upgrade -y
   sudo apt install -y apache2 mysql-server php php-cli unzip curl composer
6. Clone Your Laravel Project
   cd /var/www/html
   sudo rm -rf api_project  # Remove existing folder if necessary
   sudo git clone https://github.com/your-username/api_project.git
   cd api_project
7. Configure Apache or Nginx
8. Allow Firewall Rules
9. Test the API
    http://your-public-ip/api/endpoint




