<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="table-container">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->usertype==0)
                        <td><a href="{{url('/deleteuser',$data->id)}}" class="action-link delete">Delete</a></td>
                        @else
                        <td><a class="action-link not-allowed">Not Allowed</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>

<style>
    .table-container {
        position: relative;
        top: 60px;
        right: -60px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: auto;
    }

    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .styled-table td {
        color: #333;
    }

    .action-link {
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 4px;
    }

    .action-link.delete {
        background-color: #dc3545;
        color: white;
    }

    .action-link.not-allowed {
        background-color: #6c757d;
        color: white;
    }

    .action-link.delete:hover {
        background-color: #c82333;
    }

    .action-link.not-allowed:hover {
        background-color: #5a6268;
    }
</style>


</html>
