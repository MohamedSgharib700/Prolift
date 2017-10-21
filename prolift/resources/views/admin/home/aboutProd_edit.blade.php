@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">About Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('abouts',['about'=> $about->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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

                                  <div class="input-field col s6">
                                    <input class="validate" id="name" name="title" type="text" value="{{$about->title}}">
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                             
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sub_title" type="text" value="{{$about->sub_title}}">
                                    <label for="name">Sub Title</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="title1" type="text" value="{{$about->title1}}">
                                    <label for="name">Title1</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="file-field col s6">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input name="image1" type="file" value="{{$about->image1}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Image1">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                 <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des1" type="text" rows="5">
                                    {{$about->content1}}
                                </textarea>
                                <label class="error"></label>

                               </div>

                               <br />
                                <br />

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title2" type="text" value="{{$about->title2}}">
                                    <label for="name">Title2</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="file-field col s6">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input name="image2" type="file" value="{{$about->image2}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Image2">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des2" type="text" rows="5">
                                    {{$about->content2}}
                                </textarea>
                                <label class="error"></label>

                               </div>

                                <br />
                                 <br />

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title3" type="text" value="{{$about->title3}}">
                                    <label for="name">Title3</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="file-field col s6">
                                    <div class="btn teal lighten-1">
                                        <span>File</span>
                                        <input name="image3" type="file" value="{{$about->image3}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Image3">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des3" type="text" rows="5">
                                    {{$about->content3}}
                                </textarea>
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
           CKEDITOR.replace('des1',{
            customConfig: 'ckeditor/config.js'});
          </script>
          <script>
           CKEDITOR.replace('des2',{
            customConfig: 'ckeditor/config.js'});
          </script>
          <script>
           CKEDITOR.replace('des3',{
            customConfig: 'ckeditor/config.js'});
          </script>
 @endsection