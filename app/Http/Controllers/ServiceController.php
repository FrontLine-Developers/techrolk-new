<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Portfolio;
class ServiceController extends Controller
{
    public function Services()
    {
        $books = Book::all();
       
        return view('Services', compact('books'));
    }
    
    /*public function portfoliosByBook($book_id)
    {
        // Retrieve the book and its portfolios
        $book = Book::findOrFail($book_id);
        $portfolios = Portfolio::where('book_id', $book_id)->get();
    
        return view('portfolio', compact('book', 'portfolios'));
    }*/
    /*public function Home()
    {
        $books = Book::all();
        $portfolios = Portfolio::all();
        return view('index', compact('books','portfolios'));
    }*/

   /* public function portfoliosByPortfolio(Request $request, $portfolio_id)
    {
        $portfolio = Portfolio::findOrFail($portfolio_id);
        
        // Return the view with the portfolio details
        return view('indi_portfolio', compact('portfolio'));
    }*/
}