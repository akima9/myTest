<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <a href="/posts/create">등록</a>
        <table>
            <thead>
                <tr>
                    <th>할 일</th>
                    <th>등록일시</th>
                </tr>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr>
                    <td>{{ $todo->todo }}</td>
                    <td>{{ $todo->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
