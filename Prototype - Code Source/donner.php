<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire PHP</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="2">PARTICIPANTS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>NOM</th>
            <th>PHONE</th>
        </tr>
        <tr>
            <td><?php echo $_POST['nom']; ?></td>
            <td><?php echo $_POST['phone']; ?></td>
        </tr>
    </tbody>
</table>


  




 </body>
</html>

