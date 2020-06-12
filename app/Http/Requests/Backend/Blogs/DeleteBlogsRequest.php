<?php

namespace App\Http\Requests\Backend\Blogs;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class DeleteBlogsRequest.
 */
class DeleteBlogsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//access()->allow('delete-blog');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
