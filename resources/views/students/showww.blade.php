@extends('layouts.main')
@section('content')
    <div class='container md:mx-auto'>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
        @method('put')
        @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Имя</label>
                <input type="text" id="first_name" name="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $student->fname }}" required />
            </div>
            <div>
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Фамилия</label>
                <input type="text" id="last_name" name="lname"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $student->lname }}" required />
            </div>  
            <div>
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Возраст</label>
                <input type="number" id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ $student->age }}"  required />
            </div>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Обновить</button>
        </form>
    </div>
@endsection()