<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = "student";
    protected $primaryKey = 'student_id';
    public $timestamps = false;
    protected $fillable = [
        'student_id', 'class_id', 'class_name', 'student_name','size','tassel_and_shawl_color','scarf_color',
    ];
}
