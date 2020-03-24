@extends('layouts.app')

@section('content')


 @if (Auth::user()->id)



<div class="content">
        <div class="title m-b-md">
             Skills
        </div>
        <h3>Hello {{ Auth::user()->name }}</h3>
        <button type="button" class="btn btn-success btn-link"> <a href="{{ route("addskill.create") }}">Add a new skill</a></button>           
        <br><br>
        <form method="post" action="{{ route('skills.store') }}">
        <div class="table">               
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Skill</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Date added</th>
                <tr>
            </thead>
            <tbody>

            <tbody>

@foreach ($skill as $skill)



 
 
      <td><input class="form-check-input" type="checkbox" name="rating[]" value="" id="defaultCheck1">{{$skill->skill}}</td>
      <td> 
      {{ $rating }}
    
      <select class="form-control-m"  name="rating" id="rating"  value="{{ ('rating') }}">  
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
    
      </td>
 
      </th>
      <td>{{ $skill->created_at }}</td>
      <input  type="hidden" name="user_id" value="{{Auth::id("user_id")}}">
                 </div>
                    
 
          @endforeach
         </tr>
        </tbody>
        </table>

        </form>

    <button type="submit" class="btn btn-success" method="post" name="store" action="{{ route("skills.store")}}">
    @csrf
        {{ __('Save') }}
    </button>

    @foreach ($update as $update)
  <td>
    <form action="{{ route("skills.update", ['skill'=>$update->skill]) }}" method="post">

      {{ csrf_field() }}
      <input type="hidden" name="_method" value="update">
<button>
      <input type="submit" name="update" value="update" class="btn btn-success" onclick="return confirm('Are you sure you want to update this rating?')">
</button>
    </form>
  </td>

@endforeach





   {{-- @foreach ($delete as $delete)
   DELETE BUTTON IF NEEDED
     <td> <form action = "{{ route("skills.destroy", ['skill'=>$skillDelete->skill]) }}" method="post">

      {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" name="skillDelete" value= "Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this skill?')">

      </form></td> 
      @endforeach
      --}}

      </td>


  
    


    </div>
</div>
</div>


@endif
@endsection

