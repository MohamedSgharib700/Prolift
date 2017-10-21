@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Slide add</span>
                              <div class="row">
                              
                            <form method="POST" action="add" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
                              {{ csrf_field() }}

                              @if(count($errors)>0)
                              <div class="alert alert_danger">
                                <ul>
                                 @foreach($errors->all() as $error )
                                 <li> {{$error}}</li>
                                @endforeach
                                 </ul>
                               </div>
                              @endif
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
                                        <input name="slide" type="file" >
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" required="" type="text" placeholder="slide">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="title" type="text" >
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="sup_title" type="text" >
                                    <label for="name">Sub title</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" required name="link_title" type="text" >
                                    <label for="name">Link title</label>
                                    <label class="error"></label>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="url_link" type="text"  >
                                    <label for="name">URL Link</label>
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