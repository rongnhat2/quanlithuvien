<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class admin_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
	        'name'              => 'admin',
	        'display_name' 			=> 'Là Admin',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
        DB::table('permissions')->insert([
	        'name'              => 'roles',
	        'display_name' 			=> 'Quản Lí Chức Vụ',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'users',
	        'display_name' 			=> 'Quản Lí Nhân Viên',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'category',
	        'display_name' 			=> 'Quản Lí Danh Mục',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'item',
	        'display_name' 			=> 'Quản Lí Sách',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);

	    DB::table('permissions')->insert([
	        'name'              => 'gallery',
	        'display_name' 			=> 'Thư Viện Ảnh',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'statistical',
	        'display_name' 			=> 'Xem Thống Kê',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'warehouse',
	        'display_name' 			=> 'Nhập Xuất Kho',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'user_class',
	        'display_name' 			=> 'Cấp Bậc Người Dùng',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'borrow_back',
	        'display_name' 			=> 'Quản Lí Trả Sách',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'borrow',
	        'display_name' 			=> 'Quản Lí Mượn Sách',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);
	    DB::table('permissions')->insert([
	        'name'              => 'borrow_all',
	        'display_name' 			=> 'Lịch Sử',
	        "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	    ]);

        DB::table('users')->insert([
            'name'              => 'admin',
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('12345678'),
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('roles')->insert([
            'name'              => 'admin',
            'display_name'      => 'admin',
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        DB::table('role_user')->insert([
            'user_id'           => '1',
            'role_id'      		=> '1',
            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        for ($i=1; $i <= 12 ; $i++) { 
	        DB::table('role_permission')->insert([
	            'permission_id'     => $i,
	            'role_id'      		=> '1',
	            "created_at"        =>  \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	            "updated_at"        => \Carbon\Carbon::now('Asia/Ho_Chi_Minh'),
	        ]);
        }

    }
}
