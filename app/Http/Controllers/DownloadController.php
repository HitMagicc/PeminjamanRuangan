<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Ruangan;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download($id) {
        $permintaan = Permintaan::with(['ruangan.gedung','berkas.jurusan','user'])->findOrFail($id);
        // dd($ruangan);
        $html = view('pdf', compact('permintaan'))->render();
        $dompdf = new Dompdf();
    
        $dompdf->loadHtml($html);
    
        $dompdf->render();
    
        return $dompdf->stream('document.pdf');
    }
}
