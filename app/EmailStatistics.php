<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailStatistics extends Model
{
    protected $table = 'email_statustics';
    protected $fillable = ['firstname','lastname','firma','street','plz'
        ,'ort','emailaddress','display_option','desinex_option','created_at','updated_at'];
}
