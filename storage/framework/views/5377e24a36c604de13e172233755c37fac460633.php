<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <!-- favicon -->
    <!-- css -->

    <link type="text/css" rel="stylesheet" href="../../css/plantilla.php">

    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- 
    <link type="text/css" rel="stylesheet" href="../../css/estiloPlantilla.css">
    -->
    
</head>
<body>
    <!-- header -->
    <!-- nav -->
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-html5'></i>
                <div class="logo_name">
                    UIS
                </div>
            </div>
            <i class='bx bx-menu' id="btn" ></i>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="<?php echo e(route('inicio.index')); ?>">
                    <i class='bx bx-user' ></i>
                    <span class="links_name">Inicio</span>
                </a>
                <span class="tooltip">Inicio</span>
            </li>
            <li>
                <a href="<?php echo e(route('show.formulario')); ?>">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Formulario</span>
                </a>
                <span class="tooltip">Formulario</span>
            </li>
            <li>
                <a href="<?php echo e(route('showMore.formularios')); ?>">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Formularios</span>
                </a>
                <span class="tooltip">Formularios</span>
            </li>
            <li>
                <a href="<?php echo e(route('eliminar.remove')); ?>">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Eliminar</span>
                </a>
                <span class="tooltip">Eliminar</span>
            </li>
            <li>
                <a href="<?php echo e(route('crear.create')); ?>">
                    <i class='bx bx-cart'></i>
                    <span class="links_name">Crear</span>
                </a>
                <span class="tooltip">Crear</span>
            </li>
            <li>
                <a href="<?php echo e(route('busqueda.search')); ?>">
                    <i class='bx bx-heart' ></i>
                    <span class="links_name">Buscar</span>
                </a>
                <span class="tooltip">Buscar</span>
            </li>
            <!--
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links_name">Ajuste</span>
                </a>
                <span class="tooltip">Ajuste</span>
            </li>
        -->
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="perfil_img.jpg" alt="imagen perfil">
                    <div class="name_job">
                        <div class="name">
                            McLovin
                        </div>
                        <div class="job">
                            Ingeniero
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log_out"></i>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo $__env->yieldContent('content'); ?>
    
    <!-- footer -->
    <!-- script -->
    <script>
        let btn = document.QuerySelector("#btn");
        let sidebar = document.QuerySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }   

    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\quisV2\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>