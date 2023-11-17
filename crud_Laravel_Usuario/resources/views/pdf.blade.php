<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

<<table class="min-w-full bg-white border shadow-lg rounded-lg">
  <thead class="bg-gray-200">
    <tr>
      <th class="px-4 py-3">ID</th>
      <th class="px-4 py-3">Nombre</th>
      <th class="px-4 py-3">Cedula</th>
      <th class="px-4 py-3">Teléfono</th>
      <th class="px-4 py-3">Dirección</th>
      <th class="px-4 py-3">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <!-- Contenido de la tabla generada por PHP -->
    @foreach($usuarios as $usuario)
      <tr class="hover:bg-gray-100 transition-colors">
        <td class="border px-4 py-2">{{ $usuario->id }}</td>
        <td class="border px-4 py-2">{{ $usuario->nombre }}</td>
        <td class="border px-4 py-2">{{ $usuario->cedula }}</td>
        <td class="border px-4 py-2">{{ $usuario->telefono }}</td>
        <td class="border px-4 py-2">{{ $usuario->direccion }}</td>
        <td class="border px-4 py-2 flex gap-2">
          <a href="#" class="editar-btn bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-all">Editar</a>
          <a href="#" class="delete-btn bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-all">Eliminar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>
