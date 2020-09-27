<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yazar Detay</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/custom.css"); ?>">
</head>
<body>
<table border="1" cellspacing="1" cellpadding="5">
    <thead>
    <tr>
        <th>Yazar Numarası</th>
        <th>Yazar Adı</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $author->id; ?></td>
        <td><?php echo $author->title; ?></td>
    </tr>
    </tbody>
</table>
<div style="margin-top: 10px;">
    <a href="<?php echo base_url(); ?>" style="text-decoration: none;">Arama Sayfasına Geri Dön</a>
</div>
</body>
</html>