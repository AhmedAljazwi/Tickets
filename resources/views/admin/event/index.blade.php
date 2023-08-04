@extends('admin.master')

@section('title', 'الأحداث')

@section('content')
    <div class="container mt-5 mx-5">
        <a href="{{url('/create-event')}}" class="btn btn-primary mb-3">حدث جديد</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">إسم الحدث</th>
              </tr>
            </thead>
            <tbody>
              @foreach($events as $event)
                <tr>
                    <td>{{$event->id}}</td>
                    <td>{{$event->name}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection