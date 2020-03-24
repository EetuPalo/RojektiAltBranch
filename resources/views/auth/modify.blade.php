@extends ("layouts.app")

@section ("content")
@if (Auth::check())

<div class="content">

<h1>What skill would you like to rate?</h1>

<form method="post" action="{{ route('modify.store') }}">
@csrf
<table class="table table-hover">

    <thead>

      <th>Skill</th>
      <td>Rating</td>

    </thead>

    <tbody>
@foreach ($skill as $skill)

        <tr>

          <th scope="row">{{$skill->skill}}
          <div class="form-check">
             
                </th>
                <input  type="hidden" name="user_id" value="{{Auth::id("user_id")}}">

          <th><select class="form-control-m"  name="rating" id="rating"  value="{{ ('rating') }}">
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      </th>
        </tr>
                    </div>
        @endforeach
    </tbody>

</table>

  @if (Auth::id("id"))

   <div class="card">

    @endif
    </form>


    <button type="submit" class="btn btn-primary" method="post" action="{{ route("skills.index")}}">
    @csrf
        {{ __('Submit') }}
    </button>


    </div>
</div>
</div>
</div>
</div>

@endif
@endsection
