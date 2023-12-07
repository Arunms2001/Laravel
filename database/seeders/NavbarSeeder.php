<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navbar;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],
            [
                'name' => 'Deposite',
                'route' => 'deposite.index',
                'ordering' => 2,
            ],
            [
                'name' => 'Withdraw',
                'route' => 'withdraw.index',
                'ordering' => 3,
            ],
            [
                'name' => 'Transfer',
                'route' => 'transfer.index',
                'ordering' => 3,
            ],
            [
                'name' => 'Statement',
                'route' => 'statement.index',
                'ordering' => 3,
            ]
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
        } //
    }
}
