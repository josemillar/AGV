<?php
include "conexion.php";

$user_id = null;
$sql1 = "select * from producto where id = " . $_GET["id"];
$query = $con->query($sql1);
$producto = null;
if ($query->num_rows > 0) {
    while ($r = $query->fetch_object()) {
        $producto = $r;
        break;
    }
}
?>

<?php if ($producto != null): ?>

    <form role="form" method="post" action="php/actualizar.php">
        <div class="form-group">
            <label for="nombre">Nombre Producto</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion Producto</label>
            <input type="text" class="form-control" name="descripcion" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $producto->id; ?>">
        <button type="submit" class="btn btn-default">Actualizar</button>
    </form>
<?php else: ?>
    <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>