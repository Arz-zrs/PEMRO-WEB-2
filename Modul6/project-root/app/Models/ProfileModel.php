<?php
namespace App\Models;
use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function getProfileData(): array
    {
        return [
            'nama' => 'Arya Arrozza Ridho Syaputra',
            'nim' => '2410817210010',
            'prodi' => 'Teknologi Informasi',
            'hobi' => ['Coding', 'Membaca Buku & Novel', 'Bermain Game'],
            'skill' => ['PHP', 'HTML', 'CSS', 'JavaScript', 'Java', 'Kotlin', 'C++', 'Python'],
            'pengalaman' => [
                [
                    'organisasi' => 'HMTI FT ULM 2025',
                    'posisi' => 'Anggota Divisi Kesekretariatan'
                ],
                [
                    'organisasi' => 'HMTI FT ULM 2026',
                    'posisi' => 'Anggota Divisi Riset & Teknologi'
                ],
                [
                    'lomba' => 'GAMESEED 2025',
                    'prestasi' => 'Top 10 Student Category'
                ],
                [
                    'lomba' => 'GIMERSIA INSPIRE 2025',
                    'prestasi' => 'Top 40 Best Team'
                ]
            ],
            'gambar' => base_url('assets/img/me.jpeg')
        ];
    }

    public function getProfileDataSummary(): array
    {
        return [
            'nama' => 'Arya Arrozza Ridho Syaputra',
            'nim' => '2410817210010',
            'gambar' => base_url('assets/img/me.jpeg')
        ];
    }
}