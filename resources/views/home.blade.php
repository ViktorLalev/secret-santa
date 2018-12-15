@extends('layouts.app')

@section('content')
    <choose
            taho-message="ТАХО ! МОЛЯ, НЕ ПРОДЪЛЖАВАЙ !"
            :current-results="{{$currentResults}}"
            :all-possible-givers="{{$givers}}"
            :all-possible-takers="{{$takers}}"
            back-door="{{$show}}"
    >
    </choose>
@endsection
