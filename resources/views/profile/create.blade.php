@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>プロフィールを編集</h1>
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="bio">自己紹介</label>
                    <textarea class="form-control" id="bio" name="bio" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">保存</button>
            </form>
        </div>
    </div>
</div>
@endsection
