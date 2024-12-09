<?php

use App\Transporter\Requests\CommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/comment/{postId}', function ($postId) {
    return CommentRequest::build()->withQuery(
        query: [
            'postId' => $postId,
        ],
    )->send()->json();
});
