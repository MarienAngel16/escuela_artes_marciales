<?php include_once  "../shared/header.php";?>
                        <li><a class="nav-item nav-link " href="#">Crear Grupos</a></li>
                        <li><a class="nav-item nav-link " href="#">Visualizar Grupos</a></li>
                        </ul>                                         
                </nav>
        </div><!-- Cierre de col -->
        
    </div> <!-- Cierre de row -->
</div> <!-- Cierre de Container Navegación-->

<main>
    <?php
   /*  require_once "../../controllers/grupos_controller.php"; */
    
   require_once '../../../config/database.php';
   require_once '../../controllers/grupos_controller.php';

   $controller = isset($_GET['controller']) ? $_GET['controller'] : 'grupos';
   $action = isset($_GET['action']) ? $_GET['action'] : 'index';
   $id = isset($_GET['id']) ? $_GET['id'] : null;

if ($controller === 'grupos') {
    $gruposController = new GrupoController($conexion);
    if ($action === 'showStudents' && $id) {
        $gruposController->showStudents($id);
    } else {
        $gruposController->index();
    }
}


    ?>
</main>



<?php include_once "../shared/footer.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
