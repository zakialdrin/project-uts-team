<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    /**
     * Kita simulasikan pengambilan data "dari database"
     * dengan function statis.
     */
    
    public static function getItems()
    {
        return [
            [
                'image' => 'images/acropolis.jpg',
                'title' => 'Acropolis, Yunani'
            ],
            [
                'image' => 'images/shibuya.jpg',
                'title' => 'Shibuya, Jepang'
            ],
            [
                'image' => 'images/cappadocia.jpg',
                'title' => 'Cappadocia, mudik bale'
            ],
            [
                'image' => 'images/giza.jpg',
                'title' => 'Giza, Lotim'
            ],
            [
                'image' => 'images/gwk.jpg',
                'title' => 'Garuda wisnu kencana, bali'
            ],
            [
                'image' => 'images/huayaria.jpg',
                'title' => 'Huayaria, Peru'
            ],
            [
                'image' => 'images/jumeirah.jpg',
                'title' => 'Jumeirah, Abu Dhabi'
            ],
            [
                'image' => 'images/newyork.jpg',
                'title' => 'Newyork, US'
            ],
            [
                'image' => 'images/niagara.jpg',
                'title' => 'Niagara, Kanada'
            ],
        ];
    }
}
