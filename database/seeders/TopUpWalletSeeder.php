<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopUpWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopUpWallet::create([
            'wallet_id' => 1,
            'amount-to-recharge' => 50000,
            'referencia' => '123456',
            'status' => 'pending',
            'payment_method' => 'credit_card',
        ]);
    }
}
