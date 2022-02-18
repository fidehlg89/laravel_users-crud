<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Shipment extends Model
{
    //use HasFactory;
    protected $table="shipment";

    protected $primaryKey="id";

    protected $fillable = [
        "shipper", "packages", "bl", "weight", "description",
        "type", "receipt", "client_id"
    ];
    
    public $timestamps=false;

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');    
    }


}
