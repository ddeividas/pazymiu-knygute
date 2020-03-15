@extends('layouts.app')

@section('content')
    <div style="width: 90%; margin: 10px auto;">
        <h4 class="title">Redaguoti studenta</h4>
        <div style="margin-top: 40px" class="row justify-content-center">
            <div class="col-6">
                <h4 class="title">Pridėti studenta</h4>
                <form style="margin-top: 15px" method="POST" action="{{route('students.update', $student->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Vardas" value="{{$student->name}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="Pavardė" value="{{$student->surname}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="El-paštas" value="{{$student->email}}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Numeris" value="{{$student->phone}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Redaguoti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
