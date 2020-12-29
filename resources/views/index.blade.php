@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card-header border border-dark mb-4">
                <div class="card-body">
                    <p>ホーム</p>
                    <form action="{{ action('PostController@create') }}" method="post">
                    @csrf
                        <input type="text" class="form-control" value="body" placeholder="いまどうしてる？">
                    </form>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    つぶやく内容
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- エスケープしないとき、つまり$変数を使う時は!!をつける。 --}}
