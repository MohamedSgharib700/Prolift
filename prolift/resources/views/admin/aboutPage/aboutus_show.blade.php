@extends('admin.master.layout')

 @section('content')

<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="about/form_add"><i class="material-icons">add</i></a>
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

            </thead>
            <tbody class="data">
            
                <tr id="trow_1">
    <td><strong>{{$slider->titles}}</strong></td>
    <td><img style="width:60px; height:60px;" src="{{('imgAboutUS/'.$slider->images)}}"></td>
    
     <td>
     

      <a class="btn btn-default btn-rounded btn-sm" href="slider/{{$slider->id}}edit" ><span class="fa fa-pencil"></span></a>

                
           </td>
           </tr>
       <tr>
         
     </tr> 
     <tr>
         
     </tr>
     <tr>
         
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
        <span class="card-title">About US Page</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    
                    <th data-field="number">Titles</th>
                    <th data-field="number">Images</th>
                    <th data-field="progress">Actions</th>
                </tr>

            </thead>
            <tbody class="data">
            @foreach($abouts as  $about)
                <tr id="trow_1">
    <td><strong>{{$about->titles}}</strong></td>
    <td><img style="width:60px; height:60px;" src="{{('imgAboutUS/'.$about->images)}}"></td>
    
     <td>
      <a class="btn btn-default btn-rounded btn-sm" href="about_form/{{$about->id}}/edit" ><span class="fa fa-pencil"></span></a>

        <form method="get" action="about/{{$about->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form>
                
           </td>
           </tr>
   
          @endforeach           


       </tbody>
        </table>

					 
         </div>	 
       </div>

    
    </div>
  </div>
</main>

 @endsection