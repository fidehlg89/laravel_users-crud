<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\State;

class City extends Model
{
    //use HasFactory;

    protected $table="city";

    protected $primaryKey="id";

    protected $fillable = ["name", "city_code"];

    public $timestamps=false;

    public function state(){
        return $this->belongsTo(State::class, 'states_id');
    }

    public function clients(){
        return $this->hasMany(Client::class);
    }    
    
}
