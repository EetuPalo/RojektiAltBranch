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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Skill</th>
                    <th scope="col">Date added</th>
                    <th scope="col">Skill ID</th>
                    <th scope="col">Rate</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <td><?php echo $skill->skill ?></td>
                    <td><?php echo $skill->created_at ?></td>
                    <td><?php echo $skill->skills_id ?></td>
                    <form method="post" action="{{ route('skills.store') }}">
                        <td>
                        <select name="rating" value="{{ ('rating') }}">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input hidden name="user_id" value="{{Auth::id("user_id")}}">
                        <input hidden name="skill_id" value="{{$skill->skills_id}}">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success" method="post" name="store" action="{{ route("skills.store")}}">
                        @csrf
                        {{ __('Save') }}
                        </button>
                    </td>
                    </form>                    
                </tr>               
                @endforeach
            </tbody>
        </table>      

    

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

