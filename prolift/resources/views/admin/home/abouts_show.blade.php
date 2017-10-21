@extends('admin.master.layout')

 @section('content')
<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        
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
                    <th data-field="id"> Logo</th>
                    <th data-field="id"> Contact Title</th>
                    <th data-field="id"> Phone</th>
                    
                    
              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
   
    <td><img style="width:60px; height:60px;" src="{{asset('logos/'.$header->logos)}}"></td>
    <td>{{$header->contactTitle}}</td>
    <td>{{$header->phone}}</td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="edit/{{$abouts->id}}" ><span class="fa fa-pencil"></span></a>
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
        <span class="card-title"><h3> About Products</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="id">Question</th>
                    <th data-field="id">Answer</th>
              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">

    <td>{{$about->question}}</td>
    <td>{{$about->answer}}</td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="edit/{{$about->id}}/e" ><span class="fa fa-pencil"></span></a>
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
        
        <span class="card-title"><h3> Footer</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="id">Logo</th>
                    <th data-field="id">Title1</th>
                    <th data-field="id">Phone</th>
                    <th data-field="id">Link Title1</th>
                    <th data-field="id">Title2</th>
                    <th data-field="id">Link Title2</th>
                    <th data-field="id">Url Fasebook</th>
                    <th data-field="id">Url Twitter</th>
                    <th data-field="id">Url Instagram </th>
                    <th data-field="id">Copy Right</th>
              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
  
    <td><img style="width:60px; height:60px;" src="{{asset('logos/' . $footer->logo)}}"></td>
    <td>{{$footer->titles1}}</td>
    <td>{{$footer->phone}}</td>
    <td>{{$footer->sub_title1}}</td>
    <td>{{$footer->titles2}}</td>
    <td>{{$footer->sub_title2}}</td>
    <td>{{$footer->url_title1}}</td>
    <td>{{$footer->url_title2}}</td>
    <td>{{$footer->url_title3}}</td>
    <td>{{$footer->copy_right}}</td>
  
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="edit/{{$footer->id}}/edited" ><span class="fa fa-pencil"></span></a>
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