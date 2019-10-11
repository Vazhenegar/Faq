<?php

namespace faq\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


/* @method static find($faq)
 */

class Faq extends Model
{
    protected $fillable = ['q', 'a'];
}
