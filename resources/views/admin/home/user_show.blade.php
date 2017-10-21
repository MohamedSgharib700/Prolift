@extends('admin.master.layout')

 @section('content')

 <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-effect waves-light red waves-light btn " href="{{url('register')}}"><i class="material-icons">add</i></a>
</div>
 <div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            <form method="GET" action="" accept-charset="UTF-8" class="searchForm">
            <input type="text" name="value" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            </form>
        </div>
        <!-- Dropdown Trigger -->
        <!-- Dropdown Structure -->
        <span class="card-title">Users</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="number">User Name</th>
                    <th data-field="company">Email</th>
                    <th data-field="progress">Actions</th>



                </tr>

            </thead>
            <tbody class="data">
            @foreach($shows as $user)
                <tr id="trow_1">
    <td class="text-center">{{$user->id}}</td>
    <td><strong>{{$user->name}}</strong></td>
    <td><strong>{{$user->email}}</strong></td>
          @if(Auth::user()->role === 1)
          <td>
          <a class="btn btn-default btn-rounded btn-sm" href="edit/{{$user->id}}/edit" ><span class="fa fa-pencil"></span></a>
          </td>
          @endif

           @if(Auth::user()->role === 1 && $user->id !== 3)
           <td>
        <form method="get" action="user_show/{{$user->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form> 
         </td>
         @endif

       @if(Auth::user()->role === 0 &&Auth::user()->id === $user->id)
       <td>
      <a class="btn btn-default btn-rounded btn-sm" href="edit/{{$user->id}}/edit" ><span class="fa fa-pencil"></span></a>

        <form method="get" action="user_show/{{$user->id}}/delete" accept-charset="UTF-8" style="display: inline"><input name="_method" type="hidden" value="DELETE">
        <button type="submit" class="btn btn-danger red " onclick='return confirm("Are you sure you want to delete!!")' ><span class="fa fa-times"></span></button>
        </form>
                
       </td>
       @endif

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
