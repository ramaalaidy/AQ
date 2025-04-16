<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    Service::create([
        'type' => 'hotel',
        'name' => 'فندق موفنبيك العقبة',
        'description' => 'إطلالة مباشرة على البحر الأحمر مع شاطئ خاص',
        'price' => 120,
        'capacity' => 50
    ]);
    
    // أضف المزيد من السجلات...
}
}