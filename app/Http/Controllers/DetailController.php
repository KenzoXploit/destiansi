<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinasi;

class DetailController extends Controller
{
    public function show($id)
    {
        $data = Destinasi::findOrFail($id);
        return view('detail', compact('data'));
    }
}
