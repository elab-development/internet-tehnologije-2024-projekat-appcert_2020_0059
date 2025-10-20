<?php

namespace Database\Seeders;

use App\Models\Credential;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $types = Type::all();

        $credentials = [
            [
                'title' => 'Certified Kubernetes Administrator',
                'issued_date' => '2022-05-15',
                'expiry_date' => '2025-05-15',
                'issuer' => 'Linux Foundation',
            ],
            [
                'title' => 'PhD in Computer Science',
                'issued_date' => '2018-06-01',
                'expiry_date' => null,
                'issuer' => 'MIT',
            ],
            [
                'title' => 'Diploma in Graphic Design',
                'issued_date' => '2020-08-10',
                'expiry_date' => null,
                'issuer' => 'University of Arts London',
            ],
            [
                'title' => 'AWS Certified Solutions Architect',
                'issued_date' => '2023-02-20',
                'expiry_date' => '2026-02-20',
                'issuer' => 'Amazon Web Services',
            ],
            [
                'title' => 'IELTS Certification',
                'issued_date' => '2021-03-05',
                'expiry_date' => '2023-03-05',
                'issuer' => 'British Council',
            ],
            [
                'title' => 'Diploma in Digital Marketing',
                'issued_date' => '2019-09-12',
                'expiry_date' => null,
                'issuer' => 'Google',
            ],
            [
                'title' => 'PhD in Biotechnology',
                'issued_date' => '2016-07-01',
                'expiry_date' => null,
                'issuer' => 'Harvard University',
            ],
            [
                'title' => 'Certified Ethical Hacker',
                'issued_date' => '2020-01-18',
                'expiry_date' => '2024-01-18',
                'issuer' => 'EC-Council',
            ],
            [
                'title' => 'Certified Data Analyst',
                'issued_date' => '2023-06-25',
                'expiry_date' => '2026-06-25',
                'issuer' => 'Coursera',
            ],
            [
                'title' => 'Microsoft Azure Fundamentals',
                'issued_date' => '2022-11-10',
                'expiry_date' => '2024-11-10',
                'issuer' => 'Microsoft',
            ],
        ];

        foreach ($credentials as $credential) {
            Credential::create([
                'title' => $credential['title'],
                'issued_date' => $credential['issued_date'],
                'expiry_date' => $credential['expiry_date'],
                'issuer' => $credential['issuer'],
                'user_id' => $users->random()->id,
                'type_id' => $types->random()->id,
            ]);
        }
    }
}
