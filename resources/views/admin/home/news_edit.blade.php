@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">News Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('news',['news'=> $news->id]) }}" accept-charset="UTF-8" class="ajax-form-request" >
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
                                    <input class="validate" id="name" name="title" type="text" value="{{$news->title}}">
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                             
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="sub_title" type="text" value="{{$news->sub_title}}">
                                    <label for="name">Sub Title</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="title1" type="text" value="{{$news->title1}}">
                                    <label for="name">News1</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des1" type="text" rows="5">
                                    {{$news->content1}}
                                </textarea>
                                <label class="error"></label>

                               </div>
                               
                               <div class="input-field col s6">
                                    <input class="validate" id="name" name="day1" type="text" value="{{$news->Ddata1}}">
                                    <label for="name">Today's date1</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="MY1" type="text" value="{{$news->MYdata1}}">
                                    <label for="name">Month and Year1</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title2" type="text" value="{{$news->title2}}">
                                    <label for="name">News2</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des2" type="text" rows="5">
                                    {{$news->content2}}
                                </textarea>
                                <label class="error"></label>

                               </div>

                               <div class="input-field col s6">
                                    <input class="validate" id="name" name="day2" type="text" value="{{$news->Ddata2}}">
                                    <label for="name">Today's date2</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="MY2" type="text" value="{{$news->MYdata2}}">
                                    <label for="name">Month and Year2</label>
                                    <label class="error"></label>
                                </div>

                                <br />
                                 <br />

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title3" type="text" value="{{$news->title3}}">
                                    <label for="name">News3</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="des3" type="text" rows="5">
                                    {{$news->content3}}
                                </textarea>
                                <label class="error"></label>

                               </div>

                               <div class="input-field col s6">
                                    <input class="validate" id="name" name="day3" type="text" value="{{$news->Ddata3}}">
                                    <label for="name">Today's date3</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="MY3" type="text" value="{{$news->MYdata3}}">
                                    <label for="name">Month and Year3</label>
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