<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Home page
use App\Headers;
use App\Slides;
use App\About_home;
use App\Reports;
use App\Our_mission;
use App\Clints_home;
use App\News_home;
use App\Contact_home;
use App\Footers;
use App\Category_services;
use App\Category_products;
// Plants page
use App\Slider_plants; 
use App\Plants;
use App\Content_plants;
//product and services 
use App\Product_titles;
use App\Products;
use App\services_titles;
use App\services;
// Academy page 
use App\Titles_academys;
use App\Employes;
// about us page and contact us page
use App\AboutUs_titles;
use App\Content_abotutuss;
use App\ContactUs_dates;
use App\Messages;

// Blog page
use App\Blog_titles;
use App\Posts;



class siteController extends Controller
{
    
     public function master()
    {
      
       $CatService = Category_services::all();  
       $CatProduct = Category_products::all();

    	return view( 'master_page', compact('headers','slides','about','services','reports','products','missions','clints','news','contacts','footers','CatService','CatProduct'));
    }
    
    public function home()
    {
        
       $headers = Headers::orderBy('id','desc')->first();
       $slides = Slides::all();
       $about = About_home::orderBy('id','desc')->first();
       $services = services::all();
       $reports = Reports::orderBy('id','desc')->first();
       $products = Products::all();
       $missions = Our_mission::orderBy('id','desc')->first();
       $clints = Clints_home::all();
       $news = News_home::orderBy('id','desc')->first();
       $posts = Posts::orderBy('id','desc')->first();
       $footers = Footers::orderBy('id','desc')->first();
       $contactData = ContactUs_dates::orderBy('id','desc')->first();
      
    	return view( 'home', compact('headers','slides','about','services','reports','products','missions','clints','news','$posts','footers','contactData'));
    }

    public function messagesHome(Request $request)
    {
     $this->validate($request , ['email'=>'Email','phone'=>'numeric']);
     
     $names = $request->input('name');
     $emails = $request->input('email');
     $phones = $request->input('phone');
     $discus = $request->input('discuss');
     
      $message = new Messages ; 
      $message->name = $names ;
      $message->email =  $emails;
      $message->phone = $phones;
      $message->message = $discus;
        $message->save();
        return back()->with('message', 'Message sent successfully √ √ ');
      
    }

    public function wltturPlants()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = Slider_plants::orderBy('id','desc')->first();
      $plants = Plants::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();

      $footers = Footers::orderBy('id','desc')->first();
      
       return view('wittur_plants' , compact('headers','titlePage','plants','contactData','footers'));
    }

    public function products()
    {
        $product = new Products ;
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = Product_titles::orderBy('id','desc')->first();
      $products = Products::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      
       return view('products' , compact('headers','titlePage','products','contactData','footers','$product'));
    }
    
    public function Product($product)
    {
      $headers = Headers::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      $titlePage = Product_titles::orderBy('id','desc')->first();
      $products = Products::where('custom_url',$product)->first();
      return view('sngil_product',compact('products','titlePage','headers','footers'));

    }
     public function prod_singl()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = Product_titles::orderBy('id','desc')->first();
      $products = Products::all();
      $footers = Footers::orderBy('id','desc')->first();
      
      
       
       return view('sngil_product' , compact('headers','titlePage','products','footers'));
    }

    public function services()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlesPage = services_titles::orderBy('id','desc')->first();
      $services = services::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      
       
       return view('services' , compact('headers','titlesPage','services','contactData','footers'));
    }
    
    public function Service($service)
    {
      $headers = Headers::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      $titlePage = services_titles::orderBy('id','desc')->first();
      $services = services::where('custom_url',$service)->first();
      return view('sngil_service',compact('services','titlePage','headers','footers'));

    }

    public function wltturAcademy()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePages = Titles_academys::orderBy('id','desc')->first();
      $employes = Employes::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      
       
       return view('wittur_academy' , compact('headers','titlePages','employes','contactData','footers'));
    }

     public function aboutUs()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = AboutUs_titles::orderBy('id','desc')->first();
      $abouts = Content_abotutuss::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      
       return view('about_us' , compact('headers','footers','titlePage','abouts','contactData'));
    }

     public function contactUs()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
    
    return view('contact_us' , compact('headers','contactData','footers'));
    }

    public function messages(Request $request)
    {
     
      $messages = new Messages ; 
      $messages->name = $request->name;
      $messages->email = $request->email;
      $messages->phone = $request->phone;
      $messages->select = $request->selectSample;
      $messages->message = $request->message;
        $messages->save(); 
        return back()->with('message', 'Message sent successfully √ √');
      
    }


     public function newsBlog()
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = Blog_titles::orderBy('id','desc')->first();
      $posts = Posts::all();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
     
       
       return view('news' , compact('headers','titlePage','posts','contactData','footers'));
    }

     public function newsDetils($post)
    {
      $headers = Headers::orderBy('id','desc')->first();
      $titlePage = Blog_titles::orderBy('id','desc')->first();
      $postss = Posts::where('custom_url',$post)->first();
      $contactData = ContactUs_dates::orderBy('id','desc')->first();
      $footers = Footers::orderBy('id','desc')->first();
      
       
       return view('news_detils' , compact('headers','titlePage','postss','contactData','footers'));
    }




}
