<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Projeto Aprendizado</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
        </style>
    </head>

    <body>
        <?php
        $maintenance = true;

        if ($maintenance):
            include 'maintenance.php';
        endif;
        ?>
    </body>
</html>
