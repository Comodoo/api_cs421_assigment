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
            ['program_name' => 'Principles of Programming Languages(CP 111)', 'year' => 1],
            ['program_name' => 'Development Perspectives(DS 102)', 'year' => 1],
            ['program_name' => 'Mathematical Foundations of Information Security-(IA 112)', 'year' => 1],
            ['program_name' => 'Introduction to Information Technology(IT 111)', 'year' => 1],
            ['program_name' => 'Communication Skills(LG 102)', 'year' => 1],
            ['program_name' => 'Discrete Mathematics for ICT(MT1111)', 'year' => 1],
            ['program_name' => 'Calculus(MT 1112)', 'year' => 1],
            ['program_name' => 'Linear Algebra for ICT(MT 1117)', 'year' => 1],
            ['program_name' => 'Introduction to Computer Networking(CN 121)', 'year' => 1],
            ['program_name' => 'Introduction to Database systems(CP 121)', 'year' => 1],
            ['program_name' => 'Introduction to High Level Programming(CP 123)', 'year' => 1],
            ['program_name' => 'Introduction to Software Engineering(CS 123)', 'year' => 1],
            ['program_name' => 'Introduction to IT Security(IA 124)', 'year' => 1],
            ['program_name' => 'Numerical Analysis for ICT(MT 1211)', 'year' => 1],
            ['program_name' => 'Introduction to Probability and Statistics(ST 1210)', 'year' => 1],
            ['program_name' => 'Computer Networking Protocols(CN 211)', 'year' => 2],
            ['program_name' => 'Introduction To Linux/Unix Systems(CP 211)', 'year' => 2],
            ['program_name' => 'Systems Analysis and Design(CP 212)', 'year' => 2],
            ['program_name' => 'Data Structures and Algorithms Analysis(CP 213)', 'year' => 2],
            ['program_name' => 'Computational Theory(CP 214)', 'year' => 2],
            ['program_name' => 'Object Oriented Programming in Java(CP 215)', 'year' => 2],
            ['program_name' => 'Industrial Practical Training I(CS 131)', 'year' => 2],
            ['program_name' => 'Computer Organization and Architecture I(CT 211)', 'year' => 2],
            ['program_name' => 'Internet Programming And Application I(CP 221)', 'year' => 2],
            ['program_name' => 'Open Source Technologies(CP 222)', 'year' => 2],
            ['program_name' => 'Object-Oriented Systems Design(CP 223)', 'year' => 2],
            ['program_name' => 'Database Management Systems(CP 224)', 'year' => 2],
            ['program_name' => 'Software Testing and Quality Assurance(CP 225)', 'year' => 2],
            ['program_name' => 'Operating Systems(CP 226)', 'year' => 2],
            ['program_name' => 'ICT Research Methods(IS 221)', 'year' => 2],
            ['program_name' => 'Internet Programming and Applications II(CP 311)', 'year' => 3],
            ['program_name' => 'Python Programming(CP 312)', 'year' => 3],
            ['program_name' => 'Mobile Applications Development(CP 313)', 'year' => 3],
            ['program_name' => 'Selected Topics in Software Engineering(CP 316)', 'year' => 3],
            ['program_name' => 'Computer Graphics(CP 318)', 'year' => 3],
            ['program_name' => 'Industrial Practical Training II(CS 231)', 'year' => 3],
            ['program_name' => 'ICT Entrepreneurship(EME 314)', 'year' => 3],
            ['program_name' => 'Mathematical Logic and Formal Semantics(MT 3111)', 'year' => 3],
            ['program_name' => 'Distributed Database Systems(CP 321)', 'year' => 3],
            ['program_name' => 'Data Mining and Warehousing(CP 322)', 'year' => 3],
            ['program_name' => 'Web Framework Development Using Javascript(CP 323)', 'year' => 3],
            ['program_name' => 'Compiler Technology(CP 324)', 'year' => 3],
            ['program_name' => 'Advanced Java Programming(CS 321)', 'year' => 3],
            ['program_name' => 'Information and Communication Systems Security(IA 321)', 'year' => 3],
            ['program_name' => 'ICT Project Management(BT 413)', 'year' => 4],
            ['program_name' => 'Distributed Computing(CP 314)', 'year' => 4],
            ['program_name' => 'C# Programming(CP 412)', 'year' => 4],
            ['program_name' => 'Industrial Practical Training III(CS 332)', 'year' => 4],
            ['program_name' => 'Software Reverse Engineering(CS 411)', 'year' => 4],
            ['program_name' => 'Software Engineering Project I(CS 431)', 'year' => 4],
            ['program_name' => 'Computer Maintenance(CT 312)', 'year' => 4],
            ['program_name' => 'Human Computer Interaction(IM 411)', 'year' => 4],
            ['program_name' => 'Professional Ethics and Conduct Core(SI 311)', 'year' => 4],
            ['program_name' => 'Software Deployment and Management(CS 421)', 'year' => 4],
            ['program_name' => 'Big Data Analysis(CS 329)', 'year' => 4],
            ['program_name' => 'Software Engineering Project II(CS 432)', 'year' => 4],
            ['program_name' => 'Artificial Intelligence(CP 422)', 'year' => 4],
            ['program_name' => 'System Administration and Management(CP 423)', 'year' => 4],
            ['program_name' => 'Cloud Computing(CP 424)', 'year' => 4],
            ['program_name' => 'Foundations of Data Science(CG 222)', 'year' => 4],
        ]);
    }


}
