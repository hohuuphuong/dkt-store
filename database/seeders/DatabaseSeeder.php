<?php

namespace Database\Seeders;

use App\Enums\AdminRole;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->truncateTables();

        // Fake user
         User::factory()->create([
             'name' => 'Nguyen Van A',
             'email' => 'a.nguyenvan@vti.com.vn',
             'password' => Hash::make('vti123'),
         ]);

         // Fake admin
         Admin::factory()->create([
             'email' => 'a.nguyenvan@vti.com.vn',
             'password' => Hash::make('vti123'),
             'role' => AdminRole::SUPER_ADMIN,
         ]);

         // Fake product
        $this->call([
            ProductSeeder::class,
        ]);
    }

    private function truncateTables(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('admins')->truncate();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
