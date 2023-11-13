<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Book;
use App\Models\Portfolio;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $books = Book::all(); // Adjust this based on your actual data retrieval logic
        View::share('books', $books);
    }
}
