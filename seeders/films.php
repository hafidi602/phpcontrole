<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class films extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'nom' => 'dernière nuit à milan',
            'duree' => '02:54:10',
            'source'=>'image/dernière nuit à milan.jpg',
            'type'=>'romantique'
        ]);
    }
}
