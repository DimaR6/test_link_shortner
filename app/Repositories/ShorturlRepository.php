<?php

namespace App\Repositories;

use App\Models\Shorturl;
use App\Repositories\BaseRepository;

/**
 * Class ShorturlRepository
 * @package App\Repositories
 * @version March 18, 2022, 12:08 pm UTC
*/

class ShorturlRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'original_url',
        'short_url',
        'redirect_count'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Shorturl::class;
    }
}
