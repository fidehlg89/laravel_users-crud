<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Client extends Model
{
    //use HasFactory;\

    protected $table="client";

    protected $primaryKey="id";

    protected $fillable = ["name", "app", "ci", "address", "phone", "city_id"];

    public $timestamps=false;
    
    public function city(){
        return $this->belongsTo(City::class, 'city_id');    
    }

    public function shipments(){
        return $this->hasMany(Shipment::class, 'id');
    }

    public function fullName(){
        $client=$this->attributes;

        return $client['name'].' '.$client['app'];
    } 
}
