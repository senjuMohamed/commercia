<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import du trait HasFactory
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory; // Appliquer le trait HasFactory dans le modèle

    protected $fillable = ['name', 'email', 'message'];
}
