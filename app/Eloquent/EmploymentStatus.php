<?php

/**
 * This file is part of the HRis Software package.
 *
 * HRis - Human Resource and Payroll System
 *
 * @link    http://github.com/HB-Co/HRis
 *
 */

namespace HRis\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmploymentStatus
 * @package HRis\Eloquent
 */
class EmploymentStatus extends Model
{
    use HasPlaceholder;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'class'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employment_statuses';
}
