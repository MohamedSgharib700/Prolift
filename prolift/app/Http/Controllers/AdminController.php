<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Headers;
use App\Footers;
use App\About_home;
use App\Slides;
use App\services;
use App\Clints_home;
use App\Our_mission;
use App\Products;
use App\Reports;
use App\News_home;
use App\Contact_home;
//plants page
use App\Slider_plants;
use App\Plants;
use App\Content_plants;
//academy page
use App\Titles_academys;
use App\Employes;
//about page and contact page
use App\AboutUs_titles;
use App\Content_abotutuss;
use App\ContactUs_dates;
use App\Messages;
//blog page
use App\Blog_titles;
use App\Posts;






class AdminController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }


    public function home()
    {
      $report = Reports::orderBy('id','desc')->first();
      return view('admin.home.home',compact('report'));
    }

    public function userShow()
    {
        $shows = User::all();

        return view('admin.home.user_show' , compact('shows'));
    }

    public function userDelete(user $user)
    {
       $user ->delete();
        return back();
    }

    public function userEdit(user $user)
    {
        return view('admin.home.user_edit', compact('user'));
    }

    public function userUpdate(Request $request , user $user)
    {

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password =  bcrypt($request['password']) ;

       $user ->update($request->all());
       return redirect('user_show');
    }

     public function userAdd(Request $request , user $user)
    {

      $user->name = $request->name;
      $user->email = $request->email;
      $user->password =  bcrypt($request['password']) ;

       $user ->save();
       return view('user_add');
    }

    // home page
    
    public function headerFooter()
    {
        $header = Headers::orderBy('id','desc')->first();
         $about = About_home::orderBy('id','desc')->first();
        $footer = Footers::orderBy('id','desc')->first();


        return view('admin.home.header_footer' , compact('header','footer','about'));
    }

     public function headerEdit(Headers $header)
    {
        return view('admin.home.header_edit', compact('header'));
    }

     public function headerUpdate(Request $request ,  $header)
    {
    	 $this->validate($request , ['logos'=>'image','phone'=>'numeric']);
    	$header = Headers::where('id',$header)->first();
      if ($request->hasFile('logos')) {
      	$file = $request->file('logos');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('logos'), $imageName);
        $header->logos = $imageName;
         }
         
      if ($request->hasFile('icon')) {
      	$file = $request->file('icon');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('logos'), $imageName);
        $header->iconSite= $imageName;
         } 

      $header->contactTitle = $request->title; 
      $header->phone = $request->phone;
      $header->titleSite = $request->titleSite;
      $header->metaTitles = $request->metaTitles;
      $header->metaDescrabtions = $request->metaDescrabtions;
      $header->keywords = $request->keywords;

       $header ->update();
       return redirect('header_footer');
    }

    public function aboutEdit(About_home $about)
    {
        return view('admin.home.about_product_edit', compact('about'));
    }

    public function AboutUpdate(Request $request ,  $about)
    {
    	$about = About_home::where('id',$about)->first();
      $about->question = $request->input('question');
      $about->answer = $request->input('answer') ;

       $about->update();
       return redirect('header_footer');
    }

     public function footerEdit(Footers $footer)
    {
        return view('admin.home.footer_edit', compact('footer'));
    }

    public function footerUpdate(Request $request ,  $footer)
    {
    	$this->validate($request , ['logo'=>'image','phone'=>'numeric']);
    	$footer = Footers::where('id',$footer)->first();
      if ($request->hasFile('logo')) {
      	$file = $request->file('logo');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('logos'), $imageName);
        $footer->logo = $imageName;
         }

      $footer->titles1 = $request->titles1;
      $footer->titles2 = $request->titles2;
      $footer->sub_title1 = $request->sub_title1;
      $footer->sub_title2 = $request->sub_title2;
      $footer->phone = $request->phone;
      $footer->url_title1 = $request->url_title1;
      $footer->url_title2 = $request->url_title2;
      $footer->url_title3 = $request->url_title3;
      $footer->copy_right = $request->copy_right;
       
      $footer ->update();
       return redirect('header_footer');
    }

    public function slidesShow()
    {
        $slides = Slides::all();

        return view('admin.home.slides_show' , compact('slides'));
    }

    public function slideDelete(Slides $slide)
    {
       $slide ->delete();
        return back();
    }

     public function slideEdit(Slides $slide)
    {
        return view('admin.home.slides_edit', compact('slide'));
    }

    public function slideUpdate(Request $request ,  $slide)
    {
    	$this->validate($request , ['slide'=>'image']);
    	$slide = Slides::where('id',$slide)->first();
      if ($request->hasFile('slide')) {
      	$file = $request->file('slide');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('slides'), $imageName);
        $slide->slides = $imageName;
         }

      $slide->title = $request->title;
      $slide->sup_title = $request->sup_title;
      $slide->link_name = $request->link_title;
      $slide->url_link = $request->url_link;
      
      $slide ->update();
       return redirect('slides_show');
    }

     public function SlidesFormAdd()
    {
        return view('admin.home.slides_add');
    }

    public function slideAdd(Request $request , Slides $slide)
    {
    	$this->validate($request , ['slide'=>'image']);
      if ($request->hasFile('slide')) {
      	$file = $request->file('slide');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('slides'), $imageName);
        $slide->slides = $imageName;
         }

      $slide->title = $request->title;
      $slide->sup_title = $request->sup_title;
      $slide->link_name = $request->link_title;
      $slide->url_link = $request->url_link;
      
      $slide ->save();
       return redirect('slides_show');
    }


    public function servicesShow()
    {
        $services = services::all();

        return view('admin.home.services_show' , compact('services'));
    }

    public function serviceDelete(services $service)
    {
       $service ->delete();
        return back();
    }

     public function serviceEdit(services $service)
    {
       
        return view('admin.home.services_edit', compact('service'));
    }

    public function serviceUpdate(Request $request ,  $service)
    {
    	$this->validate($request , ['image'=>'image','des'=>'required' ]);
    	$service = services::where('id',$service)->first();
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgServices'), $imageName);
        $service->images = $imageName;
         }

      $service->titles = $request->titles;
      $service->sub_titles = $request->sub_titles;
      $service->content = $request->des;
      $service->custom_url = $request->custom_url;
      
      $service ->update();
       return redirect('services_show');
    }

    public function servicesFormAdd()
    {
        
        return view('admin.home.services_add');
    }

     public function serviceAdd(Request $request , services $service)
    {
    	$this->validate($request , ['image'=>'image','des'=>'required']);
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgServices'), $imageName);
        $service->images = $imageName;
         }

      $service->titles = $request->titles;
      $service->sub_titles = $request->sub_titles;
      $service->content = $request->des;
      $service->custom_url = $request->custom_url;
      
      $service ->save();
       return redirect('services_show');
    }

     public function clintsShow()
    {
        $clints = Clints_home::all();

        return view('admin.home.clints_show' , compact('clints'));
    }

    public function clintDelete(Clints_home $clint)
    {
       $clint ->delete();
        return back();
    }

     public function clintEdit(Clints_home $clint)
    {
        return view('admin.home.clints_edit', compact('clint'));
    }

     public function clintUpdate(Request $request ,  $clint)
    {
    	$this->validate($request , ['image'=>'image']);
    	$clint = Clints_home::where('id',$clint)->first();
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgClints'), $imageName);
        $clint->image = $imageName;
         }

      $clint->title = $request->title;
      $clint->specialty = $request->specialty;
      $clint->content = $request->des;
      
      $clint ->update();
       return redirect('clints_show');
    }

    public function clintFormAdd()
    {
        return view('admin.home.clints_add');
    }

     public function clintAdd(Request $request ,Clints_home  $clint)
    {
    	$this->validate($request , ['image'=>'image']);
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgClints'), $imageName);
        $clint->image = $imageName;
         }

      $clint->title = $request->title;
      $clint->specialty = $request->specialty;
      $clint->content = $request->des;
      
      $clint ->save();
       return redirect('clints_show');
    }

     public function aboutShow()
    {
        $abouts = Our_mission::orderBy('id','desc')->first();
        $products = Products::all();
        $title = Reports::orderBy('id','desc')->first();

        return view('admin.home.abouts_product' , compact('abouts','products','title'));
    }

    public function aboutPEdit(Our_mission $about)
    {
        return view('admin.home.aboutProd_edit', compact('about'));
    }

     public function aboutPUpdate(Request $request ,  $about)
    {
    	$this->validate($request , ['image1'=>'image','image2'=>'image','image3'=>'image','des1'=>'required','des2'=>'required','des3'=>'required']);
    	$about = Our_mission::where('id',$about)->first();
      if ($request->hasFile('image1')) {
      	$file = $request->file('image1');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $about->image1 = $imageName;
         }

         
      if ($request->hasFile('image2')) {
      	$file = $request->file('image2');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $about->image2 = $imageName;
         }

        
      if ($request->hasFile('image3')) {
      	$file = $request->file('image3');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $about->image3 = $imageName;
         }

     $about->title = $request->input('title') ; 
     $about->sub_title = $request->input('sub_title') ; 
     $about->title1 = $request->input('title1') ;  
     $about->title2 = $request->input('title2') ; 
     $about->title3 = $request->input('title3') ; 
     $about->content1 = $request->input('des1') ; 
     $about->content2 = $request->input('des2') ;
     $about->content3 = $request->input('des3') ;
      
      $about ->update();
       return redirect('abouts_show');
    }

    public function titlePEdit(Reports $title)
    {
        return view('admin.home.productTitle_edit', compact('title'));
    }

     public function titlePUpdate(Request $request ,  $title)
    {
    	$title = Reports::where('id',$title)->first();
      $title->product_title = $request->title;
      $title->sup_title = $request->sup_title;
      $title ->update();
       return redirect('products_show');
    }
    
     public function productsShow()
    {
        $products = Products::all();
        $title = Reports::orderBy('id','desc')->first();

        return view('admin.home.products_show' , compact('products','title'));
    }

    public function productDelete(Products $product)
    {
       $product ->delete();
        return back();
    }


    public function productEdit(Products $product )
    {
      
        return view('admin.home.product_edit', compact('product'));
    }

     public function productUpdate(Request $request ,  $product)
    {
      $this->validate($request , ['image'=>'image','desc'=>'required']);
    	$product = Products::where('id',$product)->first();
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgProducts'), $imageName);
        $product->image = $imageName;
         }

      $product->title = $request->title;
      $product->content = $request->desc;
      $product->custom_url = $request->custom_url;

      $product ->update();
       return redirect('products_show');
    }

    public function productFormAdd()
    {
        
        return view('admin.home.products_add');
    }

     public function productAdd(Request $request ,Products  $product)
    {
      $this->validate($request , ['image'=>'image','desc'=>'required']);
      if ($request->hasFile('image')) {
      	$file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgProducts'), $imageName);
        $product->image = $imageName;
         }

      $product->title = $request->title;
      $product->content = $request->desc;
      $product->custom_url = $request->custom_url;
      $product ->save();
       return redirect('products_show');
    }

     public function infoShow()
    {
        $report = Reports::orderBy('id','desc')->first();
        $news = News_home::orderBy('id','desc')->first();
        

        return view('admin.home.info_report_show' , compact('report','news'));
    }

    public function reportEdit(Reports $report)
    {
        return view('admin.home.report_edit', compact('report'));
    }

     public function reportUpdate(Request $request ,  $report)
    {
    	$report = Reports::where('id',$report)->first();

      $report->title1 = $request->title1;
      $report->count1 = $request->count1;
      $report->title2 = $request->title2;
      $report->count2 = $request->count2;
      $report->title3 = $request->title3;
      $report->count3 = $request->count3;
      $report ->update();
       return redirect('info_report_show');
    }

    public function newsEdit(News_home $news)
    {
        return view('admin.home.news_edit', compact('news'));
    }

     public function newsUpdate(Request $request ,  $news)
    { 
        $this->validate($request , ['des1'=>'required|max:200','des2'=>'required|max:200','des3'=>'required|max:200']);
    	$news = News_home::where('id',$news)->first();

      $news->title = $request->title;
      $news->sub_title = $request->sub_title;
      $news->title1 = $request->title1;
      $news->content1 = $request->des1;
      $news->Ddata1 = $request->day1;
      $news->MYdata1 = $request->MY1;

      $news->title2 = $request->title2;
      $news->content2 = $request->des2;
      $news->Ddata2 = $request->day2;
      $news->MYdata2 = $request->MY2;

      $news->title3 = $request->title3;
      $news->content3 = $request->des3;
      $news->Ddata3 = $request->day3;
      $news->MYdata3 = $request->MY3;
      $news ->update();
       return redirect('info_report_show');
    }

    
   

    //plants Page

    public function plantsShow()
    {
        $slieder = Slider_plants::orderBy('id','desc')->first();
        $plants = Plants::all();
        
        return view('admin.plantsPage.plants_show' , compact('slieder','plants'));
    }

    public function sliederEdit(Slider_plants $slieder)
    {
        return view('admin.plantsPage.sliederPlants_edit', compact('slieder'));
    }

     public function sliederUpdate(Request $request ,  $slieder)
    {
    
       $slieder = Slider_plants::where('id',$slieder)->first();
        
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgPlants'), $imageName);
        $slieder->image = $imageName;
         }

       $slieder->title = $request->title;
      
     
      $slieder ->update();
       return redirect('plants_show');
    }

    public function plantDelete(Plants $plant)
    {
       $plant ->delete();
        return back();
    }

    public function plantEdit(Plants $plant)
    {
        return view('admin.plantsPage.plants_edit', compact('plant'));
    }

     public function plantUpdate(Request $request ,  $plant)
    {
       $this->validate($request , ['image'=>'image','desc'=>'required|max:400']);
      $plant = Plants::where('id',$plant)->first();
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgPlants'), $imageName);
        $plant->image = $imageName;
         }

      $plant->title = $request->title;
      $plant->sub_title = $request->sub_title;
      $plant->content = $request->desc;
      $plant ->update();
       return redirect('plants_show');
    }

    public function plantFormAdd()
    {
        return view('admin.plantsPage.plants_add');
    }

     public function plantAdd(Request $request ,Plants  $plant)
    {
       $this->validate($request , ['image'=>'image','desc'=>'required|max:400']);
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgPlants'), $imageName);
        $plant->image = $imageName;
         }

      $plant->title = $request->title;
      $plant->sub_title = $request->sub_title;
      $plant->content = $request->desc;
      $plant ->save();
       return redirect('plants_show');
    }

     public function contactsEdit(Content_plants $contact)
    {
        return view('admin.plantsPage.contactData_edit', compact('contact'));
    }

     public function contactsUpdate(Request $request ,  $contact)
    {
      $contact = Content_plants::where('id',$contact)->first();
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgPlants'), $imageName);
        $contact->images = $imageName;
         }

      $contact->title = $request->title;
      $contact->sub_title = $request->sub_title;
      $contact->title1 = $request->title1;
      $contact->email = $request->email;
      $contact->url_email = $request->url_email;
      $contact->title2 = $request->title2;
      $contact->phone = $request->phone;
      $contact ->update();
       return redirect('plants_show');
    }

    //academy page

    public function academyShow()
    {
        $slider = Titles_academys::orderBy('id','desc')->first();
        $employes = Employes::all();
        
        return view('admin.academyPage.academy_show' , compact('slider','employes'));
    }

    public function sliderAEdit(Titles_academys $slider)
    {
        return view('admin.academyPage.titleSlide_edit', compact('slider'));
    }

     public function sliderAUpdate(Request $request ,  $slider)
    {
       $slider = Titles_academys::where('id',$slider)->first();
        
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $slider->images = $imageName;
         }

       $slider->titles = $request->titles;
      
     
      $slider ->update();
       return redirect('academy_show');
    }

    public function employeDelete(Employes $employe)
    {
       $employe ->delete();
        return back();
    }

    public function employeEdit(Employes $employe)
    {
        return view('admin.academyPage.employes_edit', compact('employe'));
    }

     public function employeUpdate(Request $request ,  $employe)
    {
      $employe = Employes::where('id',$employe)->first();
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgEmployes'), $imageName);
        $employe->images = $imageName;
         }

      $employe->titles = $request->name;
      $employe->sub_titles = $request->about;
      $employe->specialty = $request->function;
      $employe->url_face = $request->facebook;
      $employe->url_twitter = $request->twitter;
      $employe->url_linkedin = $request->linkedin;
      $employe->url_google = $request->google;
      $employe->contents = $request->desc;
      $employe ->update();
       return redirect('academy_show');

    }

     public function employeFormAdd()
    {
        return view('admin.academyPage.employes_add');
    }

    public function employeAdd(Request $request , Employes $employe)
    {
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgEmployes'), $imageName);
        $employe->images = $imageName;
         }

      $employe->titles = $request->name;
      $employe->sub_titles = $request->about;
      $employe->specialty = $request->function;
      $employe->url_face = $request->facebook;
      $employe->url_twitter = $request->twitter;
      $employe->url_linkedin = $request->linkedin;
      $employe->url_google = $request->google;
      $employe->contents = $request->desc;
      $employe ->save();
       return redirect('academy_show');

    }

    // AboutUS page
    public function aboutUsShow()
    {
        $slider = AboutUs_titles::orderBy('id','desc')->first();
        $abouts = Content_abotutuss::all();
        
        return view('admin.aboutPage.aboutus_show' , compact('slider','abouts'));
    }

    public function sliderAboutEdit(AboutUs_titles $slider)
    {
        return view('admin.aboutPage.slider_edit', compact('slider'));
    }

     public function sliderAboutUpdate(Request $request ,  $slider)
    {
       $slider = AboutUs_titles::where('id',$slider)->first();
        
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $slider->images = $imageName;
         }

       $slider->titles = $request->titles;
      
     
      $slider ->update();
       return redirect('aboutus_show');
    }

    public function aboutUsDelete(Content_abotutuss $about)
     {
       $about ->delete();
        return back();
     }

     public function aboutUsEdit(Content_abotutuss $about)
    {
        return view('admin.aboutPage.aboutus_edit', compact('about'));
    }

     public function aboutUsUpdate(Request $request ,  $about)
    {
        $this->validate($request , ['images'=>'image','desc'=>'required' ]);
      $about = Content_abotutuss::where('id',$about)->first();
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $about->images = $imageName;
         }

      $about->titles = $request->titles;
      $about->content = $request->desc;
      $about ->update();
       return redirect('aboutus_show');
    }

    public function aboutFormAdd()
    {
        return view('admin.aboutPage.aboutus_add');
    }

     public function aboutUsAdd(Request $request , Content_abotutuss $about)
    {
        $this->validate($request , ['images'=>'image','desc'=>'required' ]);
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $about->images = $imageName;
         }

      $about->titles = $request->titles;
      $about->content = $request->desc;
      $about ->save();
       return redirect('aboutus_show');
    }

    // ContactUS page
     public function contactUssShow()
    {
        $contactUs = ContactUs_dates::orderBy('id','desc')->first();
        
        return view('admin.contacustPage.cuntactus_edit' , compact('contactUs'));
    }

    public function contactUsEdit(ContactUs_dates $contactUs)
    {
        return view('admin.contacustPage.cuntactus_edit', compact('contactUs'));
    }

     public function contactUsUpdate(Request $request ,  $contactUs)
    {
       $contactUs = ContactUs_dates::where('id',$contactUs)->first();
       
      
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgPlants'), $imageName);
        $contactUs->image = $imageName;
         }

       $contactUs->title = $request->title;
       $contactUs->sub_title = $request->sub_title;
        
       $contactUs->title_page = $request->title_page;
       $contactUs->title_face = $request->title_face;
       $contactUs->title_twitter = $request->title_twitter;
       $contactUs->title_linkadin = $request->title_linkadin;
       $contactUs->title_mail1 = $request->title_mail1;
       $contactUs->title_mail2 = $request->title_mail2;
       $contactUs->title_mail3 = $request->title_mail3;
       $contactUs->title_phone1 = $request->title_phone1;
       $contactUs->title_phone2 = $request->title_phone2;
       $contactUs->title_phone3 = $request->title_phone3;
       $contactUs->title_address1 = $request->title_address1;
       $contactUs->title_address2 = $request->title_address2;
       $contactUs->title_address3 = $request->title_address3;
       $contactUs->phone1 = $request->phone1;
       $contactUs->phone2 = $request->phone2;
       $contactUs->phone3 = $request->phone3;
       $contactUs->url_face = $request->url_face;
       $contactUs->url_twitter = $request->url_twitter;
       $contactUs->url_linkadin = $request->url_linkadin;
       $contactUs->url_mail1 = $request->url_mail1;
       $contactUs->url_mail2 = $request->url_mail2;
       $contactUs->url_mail3 = $request->url_mail3;
       $contactUs->map_link = $request->map_link;

      $contactUs ->update();
       return redirect('contactus_shows');
    }

     public function messagesShow()
    {
        $messages = Messages::all();
        
        return view('admin.contacustPage.messages_show' , compact('messages'));
    }

    public function messageDelete(Messages $message)
     {
       $message ->delete();
        return back();
     }

    public function messageOpen(Messages $message)
    {
        return view('admin.contacustPage.message_open', compact('message'));
    }

     public function blogShow()
    {
        $title = Blog_titles::orderBy('id','desc')->first();
        $posts = Posts::all();
        return view('admin.blogPage.blog_show' , compact('posts','title'));
    }

    public function titleEdit(Blog_titles $title)
    {
        return view('admin.blogPage.titlePage_edit', compact('title'));
    }

     public function titleUpdate(Request $request ,  $title)
    {
      $title = Blog_titles::where('id',$title)->first();
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgAboutUS'), $imageName);
        $title->image = $imageName;
         }

      $title->title = $request->title;
      $title ->update();
       return redirect('blog_shows');
    }

    public function postDelete(Posts $post)
     {
       $post ->delete();
        return back();
     }

    public function postEdit(Posts $post)
    {
        return view('admin.blogPage.post_edit', compact('post'));
    }

     public function postUpdate(Request $request ,  $post)
    {
        $this->validate($request , ['images'=>'image','desc'=>'required' ]);
        
        $this->validate($request , ['images'=>'image']);
         $post = Posts::where('id',$post)->first();
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgBlog'), $imageName);
        $post->images = $imageName;
         }

      $post->titles = $request->titles;
      $post->contents = $request->desc;
      $post->custom_url = $request->custom_url;
      $post ->update();
       return redirect('blog_shows');
    }

    public function postFormAdd()
    {
        return view('admin.blogPage.post_add');
    }

     public function postAdd(Request $request , Posts $post)
    {
        $this->validate($request , ['images'=>'image','desc'=>'required' ]);
        
        $this->validate($request , ['images'=>'image']);
      if ($request->hasFile('images')) {
        $file = $request->file('images');
        $imageName = time().'.'.$file->getClientOriginalName();
        $file->move(public_path('imgBlog'), $imageName);
        $post->images = $imageName;
         }

      $post->titles = $request->titles;
      $post->contents = $request->desc;
      $post->custom_url = $request->custom_url;
      $post ->save();
       return redirect('blog_shows');
    }

     public function categoryServicShow()
    {
        $newService = Category_services::all();  
        $newProduct = Category_products::all();
        return view('admin.home.category_show' , compact('newService','newProduct'));
    }

    public function categoryServicDelete(Category_services $categoryS)
     {
       $categoryS ->delete();
        return back();
     }


    public function categoryServicEdit(Category_services $categoryS)
    {
        return view('admin.home.categoryS_edit', compact('categoryS'));
    }

     public function categoryServicUpdate(Request $request ,  $categoryS)
    {
         $categoryS = Category_services::where('id',$categoryS)->first();
      $categoryS->namePage = $request->title;
      $categoryS ->update();

       return redirect('category_shows');
    }

    public function categorySFormAdd()
    {
        return view('admin.home.categoryS_add');
    }

     public function categorySAdd(Request $request , Category_services $categoryS)
    {
      $categoryS->namePage = $request->title;
      $categoryS ->save();

       return redirect('category_shows');
    }


    public function categoryProductDelete(Category_products $categoryP)
     {
       $categoryP ->delete();
        return back();
     }


    public function categoryProductEdit(Category_products $categoryP)
    {
        return view('admin.home.categoryP_edit', compact('categoryP'));
    }

     public function categoryProductUpdate(Request $request ,  $categoryP)
    {
         $categoryP = Category_products::where('id',$categoryP)->first();
      $categoryP->namePage = $request->title;
      $categoryP ->update();

       return redirect('category_shows');
    }

    public function categoryPFormAdd()
    {
        return view('admin.home.categoryP_add');
    }

     public function categoryPAdd(Request $request , Category_products $categoryP)
    {
      $categoryP->namePage = $request->title;
      $categoryP ->save();

       return redirect('category_shows');
    }


   
     


  }