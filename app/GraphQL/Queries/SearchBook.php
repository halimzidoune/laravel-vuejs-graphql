<?php

namespace App\GraphQL\Queries;

use App\Models\Book;

final class SearchBook
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        return Book::where('title', 'like', '%'.$args['search'].'%')->get();
    }
}
