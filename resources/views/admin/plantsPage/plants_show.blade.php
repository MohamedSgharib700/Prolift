@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                     <div class="fixed-action-btn">
 <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="plant/form_add"><i class="material-icons">add</i></a>
</div>
                        
        <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title"><h3> Title Page</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id"> Title</th>
                    <th data-field="id">Slider</th>
                    <th data-field="progress">Actions</th>
                </tr>

            </thead>
            
            <tbody class="data">
             
           <tr id="trow_1">
            <td>{{$slieder->title}}</td>
             <td><img style="width:60px; height:60px;" src="{{asset('imgPlants/'.$slieder->image)}}"></td>
             <td>
               <a class="btn btn-default btn-rounded btn-sm" href="slieder/{{$slieder->id}}edit" ><span class="fa fa-pencil"></span></a>
               </td>
             
             </tr>

           </tbody>
         </table>

                     
          </div>     
       </div>


       <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title"><h3> Plants</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">Plants Title</th>
                    <th data-field="id">Sub Title</th>
                    <th data-field="number">Image</th>
                    <th data-field="progress">Actions</th>
                
                </tr>

            </thead>
           
            <tbody class="data">
             
            @foreach($plants as $plant)
                <tr id="trow_1">
    <td>{{$plant->title}}</td>
    <td>{{$plant->sub_title}}</td>
    <td><img style="width:60px; height:60px;" src="{{asset('imgPlants/' . $plant->image)}}"></td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="plant/{{$plant->id}}edit" ><span class="fa fa-pencil"></span></a>

       <form method="get" action="plant/{{$plant->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
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