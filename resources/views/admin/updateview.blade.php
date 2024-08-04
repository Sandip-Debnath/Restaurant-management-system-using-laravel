<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss")
</head>

<body>
    @include("admin.navbar")
    <div class="main-container">
        <div class="form-container">
            <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-input" value="{{$data->title}}" required />
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" name="price" class="form-input" value="{{$data->price}}" required />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-input" value="{{$data->description}}" required />
                </div>
                <div class="form-group">
                    <label>Old Image</label>
                    <img src="/foodimage/{{$data->image}}" height="200" width="200" alt=""/>
                </div>
                <div class="form-group">
                    <label>New Image</label>
                    <input type="file" name="image" class="form-input" required />
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="form-submit" />
                </div>
            </form>
        </div>
    </div>
    @include("admin.adminscript")

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding-top: 50px; /* Adjust based on your navbar height */
            margin-top:5px;
            position: absolute;
            bottom:0%;
            left: 45%;
            top: 2%;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            max-width: 500px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-input[type="file"] {
            padding: 5px;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-submit {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-submit:hover {
            background-color: #218838;
        }

        .form-group img {
            display: block;
            margin-top: 10px;
            border-radius: 4px;
        }

        .container-scroller {
            padding-top: 0;
        }

        .navbar {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
        }
    </style>
</body>

</html>
