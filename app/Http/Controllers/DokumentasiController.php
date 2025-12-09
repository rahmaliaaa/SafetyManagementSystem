<?php

namespace App\Http\Controllers;

use App\Models\Dokumentasi;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DokumentasiController extends Controller
{
    public function create($invitationId)
    {
        $invitation = Invitation::findOrFail($invitationId);
        return view('dokumentasi.create', compact('invitation'));
    }

    public function store(Request $request, $invitationId)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $filePath = $request->file('file')->store('public/dokumentasi');

        Dokumentasi::create([
            'invitation_id' => $invitationId,
            'judul' => $request->judul,
            'file_path' => $filePath,
        ]);

        return redirect()->route('undangan.list')->with('success', 'Dokumentasi berhasil ditambahkan!');
    }

    public function download($id)
    {
        $dok = Dokumentasi::findOrFail($id);
        return response()->download(storage_path('app/'.$dok->file_path));
    }
}
