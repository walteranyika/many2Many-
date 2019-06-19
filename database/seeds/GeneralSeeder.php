<?php

use App\Student;
use App\Subject;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create(["name"=>"John Mark","admission"=>"p15/16/2010"]);
        Student::create(["name"=>"Mary Jane","admission"=>"p15/17/2010"]);
        Student::create(["name"=>"Kim Doe","admission"=>"p15/18/2010"]);
        Student::create(["name"=>"John Doe","admission"=>"p15/96/2010"]);
        Student::create(["name"=>"Chris Darling","admission"=>"p15/19/2010"]);
        Student::create(["name"=>"Smokin Hot","admission"=>"p15/44/2010"]);
        Student::create(["name"=>"Chris Cooper","admission"=>"p15/71/2010"]);


        Subject::create(["name"=>"Maths","short_name"=>"Math"]);
        Subject::create(["name"=>"English","short_name"=>"Eng"]);
        Subject::create(["name"=>"Swahili","short_name"=>"Swa"]);
        Subject::create(["name"=>"Chemistry","short_name"=>"Chem"]);
        Subject::create(["name"=>"Geography","short_name"=>"Geo"]);
        Subject::create(["name"=>"History","short_name"=>"Hist"]);
        Subject::create(["name"=>"Physics","short_name"=>"Phys"]);
        Subject::create(["name"=>"Home Science","short_name"=>"HS"]);
        Subject::create(["name"=>"Computers","short_name"=>"Comp"]);
        Subject::create(["name"=>"Architecture","short_name"=>"Arc"]);
        Subject::create(["name"=>"CRE","short_name"=>"CRE"]);
        Subject::create(["name"=>"Business","short_name"=>"Bus"]);
        Subject::create(["name"=>"Accounting","short_name"=>"Acc"]);

    }
}
