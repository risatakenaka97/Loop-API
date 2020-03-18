<?php

namespace App\Http\Base\Request;

use Urameshibr\Requests\FormRequest;
use Waavi\Sanitizer\Laravel\SanitizesInput;

abstract class BaseFormRequest extends FormRequest
{
    use SanitizesInput;

    /**
     *  Request sanitize resolver
     */
    public function validateResolved()
    {
        {
            $this->sanitize();
            parent::validateResolved();
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    abstract public function rules();

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    abstract public function authorize();


}
