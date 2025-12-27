<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    public function index()
    {
        // Data diri contoh - dalam aplikasi nyata, ini akan diambil dari database
        $personalData = [
            'name' => 'Naemu Enggar Mahcaya',
            'title' => 'Jago WeB DeVel0P3r',
            'email' => 'enggar@enggar.enggar',
            'phone' => '0858 kapan kapan ke dupan',
            'address' => 'Pesbal E2No1',
            'birth_date' => '39 Desember 2099',
            'nationality' => 'Indonesia',
            'linkedin' => 'https://www.youtube.com/@IhsanLuminaire',
            'github'   => 'github.com/Myouzy',
            'summary'  => 'gatau mau isi apa intinya ada isi',
            'skills' => [
                'HTML',
                'CSS',
                'JavaScript',
                'PHP',
                'Laravel',
                'MySQL',
                'TAPI BOONG',
                'Git',
                'Docker',
                'AWS',
            ],
            'experience' => [
                [
                    'position'    => 'Mahasewa',
                    'company'     => 'PT.Pencari C1nt4 s3j4Ti.',
                    'period'      => '3019 - 3018',
                    'description' => 'yaudah intinya itu aja bercandanya :(.',
                ],
                [
                    'position'    => 'Web Developer',
                    'company'     => 'Digital Creations LLC',
                    'period'      => 'Mar 2020 - Dec 2021',
                    'description' => 'Developed and maintained multiple client websites using modern web technologies. Collaborated with design team to implement responsive UIs.',
                ],
                [
                    'position'    => 'Junior Developer',
                    'company'     => 'Web Masters Co.',
                    'period'      => 'Jun 2019 - Feb 2020',
                    'description' => 'Assisted in development of internal tools and customer projects. Gained experience in full-stack development.',
                ],
            ],
            'education' => [
                [
                    'degree'      => 'Bachelor of Science in Computer Science',
                    'institution' => 'University of Technology',
                    'period'      => '2014 - 2018',
                    'description' => 'Graduated with honors. Focused on software engineering and web technologies.',
                ],
            ],
        ];

        return view('personal-data.index', compact('personalData'));
    }
}
