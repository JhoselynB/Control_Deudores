</div>
                    </div>
                </div>
                <div class="lateralDer">
                    <?php $peticion= new Request;
                    $controller = $peticion->getControlador();
                  
                    include ROOT.'views'.DS.$controller.DS.'index.phtml';
                    if ($controller=='mantenimiento') {
                         include ROOT.'views'.DS.$controller.DS.'nuevo.phtml';
}
                    ?>
                </div>
            </div>  

            <footer>Copyright &copy; - SonneJ</footer>  

        </div>
    </body>
</html>
