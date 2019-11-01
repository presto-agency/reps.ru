<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserReplayRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|between:1,255',

            'user_replay' => 'required|string|in:0,1',
            'type_id' => 'required|string|exists:replay_types,id',
            'map_id' => 'required|string|exists:replay_maps,id',


            'first_race_id' => 'required|string|exists:races,id',
            'first_country_id' => 'required|string|exists:countries,id',
            'first_location' => 'nullable|integer|min:1|max:20',

            'second_race_id' => 'required|string|exists:races,id',
            'second_country_id' => 'required|string|exists:countries,id',
            'second_location' => 'nullable|integer|min:1|max:20',

            'content' => 'required|string|between:1,2000',

            'file' => 'required|file|max:5120',
        ];
    }
}
