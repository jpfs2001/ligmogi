@extends('layouts.nav')

@section('content')
<h3><a href="/admin">/Admin</a></h3>
<div class="panel-body">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
             <li>{{$error}}</li>  
            @endforeach          
            </ul>
        </div>
        @endif
<br><br><br><br>

    <form method="post" action="/addImages" enctype="multipart/form-data">
    
        {{ csrf_field() }}

        <input type="hidden" name="comercios_id" value="{{$dados}}">

        <div class="form-group">   
            <label for="banner" class="Texto">Banner</label>
            <input type="file" class="Texto form-control" name="link">
        </div>

        <button type="submit" class="btn btn-success" style="background-color: greelight;border-color: greenlight;" >Enviar </button>



        
       
    
    </form>

@stop