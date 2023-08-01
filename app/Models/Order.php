<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    use HasFactory;

    private string $name;

    protected $table = 'order';

    protected $fillable = ['amount', 'name'];

}
