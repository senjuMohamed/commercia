<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; // Import du modèle, pas du trait HasFactory

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::create($validated); // Utilisation du modèle ContactMessage

        return redirect('/contact')->with('message', 'Message envoyé avec succès !');
    }
}
