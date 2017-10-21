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
        <span class="card-title"><h3> Report</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="number">Title1</th>
                    <th data-field="number">count1</th>
                    <th data-field="number">Title2</th>
                    <th data-field="number">count2</th>
                    <th data-field="number">Title3</th>
                    <th data-field="number">count3</th>
                    <th data-field="number">Actions</th>

              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
                 <td>{{$report->title1}}</td>
                 <td>{{$report->count1}}</td>
                 <td>{{$report->title2}}</td>
                 <td>{{$report->count2}}</td>
                 <td>{{$report->title3}}</td>
                 <td>{{$report->count3}}</td>
                 <td>
                  <a class="btn btn-default btn-rounded btn-sm" href="report/{{$report->id}}edit" ><span class="fa fa-pencil"></span></a>
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
        
        <span class="card-title"><h3> latest news</h3></span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="id">Title</th>
                    <th data-field="id">Sub Title</th>
                    <th data-field="id">News1</th>
                    
                    <th data-field="id">Day1</th>
                    <th data-field="id">Month-Year1</th>
                    <th data-field="id">News2</th>
               
                    <th data-field="id">Day2</th>
                    <th data-field="id">Month-Year2</th>
                    <th data-field="id">News3</th>
                    
                    <th data-field="id">Day3</th>
                    <th data-field="id">Month-Year3</th>
                    <th data-field="number">Actions</th>
              
                </tr>

            </thead>
            <tbody class="data">
                <tr id="trow_1">
    <td>{{$news->title}}</td>
    <td>{{$news->sub_title}}</td>
    <td>{{$news->title1}}</td>
    
    <td>{{$news->Ddata1}}</td>
    <td>{{$news->MYdata1}}</td>
    <td>{{$news->title2}}</td>
    
    <td>{{$news->Ddata2}}</td>
    <td>{{$news->MYdata2}}</td>
    <td>{{$news->title3}}</td>
    
    <td>{{$news->Ddata3}}</td>
    <td>{{$news->MYdata3}}</td>
    <td>
       <a class="btn btn-default btn-rounded btn-sm" href="news/{{$news->id}}edit" ><span class="fa fa-pencil"></span></a>
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