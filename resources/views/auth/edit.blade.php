@extends ("layouts.app")

@section ("content")

@if (Auth::check())

<form method="post" action="route("auth.edit", $user)">

{{ csrf_field() }}
    {{ method_field('patch') }}

    <input type="text" name="skill" value=""
