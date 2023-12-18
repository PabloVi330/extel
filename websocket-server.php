<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Server\IoServer;
require 'vendor/autoload.php';

class MyApp implements MessageComponentInterface {
    protected $connections;

    public function __construct() {
        $this->connections = new \SplObjectStorage;
        echo 'iniciando el server';
    }

    public function onOpen(ConnectionInterface $conn) {
        $this->connections->attach($conn);
        echo "Cliente conectado: {}\n";
    }

    public function onClose(ConnectionInterface $conn) {
        $this->connections->detach($conn);
        echo "Cliente desconectado: {}\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        // Lógica para procesar el mensaje y enviar notificaciones a otros clientes
        foreach ($this->connections as $client) {
            if ($client !== $from) {
                // Envía el mensaje a todos los clientes excepto al remitente
                $client->send($msg);
            }
        }
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        // Lógica para manejar errores
        echo "Error en cliente {}: {$e->getMessage()}\n";
        $conn->close();
    }




    public function sendNotification($message) {
        foreach ($this->connections as $client) {
            $client->send(json_encode([
                "type" => "notification",
                "content" => $message
            ]));
        }
    }



}




// Crea una instancia de tu clase personalizada
$myApp = new MyApp();

// Configura el servidor WebSocket
$server = IoServer::factory(
    new HttpServer(
        new WsServer($myApp)
    ),
    8080  // Puerto en el que escuchará el servidor WebSocket
);

echo "Servidor WebSocket ejecutándose en el puerto 9001...\n";

// Ejecuta el servidor
$server->run();
