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

    <h2>Información de cliente.</h2>
    <div >
    <table>
        <thead>
            <tr>
                <th>campo</th>
                <th>descripción</th>
            </tr>
        </thead>
        <tbody id="dataCliente">
        </tbody>
    </table>
    </div>


<script>


    let formularioDelete=document.querySelector("#formularioDelete");
    formularioDelete.addEventListener("submit",function(e){  
        e.preventDefault() 
    let dpi=document.querySelector("#dpi");
    console.log(dpi.value);
    fetch("https://banco-vivienda.club/clientes/administracion", {
    "method": "DELETE",
    "headers": {
        'Accept': 'application/json',
        "content-type": "application/json",
        "authorization": "Bearer YOUR_TOKEN"
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
   
    
</script>

</body>
</html>