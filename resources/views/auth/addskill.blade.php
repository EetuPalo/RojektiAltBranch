@extends ("layouts.app")

@section ("content")

@if (Auth::check())
@if (Auth::id())
<div class="content">


<form method="post" action="{{ route('addskill.store') }}">


@csrf

  <div class="form-group">

  <div class="card">

    <label for="skill">Skill name</label>


 

    <input  type="text"  class="form-control" id="skill"  value="{{ old('skill') }}" name="skill" placeholder="Skill name" autofocus required autocomplete="skill">

    <button type="submit" class="btn btn-primary" action="{{ route ("skills.index")}}" onclick="return confirm('Do you want to add this skill to database?')">


        {{ __('Submit') }}

    </button>
 
</form>



</div>
</div>
</div>

</form>
@endif
@endif
@endsection

{{--method="post" <a href="{{ route("skills")</a>--}}
