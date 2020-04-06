@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-3">
                <h1>Studentų matymo laukas</h1>
            </div>
            <div class="col-6 mt-3 text-center">
                <div class="input-group mb-3">
                    <select class="custom-select">
                        <option selected disabled>Pasirinkite vardą</option>
                        @foreach($students as $key)
                            <option>
                                <a href="{{route('show.student', $key->id)}}">{{$key->name . " " . $key->surname}}</a>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    Vardas: {{$student->name}}
                    Pavarde: {{$studen->surname}}
                </div>
            </div>
        </div>
    </div>
@endsection
