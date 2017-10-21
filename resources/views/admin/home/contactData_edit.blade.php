@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Contact Data Edit</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('contactData',['contactData'=> $contactData->id])}}" accept-charset="UTF-8" class="ajax-form-request" >
                              {{ csrf_field() }}
                                <div class="message" style="padding:26px; ">
                                </div><!-- div to display message after insert -->
                                <div class="loading-sub" style="display: none;">
                                    <div class="progress">
                                        <div class="indeterminate"></div>
                                    </div>
                                </div>
                                 
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" type="text" value="{{$contactData->title}}">
                                    <label for="name">Iitle</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sub_title" type="text" value="{{$contactData->sub_title}}">
                                    <label for="name">Sub Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des" type="text" rows="5">
                                    {{$contactData->content}}
                                </textarea>
                                <label for="name">Details</label>
                                <label class="error"></label>

                               </div>

                               <div class="input-field col s6">
                                    <input class="validate" id="name" name="" type="text" >
                                    <label for="name"></label>
                                    <label class="error"></label>
                                </div>
                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="" type="text" >
                                    <label for="name"></label>
                                    <label class="error"></label>
                                </div>
                                
                               <div class="input-field col s6">
                                    <input class="validate" id="name" name="title1" type="text" value="{{$contactData->title1}}">
                                    <label for="name">title1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone" type="text" value="{{$contactData->phone}}">
                                    <label for="name">Content1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title2" type="text" value="{{$contactData->title2}}">
                                    <label for="name">title2</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="email" type="text" value="{{$contactData->email}}">
                                    <label for="name">Content2</label>
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

            <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

          <script>
           CKEDITOR.replace('des',{
            customConfig: 'ckeditor/config.js'});
          </script>
 @endsection