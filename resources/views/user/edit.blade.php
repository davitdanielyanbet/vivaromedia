<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit user ') . $user->name }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />
                    <form method="POST" enctype="multipart/form-data" name="UserListUpdate"  action="{{ route('edit', $user->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-1 gap-6">

                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <x-label for="first_name" :value="__('First name')" />
                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $accounts->first_name }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="last_name" :value="__('Last name')" />
                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $accounts->last_name }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <x-input id="name" class="block mt-1 w-full" type="hidden" name="name" value="{{ $user->name }}" autofocus />
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}" autofocus />
                                </div>
                                <div>
                                    <x-label for="postition" :value="__('Position')" />
                                    <x-input id="postition" class="block mt-1 w-full" type="text" name="postition" value="{{ $accounts->postition }}" autofocus />
                                </div>

                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <x-label for="avatar_url" :value="__('Update avatar')" />
                                    <x-input id="avatar_url" class="block mt-1 w-full" type="file" name="avatar_url" value="{{ Storage::url($accounts->avatar_url) }}" autofocus ruequired/>
                                </div>
                                <div>
                                    <x-label for="short_desc" :value="__('Short description')" />
                                    <x-input id="short_desc" class="block mt-1 w-full" type="text" name="short_desc" value="{{ $accounts->short_desc }}" autofocus />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <x-label for="new_password" :value="__('New password')" />
                                    <x-input id="new_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password"
                                             autocomplete="new-password" />
                                </div>
                                <div>
                                    <x-label for="confirm_password" :value="__('Confirm password')" />
                                    <x-input id="confirm_password" class="block mt-1 w-full"
                                             type="password"
                                             name="password_confirmation"
                                             autocomplete="confirm-password" />
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
            </div>
        </div>
    </div>
</x-app-layout>
