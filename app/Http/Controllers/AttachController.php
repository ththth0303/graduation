<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttachController extends Controller
{
    public function download($path, $name)
    {
        $headers = array(
              'Content-Type: application/*',
            );
        return response()->download(storage_path("app/attachs/") . $name, $path, $headers);
    }
}
