<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Url extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'normal_url',
        'shortened_url'
    ];

    public function getUrlsAdmin(string $search = null)
    {
        $urls = $this->where(function ($query) use ($search) {
            $query->where('normal_url', $search);
            $query->orWhere('title', 'LIKE', "%{$search}%");
        })->paginate(5);

        return $urls;
    }

    public function getUrlsUser(string $search = null)
    {
        $urls = $this->where(function ($query) use ($search) {
            $userId = Auth::user()->id;

            $query->where('normal_url', $search);
            $query->orWhere('title', 'LIKE', "%{$search}%");
            $query->where('user_id', $userId);
        })->paginate(5);

        return $urls;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}