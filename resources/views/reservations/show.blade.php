@extends('layouts.common')
@section('title', 'Edit Reservation')
@section
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're all booked for the {{ $hotel_info->name }} in {{ $hotel_info->location }}!</h2>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{$hotel_info->image}}" class="img-fluid" alt="Front of hotel">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="card-title">
                             {{ $hotel_info->name }} - <small>{{ $hotel_info->location }}</small>
                        </h3>
                         <p class="card-text">{{ $hotel_info->description }}</p>
                        <p class="card-text"><strong>チェックイン: </strong>{{ $reservation->check_in }}</p>
                        <p class="card-text"><strong>チェックアウト: </strong>{{ $reservation->check_out }}</p>
                        <p class="card-text"><strong>部屋: </strong>{{ $reservation->room['type'] }}</p>
                        <p class="card-text"><strong>人数: </strong>{{ $reservation->num_of_guests }}</p>
                        <p class="card-text"><strong>料金: </strong>${{ $reservation->room['price'] }}</p>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('reservations.index') }}/{{ $reservation->id }}/edit" class="btn btn-lg btn-success">予約を変更</a>
                    <a href="{{ route('reservations.index') }}/{{ $reservation->id }}/delete" class="btn btn-lg btn-danger">取り消し</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection