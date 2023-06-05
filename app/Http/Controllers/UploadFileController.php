<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Mail\uploadFile;
use Cloudinary\Cloudinary;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Support\Facades\URL;

class UploadFileController extends Controller
{
    
    public function uploadFile(Request $request)
    {

    //     // Get the file data from the request
    //     $file_data  = $request->file;

    //     $fileData = base64_decode($file_data);

    //   $cloudinary = new Cloudinary(
    //     [
    //         'cloud' => [
    //             'cloud_name' => 'daukqpav9',
    //             'api_key'    => '295142363857116',
    //             'api_secret' => 'TF9NI7qByDN3B5MM0LHyxsxcXX4',
    //         ],
    //     ]
    // );

    
    
    // $cloudinary->uploadApi()->upload(
    //     $file_data,
    //     ['public_id' => 'olympic_flag']
    // );

    //     $fileurlrl = $response['secure_url'];
      

    
    $files_main = $request->input('files');
    $extensions_main = $request->input('extensions');

    $i=0;
    foreach ($files_main as $file) 
    {

    $file_data = $file;
    $file_extension = $extensions_main[$i];

    $exploded = explode(',', $file_data);
    $decoded = base64_decode($exploded[1]);

    $extension = $file_extension;


        $fileName='file_'.time().'.'.$extension;
        $path='files/'.$fileName; 
        file_put_contents($path,$decoded);
        $path_to_save='/files/'.$fileName;

        $currentDomainUrl = URL::to('/');
        $url_paths[$i]= $currentDomainUrl.''.$path_to_save;

        $i=$i+1;
    }


        $data = [
            // 'file' => time().$request->file('file')->getClientOriginalName(),
            'file' => $url_paths,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new uploadFile($data));

     
        
    }

   


}
