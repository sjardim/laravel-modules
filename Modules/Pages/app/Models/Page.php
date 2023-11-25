<?php

namespace Modules\Pages\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Pages\Database\factories\PageFactory;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): PageFactory
    {
        //return PageFactory::new();
    }
}
