@extends('admin.master.layout')

 @section('content')

            <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                        <div class="row">
                            <div class="card">
                                 <div class="card-content">
                                    <span class="card-title">Report Info</span>
                              <div class="row">
                              
                            <form method="POST" action="{{route('report',['report'=> $report->id]) }}" accept-charset="UTF-8" class="ajax-form-request">
                              {{ csrf_field() }}
                                <div class="message" style="padding:26px; ">
                                </div><!-- div to display message after insert -->
                                <div class="loading-sub" style="display: none;">
                                    <div class="progress">
                                        <div class="indeterminate"></div>
                                    </div>
                                </div>
                                
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title1" type="text" value="{{$report->title1}}">
                                    <label for="name">Title1</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="count1" type="text" value="{{$report->count1}}">
                                    <label for="name">Count1</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title2" type="text" value="{{$report->title2}}">
                                    <label for="name">Title2</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="count2" type="text" value="{{$report->count2}}">
                                    <label for="name">Count2</label>
                                    <label class="error"></label>
                                </div>

                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="title3" type="text" value="{{$report->title3}}">
                                    <label for="name">Title3</label>
                                    <label class="error"></label>
                                </div>
                                <div class="input-field col s6">
                                    <input class="validate" id="name" name="count3" type="text" value="{{$report->count3}}">
                                    <label for="name">Count3</label>
                                    <label class="error"></label>
                                </div>

                                





                                <div class="input-field col s12">

                                    <input class="btn btn-primary text-center" id="submit" type="submit" value="Save">
                                </div>
                            </form>
                                     </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>


                        </div>
         
                
            </main>

 @endsection