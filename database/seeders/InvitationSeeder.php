<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invitation;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class InvitationSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan folder 'bukti' ada
        Storage::makeDirectory('public/bukti');

        $users = User::all();

        foreach ($users as $user) {
            $fileName = 'bukti/undangan_' . $user->id . '.pdf';
            $fullPath = storage_path('app/public/' . $fileName);

            // Data untuk PDF & DB
            $pdfData = [
                'nama' => $user->name,
                'keperluan' => 'Simulasi Kebakaran',
                'tanggal' => 'Senin, 10 Januari 2026',
                'jam' => '09:00 - 10:00 WIB',
            ];


            // Generate PDF menggunakan view suratUndangan.blade.php
            $pdf = Pdf::loadView('suratUndangan', $pdfData);
            $pdf->save($fullPath);

            // Simpan data undangan di DB
            Invitation::updateOrCreate(
                ['user_id' => $user->id], // jika sudah ada, update
                [
                    'file_path' => $fileName,
                    'topik' => $pdfData['keperluan'],
                    'tanggal' => $pdfData['tanggal'],
                    'jam' => $pdfData['jam'],
                ]
            );
        }
    }
}
