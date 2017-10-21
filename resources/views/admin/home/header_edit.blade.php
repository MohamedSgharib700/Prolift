@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Header Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('header',['header'=> $header->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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
                                        <span>Logo</span>
                                        <input name="logos"  type="file" value="{{$header->logos}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="logos">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="file-field col s6">
                                    <div class="btn teal lighten-1">
                                        <span>ICon</span>
                                        <input name="icon" type="file" value="{{$header->iconSite}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="icon">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" required="" type="text" value="{{$header->contactTitle}}">
                                    <label for="name">Contact Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="phone" required="" type="text" value="{{$header->phone}}">
                                    <label for="name">Phone</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="titleSite" required="" type="text" value="{{$header->titleSite}}">
                                    <label for="name">Site Title</label>
                                    <label class="error"></label>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="metaTitles" required="" type="text" value="{{$header->metaTitles}}">
                                    <label for="name">Meta Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="metaDescrabtions" required="" type="text" value="{{$header->metaDescrabtions}}">
                                    <label for="name">Meta Descrabtions</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="keywords" required="" type="text" value="{{$header->keywords}}">
                                    <label for="name">Keywords</label>
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