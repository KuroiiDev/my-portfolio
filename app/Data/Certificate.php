<?php

namespace App\Data;

class Certificate
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Junior Web Developer',
                'issuer' => 'BNSP — Badan Nasional Sertifikasi Profesi Indonesia',
                'issued_date' => 'Jun 2023',
                'expiry_date' => null,
                'credential_url' => null,
                'image' => null,
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        return collect(self::all())->firstWhere('id', $id);
    }
}