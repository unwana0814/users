<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <title>All Users</title>
   
  </head>
  <body >
     
    <table class="mx-auto mt-10 pt-10 bg-white rounded-xl drop-shadow-lg space-y-5 w-9/12 shadow-md rounded">
      <thead class="bg-gray-50">
        <tr>
          <th class="p-4 text-left font-bold">ID</th>
          <th class="p-4 text-left font-bold">Name</th>
          <th class="p-4 text-left font-bold">Email</th>
          <th class="p-4 text-left font-bold">Phone</th>
          <th class="p-4 text-left font-bold">Action</th>

        </tr>
      </thead>
      <tbody class="divide-y divide-gray-300">
        <tr>
          @foreach ($persons as $person)
            <td class="p-4">{{ $person->id }}</td>
          <td class="p-4">{{ $person->name }}</td>
          <td class="p-4">{{ $person->email }}</td>
          <td class="p-4">{{ $person->phone }}</td>
         <td class="text-center">
            <a href="users/{{ $person->id }}/edit" class="edit bg-blue-500 p-2 rounded text-white text-l" title="Edit" data-toggle="tooltip">Edit</a>
           
            @csrf
            @method('DELETE')
            <a href="/users/delete, {{ $person->id }}" class="delete p-2 rounded bg-red-500 text-white text-l" title="Delete" data-toggle="tooltip"> Delete</a>
        </td> 
      </tr>
      @endforeach
      </tbody>
      
    </table>

</body>
</head>
</html>