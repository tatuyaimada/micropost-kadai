@if (Auth::id() == $micropost->user_id)
    {{-- 投稿削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['microposts.destroy', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
    {!! Form::close() !!}
@endif