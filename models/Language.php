<?php namespace Magiczne\Resume\Models;

use Illuminate\Support\Carbon;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

/**
 * Class Language
 * @package Magiczne\Resume\Models
 *
 * @property int $id
 * @property string $language
 * @property string $description
 * @property int $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Language extends Model
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
        'language' => 'required|string|max:191',
        'description' => 'required|string|max:191'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'magiczne_resume_languages';

    /**
     * List of translatable columns
     *
     * @var string[]
     */
    public $translatable = [
        'language', 'description'
    ];
}
