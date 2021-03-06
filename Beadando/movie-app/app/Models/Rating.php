<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable  = ['comment', 'rating','user_id','movie_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function movie(){
        return $this->belongsTo(Movie::class);
    }
    public function rules()
    {
        return array(
            array('user_id, movie_id', 'unique')
        );
    }
}
