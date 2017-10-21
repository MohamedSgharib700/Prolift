@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Title Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('titles',['title'=> $title->id]) }}" accept-charset="UTF-8" class="ajax-form-request" ">
                              {{ csrf_field() }}
                                <div class="message" style="padding:26px; ">
                                </div><!-- div to display message after insert -->
                                <div class="loading-sub" style="display: none;">
                                    <div class="progress">
                                        <div class="indeterminate"></div>
                                    </div>
                                </div>
                                 
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" type="text" value="{{$title->product_title}}">
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sup_title" type="text" value="{{$title->sup_title}}">
                                    <label for="name">Sub Title</label>
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