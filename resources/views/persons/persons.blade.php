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
     
    <div class="pt-4 text-center">
      <a href="users/create" 
      class="border-b-2 pb-2 border-dotted  italic text-gray-500">
      Add User &rAarr;
      </a>
  </div>

    <table class="responsive mx-auto mt-10 pt-10 bg-white rounded-xl drop-shadow-lg space-y-5 w-9/12 shadow-md rounded">
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
        @foreach ($persons as $person)
        <tr>
          <td class="p-4">{{ $person->id }}</td>
          <td class="p-4">{{ $person->name }}</td>
          <td class="p-4">{{ $person->email }}</td>
          <td class="p-4">{{ $person->phone }}</td>
          <td class="text-center">
              <form action="/users/{{ $person->id }} }}"  class="pt-2" method="POST">

            <a href="users/{{ $person->id }}/edit" class="edit bg-blue-500 p-2 rounded text-white text-l" title="Edit" data-toggle="tooltip">Edit</a>
           
              @csrf
              @method('DELETE')

              <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500" style="border:none;" title="delete" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE')">
                Delete &rAarr;
              </button>

          </form>
                </td> 
      </tr>
      @endforeach
      </tbody>
      
    </table>

</body>
</head>
</html>