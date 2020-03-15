@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Studentas</th>
                @foreach($lectures as $lecture)
                    <th>{{$lecture->name}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th>{{$student->name}}</th>
                    @foreach($lectures as $lecture)
                        <th>
                            @foreach($lecture->grades as $grade)
                                @if($student->id == $grade->student_id)
                                    <span>{{$grade->grade}}</span>
                                    <span class="info">afdsadsf</span>
                                @endif
                            @endforeach
                        </th>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
