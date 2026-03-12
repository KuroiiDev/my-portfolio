<?php

namespace App\Data;

class Education
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'school' => 'Diponegoro University (UNDIP)',
                'major' => 'Computer Engineering (Tekkom)',
                'degree' => 'S1',
                'start_year' => 2024,
                'end_year' => null,
                'description' => 'Further developing technical skills with a focus on software engineering, sharpening full stack development expertise built since vocational school.',
            ],
            [
                'id' => 2,
                'school' => 'State Vocational High School 5 Surakarta',
                'major' => 'Software Engineering (RPL)',
                'degree' => 'Vocational',
                'start_year' => 2021,
                'end_year' => 2024,
                'description' => 'Studied foundational and advanced programming including basic programming logic, web development, API development, and mobile/Android application development.',
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        return collect(self::all())->firstWhere('id', $id);
    }
}