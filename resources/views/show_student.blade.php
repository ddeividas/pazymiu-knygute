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
                        @foreach($students as $key)
                            <option value="{{ route("show.student", $key->id) }}">{{$key->name . " " . "$key->surname"}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-8 mt-3 text-center">
                <h2>{{$student->name . " " . $student->surname}}</h2>
                <table>
                    <tbody>
                        @foreach($lectures as $lecture)
                            <tr style="height: 50px; font-size: 18px;">
                                <th style="padding-right: 40px">
                                    {{$lecture->name}}
                                </th>
                                @foreach($lecture->grades as $grade)
                                    @if($grade->student_id == $student->id)
                                        <td style="padding-left: 5px">
                                            {{$grade->grade}}
                                        </td>
                                    @endif
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
