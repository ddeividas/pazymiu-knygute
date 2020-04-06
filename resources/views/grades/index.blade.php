@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>Studentas</th>
                @foreach($lectures as $lecture)
                    <th style="text-align: center">{{$lecture->name}}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th>{{$student->name}}</th>
                    @foreach($lectures as $lecture)
                        <th style="text-align: center">
                            @foreach($lecture->grades as $grade)
                                @if($student->id == $grade->student_id)
                                    <span style="padding: 5px; background-color: lightyellow">{{$grade->grade}}</span>
                                @endif
                            @endforeach
                        </th>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
