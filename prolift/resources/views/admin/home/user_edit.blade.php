@extends('admin.master.layout')

 @section('content')
            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                       <div class="row">
<form method="POST" action="{{route('user',['user'=> $user->id]) }}" accept-charset="UTF-8" class="ajax-form-request">
{{ csrf_field() }}
<div class="message" style="padding:26px; ">
</div><!-- div to display message after insert -->
<div class="loading-sub" style="display: none;">
    <div class="progress">
        <div class="indeterminate"></div>
    </div>
</div>

</div>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="input-field col s6">
    <i class="material-icons prefix">account_circle</i>
    <input class="validate" id="name" name="name" type="text" required="" value="{{$user->name}}">
    <label for="name">User Name</label>
    @if ($errors->has('name'))
     <span class="help-block">
     <strong>{{ $errors->first('name') }}</strong>
      </span>
     @endif
 </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="input-field col s6">
<div class="input-field col s6">
    <i class="material-icons prefix">email</i>
    <input class="validate" id="email" name="email" required="" type="email" value="{{$user->email}}">
    <label for="email">User Email</label>
    <label class="error"></label>
    @if ($errors->has('name'))
     <span class="help-block">
     <strong>{{ $errors->first('name') }}</strong>
      </span>
     @endif
     </div>
</div>
</div>
    



    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="input-field col s6">
    <i class="material-icons prefix">lock</i>

    <input name="password" type="password" required="" value="{{$user->password}}">
    <label for="password">Password</label>
    <label class="error"></label>
     @if ($errors->has('name'))
     <span class="help-block">
     <strong>{{ $errors->first('name') }}</strong>
      </span>
     @endif
     </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<div class="input-field col s6">
    <i class="material-icons prefix">lock</i>
    <input name="password_confirmation" required="" type="password" value="">
    <label for="password_confirmation">Password Confirmation</label>
    <label class="error"></label>
    @if ($errors->has('name'))
     <span class="help-block">
     <strong>{{ $errors->first('name') }}</strong>
      </span>
     @endif
     </div>
</div>


 
 
<div class="input-field col s12">

<input class="btn btn-primary text-center" id="submit" type="submit" value="Save">
</div>
</form>   
</div>
 
                   </div>
                 </div>
             </main>

 @endsection