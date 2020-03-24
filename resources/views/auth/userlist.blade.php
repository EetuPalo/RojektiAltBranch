@extends('layouts.app')

@section('content')

@if (Auth::id())

<div class="content">
<div class="title m-b-md">
Logged in as {{ Auth::user()->name }}
</div>

<table class="table table-hover">

    <thead>

      <th>Registered users</th>

    </thead>

    <tbody>
@foreach ($name as $name)

        <tr>

          <th scope="row">{{$name->name}}  <button type="button" class="btn btn-success btn-link"> <a href="{{ route("skills.index") }}">Look at skills</a></button></th>

        </tr>
        @endforeach
    </tbody>

</table>

@endif
@endsection

