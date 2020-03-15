@extends('layouts.app')

@section('content')
    <div style="width: 90%; margin: 10px auto;">
        <h4 class="title">Redaguoti studenta</h4>
        <div style="margin-top: 40px" class="row justify-content-center">
            <div class="col-6">
                <h4 class="title">Pridėti studenta</h4>
                <form style="margin-top: 15px" method="POST" action="{{route('lectures.update', $lecture->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Paskaita" value="{{$lecture->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Aprašymas</label>
                        <textarea class="form-control" name="description" id="description">{{$lecture->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Redaguoti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
