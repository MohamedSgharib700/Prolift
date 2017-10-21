@extends('admin.master.layout')

 @section('content')
<span class="card-title">category Page</span>
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
        
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="number"> category service name</th>

                    <th data-field="progress">Actions</th>
                </tr>

            </thead>
            <tbody class="data">
            @foreach($newService as $categoryS)
                <tr id="trow_1">
    <td><strong>{{$categoryS->namePage}}</strong></td>
    <td><a class="waves-effect waves-red btn-flat m-b-xs "></a></td>
    <td>
       
    </td>
     <td>
      <a class="btn btn-default btn-rounded btn-sm" href="categoryS/{{$categoryS->id}}edit" ><span class="fa fa-pencil"></span></a>

        <form method="get" action="categoryS/{{$categoryS->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form>
           </td>
           
           </tr>
   
          @endforeach  

          <tr>
              <td>
                  <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="categoryS/form_add"><i class="material-icons">add</i></a> 
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
        
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    
                    <th data-field="number"> category product name</th>

                    <th data-field="progress">Actions</th>
                </tr>

            </thead>
            <tbody class="data">
            @foreach($newProduct as $categoryP)
                <tr id="trow_1">
    <td><strong>{{$categoryP->namePage}}</strong></td>
    <td><a class="waves-effect waves-red btn-flat m-b-xs "></a></td>
    <td>
       
    </td>
     <td>
      <a class="btn btn-default btn-rounded btn-sm" href="categoryP/{{$categoryP->id}}edit" ><span class="fa fa-pencil"></span></a>

        <form method="get" action="categoryP/{{$categoryP->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form>
               
           </td>
           <td>
               
           </td>
           </tr>
          @endforeach   

          <tr>
              <td>
                  <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="categoryP/form_add"><i class="material-icons">add</i></a> 
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