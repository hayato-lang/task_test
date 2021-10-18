<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {
        $values = Test::all();

        

        $collection = collect([1,2,3,4,5,6,7]);

        $chunks = $collection->chunk(4);

        $chunks->toArray();

        $tests = DB::table('tests')->get();

        dd($tests);

        return view('tests.test', compact('values'));
    }
}
