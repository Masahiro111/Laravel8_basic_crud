@extends('layouts.app-article')

@section('content')
<div class="col-lg-12 margin-tb mb-8">
    <a class="px-6 py-2 border border-transparent  text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700"
        href="{{ route('create') }}"> Create new Article</a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                No
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Article
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($articles as $article)

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                {{ ++$i }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $article->title }}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $article->article }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form action="{{ route('destroy',$article->id) }}" method="POST">

                                    <a class="text-indigo-600 hover:text-indigo-900"
                                        href="{{ route('show',$article->id) }}">Show</a>

                                    <a class="text-indigo-600 hover:text-indigo-900"
                                        href="{{ route('edit',$article->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="bg-white text-red-700 hover:text-indigo-900">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                        {!! $articles->links() !!}


                        <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection