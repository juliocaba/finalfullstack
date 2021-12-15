<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Socio;
use App\Repositories\BaseRepository;

/**
 * Class SocioRepository
 * @package App\Repositories\Admin
 * @version November 27, 2021, 3:12 am UTC
*/

class SocioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'dni',
        'direction',
        'phone',
        'estado',
        'email'
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
        return Socio::class;
    }
}
