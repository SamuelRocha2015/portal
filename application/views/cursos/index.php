
<!DOCTYPE html lang= "en">
<html>
<head>
    <? include(__DIR__.'../../template/header.php');?>
</head>
<body>
    <div class="container">
        <h1>Cursos</h1>
        <table class="table">
            <?php foreach ($cursos as $curso) : ?>
                <tr>
                    <td><?= $curso["codigo"]?></td>
                    <td><?= $curso["nome"]?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>
