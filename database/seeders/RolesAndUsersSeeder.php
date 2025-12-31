<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndUsersSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole  = Role::firstOrCreate(['name' => 'user']);

        // 2. Create Permissions (example)
        $permissions = [
            'manage-users',
            'manage-services',
            'manage-portfolio',
            'manage-products',
            'view-dashboard',
        ];

        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Assign all permissions to admin
        $adminRole->syncPermissions(Permission::all());

        // 3. Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'info@techtowerinc.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('88928892'),
                'auth_provider' => 'email',
                'provider_id' => null,
                'email_verified_at' => now(),
                'status' => 'active',
                'mfa_enabled' => false,
            ]
        );
        $admin->assignRole($adminRole);

        // 4. Create Regular User
        $user = User::firstOrCreate(
            ['email' => 'ronaldjjuuko7@gmail.com'],
            [
                'name' => 'JRonnie Kclich',
                'password' => Hash::make('88928892'),
                'auth_provider' => 'email',
                'provider_id' => null,
                'email_verified_at' => now(),
                'status' => 'active',
                'mfa_enabled' => false,
            ]
        );
        $user->assignRole($userRole);
    }
}
