<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Portfolio;
use Illuminate\Support\Str;
class PortfolioController extends Controller
{
    /*public function portfolio()
    {
        $portfolios = Portfolio::all();
        $books = Book::all();
        return view('portfolio', compact('portfolios','books'));
    }*/
 
    public function showPortfoliosByBook()
{
    // Find the book by its name
    $book = Book::where('name', 'DRONE SOLUTIONS')->firstOrFail();

    // Retrieve all portfolios related to the book
    $portfolios = $book->portfolios;

    return view('portfolio2', compact('portfolios', 'book'));
}

public function showPortfolioInBook($portfolioTitle)
{
   // Find the book by its name
   $book = Book::where('name', 'DRONE SOLUTIONS')->firstOrFail();

   // Replace hyphens with spaces in the portfolio title
   $portfolioTitle = str_replace('-', ' ', $portfolioTitle);

   // Find the portfolio by its title within the specified book
   $portfolio = Portfolio::where('title', $portfolioTitle)
       ->where('book_id', $book->id)
       ->firstOrFail();

    return view('indi_portfolio', compact('portfolio', 'book'));
}

}
