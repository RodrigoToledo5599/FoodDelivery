<?php


namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;




class Pratos extends Model{
    use HasFactory, Notifiable,HasApiTokens;
    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    protected $table = 'pratos';
}
