<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Review\StoreRequest;
use App\Http\Resources\Admin\ReviewResource;
use App\Models\Review;
use App\Services\ReviewService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewController extends Controller
{
    protected $reviewService;

    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ReviewResource::collection(Review::all())->resolve();
        return Inertia::render('Admin/Review/Index', ['reviews' => $reviews]);
    }

    public function create()
    {
        return Inertia::render('Admin/Review/Create', []);
    }
    public function edit(Review $review)
    {
        $review = ReviewResource::make($review)->resolve();
        return Inertia::render('Admin/Review/Edit', ['review' => $review]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $this->reviewService->store($data);
        return redirect()->route('admin.reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return response()->json(['message' => 'Product Deleted'], 201);
    }
}
