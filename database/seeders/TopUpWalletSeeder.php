<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TopUpWallet;
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
            'payment_method' => 'pago_movil',
        ]);
    }
}
