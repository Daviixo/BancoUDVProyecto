<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" id="formulario">
    <input type="text" name="dpi" id="dpi">
    <input type="submit" value="search">
    </form>

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

    let template= ({...json})=>`
    
   
            <tr>
                <td>Nombre</td>
                <td>${ json.cliente_nombre1} ${json.cliente_ape1} ${json.cliente_ape2}</td>
            </tr>
            <tr>
                <td>DPI</td>
                <td>${json.cliente_ide}</td>
            </tr>
           
       
    
    `

    let formulario=document.querySelector("#formulario");
    formulario.addEventListener("submit",function(e){  
        e.preventDefault() 
    let dpi=document.querySelector("#dpi");
    console.log(dpi.value);
    let infocliente=document.querySelector("#dataCliente");
    fetch("https://banco-vivienda.club/clientes/consulta/"+dpi.value, {
    "headers": {
        'Accept': 'application/json',
        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
    }
})
    .then(response => {
    
            let respuestaServer= response.json().then(respuesta=>{ 
                return respuesta;
            }) .catch(error=>{
                alert ("El número de DPI no existe en la base de datos.");
                infocliente.innerHTML="";
            })
      return respuestaServer;
       
    })
    .then(response => {
        console.log(response);
        
        infocliente.innerHTML=template(response);
        console.log(response.ok)
        
    })
    .catch(err => {
        console.error(err);
    });

    })
    </script>

<script>


    let formularioDelete=document.querySelector("#formularioDelete");
    formularioDelete.addEventListener("submit",function(e){  
        e.preventDefault() 
    let dpi=document.querySelector("#dpi");
    console.log(dpi.value);
    fetch("https://banco-vivienda.club/clientes/administracion"+dpi.value, {
    "method": "DELETE",
    "headers": {
        'Accept': 'application/json',
        "content-type": "application/json",
        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
    },
    
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