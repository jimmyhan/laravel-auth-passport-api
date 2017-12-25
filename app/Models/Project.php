<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 *
 * @package App\Models
 * @property string $title
 * @property text $description
 */
class Project extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description'];
}
