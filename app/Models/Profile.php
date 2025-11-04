<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Kita ganti namanya dari 'all' menjadi 'getProfiles'
     */
    public static function getProfiles() // <-- NAMA DIUBAH DI SINI
    {
        return [
            [
                'name' => 'AHMAD ZAKI ALDRIN',
                'nim' => '2301010023',
                'bio' => 'professional back end developer and ocassionally AK47 bringer',
                'image' => 'images/profile-aranta.jpg'
            ],
            [
                'name' => 'RATNO JULIONO',
                'nim' => '2301010012',
                'bio' => 'Designing front-end is my passion sir 🚀',
                'image' => 'images/profile-arthur.jpg'
            ],
        ];
    }
}
