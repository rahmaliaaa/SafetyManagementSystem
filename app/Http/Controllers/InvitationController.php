<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitation;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class InvitationController extends Controller
{
    // Tampilkan daftar undangan
    public function index()
    {
        $invitations = Invitation::with('user')->get(); // eager load user
        return view('invitations.index', compact('invitations'));
    }

    // Download PDF undangan
    public function download($id)
    {
        $invitation = Invitation::findOrFail($id);
        $filePath = 'public/' . $invitation->file_path;

        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }
}
