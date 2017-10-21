@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                     <div class="fixed-action-btn">
 <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="post/form_add"><i class="material-icons">add</i></a>
</div>

<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title">Title Page</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    
                    <th data-field="number">Title</th>
                    <th data-field="number">Slider</th>
                    <th data-field="progress">Actions</th>
                </tr>
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
      

            </thead>
            <tbody class="data">
            
                <tr id="trow_1">
    <td><strong>{{$title->title}}</strong></td>
    <td><img style="width:60px; height:60px;" src="{{('imgAboutUS/'.$title->image)}}"></td>
    
     <td>
      <a class="btn btn-default btn-rounded btn-sm" href="title/{{$title->id}}edit" ><span class="fa fa-pencil"></span></a>

                
           </td>
           </tr>
   
              


       </tbody>
        </table>
   
     </div>                  
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
                        
    <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title"><h3> Posts</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">titles</th>
                    <th data-field="number">Image</th>
                    <th data-field="progress">Actions</th>
                
                </tr>

            </thead>
           
            <tbody class="data">
             
            @foreach($posts as $post)
     <tr id="trow_1">
    <td>{{$post->titles}}</td>
    <td><img style="width:60px; height:60px;" src="{{asset('imgBlog/' . $post->images)}}"></td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="post/{{$post->id}}edit" ><span class="fa fa-pencil"></span></a>

       <form method="get" action="post/{{$post->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form>
    </td>
</tr>
@endforeach
           </tbody>
         </table>


                     
    </div>   
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


    
     </div>
   </div>
 </main>



 @endsection