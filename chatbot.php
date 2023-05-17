<?php

$respuestas = [
    "cotización" => "Con gusto te podemos apoyar con la cotización de tu proyecto, puedes solicitar una cita en el siguiente link.",
    "tiempo" => "Nos aseguramos que tu proyecto sea entregado en tiempo y forma.",
    "diseño" => "Contamos con diferentes diseños predeterminados para tu pagina.",
    "personalizado" => "Tambien podemos hacer un diseño personalizado de tu página para que sea más atractiva para tus clientes.",
    "horario" => "Nuestro horario de atención es de lunes a viernes de 8:00 a 18:00",
    "hola" => "Hola buen día, bienvenido a GABCY. ¿En que puedo ayudarte?.",
    "gracias" => "Espero haberte ayudado, Ten un buen día.",
    "costos" => "Manejamos un amplio rango de costos que se ajustan a tu bolsillo para tu proyecto."
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensaje_usuario = $_POST['message-input'];
    $mensaje_usuario = strtolower(trim($mensaje_usuario));

    // Busca palabras clave en el mensaje del usuario y selecciona una respuesta adecuada
    $respuesta_chatbot = "Lo siento, no entiendo tu pregunta.";
    foreach ($respuestas as $palabra_clave => $respuesta) {
        if (strpos($mensaje_usuario, strtolower($palabra_clave)) !== false) {
            $respuesta_chatbot = $respuesta;
            break;
        }
    }

    echo $respuesta_chatbot;
}
