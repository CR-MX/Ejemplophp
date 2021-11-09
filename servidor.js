const http = require("http");
//utilisa 2 variables post y el resultado
function sitioweb(req, res)
{
 // 200 significa que todo esta bien
 // el segundo campo es del estandar html
   res.writeHead(200, {"Content-type":"text/html"});
   res.end("Mi <strong>sengundo</strong> servidor");

}
let servidor = http.createServer(sitioweb);
//puerto que noes el 8080 por no soy admin y este es de prueba
//este numero de puerto interno, para mis propias aplicaciones (local host)
servidor.listen(6969, "192.168.100.2");
console.log("Servidor corriendo en el puerto 6969");