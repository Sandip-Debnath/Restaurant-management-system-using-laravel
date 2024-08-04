<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  @include("admin.admincss");
  <style>
    /* Style for the table container */
    .table-container {
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute;
      left: 50%;
      bottom: 70%;
    }

    /* Style for the table itself */
    table {
      border-collapse: collapse;
      width: auto; /* Adjust width as needed */
    }
    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left; /* Change to 'center' for all content centered */
    }
  </style>
</head>

<body>
  @include("admin.navbar");

  <div class="table-container">
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Time</th>
        <th>Message</th>
      </tr>
      @foreach($data as $data)
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->date}}</td>
        <td>{{$data->time}}</td>
        <td>{{$data->message}}</td>
      </tr>
      @endforeach
    </table>
  </div>

  @include("admin.adminscript");
</body>

</html>
