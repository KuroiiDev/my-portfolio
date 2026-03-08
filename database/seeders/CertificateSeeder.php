<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        Certificate::create([
            'title'          => 'Junior Web Developer',
            'issuer'         => 'BNSP — Badan Nasional Sertifikasi Profesi Indonesia',
            'issued_date'    => '2023-06-01',
            'expiry_date'    => null,
            'credential_url' => null,
            'image'          => null,
        ]);
    }
}
