@extends('master')

@section('title')
    About US
        

@endsection

@section('content')
      
        @if(auth()->check()) 
        

        <style type="text/css">
         .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
                background-color: #F0F8FF  ;
             }
            .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
                background-color: seashell;
            }
         
        </style>

		<div class="row table-responsive">
         <div class="container ">
            <table class="table  table-hover table-striped">
            <thead>
              <h3>News Created By Me</h3>

              <tr >
                 <th class="col-md-1" }">ID</th>
                 <th class="col-md-8">News headline</th>
                 <th class="col-md-2">Options</th>
                 
              </tr>
            </thead>
            <tbody>
            @php 
                $cnt = 1;
            @endphp
            @foreach($news as $nws)
            <tr>
                <th> {{ $cnt }} </th>  
             	<th> {{ $nws->newsTitle }} </th>  
                 <th><button class="button ">Edit</button>   
                 <a class="button1" href="{{ route('news.delete', ['news_id' => $nws->id] ) }}" >Delete</a>  </th>           
             </tr>
             @php 
                $cnt++;

            @endphp


            @endforeach
             
            

            </tbody>
            
            </table>
        </div>
        </div>
        @endif
@endsection