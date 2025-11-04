<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryItem;
use App\Models\Profile;

class PageController extends Controller
{
    /**
     * Menampilkan halaman Home dengan data galeri.
     */
    public function home()
    {
        // 1. Mengambil semua data dari Model
        $galleryItems = GalleryItem::getItems(); // <-- UBAH DI SINI
        
        // 2. Menghitung jumlah data
        $itemCount = count($galleryItems);

        // 3. Mengirim data ke View 'home'
        return view('home', [
            'galleryItems' => $galleryItems,
            'itemCount' => $itemCount
        ]);
    }

    /**
     * Menampilkan halaman About dengan data profil.
     */
    public function about()
    {
        // 1. Mengambil semua data dari Model
        $profiles = Profile::getProfiles(); // <-- UBAH DI SINI

        // 2. Menghitung jumlah data
        $profileCount = count($profiles);

        // 3. Mengirim data ke View 'about'
        return view('about', [
            'profiles' => $profiles,
            'profileCount' => $profileCount
        ]);
    }
}
