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
                            <input type="text" class="form-control mb-2" name="body" placeholder="いまどうしてる？">
                            <input type="submit" class="btn btn-primary" value="つぶやく">
                        </form>
                    </div>
                </div>

                <div class="">
                    @foreach ($posts as $post)
                        <div class="card mb-2 p-2">
                            <p>{{ $post->post_id }}　{{   $post->name }}</p>
                            <p class="font-weight-bold">{{ str_limit($post->body, 100) }}</p>
                            <p>{{ $post->created_at }}</p>
                            @if (Auth::id() == $post->id)
                            <form action="{{ route('delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="delete" value={{ $post->post_id }}>
                                <input type="submit" class="btn btn-danger" value="削除">
                            </form>

                            @endif
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection

{{-- エスケープしないとき、つまり$変数を使う時は!!をつける。 --}}
{{-- バリデーション＝検証 --}}
