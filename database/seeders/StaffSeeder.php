<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Lunar\Admin\Models\Staff;

class StaffSeeder extends AbstractSeeder
{
    /**
     * Run the database seeds.
     * Admin paneli icin staff kullanicilari olusturur.
     */
    public function run(): void
    {
        $staffs = $this->getSeedData('staffs');

        foreach ($staffs as $staffData) {
            // Ayni email ile kayit varsa atla
            if (Staff::where('email', $staffData->email)->exists()) {
                continue;
            }

            Staff::create([
                'first_name' => $staffData->first_name,
                'last_name' => $staffData->last_name,
                'email' => $staffData->email,
                'password' => Hash::make($staffData->password),
                'admin' => $staffData->admin ?? false,
            ]);
        }
    }
}
