<?php namespace Magiczne\Resume\Models;

use Illuminate\Support\Carbon;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use RainLab\Translate\Behaviors\TranslatableModel;

/**
 * Class Social
 * @package Magiczne\Resume\Models
 *
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $url
 * @property int $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Social extends Model
{
    use Sortable;
    use Validation;

    /**
     * Behaviors implemented by this model.
     *
     * @var array
     */
    public $implement = [
        TranslatableModel::class
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public $rules = [
        'icon' => 'required|string|max:191',
        'name' => 'required|string|max:191',
        'url' => 'required|string|url|max:191'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'magiczne_resume_socials';

    /**
     * List of translatable columns
     *
     * @var string[]
     */
    public $translatable = [
        'name', 'url'
    ];
}
