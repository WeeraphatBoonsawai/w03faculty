@extends('layouts.app')

@section('title')
    Student
@endsection

@section('content')
    <div class="card mt-5 w-[80%] mx-auto">
        <h2 class="card-header text-center font-semibold">Student</h2>
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif

              <!-- Using utilities: -->
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="{{ route('student.create') }}"><i class="fa fa-plus"></i> Create New item</a>
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


            <div class="rounded-lg border my-4 p-4">
                <table class="w-full">
                    <thead>
                        <tr class="text-left">
                            <th class="border-b">No</th>
                            <th class="border-b">SID</th>
                            <th class="border-b">First name</th>
                            <th class="border-b">Last name</th>
                            <th class="border-b">Grade Year</th>
                            <th class="border-b">Program TH</th>
                            <th class="border-b">Program EN</th>
                            <th class="border-b">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($students as $item)
                            <tr>
                                <td class="border-b">{{ $item->id }}</td>
                                <td class="border-b">{{ $item->sid }}</td>
                                <td class="border-b">{{ $item->fname }}</td>
                                <td class="border-b">{{ $item->lname }}</td>
                                <td class="border-b">{{ $item->program->grad_year }}</td>
                                <td class="border-b">{{ $item->program->program_th }}</td>
                                <td class="border-b">{{ $item->program->program_en }}</td>
                                <td class="border-b">
                                    <form action="{{ route('student.destroy', $item->id) }}" method="POST">

                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-2 mt-2 my-2 border border-blue-700 rounded">
                                            <a href="{{ route('student.show', $item->id) }}"><i
                                                class="fa-solid fa-list"></i> Show</a>
                                          </button>

                                          <button class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 py-2 mt-2 my-2 border border-green-500 rounded">
                                            <a href="{{ route('student.edit', $item->id) }}"><i
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

            {!! $students->links() !!}

        </div>
    </div>
@endsection