@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-3">
                <h1>Studentų matymo laukas</h1>
            </div>
            <div class="col-6 mt-3 text-center">
                <div class="input-group mb-3">
                    <form method="POST" action="{{route('show.student', $student->id)}}">
                        <select class="custom-select">
                            <option selected disabled>Pasirinkite vardą</option>
                            @foreach($students as $student)
                                <option>{{$student->name . " " . "$student->surname"}}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="Rodyti">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
