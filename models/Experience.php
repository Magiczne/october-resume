<?php namespace Magiczne\Resume\Models;

use Illuminate\Support\Carbon;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

/**
 * Class Experience
 * @package Magiczne\Resume\Models
 *
 * @property int $id
 * @property string $time_period
 * @property string $content
 * @property int $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Experience extends Model
{
    use Sortable;
    use Validation;

    /**
     * Behaviors implemented by this model.
     *
     * @var array
     */
    public $implement = [
        '@RainLab.Translate.Behaviors.TranslatableModel'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public $rules = [
        'time_period' => 'required|string|max:191',
        'content' => 'required|string'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'magiczne_resume_experience';

    /**
     * List of translatable columns
     *
     * @var string[]
     */
    public $translatable = [
        'time_period', 'content'
    ];
}
