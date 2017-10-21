@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Service Edit</span>
                              <div class="row">
                              
                            <form method="POST" action="service/add" accept-charset="UTF-8" class="ajax-form-request" enctype="multipart/form-data">
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
                                        <input name="image" required type="file" >
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Image">
                                        <label class="error"></label>
                                    </div>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required="" name="titles" type="text" >
                                    <label for="name">Title</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" required name="sub_titles" type="text" >
                                    <label for="name">Sub title</label>
                                    <label class="error"></label>
                                </div>

                                 <div class="input-field col s6">
                                    <input class="validate" id="name" name="custom_url" type="text" required >
                                    <label for="name">Custom URL</label>
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
                                <textarea class="" id="desc"  name="des" type="text" rows="5" required>
                                    
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
           CKEDITOR.replace('des',{
            customConfig: 'ckeditor/config.js'});
          </script>
 @endsection