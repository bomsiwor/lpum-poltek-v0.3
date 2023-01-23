<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Jobs\TestBulkEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class EmailController extends Controller
{
    public function index()
    {
        $recepients = [
            'bomsiwor@gmail.com',
        ];
        foreach ($recepients as $recipient) :
            Mail::to($recipient)->send(new TestEmail());
        endforeach;

        return "sudah terkirim";
    }

    public function bulkEmail()
    {
        $job = Mail::to("sembarang@mail.com")->send(new TestEmail());
        TestBulkEmail::dispatch($job)->delay(now()->addSeconds(30));

        echo "Terkirim";
    }
}
