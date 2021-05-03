var token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"

// Acceso a la API

fetch("https://Banco-vivienda.club/clientes/113", { // recordar colocar https
    "headers": { 
      "Accept": "application/json",
      "authorization": "Bearer " + token
      // esta es la forma de enviar su token atravez de la 
      //cabecera authorization y anteponer Bearer
    }
  })
  .then(response => {
      response.json()
  })
  .then(response => {
    console.log(response);
  })
  .catch(err => {
    console.error(err);
  });

  // Busqueda por DPI

  fetch("https://banco-vivienda.club/clientes/consulta/21781889", {
    "headers": {
        'Accept': 'application/json',
        "authorization": "Bearer " + token
    }
})
    .then(response => {
        response.json()
    })
    .then(response => {
        console.log(response);
    })
    .catch(err => {
        console.error(err);
    });