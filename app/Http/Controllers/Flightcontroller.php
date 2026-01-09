<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class Flightcontroller extends Controller
{
    //
    private function insert_db()
    {
        echo "Controller";
        $flight = new Flight;
        $flight->name = "Test Imsert Flight";
        $flight->airline = "TestAirline";
        $flight->numeber_of_planes = 10;
        $flight->price_per_ticket = 50.0;
        $flight->save();

    }

    private function update_db(){
        $flight = Flight::find(1);
        $flight->name = "Test Update Flight";
        $flight->save();
    }

    private function delete_db(){
        $flight -> Flight::find(1);
        $flight->delete();
    }

    function index()
    {

    }
}
