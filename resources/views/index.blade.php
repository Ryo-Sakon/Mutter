@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card-header border border-dark mb-4">
                    <div class="card-body">
                        <p>ホーム</p>
                        <form action="{{ route('create') }}" method="post">
                            @csrf
                            <input type="text" class="form-control" name="body" placeholder="いまどうしてる？">
                            <input type="submit" class="btn btn-primary" value="つぶやく">
                        </form>
                    </div>
                </div>

                <div class="card">
                    @foreach ($posts as $posts)


                        <div class="card-body">
                        
                            {{-- <p>{{ $userNames }}</p> --}}
                            <p>{{ str_limit($posts->body, 100) }}</p>
                            <p>{{ $posts->created_at }}</p>
                            {{-- <p> {{ $post->user->name }}</p> --}}
                            {{-- @if ($userNames={{ Auth::user()->name }})
                                <span>{{ '削除' }}</span>
                            @endif --}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- エスケープしないとき、つまり$変数を使う時は!!をつける。 --}}
{{-- バリデーション＝検証 --}}
