<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางแม่สูตรคูณ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">ตารางแม่สูตรคูณ</h1>

    <!-- ฟอร์ม -->
    <form action="{{ url('mycontroller') }}" method="post" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="myinput" class="form-label">Enter a Number:</label>
            <input type="number" name="myinput" id="myinput" class="form-control" placeholder="Enter a number">
        </div>
        <button type="submit" class="btn btn-primary">สร้างตาราง</button>
    </form>

    <!-- ตารางสูตรคูณ -->
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
</body>
</html>
