<?php
    include '../layout/header.php';
?>

<div class="container text-center">
    <h1>LISTA DOCENTES</h1>
    <div class="row justify-items-center mb-3">
        <div class="col-md-2 offset-10">
            <a href="" class="btn btn-success"><b><i class="fa-solid fa-plus"></i> Agregar</b></a>
        </div>
    </div>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th><th>Nombres</th><th>Apellidos</th><th>Edad</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody class="table table-dark">
            <tr>
                <td>1</td>
                <td>JUAN MIGUEL</td>
                <td>PEREZ RAMIREZ</td>
                <td>24</td>
                <td>
                    <a href="" type="button" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen"></i></a>
                    <a href="" type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    include '../layout/footer.php';
?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Trai