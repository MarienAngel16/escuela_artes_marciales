<?php include_once  "../shared/header.php";?>
                        <a class="nav-item nav-link active boton" href="#">Cuenta</a>
                        <a class="nav-item nav-link boton" href="#">Agregar Nuevo Grupo</a>
                    </div>
                </div>
            </nav>
        </div><!-- Cierre de col -->
        
    </div> <!-- Cierre de row -->
</div> <!-- Cierre de Container Navegación-->

<main>
    <?php
    require_once "../../controllers/grupos_controller.php";
    ?>
</main>

<?php include_once "../shared/footer.php";?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
