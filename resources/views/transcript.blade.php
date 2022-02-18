<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>download transcript</title>
</head>

<body>
    {{-- fetch data from database and embed make pdf dynamic --}}

    <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
        {{-- <img src="{{ asset('images/logo (1).png')}}" alt="" class="bg w-full h-full object-cover object-center absolute z-0"> --}}
        <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
            <h1 class="text-2xl font-semibold">Antonia Howell</h1>
            <h4 class="text-sm font-semibold">Joined Since '19</h4>
        </div>
        <x-transcripttable/>
    </div>

</body>

</html>
