<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
  <div class="card-header">
		<h3>Registro</h3>
	</div>
    <form action="ejemplo.php" method="get">
        <p>Nombre: <input type="text" name="nombre" size="40" placeholder="Nombre"></p>
        <p>Correo Electronico: <input type="email" name="correo" placeholder="Correo Electronico"> </p>
        <p>Edad: <input type="number" name="edad" min="18" placeholder="Edad"></p>
        <p>Sexo:
            <input type="radio" name="hm" value="h"> Hombre
            <input type="radio" name="hm" value="m"> Mujer
        </p>
        <p> Departamento
            <select>
                <option value="Amazonas">Amazonas</option>
                <option value="Antioquia">Antioquia</option>
                <option value="Arauca">Arauca</option>	
                <option value="Atlantico">Atlantico</option>
                <option value="Bolivar">Bolivar</option>
                <option value="Boyaca">Boyaca</option>			
                <option value="Caldas">Caldas</option>
                <option value="Caqueta">Caqueta</option>
                <option value="Casanare">Casanare</option>
                <option value="Cauca">Cauca</option>
                <option value="Cesar">Cesar</option>
                <option value="Choco">Choco</option>
                <option value="Cordoba">Cordoba</option>
                <option value="Cundinamarca">Cundinamarca</option>
                <option value="Guainia">Guainia</option>
                <option value="Guaviare">Guaviare</option>
                <option value="Huila">Huila</option>
                <option value="Guajira">Guajira</option>
                <option value="Magdalena">Magdalena</option>
                <option value="Meta">Meta</option>
                <option value="Nariño">Nariño</option>
                <option value="Norte de Santander">Norte de Santander</option>
                <option value="Putumayo">Putumayo</option>
                <option value="Quindio">Quindio</option>
                <option value="Risaralda">Risaralda</option>
                <option value="San Andres">San Andres</option>
                <option value="Santander">Santander</option>
                <option value="Sucre">Sucre</option>
                <option value="Tolima">Tolima</option>
                <option value="Valle del Cauca">Valle del Cauca</option>
                <option value="Vaupes">Vaupes</option>
                <option value="Vichada">Vichada</option>
            </select>
        </p>
        <p>
        <button type="button" class="btn btn-primary">Enviar</button>
        </p>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>