<?php

namespace App\Services;

use App\Http\Requests\Admin\Review\StoreRequest;
use App\Models\Image;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class ReviewService
{
    public function  store($data)
    {
        try {
            DB::transaction(function () use ($data) {
                $review = $this->storeReview($data['review'],$data['user_id']);
                $this->storeImage($review,$data['image_path']);
            });
        }catch (\Exception $e){
            \Log::info($e->getMessage());
        }
    }
    protected function storeReview($data,$user_id): Review
    {
        $review = null;
        if (isset($data['id'])) {
        $review = Review::updateOrCreate(
            ['id' => $data['id']]
            , [
            'name' => $data['name'],
            'rates' => $data['rates'],
            'title' => $data['title'],
            'description' => $data['description'],
            'published' => $data['published'],
            'user_id' => $user_id,
        ]);
    }else{
        $review = Review::create(
            [
            'name' => $data['name'],
            'rates' => $data['rates'],
            'title' => $data['title'],
            'description' => $data['description'],
            'published' => $data['published'],
            'user_id' => $user_id,
        ]);
    }
        return $review;
    }
    protected function storeImage(Review $review,$image_path)
    {
        Image::updateOrCreate(
            [
                'imageable_type' => Review::class,
                'imageable_id' => $review->id]
            ,[
            'imageable_id' => $review->id,
            'imageable_type' => Review::class,
            'small_uri' => $image_path,
            'big_uri' => $image_path,
        ]);
    }
}
