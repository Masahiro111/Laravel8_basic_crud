@extends('layouts.app-article')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Check all Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('create') }}"> Create new Article</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Description</th>
        <th width="250px">Action</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $article->title }}</td>
        <td>{{ $article->article }}</td>
        <td>
            <form action="{{ route('destroy',$article->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('show',$article->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('edit',$article->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $articles->links() !!}

@endsection