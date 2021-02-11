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
<body class="$blue">
  <h1>My <small class="text-muted">todos</small></h1>
  <table class="table table-sm word-wrap: break-word;min-width: 160px;max-width: 160px;">
    <thead class="table-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Task</th>
        {{-- <th scope="col">Name</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <td>
          {{ $task->id }}
        </td>
        <td>
          {{ $task->task }}
        </td>
        {{-- <td>
          {{ $task->name }}
        </td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
  <nav class="navbar fixed-bottom navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="mailto:otto.reimers@chasacademy.se">otto.reimers@chasacademy.se</a>
    </div>
  </nav>
</body>
</html>