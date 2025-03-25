<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Student::insert([
            ['name' => 'Comodoo Simba', 'program' => 'BSC-SE'],
            ['name' => 'Thani Thani', 'program' => 'BSC-SE'],
            ['name' => 'Omar Juma', 'program' => 'BSC-SE'],
            ['name' => 'Hussein Ahmed', 'program' => 'BSC-SE'],
            ['name' => 'Fahad khamis', 'program' => 'BSC-SE'],
            ['name' => 'Nuhu Seif', 'program' => 'BSC-SE'],
            ['name' => 'harith ali', 'program' => 'BSC-SE'],
            ['name' => 'Adbul-karim hammad', 'program' => 'BSC-SE'],
            ['name' => 'Abdul-hamid Said', 'program' => 'BSC-SE'],
            ['name' => 'Adbul-latif mahzum', 'program' => 'BSC-SE'],
        ]);

        Subject::insert([
            ['program_name' => 'Introduction to Programming', 'year' => 1],
            ['program_name' => 'Data Structures', 'year' => 2],
            ['program_name' => 'Introduction to Software Engineering', 'year' => 1],
            ['program_name' => 'Java Programming', 'year' => 2],
            ['program_name' => 'Python Programming', 'year' => 3],
            ['program_name' => 'Advanced Java', 'year' => 3],
            ['program_name' => 'C# Programming', 'year' => 4],
            ['program_name' => 'Software Reverse Engineering', 'year' => 4],

        ]);
    }


}
