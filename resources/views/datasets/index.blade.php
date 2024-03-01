<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        h3 {
            color: #007bff;
            text-align: center;
            margin-bottom: 5%;
        }


        .custom-width-table {
            max-width: 800px;
            width: 100%;
            margin-left: 20%;

        }

        button {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 10px;
        }

        th,
        td {
            text-align: center;
        }

        .input-group {
            display: flex;
            margin-left: 20%;

        }

        .form {
            width: 57.3%;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid #007bff;
        }
    </style>
    <title>Breast Cancer Datasets</title>
</head>

<body>
    <div class="container">
        <h3>Breast Cancer Datasets</h3>
        <form action="{{ url('/') }}" method="get" class="mb-3">
            <div class="input-group">
                <input type="text" name="filter" class="form" placeholder="Filter by diagnosis" value="{{ request('filter') }}">
                <button type="submit">Filter</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover table-bordered custom-width-table">

                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Radius Mean</th>
                        <th>Texture Mean</th>
                        <th>Perimeter Mean</th>
                        <th>Diagnosis</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datasets as $dataset)
                    <tr>
                        <td>{{ $dataset->id }}</td>
                        <td>{{ $dataset->radius_mean }}</td>
                        <td>{{ $dataset->texture_mean }}</td>
                        <td>{{ $dataset->perimeter_mean }}</td>
                        <td>{{ $dataset->diagnosis }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>