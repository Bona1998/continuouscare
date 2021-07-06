<?php

namespace App\Repositories;

use App\Models\Services;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class ServicesRepository
 * @package App\Repositories
 * @version July 4, 2021, 3:24 pm UTC
*/

class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'image_url'
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
        return Services::class;
    }
    public function createPost(Request $request){
        $file = $request->file('image_url');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$extension;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['image_url'] = $path;
       
        return $this->create($input);
    }
}
