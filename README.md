## Upcoming Movie list
The Upcoming Movie list is about adding movies by the user and also adding and selecting the movie star cast(Actors).



## Build status
The application is built on laravel, javascript, ajax and UI bootstrap.


## Code style
The StyleCI coding style is used.

[![StyleCI](https://styleci.io/)
 
## Screenshots
Included in /Screenshots.

## Tech/framework used
Laravel Framework, ajax, html, bootstrap UI.

<b>Built with</b>
- [Laravel](https://laravel.com/)

## Features
This project allows only users to add and delete the lists. The unauthorized user will be able to only read/see the list. It uses a csrf protection on every form built to allow detection of unauthorized user.   

## Code Example


@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>

    @endforeach
@endif

@if(session('successs'))
        <div class="alert alert-success">
            {{session('successs')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif
#####Home page of Movie
@extends('layouts.app')

@section('content')

@include('msg.err_msg')
    <h1> Movies of 2018  
        
        <a href="/movie/create" >
        {{Form::button('+ Movie',['class'=> 'btn btn-default  pull-right'])}}
        </a>
    </h1>  <br>  
    <div class="col-sm-12">
    <table class="table">
        <thead class="thead-dark">
            <th> Poster</th>
            <th>Moive Name</th>
            <th >Year of Release(YYYY-MM-DD)</th>
            <th >Plot</th>
            <th >Cast</th>
            <th >Edit</th>
        </thead>

        @if(count($values)>0)
            @foreach ($values as $value)
            
                <tbody class="tbody">
                <td style="width:23%"  >
                <img style="width:200px; height: 190px " src="\storage\Posters\{{$value->cover_image}}"></td>
                <td>{{$value->name}} </td>
                <td>{{$value->year_of_release}}</td>
                <td>{{$value->plot}}</td>
                <td>{{$value->actors}}</td>
                <td> 
                <a href="/movie/{{$value->id}}/edit">
                    {{Form::button('Edit',['class'=>'btn btn-primary']) }}
                </a>
                {{Form::open(['action' => ['MovieController@destroy', $value->id],'method' => 'POST'])}}
                    {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger']) }}
                {{Form::close()}}
                </td>
                 
                </tbody>
            </div>
         
            @endforeach
      
        </table>
       @endif

       
        
  
@endsection

## Installation

Step 1: Copy all the files to specific folder 
Step 2:	Open terminal in the same folder type "php artisan serve" to start the project 
Step 3: Enjoy the working of the project 




## How to use?
Step 1: You can see the list of movies in /movie and actor list in /actor 
Step 2: If the user want to add or delete the movie or actor list. He or should first register and then login to the page above. Once you are logged in you can easily add/delete and edit the list. 
Step 3: Only the users who are logged in can do the full operation in the applications 

##Vulnerabilities/Bugs
While creating actor page if you click outside of the modal, you have to again reload the page and again fill the values again. 

## Credits
The company Deltax had given a task. Which made me to work on this project 



## License
Sharat S. Janageri 
email: sharat.s.janageri@gmail.com


MIT © [Yourname]()
