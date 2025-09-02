<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function storageLink()
    {
        Artisan::call('storage:link');
        return 'Artisan storage:link sudah dijalankan!';
    }
}
