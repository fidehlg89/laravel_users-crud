<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class State extends Model
{
    //use HasFactory;

    protected $table="states";

    protected $primaryKey="id";

    protected $fillable = ["name"];

    public $timestamps=false;

    public function city(){
        return $this->hasMany(City::class);
    }    
    

}
