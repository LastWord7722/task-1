<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string|min:2|max:20',
            'poster_img' => 'nullable|image|dimensions:min_width=140,min_height=240', // не знал какие установить значение,
        ];                                                                            //поэтому подсмотрел их с сайта https://multiplex.ua/
    }
}
