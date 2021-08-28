@extends('layouts.common')
@section('title', 'Edit Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>{{ $hotel_info->name }} - <small class="text-muted">{{ $hotel_info->location }}</small></h2>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">世界でも最も壮大なリゾートです</p>
            <form action="{{route('reservations.update', $reservation->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="room">部屋のタイプ</label>
                            <select class="form-control" name="room_id" value="{{old('room_id', $reservation->room_id)}}">
                                <option value="{{old('room_id', $reservation->room_id)}}">{{$reservation->room->type}} - ¥{{$reservation->room->price}}</option>
                                @foreach($hotel_info->rooms as $option)
                                @if($reservation->room_id !== $option->id)
                                <option value="{{$option->id}}">{{$option->type}} - ¥{{$option->price}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="guests">人数</label>
                            <input class="form-control" name="num_of_guests" placeholder="半角数字で入力してください" value="{{ old('num_of_guests', $reservation->num_of_guests) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="check_in">チェックイン</label>
                            <input type="date" class="form-control" name="check_in" placeholder="03/21/2020" value="{{ old('check_in', $reservation->check_in) }}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="check_out">チェックアウト</label>
                            <input type="date" class="form-control" name="check_out" placeholder="03/23/2020" value="{{ old('check_out', $reservation->check_out) }}">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="{{$reservation->id}}">
                <button type="submit" class="btn btn-lg btn-primary">送信</button>
            </form>
        </div>
    </div>
    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <p class="text-right">
            <button type="submit" class="btn btn-sm text-danger">予約を取り消し</button>
        </p>
    </form>
</div>
@endsection