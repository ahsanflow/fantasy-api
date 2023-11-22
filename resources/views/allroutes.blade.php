<!DOCTYPE html>
<html>

<head>
    <title>How to Get All Routes in Laravel? - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1>All Routes</h1>

        <h2>API Routes</h2>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>URI</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apiRoutes as $route)
                    <tr>
                        <td>{{ implode(', ', $route['methods']) }}</td>
                        <td><a href="{{ url($route['uri']) }}">{{ $route['uri'] }}</a></td>
                        <td>{{ $route['name'] }}</td>
                        <td>{{ $route['action'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Web Routes</h2>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Method</th>
                    <th>URI</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($webRoutes as $route)
                    <tr>
                        <td>{{ implode(', ', $route['methods']) }}</td>
                        <td><a href="{{ url($route['uri']) }}">{{ $route['uri'] }}</a></td>
                        <td>{{ $route['name'] }}</td>
                        <td>{{ $route['action'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>
