<?php

namespace App\Transporter\Requests;

use Illuminate\Http\Client\PendingRequest;
use JustSteveKing\Transporter\Request;

class CommentRequest extends Request
{
    protected string $method = 'GET';
    protected string $baseUrl = 'https://jsonplaceholder.typicode.com';
    protected string $path = '/comments';

    protected array $data = [];

    protected function withRequest(PendingRequest $request): void
    {
        // $request->withToken('foobar');
    }
}
