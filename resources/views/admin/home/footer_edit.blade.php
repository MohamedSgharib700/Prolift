@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Footer Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('footer',['footer'=> $footer->id]) }}" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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
                                        <input name="logo" type="file" value="{{$footer->logo}}">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="logo">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="url_title1" type="text" value="{{$footer->url_title1}}">
                                    <label for="name">Url fasebook</label>
                                    <label class="error"></label>
                                </div>
                                 <div class="input-field col s6">
                                    <input class="validate" id="name" required name="url_title2" type="text" value="{{$footer->url_title2}}">
                                    <label for="name">Url twitter</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="url_title3" type="text" value="{{$footer->url_title3}}">
                                    <label for="name">Url instagram</label>
                                    <label class="error"></label>
                                </div>
                                 <div class="input-field col s6">
                                    <input class="validate" id="name" required name="copy_right" type="text" value="{{$footer->copy_right}}">
                                    <label for="name">Copy right</label>
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