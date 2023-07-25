@extends('admin.master')
@section('main')
    <div
        class="w-1/2 p-6 border-black/12.5 align-middle shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
            <div class="flex flex-wrap mt-0 -mx-3">
                @if ($errors->any())
                    <div class="text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-700">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="flex-auto p-6 px-0 pb-2">
            <div class="overflow-x-auto">
                <form action="{{ route('addCategory') }}" method="post">
                    @csrf
                    <div>
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <input type="text" id="small-input" name="category"
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Category">
                    </div>
                    <div>
                        <button type="submit" name="save"
                            class="inline-block w-full px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
