<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    function hello(Request $request)
    {
        $name = $request -> query(key: 'name');
        return view('test', ['name' => $name, 'students' => ['John', 'Doe', 'Jane', 'Doe']]);
    }
    

    public function testDBConnection() {
        try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                return "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
            }
            else {
                die("Could not find the database. Please check your configuration.");

            }
        }
        catch (\Exception $e) {
            die("Could not open connection to database server.  Please check your configuration.");
        }
    }
}
