<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'site_title',
        'site_logo',
        'logo_path',
        'site_url',
        'Paypal-key',
        'stirpe-key',
        'stirpe-secret-key',
        'address',
        'email',
        'phone',
        'facebooK',
        'google',
        'video_name',
        'video_path',
        'dow',
        'Payment-mt',
        'status',
        'start_time',
        'close_time',
    ];
}
