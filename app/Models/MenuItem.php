<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubMenuItem;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'status'
    ];

    public function submenuItems()
    {
        return $this->hasMany(SubMenuItem::class)->where('status', 'Enabled');
    }
}
