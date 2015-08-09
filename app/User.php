<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Cmgmyr\Messenger\Traits\Messagable;
use DB;
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;
    use Messagable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function profiles()
    {
        return $this->hasMany('Profile');
    }

    public function interests()
    {
        return $this->belongsToMany('App\Interest', 'user_interests', 'user_id', 'interest_id');
    }

    public function scopeDistance($query, $lat, $lng, $radius = 100, $unit = "km")
{
    $unit = ($unit === "km") ? 6378.10 : 3963.17;
    $lat = (float) $lat;
    $lng = (float) $lng;
    $radius = (double) $radius;
    return $query->having('distance','<=',$radius)
                ->select(DB::raw("*,
                            ($unit * ACOS(COS(RADIANS($lat))
                                * COS(RADIANS(location_lat))
                                * COS(RADIANS($lng) - RADIANS(location_lon))
                                + SIN(RADIANS($lat))
                                * SIN(RADIANS(location_lat)))) AS distance")
                )->orderBy('distance','asc');
}
}
