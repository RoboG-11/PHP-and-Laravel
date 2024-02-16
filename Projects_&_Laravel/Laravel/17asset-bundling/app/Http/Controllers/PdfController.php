<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function download()
    {
        $data = 'Juanjo Ruiz';
        $pdf = Pdf::loadView('pdf.example', ['data' => $data]);
        return $pdf->download('my-example.pdf');
    }
}
