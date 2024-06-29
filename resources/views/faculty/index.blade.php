@extends('layouts.app')

@section('title')
    Faculty
@endsection

@section('content')



    <div class="card mt-5 w-[80%] mx-auto">
        <h2 class="card-header text-center font-semibold">Faculty</h2>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif

            <!-- Using utilities: -->
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="{{ route('faculty.create') }}"><i class="fa fa-plus"></i> Create New item</a>
  </button>
  
  <style>
    .btn {
      @apply font-bold py-2 px-4 rounded;
    }
    .btn-blue {
      @apply bg-blue-500 text-white;
    }
    .btn-blue:hover {
      @apply bg-blue-700;
    }
  </style>


            <div class="rounded-lg my-4 p-4 border-separate border border-slate-500 ">
                <table class="w-full">
                    <thead>
                        <tr class="text-left ">
                            <th class="border-b border-slate-600">No</th>
                            <th class="border-b border-slate-600">Faculty TH</th>
                            <th class="border-b border-slate-600">Faculty EN</th>
                            <th class="border-b border-slate-600">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($faculties as $item)
                            <tr>
                                <td class="border-b">{{ $item->id }}</td>
                                <td class="border-b">{{ $item->faculty_th }}</td>
                                <td class="border-b">{{ $item->faculty_en }}</td>
                                <td class="border-b">
                                    <form action="{{ route('faculty.destroy', $item->id) }}" method="POST">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-2 mt-2 my-2 border border-blue-700 rounded">
                                            <a href="{{ route('faculty.show', $item->id) }}"><i
                                                class="fa-solid fa-list"></i> Show</a>
                                          </button>
                                          
                                          <button class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 py-2 mt-2 my-2 border border-green-500 rounded">
                                            <a href="{{ route('faculty.edit', $item->id) }}"><i
                                                class="fa-solid fa-pen-to-square"></i> Edit</a>
                                          </button>
                                        

                                        
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 py-2 mt-2 my-2 border border-red-500 rounded">
                                            Delete
                                          </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">ไม่มีข้อมูล</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {!! $faculties->links() !!}

        </div>
    </div>
@endsection