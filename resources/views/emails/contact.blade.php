<p>
    Usted ha recibido un nuevo mensaje del formulario de
    conctactenos de su sitio web CSC Company Trading
</p>
<p>
  Aqui los detalles:
</p>
<ul>
  <li>Nombre: <strong>{{ $name }}</strong></li>
  <li>Correo: <strong>{{ $email }}</strong></li>
</ul>
<hr>
<p>
  @foreach ($text as $messageLine)
    {{ $messageLine }}<br>
  @endforeach
</p>
<hr>