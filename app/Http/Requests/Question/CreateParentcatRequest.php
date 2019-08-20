<?php

namespace Vanguard\Http\Requests\Question;

use Vanguard\Http\Requests\Request;
use Vanguard\Question;

class CreateParentcatRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
        ];
        return $rules;
    }
}
