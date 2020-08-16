<?php namespace Magiczne\Resume\Models;

use Illuminate\Support\Carbon;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use RainLab\Translate\Behaviors\TranslatableModel;

/**
 * Class Info
 * @package Magiczne\Resume\Models
 *
 * @property int $id
 * @property string $icon
 * @property string $title
 * @property string $value
 * @property boolean $menu
 * @property int $sort_order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
class Info extends Model
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
     * Model casts
     *
     * @var string[]
     */
    public $casts = [
        'menu' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public $rules = [
        'icon' => 'required|string|max:191',
        'title' => 'required|string|max:191',
        'value' => 'required|string|max:191'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'magiczne_resume_info';

    /**
     * List of translatable columns
     *
     * @var string[]
     */
    public $translatable = [
        'title', 'value'
    ];
}
