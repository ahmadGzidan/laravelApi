<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
       ->count(25)
       ->hasInvoices(10)
       ->create();


       Customer::factory()
       ->count(25)
       ->hasInvoices(5)
       ->create();

       Customer::factory()
       ->count(25)
       ->hasInvoices(3)
       ->create();

       Customer::factory()
       ->count(5)
       ->hasInvoices()
       ->create();
    }
}
