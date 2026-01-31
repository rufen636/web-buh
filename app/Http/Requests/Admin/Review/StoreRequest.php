<?php

namespace App\Http\Requests\Admin\Review;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'review.id'=>'nullable|string',
            'review.name'=>'required|string',
            'review.rates'=>'nullable|numeric',
            'review.title'=>'nullable|string',
            'review.description'=>'required|string',
            'review.published'=>'required|string',
            'review.image' =>'nullable|array',
//            'review.image.small_uri' =>'nullable|string',
        ];
    }
    public function passedValidation()
    {
        $review = $this->validated()['review'];
        if (isset($review['image']['small_uri'])) {
            $parsedUrl = parse_url($review['image']['small_uri']);
            $path = $parsedUrl['path'] ?? '';
            $imagePath = str_replace('/storage/', '', $path);
            $image_path = $imagePath;
        }else {
            $image_path = Storage::disk('public')->put('/images', $review['image']['file']);
        }
        if (isset($review['published'])) {
            $review['published'] = (boolean)$review['published'];
        }
        return $this->merge([
            'review'=>[
           ...$review
            ],
            'user_id'=>Auth::user()->id,
            'image_path'=>$image_path
        ]);
    }
}
