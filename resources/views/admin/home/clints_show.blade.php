@extends('admin.master.layout')

 @section('content')

<main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="fixed-action-btn">
 <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="clint/form_add"><i class="material-icons">add</i></a>
</div>
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title">Clints Page</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="number">Names</th>
                    <th data-field>specialty</th>
                    <th data-field="number">images</th>
                    <th data-field="progress">Actions</th>
                </tr>

            </thead>
            <tbody class="data">
            @foreach($clints as $clint)
                <tr id="trow_1">
    <td><strong>{{$clint->title}}</strong></td>
    <td><strong>{{$clint->specialty}}</strong></td>
    <td><img style="width:60px; height:60px;" src="{{('imgClints/'. $clint->image)}}"></td>
     <td>
      <a class="btn btn-default btn-rounded btn-sm" href="clint/{{$clint->id}}edit" ><span class="fa fa-pencil"></span></a>

        <form method="get" action="clint/{{$clint->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
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