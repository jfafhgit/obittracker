<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function funeralHomes()
    {
        return $this->hasMany(FuneralHome::class);
    }

    public function churches()
    {
        return $this->hasMany(Church::class);
    }

    public function cemeteries()
    {
        return $this->hasMany(Cemetery::class);
    }

    public function healthFacilities()
    {
        return $this->hasMany(HealthFacility::class);
    }

    public function hospices()
    {
        return $this->hasMany(Hospice::class);
    }

    public function directors()
    {
        return $this->hasMany(Director::class);
    }
}
