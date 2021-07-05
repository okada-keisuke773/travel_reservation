@extends('layouts.common')
@section('title', 'Reservations')
@section('content')
<div class="container mt-5">
    @if(!empty(Session::get('success')))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger">{{Session::get('error')}}</div>
    @endif
    <h2>予約一覧</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">ホテル</th>
                <th scope="col">タイプ</th>
                <th scope="col">人数</th>
                <th scope="col">管理</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->room->hotel['name'] }}</td>
                <td>{{ $reservation->room['type'] }}</td>
                <td>{{ $reservation->num_of_guests }}</td>
                <td><a href="{{ route('reservations.index') }}/{{ $reservation->id }}/edit" class="btn btn-sm btn-success">編集</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $reservations->links() }}
</div>
@endsection