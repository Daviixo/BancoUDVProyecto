<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form  method="post" id="formularioDelete">
    <input type="text" name="dpi" id="dpi">
    <input type="submit" value="eliminar">
    </form>

    <script>
   
    var dpi=document.getElementById("dpi").value;
    

   function DeleteUser(){

        fetch("https://banco-vivienda.club/clientes/administracion", {
    "method": "DELETE",
    "headers": {
        'Accept': 'application/json',
        "content-type": "application/json",
        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
    },
    "body": JSON.stringify({
        "dpi": dpi
    })
})
    .then(
        response => response.json()
    )
    .then(response => {
        console.log(response);
    })
    .catch(err => {
        console.error(err);
    });


    }
    </script>






</body>
</html>