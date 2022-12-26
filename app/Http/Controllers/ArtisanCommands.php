<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanCommands extends Controller
{
    public function migrate()
    {
        \Artisan::call('migrate');
        return('migration successfully');
    }

    public function migratefresh()
    {
        \Artisan::call('migrate:fresh');
        return('migration fresh successfully');
    }

    public function generate()
    {
        \Artisan::call('db:seed');
        return('10 users created successfully');
    }

    public function delete()
    {
        $users=User::orderBy('id', 'desc')->limit(10)->delete();
        return('10 users deleted successfully');
    }
    
}
