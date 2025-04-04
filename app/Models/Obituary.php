<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obituary extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'first_name',
        'last_name',
        'dod',
        'zip_code',
        'city',
        'state',
        'disposition',
        'funeral_home_id',
        'church_id',
        'cemetery_id',
        'health_facility_id',
        'hospice_id',
        'director_id',
        'campaign',
        'user_id',
        'area_id'
    ];

    public function funeralHome()
    {
        return $this->belongsTo(FuneralHome::class);
    }

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function cemetery()
    {
        return $this->belongsTo(Cemetery::class);
    }

    public function healthFacility()
    {
        return $this->belongsTo(HealthFacility::class);
    }

    public function hospice()
    {
        return $this->belongsTo(Hospice::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
