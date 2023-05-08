@props(['hours'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hours</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body>

    {{-- Hour show --}}
    <section>
        <ul>
            @foreach ($hours as $hour)
                <li>{{ $hour }}</li>
            @endforeach
        </ul>
    </section>

    {{-- Hour input --}}
    <section>
        <form action="/hours" method="POST">
            @csrf
            <input type="time" name="start_time" id="start_time">
            <input type="time" name="end_time" id="end_time">
            <input type="submit" value="Submit">
        </form>
    </section>
</body>
</html>
