<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">ตารางสูตรคูณ</h1>

    <!-- Display Value -->
    <div class="text-center mb-4">
        <h3>Value ID: {{ $value_id }}</h3>
        <h3>Input: {{ $myinput }}</h3>
    </div>

    <!-- Form -->
    <form action="{{ url('/mycontroller') }}" method="post" class="mb-4">
        @csrf
        <div class="mb-3">
            <input type="number" name="myinput" id="myinput" class="form-control" placeholder="Enter a number" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(isset($myinput) && is_numeric($myinput))
        <h2 class="text-center">ตารางแม่สูตรคูณ แม่ {{ $myinput }}</h2>
        <ul class="list-group">
            @for($i = 1; $i <= 12; $i++)
                <li class="list-group-item">
                    {{ $myinput }} x {{ $i }} = {{ $myinput * $i }}
                </li>
            @endfor
        </ul>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>