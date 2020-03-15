@extends('layouts.app')

@section('content')
    <div style="width: 90%; margin: 10px auto;">
        <h4 class="title">Rašytį pažymį</h4>
        <div style="margin-top: 40px" class="row justify-content-center">
            <div class="col-6">
                <h4 class="title">Pasirinkite variantus</h4>
                <form style="margin-top: 15px" method="POST"; action="{{route('grades.store')}}">
                    @csrf
                    <div class="form-group">
                        <select class="form-control" name="lecture">
                            <option selected disabled>Pasirikite paskaitą</option>
                            @foreach($lectures as $lecture)
                                <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="student">
                            <option selected disabled>Pasirikite studentą</option>
                            @foreach($students as $student)
                                <option value="{{$student->id}}">{{$student->name . " " . $student->surname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="grade">
                            <option selected disabled>Pasirikite pažymį</option>
                            @for($i = 10; $i > 0; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <input type="hidden" name="user" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Pridėti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
