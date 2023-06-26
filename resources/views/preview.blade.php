<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF Laravel 9 - NiceSnippets.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-md-8 section offset-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Laravel 9 Generate PDF - NiceSnippets.com</h2>
            </div>
            <div class="panel-body">
                @foreach($products as $product)
                <div class="main-div">
                    {{ $product->title }}
                </div>
                @endforeach
            </div>
            <div class="text-center pdf-btn">
                <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
