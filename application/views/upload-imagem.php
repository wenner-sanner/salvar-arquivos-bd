<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Cadastrando imagem</h2>

    <?php
        echo form_open_multipart('upload_imagem/salvar');

        echo form_label('Imagem') . br() . br();
        echo form_input(array("id" => "imagem", "name" => "imagem", "type" => "file", "value" => set_value('imagem'))) . br() .br();
        echo form_submit('enviar', 'Salvar imagem');
        
        echo form_close();
    ?>

</body>
</html>