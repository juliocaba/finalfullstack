<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Comentario;
use App\Repositories\BaseRepository;

/**
 * Class ComentarioRepository
 * @package App\Repositories\Admin
 * @version December 10, 2021, 7:27 pm UTC
*/

class ComentarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'subject',
        'message'
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
        return Comentario::class;
    }
}
