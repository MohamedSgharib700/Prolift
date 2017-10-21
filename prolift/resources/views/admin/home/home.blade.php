@extends('admin.master.layout')

 @section('content')

  <main class="mn-inner inner-active-sidebar">
                <div class="middle-content">
                    <div class="row no-m-t no-m-b">
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <i class="material-icons">supervisor_account</i>        
                                 </ul>
                                </div>
                                <span class="card-title">{{$report->title1}}</span>
                                <span class="stats-counter"><span class="counter">{{$report->count1}}</span><small>{{$report->title1}}</small></span>
                            </div>
                            <div id="sparkline-bar"></div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">supervisor_account</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">{{$report->title2}}</span>
                                <span class="stats-counter"><span class="counter">{{$report->count2}}</span><small>{{$report->title2}}</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                     <div class="col s12 m12 l4">
                        <div class="card stats-card">
                            <div class="card-content">
                                <div class="card-options">
                                    <ul>
                                        <li><a href="javascript:void(0)"><i class="material-icons">looks</i></a></li>
                                    </ul>
                                </div>
                                <span class="card-title">{{$report->title3}}</span>
                                <span class="stats-counter"><span class="counter">{{$report->count3}}</span><small>{{$report->title3}}</small></span>
                            </div>
                            <div id="sparkline-line"></div>
                        </div>
                    </div>
                   
                </div>
                             
                        </div>
         
                
            </main>
 @endsection