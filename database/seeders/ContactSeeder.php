<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i <=9 ; $i++) { 
            Contact::create([
                'dni'=>'01234'.$i,
                'name'=>'Contacto numero :00'.$i,
                'surname'=>'Apellido 00'.$i,
                'phone'=>'3003003030'.$i,
            ]);
        }
    }
}
