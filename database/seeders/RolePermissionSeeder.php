<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create permissions for the admin role
        $permission = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];

        // Create permissions
        foreach ($permission as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
            ]);
        }

        // Create roles
        $designManagerRole = Role::firstOrCreate([
            'name' => 'design_manager',
        ]);

        // Assign permissions to the design manager role
        $designManagerPermissions = [
            'manage products',
            'manage principles',
            'manage testimonials',
        ];

        // Sync permissions to the design manager role
        $designManagerRole->syncPermissions($designManagerPermissions);

        // Create roles
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin',
        ]);

        // Assign permissions to the super admin role
        $user = User::create([
            'name' => 'ShaynaComp',
            'email' => 'super@admin.com',
            'password' => bcrypt('123123123'),
        ]);

        $user->assignRole($superAdminRole);
    }
}
