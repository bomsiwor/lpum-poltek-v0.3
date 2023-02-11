<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Jobs\TestBulkEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class EmailController extends Controller
{
    public function index(Request $request)
    {
        Mail::to($request->email)->send(new TestEmail($request->nama));

        // $recepients = [
        //     'bomsiwor@gmail.com',
        //     'dimasboma24@gmail.com'
        // ];

        // foreach ($recepients as $recipient) :
        //     Mail::to($recipient)->send(new TestEmail("Basuki"));
        // endforeach;

        return response()->json([
            'message' => "Berhasil terkirim"
        ], 200);
    }

    public function bulkEmail()
    {
        // $job = Mail::to("sembarang@mail.com")->send(new TestEmail());
        // TestBulkEmail::dispatch($job)->delay(now()->addSeconds(30));

        echo "Terkirim";
    }
}
