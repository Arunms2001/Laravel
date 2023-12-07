<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statement;

class StatementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statement::create([
            'datetime' => now(),
            'amount' => 2000.00,
            'type' => 'credit',
            'details' => 'Deposit',
            'balance' => 2000.00,
        ]);
        Statement::create([
            'datetime' => now(),
            'amount' => 1500.00,
            'type' => 'credit',
            'details' => 'Transfer from friend@gmail.com',
            'balance' => 3500.00,
        ]);
        Statement::create([
            'datetime' => now(),
            'amount' => 500.00,
            'type' => 'debit',
            'details' => 'withdraw',
            'balance' => 3000.00,
        ]);
        Statement::create([
            'datetime' => now(),
            'amount' => 1000.00,
            'type' => 'debit',
            'details' => 'Transfer to sojan@gmail.com',
            'balance' => 1000.00,
        ]);
        Statement::create([
            'datetime' => now(),
            'amount' => 300.00,
            'type' => 'debit',
            'details' => 'withdraw',
            'balance' => 700.00,
        ]);
    }
}
