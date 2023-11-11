@extends('layouts.main')
@section('content')
    <div class="max-w-full py-8 px-16 text-center">
        <h1 class="md:text-4xl font-bold text-2xl">Testimoni Customer AUTOGLEAM</h1>
        <div class="grid grid-cols-1 gap-x-8 md:grid-cols-2 gap-y-4">
            @foreach ($testimony as $data)
                <div class="text-center">
                    <img src="{{ asset('image/' . $data->customer->profile_picture) }}"
                        class="mx-auto rounded-full w-32 h-32 object-cover relative md:top-16 top-8">
                    <div class="md:pt-20 md:px-12 pt-12 px-8 pb-8 border-solid rounded-xl border-black border-2">
                        <h2 class="md:text-2xl font-bold text-lg">{{ $data->customer->description }}</h2>
                        <p>{{ $data->testimony }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
