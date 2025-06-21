<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create(['judul' => 'Push Up Counter','deskripsi' => 'Minimalis design, bluetooth ESP32', 'kuota' => 2]);
        Project::create(['judul' => 'Autonomous Car','deskripsi' => 'ROS2, Obstacle Avoidance', 'kuota' => 4]);
        Project::create(['judul' => 'Smart Irrigation','deskripsi' => 'IoT, WSN', 'kuota' => 2]);
        Project::create(['judul' => 'Omni 3 Wheel','deskripsi' => 'ROS2, Navigasi, Machine Learning pada RaspI', 'kuota' => 2]);
        
        Project::create(['judul' => 'Omni 4 Wheel Robot','deskripsi' => 'ROS2, Navigasi, SLAM, Object Tracking', 'kuota' => 10]);
        Project::create(['judul' => 'RHI-MOLA Mobile Robot','deskripsi' => 'Pengembangan Hardware dan algoritma', 'kuota' => 10]);
        Project::create(['judul' => 'StickandSee V2','deskripsi' => 'Implementasi AI dan penyempurnaan hardware', 'kuota' => 10]);
        Project::create(['judul' => 'Modul pembelajaran line follower berbasis STM32 ','deskripsi' => '', 'kuota' => 2]);

        Project::create(['judul' => 'Modelling ANN untuk low cost sensor air quality','deskripsi' => 'Pengambilan data dan analisis serta penulisan artikel', 'kuota' => 1]);
        Project::create(['judul' => 'Modelling ANN untuk AERMET meteorologi','deskripsi' => 'Proses data dan penulisan artikel', 'kuota' => 1]);
        Project::create(['judul' => 'Pengembangan alat IoT penyiram tanaman otomatis','deskripsi' => 'development hardware dan software untuk kompetisi start-up bidang agriculture', 'kuota' => 5]);
        
        Project::create(['judul' => 'Robot Transporter','deskripsi' => 'Arduino/esp32 based', 'kuota' => 5]);

        Project::create(['judul' => 'Smart Air conditioning','deskripsi' => 'monitoring, control, AI', 'kuota' => 10]);
        Project::create(['judul' => 'Smart water tank management','deskripsi' => 'monitoring, control, AI', 'kuota' => 10]);
        Project::create(['judul' => 'Smart photovoltaic monitoring','deskripsi' => '', 'kuota' => 10]);
    }
}

