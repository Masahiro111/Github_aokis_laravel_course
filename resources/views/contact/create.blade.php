<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Use a permanent address where you can receive mail.
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="your_name" class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input type="text" name="your_name" id="your_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                                    <input type="text" name="title" id="title" autocomplete="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                                    <input type="email" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                                                    <input type="url" name="url" id="url" autocomplete="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <fieldset>
                                                    <div>
                                                        <legend class="text-base font-medium text-gray-900">gender</legend>
                                                    </div>
                                                    <div class="mt-4 space-y-4">
                                                        <div class="flex items-center">
                                                            <input id="gender-m" name="gender" type="radio" value="0" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="gender-m" class="ml-3 block text-sm font-medium text-gray-700">
                                                                Man
                                                            </label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="gender-w" name="gender" type="radio" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                                            <label for="gender-w" class="ml-3 block text-sm font-medium text-gray-700">
                                                                Woman
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="age" class="block text-sm font-medium text-gray-700">age</label>
                                                    <select id="age" name="age" autocomplete="age" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        <option value="">選択してください</option>
                                                        <option value="1">～19歳</option>
                                                        <option value="2">20～29歳</option>
                                                        <option value="3">30～39歳</option>
                                                        <option value="4">40～49歳</option>
                                                        <option value="5">50～51際</option>
                                                        <option value="6">60歳～</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label for="contact" class="block text-sm font-medium text-gray-700">
                                                        Contact
                                                    </label>
                                                    <div class="mt-1">
                                                        <textarea id="contact" name="contact" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="caution" class="block text-sm font-medium text-gray-700">
                                                        Caution
                                                    </label>
                                                    <div class="mt-1">
                                                        <input id="caution" name="caution" type="checkbox" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">注意事項に同意する
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</x-app-layout>