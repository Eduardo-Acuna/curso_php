<?php
    /*LAS VARIABLES ASOCIATIVAS  */
?>  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>

<form method="get" action="resultado.php" class="col-4 bg-secondary" >
    <input type="number" name="num1" class="form-control-sm">
    <input type="number" name="num2" class="form-control-sm">
    <select name="op" class="form-control-sm">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    <input type="submit" value="calcular" class="btn btn-danger">
</form>

