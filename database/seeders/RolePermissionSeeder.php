<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private $permissions = [
        'dashboard' => [
            'view'
        ],
        'user' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'laporan' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'alamat' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'role' => [
            'view',
            'create',
            'update',
            'delete',
        ],
        'kategori-laporan' => [
            'view',
            'create',
            'update',
            'delete',
        ],
    ];
    public function run(): void
    {
        foreach ($this->permissions as $role => $value) {
            foreach ($value as $permission) {
                Permission::firstOrCreate([
                    'name' => $role . '-' . $permission,
                ]);
            }
        }

        \Spatie\Permission\Models\Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web'
        ])->givePermissionTo(Permission::all());

        \Spatie\Permission\Models\Role::firstOrCreate([
            'name' => 'user',
            'guard_name' => 'web'
        ])->givePermissionTo([
            'kategori-laporan-view',
            'laporan-view',
            'laporan-create',
            'laporan-update',
            'laporan-delete',
        ]);
    }
}
