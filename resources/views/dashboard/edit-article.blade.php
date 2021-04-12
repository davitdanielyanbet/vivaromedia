<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles list') }}
        </h2>
        <button type="button" class="text-md font-medium text-gray-500 mt-2">Add new article</button>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                @foreach($articleData->all() as $currentArticle)
                                <div id="article-id{{$currentArticle->id}}">

                                    <form method="POST" enctype="multipart/form-data" name="ArticleEdit"  action="">
                                        @method('PUT')
                                        @csrf
                                        <div class="grid grid-cols-1 gap-6">
                                            <div class="grid grid-cols-2 gap-12">
                                                <div>
                                                    <x-label class="text-9x1" for="article_title" :value="__('First name')"></x-label>
                                                    <x-input id="article_title" class="block mt-1 w-full" type="text" name="article_title" value="{{$currentArticle->title}}" autofocus></x-input>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-12">
                                                <x-input id="name" class="block mt-1 w-full" type="hidden" name="article-id" value="{{$currentArticle->name }}"></x-input>
                                                <div>
                                                    <x-label for="article_slug" :value="__('Slug')"></x-label>
                                                    <x-input id="article_slug" class="block mt-1 w-full" type="text" name="article_slug" value="{{$currentArticle->slug}}"></x-input>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-2 gap-6">
                                                <div>
                                                    <x-label for="article_description" :value="__('Short description')"></x-label>
                                                    <x-input id="article_description" class="form-control" type="textarea" name="article_description" value="{{ $currentArticle->description }}"></x-input>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            <x-button class="ml-3">
                                                {{ __('Update') }}
                                            </x-button>
                                        </div>
                                    </form>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
