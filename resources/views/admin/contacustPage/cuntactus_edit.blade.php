@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Contact Info</span>
                              <div class="row">
                              
                    <form method="POST" action="{{route('contactUss',['contactUs'=> $contactUs->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
                              {{ csrf_field() }}
                                <div class="message" style="padding:26px; ">
                                </div><!-- div to display message after insert -->
                                <div class="loading-sub" style="display: none;">
                                    <div class="progress">
                                        <div class="indeterminate"></div>
                                    </div>
                                </div>
                                
                                <div class="file-field col s6">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input name="image"  type="file" >
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_page" type="text" value="{{$contactUs->title_page}}">
                                    <label for="name">page title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" type="text" value="{{$contactUs->title}}">
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sub_title" type="text" value="{{$contactUs->sub_title}}">
                                    <label for="name">Sub Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_face" type="text" value="{{$contactUs->title_face}}">
                                    <label for="name">social 1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_twitter" type="text" value="{{$contactUs->title_twitter}}">
                                    <label for="name">social 2</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_linkadin" type="text" value="{{$contactUs->title_linkadin}}">
                                    <label for="name">social 3</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_face" type="text" value="{{$contactUs->url_face}}">
                                    <label for="name">url facebook</label>
                                    <label class="error"></label>
                                </div>
                                <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    
                    <th data-field="number"></th>
                    <th data-field="number"></th>
                    <th data-field="progress"></th>
                </tr>

            </thead>
            <tbody class="data">
            
                <tr id="trow_1">
    <td><strong></strong></td>
    <td></td>
    
     <td>
      

                
           </td>
           </tr>
   
              


       </tbody>
        </table>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_twitter" type="text" value="{{$contactUs->url_twitter}}">
                                    <label for="name">url twitter</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_linkadin" type="text" value="{{$contactUs->url_linkadin}}">
                                    <label for="name">url linkadin</label>
                                    <label class="error"></label>
                                </div>


                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_mail1" type="text" value="{{$contactUs->title_mail1}}">
                                    <label for="name">title mail1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_mail2" type="text" value="{{$contactUs->title_mail2}}">
                                    <label for="name">title mail2</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_mail3" type="text" value="{{$contactUs->title_mail3}}">
                                    <label for="name">title mail3</label>
                                    <label class="error"></label>
                                </div>
                                
                               
                                
                                <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    
                    <th data-field="number"></th>
                    <th data-field="number"></th>
                    <th data-field="progress"></th>
                </tr>

            </thead>
            <tbody class="data">
            
                <tr id="trow_1">
    <td><strong></strong></td>
    <td></td>
    
     <td>
      

                
           </td>
           </tr>
   
              


       </tbody>
        </table>
        
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_mail1" type="text" value="{{$contactUs->url_mail1}}">
                                    <label for="name">url mail1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_mail2" type="text" value="{{$contactUs->url_mail2}}">
                                    <label for="name">url mail2</label>
                                    <label class="error"></label>
                                </div>

                                
                                
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_mail3" type="text" value="{{$contactUs->url_mail3}}">
                                    <label for="name">url mail3</label>
                                    <label class="error"></label>
                                </div>


                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_phone1" type="text" value="{{$contactUs->title_phone1}}">
                                    <label for="name">title phone1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_phone2" type="text" value="{{$contactUs->title_phone2}}">
                                    <label for="name">title phone2</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_phone3" type="text" value="{{$contactUs->title_phone3}}">
                                    <label for="name">title phone3</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone1" type="text" value="{{$contactUs->phone1}}">
                                    <label for="name">phone1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone2" type="text" value="{{$contactUs->phone2}}">
                                    <label for="name">phone2</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone3" type="text" value="{{$contactUs->phone3}}">
                                    <label for="name">phone3</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_address1" type="text" value="{{$contactUs->title_address1}}">
                                    <label for="name"> address1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_address2" type="text" value="{{$contactUs->title_address2}}">
                                    <label for="name"> address2</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title_address3" type="text" value="{{$contactUs->title_address3}}">
                                    <label for="name"> address3</label>
                                    <label class="error"></label>
                                </div>
                                
                                  <div class="input-field col s6">
                                    <input class="validate" id="name" name="map_link" type="text" value="{{$contactUs->map_link}}">
                                    <label for="name">Google Maps Link</label>
                                    <label class="error"></label>
                                </div>
                                
                                <div class="input-field col s12">

                                    <input class="btn btn-primary text-center" id="submit" type="submit" value="Save">
                                </div>
                            </form>
                                     </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>


                        </div>
         
                
            </main>

 @endsection