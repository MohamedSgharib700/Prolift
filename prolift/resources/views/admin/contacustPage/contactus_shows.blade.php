@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
       
       <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        
        <span class="card-title"><h3> Contact US Page</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr> 
                    <th data-field="id">Page Title</th>
                    <th data-field="id">social 1</th>
                    <th data-field="id">social 2</th>
                    <th data-field="id">social 3</th>
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
    <td>{{$contactUs->title_page}}</td>
    <td>{{$contactUs->title_face}}</td>
    <td>{{$contactUs->title_twitter}}</td>
    <td>{{$contactUs->title_linkadin}}</td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="contactUs/{{$contactUs->id}}edit" ><span class="fa fa-pencil"></span></a>
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