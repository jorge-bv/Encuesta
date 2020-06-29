<!DOCTYPE html>
<html>
    <head>
        <title>Cuestionario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js" type="text/javascript"></script>


    </head>

    <body>
        <?php
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Nike</th>
                    <th scope="col">Adidas</th>
                    <th scope="col">Puma</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php print( $nombre); ?></td>
                    <td><?php print( $edad); ?></td>
                    <td><?php
                         if (isset($_POST['nike'])) {
                           $nike = $_POST['nike'];
                           print($nike);
                        } ?>
                    </td>
                    <td><?php
                        if (isset($_POST['adidas'])) {
                            $adidas = $_POST['adidas'];
                            print($adidas);
                        }
                        ?></td>
                    <td><?php
                        if (isset($_POST['puma'])) {
                            $puma = $_POST['puma'];
                            print($puma);
                        }
                        ?></td>
                </tr>
        </table>
    </body>

</html>