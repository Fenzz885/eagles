<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiKnowledge extends Model
{
    protected $table = 'ai_knowledges'; // Menyesuaikan nama tabel bentuk jamak

    protected $fillable = [
        'keyword',
        'question',
        'answer',
    ];
}