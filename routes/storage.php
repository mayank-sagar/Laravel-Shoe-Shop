<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


Route::get('storage/{filename}', function($filename) {
    
    $path = storage_path('app/public/'.$filename);
    if(!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file,200);
    $response->header("Content-Type",$type);
    return $response;
})->where('filename','.+')
?>