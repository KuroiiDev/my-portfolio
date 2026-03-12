<?php

namespace App\Data;

class Experience
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'company' => 'PT. Riffsys Digital Media',
                'role' => 'Junior Programmer',
                'type' => 'Internship',
                'start_date' => 'Mar 2023',
                'end_date' => 'May 2023',
                'is_current' => false,
                'description' => 'First internship period. Worked on web programming, NAS server setup, and Linux server programming using Raspberry Pi. Gained hands-on experience in server management and backend development.',
            ],
            [
                'id' => 2,
                'company' => 'PT. Riffsys Digital Media',
                'role' => 'Junior Programmer',
                'type' => 'Internship',
                'start_date' => 'Jul 2023',
                'end_date' => 'Sep 2023',
                'is_current' => false,
                'description' => 'Second internship period. Expanded skills in Python programming using MediaPipe, TensorFlow, and TKInter for AI/ML applications. Also worked on web development and Android application programming.',
            ],
            [
                'id' => 3,
                'company' => 'PT. Aba Robotika',
                'role' => 'Junior Programmer',
                'type' => 'Internship',
                'start_date' => 'Aug 2024',
                'end_date' => 'Aug 2024',
                'is_current' => false,
                'description' => 'Developed a Flutter-based monitoring application for an automated excavator system. The app consumed a provided API and displayed real-time operational reports recorded twice per second.',
            ],
            [
                'id' => 4,
                'company' => 'UNDIP Robotic Development Center — Bandhayudha',
                'role' => 'Programmer',
                'type' => 'Internship',
                'start_date' => 'Jan 2025',
                'end_date' => 'Jan 2025',
                'is_current' => false,
                'description' => 'Handled the programming side of robot development and automated movement system creation within the university\'s internal robotics division.',
            ],
            [
                'id' => 5,
                'company' => 'PT. Berkah',
                'role' => 'Assistant Full Stack Programmer',
                'type' => 'Internship',
                'start_date' => 'Sep 2025',
                'end_date' => 'Dec 2025',
                'is_current' => false,
                'description' => 'Developed a full stack web management system covering tender management, project tracking, raw material management, and project timeline features.',
            ],
        ];
    }

    public static function withProjects(): array
    {
        return collect(self::all())
            ->map(fn($e) => [
                ...$e,
                'projects' => Project::byExperience($e['id']),
            ])
            ->toArray();
    }

    public static function find(int $id): ?array
    {
        $experience = collect(self::all())->firstWhere('id', $id);
        if (!$experience)
            return null;

        return [
            ...$experience,
            'projects' => Project::byExperience($id),
        ];
    }
}