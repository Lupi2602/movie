<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Premier League movie$movies</title> 
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.4/css/all.min.css"> 
    <style> 
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background-color: #f4f4f4; 
        } 
 
        .container { 
            width: 80%; 
            margin: 50px auto; 
            padding: 20px; 
            background-color: white; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        } 
 
        h1 { 
            text-align: center; 
            color: #333; 
        } 
 
        table { 
            width: 100%; 
            border-collapse: collapse; 
        } 
 
        th, td { 
            padding: 10px; 
            text-align: left; 
            border-bottom: 1px solid #ddd; 
        } 
 
        th { 
            background-color: #f4f4f4; 
            color: #333; 
        } 
 
        tr:hover { 
            background-color: #f9f9f9; 
        } 
 
        .error { 
            color: red; 
            font-size: 1.2rem; 
            text-align: center; 
        } 
    </style> 
</head> 
<body> 
 
    <div class="container"> 
        <h1>TOP 100 Series</h1> 
 
        <!-- Menampilkan error jika ada masalah --> 
        @if (isset($data['error'])) 
            <div class="error"> 
                <p>Error: {{ $data['error'] }}</p> 
            </div> 
        @else 
            <!-- Jika data ada, tampilkan dalam tabel --> 
            <table> 
                <thead> 
                    <tr> 
                        <th>#</th> 
                        <th>Title</th> 
                        <th>Description</th> 
                        <th>Image</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($data as $movie) 
                        <tr> 
                            <td>{{ $loop->iteration }}</td> 
                            <td>{{ $movie['title'] }}</td> 
                            <td>{{ $movie['description'] }}</td> 
                            <td><img src="{{ $movie['image'] }}" alt="{{ $movie['title'] }}" style="max-width: 150px;"></td> 
                        </tr> 
                    @endforeach 
                </tbody> 
            </table> 
        @endif 
    </div> 
 
</body> 
</html>