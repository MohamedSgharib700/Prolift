@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                     <div class="fixed-action-btn">

</div>
                        
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title"><h3> About US</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id"> Title</th>
                    <th data-field="id">Sub Title</th>
                    <th data-field="id">Title1</th>
                    <th data-field="number">image1</th>
                    <th data-field="id">Title2</th>
                    <th data-field="number">image2</th>
                    <th data-field="id">Title3</th>
                    <th data-field="number">image3</th>
                    <th data-field="progress">Actions</th>
                    
              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
    <td>{{$abouts->title}}</td>
    <td>{{$abouts->sub_title}}</td>
    <td>{{$abouts->title1}}</td>
    <td><img style="width:60px; height:60px;" src="{{asset('imgAboutUS/'.$abouts->image1)}}"></td>
    <td>{{$abouts->title2}}</td>
    <td><img style="width:60px; height:60px;" src="{{asset('imgAboutUS/'.$abouts->image2)}}"></td>
    <td>{{$abouts->title3}}</td>
    <td><img style="width:60px; height:60px;" src="{{asset('imgAboutUS/'.$abouts->image3)}}"></td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="{{$abouts->id}}edit" ><span class="fa fa-pencil"></span></a>
    </td>
</tr>

           </tbody>
         </table>

					 
          </div>	 
       </div>
       
      
     </div>
   </div>
 </main>



 @endsection