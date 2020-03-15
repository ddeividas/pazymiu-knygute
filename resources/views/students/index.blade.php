@extends('layouts.app')

@section('content')
    <div style="width: 90%; margin: 10px auto;">
        <h4 class="title">Visi studentai</h4>
        <div style="margin-top: 40px" class="row justify-content-center">
            <div class="col-12">
                <table style="width: 100%;" class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>El-paštas</th>
                            <th>Numeris</th>
                            <th class="text-center">Veiksmas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <th class="align-middle">{{ $student->name }}</th>
                                <th class="align-middle">{{ $student->surname }}</th>
                                <th class="align-middle">{{ $student->email }}</th>
                                <th class="align-middle">{{ $student->phone }}</th>
                                <th style="display: flex; justify-content: center">
                                    <form style="margin-right: 5px;" method="POST" action="{{route('students.destroy', $student->id)}}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" value="Trinti">
                                    </form>
                                    <a class="btn btn-primary" href="{{route('students.edit', $student->id)}}">Redaguoti</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <h4 class="title">Pridėti studenta</h4>
                <form style="margin-top: 15px" method="POST" action="{{route('students.store')}}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Vardas">
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="Pavardė">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="El-paštas">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Numeris">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Pridėti">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
