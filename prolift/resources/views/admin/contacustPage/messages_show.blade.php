@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
       
       <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        
        <span class="card-title"><h3> Messages page</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr> 
                    <th data-field="id">Sender name</th>
                    <th data-field="id">Sender Email</th>
                    <th data-field="id">Sender Phone</th>
                    <th data-field="id">Message</th>
                    <th data-field="id">Action</th>
                </tr>

            </thead>
            <tbody class="data">
        @foreach($messages as $message)
                <tr id="trow_1">
    <td>{{$message->name}}</td>
    <td>{{$message->email}}</td>
    <td>{{$message->phone}}</td>
    <td><a href="message/{{$message->id}}edit">{{ str_limit( $message->message , 20 ) }}</a></td>
    <td>
       <form method="get" action="message/{{$message->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
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