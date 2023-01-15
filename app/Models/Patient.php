<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
 use HasFactory;

 protected $table = 'patients';

 protected $fillable = [
  'user_id',
  'name',
  'birthdate',
  'ci',
  'phone',
  'address',
 ];

 public function user()
 {
  return $this->belongsTo(User::class);
 }
}