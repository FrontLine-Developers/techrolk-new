<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    public function dashboard (){
        $UStype=Auth::user()->UStype;

        if($UStype== "1"){
            return view('Admin.Dashboard.index');
    }
    else{
        return view("index");
    }
}
/*------------------------------------------------*/
public function index()
    {
        return view('admin.service_add');
    }
public function aservice(Request $request)
{
    $input = $request->all();
    Book::create($input);
    return redirect()->back();
}
public function show($id)
    {
        $book = Book::find($id);
        return view('admin.show',compact('book'));
    }
    public function showall()
    {
        $books = Book::all();
        return view('admin.showall', compact('books'));
    }
/*---------------------------------*/
public function dashboard_index()
    {
        return view('admin.Dashboard.index');
    }
    public function dashboard_services()
    {
        $books = Book::all();
        return view('admin.Dashboard.Services', compact('books'));
    }
    public function Service_index()
    {
        return view('admin.Dashboard.Add_service');
    }
    /*public function dashboard_add_services(Request $request)
    {
        $input = $request->all();
        Book::create($input);
        return redirect()->back();
    }*/
    public function dashboard_add_services(Request $request)
{
   // Create a new Book instance
   $book = new Book;

   // Populate the book model with the form data
   $book->name = $request->name;
   
   $book->description = $request->description;

   // Handle image upload and set the image field
   if ($request->hasFile('image')) {
       $image = $request->file('image');
       $imageName = time() . '.' . $image->getClientOriginalExtension();

       // Move the uploaded image to the appropriate storage location
       $image->move('uploads', $imageName);

       // Set the image field in the book model
       $book->image = $imageName;
   }

   // Save the book record to the database
   $book->save();

   return redirect()->back()->with('message',"Service added successfully");
}
    public function Service_Details($id)
    {
        $book = Book::find($id);
        return view('Admin.Dashboard.Edit_service',compact('book'));
    }
    public function Edit_Service_Details(Request $request, $id)
    {
        $book=Book::find($id);
            
        $book->name=$request-> name;
        $book->description=$request-> description;
       
        $image=$request->image;
        if($image){
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('uploads',$imagename);
         $book->image=$imagename;

        }
        
       
        $book->save();
        return redirect()->back();
    }
    public function Delete_Service_Details($id){
        $book=Book::find($id);
        $book->delete();
        return redirect()->back()->with('message',"Service deleted successfully");
    }

    public function Portfolio()
    {
        $portfolios = Portfolio::all();
        return view('admin.Dashboard.Portfolio', compact('portfolios'));
    }
    public function Portfolio_Index()
    {
        $books = Book::all();
        return view('admin.Dashboard.Add_portfolio',compact('books'));
    }
    public function Add_Portfolio(Request $request)
    {
        // Create a new Portfolio instance
        $portfolio = new Portfolio;
    
        // Populate the portfolio model with the form data
        $portfolio->title = $request->title;
        $portfolio->Short_description = $request->Short_description;
        $portfolio->description = $request->description;
        $portfolio->youtube_video_url = $request->youtube_video_url;
        $portfolio->book_id = $request->book_id;
    
        // Handle image upload and set the image fields
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '-image1.' . $image1->getClientOriginalExtension();
            $image1->move('uploadsP', $imageName1);
            $portfolio->image1 =$imageName1;
        }
    
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '-image2.' . $image2->getClientOriginalExtension();
            $image2->move('uploadsP', $imageName2);
            $portfolio->image2 =$imageName2;
        }
    
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '-image3.' . $image3->getClientOriginalExtension();
            $image3->move('uploadsP', $imageName3);
            $portfolio->image3 =$imageName3;
        }
    
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $imageName4 = time() . '-image4.' . $image4->getClientOriginalExtension();
            $image4->move('uploadsP', $imageName4);
            $portfolio->image4 =$imageName4;
        }
    
        // Save the portfolio record to the database
        $portfolio->save();
    
        return redirect()->back()->with('message', "Portfolio item added successfully");
    }
    
    public function portfolio_Details($id)
    {
        $portfolio = Portfolio::find($id);
        $books = Book::all();
        return view('Admin.Dashboard.Edit_portfolio',compact('portfolio', 'books'));
    }
    public function Edit_portfolio_Details(Request $request, $id)
    {
        $portfolio=Portfolio::find($id);
            
        $portfolio->title=$request-> title;
        $portfolio->Short_description = $request->Short_description;
        $portfolio->description=$request-> description;
        $portfolio->youtube_video_url=$request-> youtube_video_url;
        $portfolio->book_id = $request->book_id;
        $image1=$request->image1;
        if($image1){
         $imagename1=time().'.'.$image1->getClientOriginalExtension();
         $request->image1->move('uploadsP',$imagename1);
         $portfolio->image1=$imagename1;

        }
        $image2=$request->image2;
        if($image2){
         $imagename2=time().'.'.$image2->getClientOriginalExtension();
         $request->image2->move('uploadsP',$imagename2);
         $portfolio->image2=$imagename2;

        }
        $image3=$request->image3;
        if($image3){
         $imagename3=time().'.'.$image3->getClientOriginalExtension();
         $request->image3->move('uploadsP',$imagename3);
         $portfolio->image3=$imagename3;

        }
        $image4=$request->image4;
        if($image4){
         $imagename4=time().'.'.$image4->getClientOriginalExtension();
         $request->image4->move('uploadsP',$imagename4);
         $portfolio->image4=$imagename4;

        }
       
        $portfolio->save();
        return redirect()->back();
    }
    public function Delete_portfolio_Details($id){
        $portfolio=Portfolio::find($id);
        // Delete the associated image files from the folder
    if ($portfolio->image1) {
        $imagePath = 'uploadsP/' . $portfolio->image4;
        $this->deleteImageFile($imagePath);
    }

    if ($portfolio->image2) {
        $this->deleteImageFile($portfolio->image2);
    }

    if ($portfolio->image3) {
        $this->deleteImageFile($portfolio->image3);
    }

    if ($portfolio->image4) {
        $this->deleteImageFile($portfolio->image4);
    }
        $portfolio->delete();
        return redirect()->back()->with('message',"Service deleted successfully");
    }
    private function deleteImageFile($imagePath) {
        // Use the "public" disk to delete the file directly
        Storage::disk('public')->delete($imagePath);
    }

   
}

