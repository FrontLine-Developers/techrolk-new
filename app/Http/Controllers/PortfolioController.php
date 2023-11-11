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
 
}
