<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'referred_user_id'];

    // Define the relationship to the user who made the referral
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define the relationship to the referred user
    public function referredUser()
    {
        return $this->belongsTo(User::class, 'referred_user_id');
    }
}
