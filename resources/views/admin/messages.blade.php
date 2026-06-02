 <!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding: 30px;
            background:#f5f5f5;
        }

        h1{
            text-align:center;
            margin-bottom:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        th{
            background:#0a1d47;
            color:white;
        }

        tr:nth-child(even){
            background:#f9f9f9;
        }
    </style>
</head>
<body>

<h1>Contact Messages</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Date</th>
    </tr>

    @foreach($messages as $message)
    <tr>
        <td>{{ $message->id }}</td>
        <td>{{ $message->name }}</td>
        <td>{{ $message->email }}</td>
        <td>{{ $message->phone }}</td>
        <td>{{ $message->message }}</td>
        <td>{{ $message->created_at }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>