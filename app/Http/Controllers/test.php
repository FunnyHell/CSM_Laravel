<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class test extends Controller
{
    public function test(Request $request)
    {
        if ($request->hasFile('files'))
            $files = $request->file('files');
        Storage::put('img', $files);
    }


//
//        $this->validate($request, [
//
//            'summernote' => 'required',
//
//        ]);
//
//
//        $description=$request->input('summernote');
//
//        $dom = new \DomDocument();
//
//        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//
//        $images = $dom->getElementsByTagName('img');
//
//        foreach($images as $k => $img){
//
//            $data = $img->getAttribute('src');
//
//            list($type, $data) = explode(';', $data);
//
//            list(, $data)      = explode(',', $data);
//
//            $data = base64_decode($data);
//
//            $image_name= time().$k.'.png';
//            $path = '/img/' . $image_name;
//
//
//            file_put_contents($path, $data);
//
//
//
//            $img->removeAttribute('src');
//
//            $img->setAttribute('src', $image_name);
//
//        }
//
//
//        $description = $dom->saveHTML();
//
//
//        dd($description);


}
