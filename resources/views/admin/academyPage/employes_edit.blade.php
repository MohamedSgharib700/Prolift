@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Employe Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('employe',['employe'=> $employe->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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
                                        <input name="image" type="file" value="{{$employe->images}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Image">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="name" type="text" value="{{$employe->titles}}">
                                    <label for="name">Name</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="about" type="text" value="{{$employe->sub_titles}}">
                                    <label for="name">About</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="function" type="text" value="{{$employe->specialty}}">
                                    <label for="name">Function </label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="facebook" type="text" value="{{$employe->url_face}}">
                                    <label for="name">URL Facebook </label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="twitter" type="text" value="{{$employe->url_twitter}}">
                                    <label for="name">URL Twitter </label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="linkedin" type="text" value="{{$employe->url_linkedin}}">
                                    <label for="name">URL Linkedin </label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="google" type="text" value="{{$employe->url_google}}">
                                    <label for="name">URL Google </label>
                                    <label class="error"></label>
                                </div>

                                
                                <div class="input-field col s12">
                                <textarea class="validate" id="desc" name="desc" type="text" rows="5">
                                    {{$employe->contents}}
                                </textarea>
                                <label for="name">Details</label>
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
 <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>

          <script>
           CKEDITOR.replace('desc',{
            customConfig: 'ckeditor/config.js'});
          </script>
 @endsection