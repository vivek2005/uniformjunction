<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePayment extends Model
{
    use HasFactory;
    protected $table = "oc_course_payment";
    protected $primaryKey = "id";
}
