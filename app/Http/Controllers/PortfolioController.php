<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Portfolio;
class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $books = Book::all();
        return view('portfolio', compact('portfolios','books'));
    }
 
    public function showPortfoliosByBook()
{
    // Find the book by its name
    $book = Book::where('name', 'DRONE SOLUTIONS')->firstOrFail();

    // Retrieve all portfolios related to the book
    $portfolios = $book->portfolios;

    return view('portfolio2', compact('portfolios', 'book'));
}

public function showPortfolioInBook($portfolioId)
{
    // Find the book by its name
    $book = Book::where('name', 'DRONE SOLUTIONS')->firstOrFail();

    // Find the portfolio by its ID within the specified book
    $portfolio = Portfolio::where('id', $portfolioId)
        ->where('book_id', $book->id)
        ->firstOrFail();

    return view('indi_portfolio', compact('portfolio', 'book'));
}

}
