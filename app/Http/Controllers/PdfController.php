<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Invitation;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    // Generate undangan dummy pertama atau semua user
    public function sendInvitation()
    {
        $users = User::all();

        Storage::makeDirectory('public/bukti');

        foreach ($users as $user) {
            $fileName = 'bukti/undangan_'.$user->id.'.pdf';
            $fullPath = storage_path('app/public/'.$fileName);

            $pdfData = [
                'nama' => $user->name,
                'keperluan' => 'Simulasi Kebakaran',
                'tanggal' => 'Senin, 10 Januari 2026',
                'jam' => '09:00 - 10:00 WIB',
                // Optional: bisa ditambahkan jabatan atau departemen
                // 'jabatan' => $user->jabatan,
                // 'departemen' => $user->departemen,
            ];

            $pdf = Pdf::loadView('suratUndangan', $pdfData);
            $pdf->save($fullPath);


            Invitation::updateOrCreate(
                ['user_id' => $user->id],
                [
                    'file_path' => $fileName,
                    'topik' => $pdfData['keperluan'],
                    'tanggal' => $pdfData['tanggal'],
                    'jam' => $pdfData['jam'],
                ]
            );
        }

        return redirect()->back()->with('success', 'Undangan berhasil dibuat!');
    }

    // Menampilkan daftar undangan
    public function index()
    {
        $invitations = Invitation::with('user')->get();

        return view('undanganList', compact('invitations'));
    }

    // Download file undangan
    public function download($id)
    {
        $invitation = Invitation::findOrFail($id);
        $file = storage_path('app/public/'.$invitation->file_path);

        if (file_exists($file)) {
            return response()->download($file);
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }
}
