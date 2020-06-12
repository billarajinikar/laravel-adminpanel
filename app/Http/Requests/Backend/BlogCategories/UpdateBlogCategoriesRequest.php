<?php

namespace App\Http\Requests\Backend\BlogCategories;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateBlogCategoriesRequest.
 */
class UpdateBlogCategoriesRequest extends FormRequest
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
            'name' => 'required|max:191|unique:blog_categories,name,'.$this->segment(4),
        ];
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.unique'   => 'Blog category name already exists, please enter a different name.',
            'name.required' => 'Blog category name must required',
            'name.max'      => 'Blog category may not be greater than 191 characters.',
        ];
    }
}
