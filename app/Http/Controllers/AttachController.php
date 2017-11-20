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
        if (file_exists(storage_path("app/attachs/") . $name)) {
        	return response()->download(storage_path("app/attachs/") . $name, $path, $headers);
        }

        return 'File khong ton tai';
    }
}
