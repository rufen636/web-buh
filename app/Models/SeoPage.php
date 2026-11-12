<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $path
 * @property string $title
 * @property string $description
 */
final class SeoPage extends Model
{
    /** @var list<string> */
    protected $fillable = ['path', 'title', 'description'];
}
