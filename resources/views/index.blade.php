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
                    </form>
                </div>
            </div>
            
            <div class="card">
                {{-- @foreach ($collection as $item)
                    
                
                <div class="card-body">
                    <li>{{ $posts->'' }}</li>
                </div>
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
@endsection

{{-- エスケープしないとき、つまり$変数を使う時は!!をつける。 --}}
{{-- バリデーション＝検証 --}}