@extends('layouts.app-article')

@section('content')

<div class="col-lg-12 margin-tb mb-8">
    <a class="px-6 py-2 border border-transparent  text-sm rounded-md text-white bg-indigo-600 hover:bg-indigo-700"
        href="{{ route('index') }}"> Back</a>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Article Information
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Article details.
        </p>
    </div>
    <div class="border-t border-gray-200">
        <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Title
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $article->title }}
                </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">
                    Article
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    {{ $article->article }}
                </dd>
            </div>
        </dl>
    </div>
</div>
@endsection