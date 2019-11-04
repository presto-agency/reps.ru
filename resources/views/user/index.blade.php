@extends('layouts.app')

@section('sidebar-left')
    @include('components.interview')
    @include('left-side.search-replays')
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
{{--    @include('user.components.user_friends')--}}
    @include('user.components.user_profile')
    #####################################################
    @include('user.components.user_friends')
    #####################################################
{{--    @include('user.components.setting')--}}
{{--    #####################################################--}}
{{--    @include('user.rating-list.components.index')--}}
{{--    #####################################################--}}
    @include('user.components.password-recovery')
    #####################################################
    @include('user.components.get-recovery-link')
{{--    #####################################################--}}
{{--    @include('user.topics.components.create')--}}
@endsection

@section('right-side')
    @parent
    @include('right-side.components.last-replay')
@endsection
