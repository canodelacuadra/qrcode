const data= document.querySelector("#data"), // los 3 input
    ecc = document.querySelector("#ecc"),
    size = document.querySelector("#size"),
    btnEnviar = document.querySelector("#btnEnviar"), // El botón que envía el formulario
    respuesta = document.querySelector("#respuesta"); // el div que muestra mensajes

// Agregar listener al botón
btnEnviar.addEventListener("click", () => {
    // Poner un estado de "enviando"
    respuesta.textContent = `Cargando...`;
    // Armar objeto con datos
    const datos = {
        data: data.value,
        ecc: ecc.value,
        size: size.value,
    };
    // Codificarlo como JSON
    const datosCodificados = JSON.stringify(datos);
    // Enviarlos
    fetch("./generate-qr-json.php", {
            method: "POST", // Enviar por POST
            body: datosCodificados, // En el cuerpo van los datos en json
            cache: 'no-store',
            headers: {
                "Content-Type": "application/json"
                 },
    })
        
        .then(response => response.json())
        
        .then(responseData => {
            //responseData.textContent = responseData;
            console.log(responseData);
            const imageUrl = responseData.archivo;
            const alt = responseData.data;
            console.log('URL de la imagen:', imageUrl);
            const div = document.getElementById('respuesta');
            div.innerHTML = `<img src="${imageUrl}" alt="${alt}">`;
             div.innerHTML+= `<p>${alt}</p>`;
            
        });
});