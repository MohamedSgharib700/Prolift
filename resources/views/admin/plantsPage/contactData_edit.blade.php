@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">contact Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('contact',['contact'=> $contact->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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
                                        <input name="images" type="file" value="{{$contact->images}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Image">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" type="text" value="{{$contact->title}}">
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sub_title" type="text" value="{{$contact->sub_title}}">
                                    <label for="name">Sub Title</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="title1" type="text" value="{{$contact->title1}}">
                                    <label for="name">title1</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="email" type="text" value="{{$contact->email}}">
                                    <label for="name"> Email</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="url_email" type="text" value="{{$contact->url_email}}">
                                    <label for="name">URL Email</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="title2" type="text" value="{{$contact->title2}}">
                                    <label for="name">title2</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone" type="text" value="{{$contact->phone}}">
                                    <label for="name">Phone</label>
                                    <label class="error"></label>
                                </div>
                                
                                

                                <table>
                                    <tr>
                                    <td>
                                        
                                    </td>
                                    </tr>

                                    <tr>
                                    <td>
                                        
                                    </td>
                                    </tr>

                                </table>

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