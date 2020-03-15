@extends('layouts.app')

@section('content')
    <div style="width: 90%; margin: 10px auto;">
        <h4 class="title">Paskaitos</h4>
        <div style="margin-top: 40px" class="row justify-content-center">
            <div class="col-8">
                <table style="width: 100%;" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th>Paskaita</th>
                        <th>Aprašymas</th>
                        <th class="text-center">Veiksmas</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($lectures as $lecture)
                            <tr>
                                <th class="align-middle">{{ $lecture->name }}</th>
                                <th class="align-middle">{{ $lecture->description }}</th>
                                <th style="display: flex; justify-content: center">
                                    <form style="margin-right: 5px;" method="POST" action="{{route('lectures.destroy', $lecture->id)}}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Trinti">
                                    </form>
                                    <a class="btn btn-primary" href="{{route('lectures.edit', $lecture->id)}}">Redaguoti</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-4">
                <h4 class="title">Pridėti paskaitą</h4>
                <form style="margin-top: 15px" method="POST" action="{{route('lectures.store')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Paskaita">
                    </div>
                    <div class="form-group">
                        <label for="description">Aprašymas</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Pridėti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
