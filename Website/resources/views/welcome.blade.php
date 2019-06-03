@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <input type=button name=type id='bt1' value='Show Layer' onclick="setVisibility('sub3');";>
          <div id="sub3">
            <table>
              <tr>
                <th>Email</th>
                <th>Status</th>
              </tr>
              @foreach($users as $chatuser)
              <tr>

                <td class="list-group-item" value="{{ $chatuser->email }}">{{ $chatuser->email }}</td>
                <td class="list-group-item" value="{{ $chatuser->activated }}">{{ $chatuser->activated }}</td>

              </tr>
              @endforeach
            </table>
              <!-- <li class="list-group-item" value="{{ $chatuser->email }}">{{ $chatuser->email }}</li> -->
          </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
@endsection
