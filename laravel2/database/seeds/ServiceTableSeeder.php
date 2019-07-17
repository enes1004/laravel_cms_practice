<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $service=new Service();
      $service->name="Service1";
      $service->description="Example Service1";
      $service->register_url="1/register";
      $service->save();
    }
}
