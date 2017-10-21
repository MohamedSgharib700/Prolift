@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
       
       <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        
        <span class="card-title"><h3> The Message</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr> 
                    <th data-field="id"></th>
                </tr>

            </thead>
            <tbody class="data">
       
                <tr id="trow_1">
    <td>{{$message->message}}</td>
     </tr> 
    

           </tbody>
         </table>

                     
          </div>     
       </div>


     </div>
   </div>
 </main>



 @endsection