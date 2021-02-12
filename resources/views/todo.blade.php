<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Scripts -->
      <script src="js/app.js" defer></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <!-- Styles -->
      <link href="css/app.css" rel="stylesheet">
  <title>My todo</title>
</head>
<body class="bg-white">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <h1 class="text-white">My <small class="text-muted">todos</small></h1>
      </div>
    </nav>
  </div>
  <div class="container">
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Task</th>
        <th scope="col">Name</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody class="container">
      @foreach ($tasks as $task)
      <tr>
        <td class="text-dark ">
          {{ $task ['id'] }}
        </td>
        <td  class="text-dark ">
          {{ $task ['task'] }}
        </td>
        <td class="text-dark ">
          @if ($task->user()->get()->first())
          {{ $task->user()->get()->first()->name }}
          @endif
        </td>
        <td>
          <button type="button" class="btn btn-secondary">Edit</button>
        </td>
        <td>
          <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <nav class="navbar fixed-bottom navbar-light bg-dark container">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="mailto:otto.reimers@chasacademy.se">otto.reimers@chasacademy.se</a>
    </div>
  </nav>
</body>
</html>