<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;

    use SoftDeletes;
    public $someProperty;
    protected $table = 'profiles';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function mudurluk()
    {
        return $this->belongsTo(Daire::class, 'mudurluk_id', 'id');
    }
}
