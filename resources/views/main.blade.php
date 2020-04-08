@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-3">
                <h1>Studentų matymo laukas</h1>
            </div>
            <div class="col-6 mt-3 text-center">
                <div class="input-group mb-3">
                        <select  id="studentai" class="custom-select" onchange="top.location.href = this.options[this.selectedIndex].value">
                            <option selected disabled>Pasirinkite vardą</option>
                            @foreach($students as $student)
                                <option value="{{ route("show.student", $student->id) }}">{{$student->name . " " . "$student->surname"}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div>
    </div>
@endsection
