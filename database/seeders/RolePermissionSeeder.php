<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role add
        $role = Role::firstOrCreate(['name' => 'Admin']);

        //All Permissions
        $all_permissions = Permission::firstOrCreate(['name' => 'Tüm izinler']);
        $role->givePermissionTo($all_permissions);

        //Kullanıcı Sayfası İzinleri
        Permission::firstOrCreate(['name' => 'Kullanıcı Listele']);
        Permission::firstOrCreate(['name' => 'Kullanıcı Ekle']);
        Permission::firstOrCreate(['name' => 'Kullanıcı Sil']);
        Permission::firstOrCreate(['name' => 'Kullanıcı Düzenle']);

        //Rol Sayfası İzinleri
        Permission::firstOrCreate(['name' => 'Rolleri Listele']);
        Permission::firstOrCreate(['name' => 'Rol Ekle']);
        Permission::firstOrCreate(['name' => 'Rol Sil']);
        Permission::firstOrCreate(['name' => 'Rol Düzenle']);

        //Kategori Sayfası İzinleri
        Permission::firstOrCreate(['name' => 'Kategorileri Listele']);
        Permission::firstOrCreate(['name' => 'Kategori Ekle']);
        Permission::firstOrCreate(['name' => 'Kategori Sil']);
        Permission::firstOrCreate(['name' => 'Kategori Düzenle']);

        //Gönderi Sayfası İzinleri
        Permission::firstOrCreate(['name' => 'Yazıları Listele']);
        Permission::firstOrCreate(['name' => 'Yazı Ekle']);
        Permission::firstOrCreate(['name' => 'Yazı Sil']);
        Permission::firstOrCreate(['name' => 'Yazıyı Düzenle']);

    }
}
