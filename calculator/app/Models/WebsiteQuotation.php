<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteQuotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'mobile',

        'website_type',
        'page_number',
        'mobile',
        'domain',
        'email_qty',
        'hosting',
        'pages_name',
        'special_services',
        'technology',
        'extra_requirement',
        'files'
    ];
}
