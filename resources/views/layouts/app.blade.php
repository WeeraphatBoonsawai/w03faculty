<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: "Kanit", sans-serif;
    }
</style>

<body>

    <center>
        <div class="card mt-5 w-[80%] mx-auto">
        <div class="inline-flex">
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                <a href="{{ route('faculty.index') }}">Faculty</a>
                
            </button>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                <a href="{{ route('program.index') }}">Program</a>
            </button>
            <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                <a href="{{ route('student.index') }}">Student</a>
              </button>
              <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                <a href="{{ route('vaccine.index') }}">Vaccine</a>

              </button>
              <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
                <a href="{{ route('vaccine-record.index') }}">Vaccine Record</a>
              </button>
          </div>
        </div>
        </center>

        @yield('content')
</body>
</html>