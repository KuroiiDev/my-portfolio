<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\Experience;

class EducationExperienceSeeder extends Seeder
{
    public function run(): void
    {
        // ─── Education ───────────────────────────────────────
        Education::create([
            'school' => 'State Vocational High School 5 Surakarta',
            'major' => 'Software Engineering (RPL)',
            'degree' => 'Vocational',
            'start_year' => 2021,
            'end_year' => 2024,
            'description' => 'Studied foundational and advanced programming including basic programming logic, web development, API development, and mobile/Android application development.',
        ]);

        Education::create([
            'school' => 'Diponegoro University (UNDIP)',
            'major' => 'Computer Engineering (Tekkom)',
            'degree' => 'S1',
            'start_year' => 2024,
            'end_year' => null, // still ongoing
            'description' => 'Further developing technical skills with a focus on software engineering, sharpening full stack development expertise built since vocational school.',
        ]);

        // ─── Experience ──────────────────────────────────────

        // 1. Riffsys — Jan 2023 - Jun 2023
        Experience::create([
            'company' => 'PT. Riffsys Digital Media',
            'role' => 'Junior Programmer',
            'type' => 'Internship',
            'start_date' => '2023-01-01',
            'end_date' => '2023-06-30',
            'is_current' => false,
            'description' => 'Worked on API development projects and server configuration using Raspberry Pi. Gained hands-on experience in backend development and embedded server management.',
        ]);

        // 2. Aba Robotika — Aug 2024
        Experience::create([
            'company' => 'PT. Aba Robotika',
            'role' => 'Junior Programmer',
            'type' => 'Internship',
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-31',
            'is_current' => false,
            'description' => 'Developed a Flutter-based monitoring application for an automated excavator system. The app consumed a provided API and displayed real-time operational reports recorded twice per second.',
        ]);

        // 3. UNDIP Robotic Development Center — Jan 2025
        Experience::create([
            'company' => 'UNDIP Robotic Development Center — Bandhayudha',
            'role' => 'Programmer',
            'type' => 'Internship',
            'start_date' => '2025-01-01',
            'end_date' => '2025-01-31',
            'is_current' => false,
            'description' => 'Handled the programming side of robot development and automated movement system creation within the university\'s internal robotics division.',
        ]);

        // 4. PT. Berkah — Sept 2025 - Dec 2025
        Experience::create([
            'company' => 'PT. Berkah',
            'role' => 'Assistant Full Stack Programmer',
            'type' => 'Internship',
            'start_date' => '2025-09-01',
            'end_date' => '2025-12-14',
            'is_current' => false,
            'description' => 'Developed a full stack web management system covering tender management, project tracking, raw material management, and project timeline features.',
        ]);
    }
}
