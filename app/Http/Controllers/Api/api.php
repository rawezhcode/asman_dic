<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\entoku;
use App\Models\favorite;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Response;

// use Response;

class api extends Controller
{   

    public function getData(Request $request)
    {
        $this->validate($request, [
            'search' => 'required',
        ]);
        $data = entoku::where('word', 'like', '%TRIAL-'.$request->search.'%')->paginate(10);
        return Response::json($data);
    }
    

   
}