<!DOCTYPE html>
<html>

<head>
    <title>Categoría</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 40px;
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .alert {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="container mt-5">
    <h1>Categoría</h1>
    <div class="d-flex justify-content-end mb-4">
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-custom">Ir a Productos</a>
    </div>
    <div class="d-flex justify-content-end mb-4">
        <a href="<?php echo e(route('categorias.create')); ?>" class="btn btn-custom">Agregar Nueva Categoria</a>
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría:</label>
    </div>
    <div class="table-container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Actualizacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($categoria->id); ?></td>
                        <td><?php echo e($categoria->nombre); ?></td>
                        <td><?php echo e($categoria->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($categoria->updated_at->format('d/m/Y H:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('categorias.show', $categoria->id)); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('categorias.edit', $categoria->id)); ?>" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ExamenParcial\resources\views/categorias/index.blade.php ENDPATH**/ ?>