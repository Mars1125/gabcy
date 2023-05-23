/**
 * Returns the current datetime for the message creation.
 */
function getCurrentTimestamp() {
	return new Date();
  }
  
  /**
   * Renders a message on the chat screen based on the given arguments.
   * This is called from the `showUserMessage` and `showBotMessage`.
   */
  function renderMessageToScreen(args) {
	// local variables
	let displayDate = (args.time || getCurrentTimestamp()).toLocaleString('en-IN', {
	  month: 'short',
	  day: 'numeric',
	  hour: 'numeric',
	  minute: 'numeric',
	});
	let messagesContainer = $('.messages');
  
	// init element
	let message = $(`
	  <li class="message ${args.message_side}">
		<div class="avatar"></div>
		<div class="text_wrapper">
		  <div class="text">${args.text}</div>
		  <div class="timestamp">${displayDate}</div>
		</div>
	  </li>
	`);
  
	// add to parent
	messagesContainer.append(message);
  
	// animations
	setTimeout(function () {
	  message.addClass('appeared');
	}, 0);
	messagesContainer.animate({ scrollTop: messagesContainer.prop('scrollHeight') }, 500);
  }
  
  /**
   * Displays the user message on the chat screen. This is the right side message.
   */
  function showUserMessage(message, datetime) {
	renderMessageToScreen({
	  text: message,
	  time: datetime,
	  message_side: 'right',
	});
  }
  
  /**
   * Displays the chatbot message on the chat screen. This is the left side message.
   */
  function showBotMessage(message, datetime) {
	renderMessageToScreen({
	  text: message,
	  time: datetime,
	  message_side: 'left',
	});
  }
  
  /**
   * Get input from user and show it on screen on button click.
   */
  $('#send_button').on('click', function (e) {
	// get and show message and reset input
	const userMessage = $('#msg_input').val();
	showUserMessage(userMessage);
	$('#msg_input').val('');
  
	// show bot message
	setTimeout(function () {
	  const botResponse = getBotResponse(userMessage);
	  showBotMessage(botResponse);
	}, 300);
  });
  
  /**
   * Returns a predetermined response based on the user's message.
   */
  function getBotResponse(userMessage) {
	const responses = {
		cotización: 'Con gusto te podemos apoyar con la cotización de tu proyecto, puedes solicitar una cita en el siguiente link.',
		tiempo: 'Nos aseguramos que tu proyecto sea entregado en tiempo y forma.',
		diseño: 'Contamos con diferentes diseños predeterminados para tu página.',
		personalizado: 'También podemos hacer un diseño personalizado de tu página para que sea más atractiva para tus clientes.',
		horario: 'Nuestro horario de atención es de lunes a viernes de 8:00 a 18:00.',
		hola: 'Hola, buen día. Bienvenido. ¿En qué puedo ayudarte?',
		gracias: 'Espero haberte ayudado. Si tienes más preguntas, no dudes en hacérmelas. ¡Ten un excelente día!',
		costos: 'Manejamos diferentes opciones de precios para adaptarnos a tus necesidades y presupuesto.',
		mantenimiento: 'Ofrecemos servicios de mantenimiento web para garantizar el correcto funcionamiento y actualización de tu sitio.',
		optimización: 'Podemos ayudarte a optimizar la velocidad y rendimiento de tu sitio web para una mejor experiencia de usuario.',
		SEO: 'Contamos con servicios de optimización para motores de búsqueda (SEO) que te ayudarán a mejorar tu visibilidad en línea.',
		branding: 'Podemos ayudarte a desarrollar una identidad de marca sólida que refleje la esencia de tu negocio en tu sitio web.',
		responsive: 'Nos especializamos en diseño y desarrollo de sitios web responsivos, que se adaptan a diferentes dispositivos y pantallas.',
		eCommerce: 'Si deseas vender productos en línea, podemos desarrollar una tienda en línea personalizada para tu negocio.',
		integraciones: 'Podemos integrar diferentes herramientas y sistemas en tu sitio web, como sistemas de pago y redes sociales.',
		seguridad: 'La seguridad de tu sitio web es una prioridad para nosotros. Implementamos medidas de seguridad avanzadas para proteger tus datos.',
		experiencia: 'Tenemos una amplia experiencia en diseño y desarrollo web, trabajando con diversos clientes y proyectos exitosos.',
		tecnologías: 'Utilizamos tecnologías modernas y herramientas actualizadas en nuestro enfoque de diseño y desarrollo web.',
		consultoría: 'Además del diseño y desarrollo web, ofrecemos servicios de consultoría para ayudarte a tomar decisiones estratégicas para tu presencia en línea.'
	};
  
	const cleanUserMessage = userMessage.toLowerCase().replace(/\?/g, '');
	const words = cleanUserMessage.split(' ');
  
	for (const word of words) {
	  if (responses.hasOwnProperty(word)) {
		return responses[word];
	  }
	}
  
	return 'Lo siento, no puedo entender tu pregunta. Registrate para solicitar una cita';
  }
  
  
  
  /**
   * Set initial bot message to the screen for the user.
   */
  $(window).on('load', function () {
	showBotMessage('Hola, buen día. Bienvenido a GABCY. ¿En qué puedo ayudarte?');
  });

  $('#toggle_button').on('click', function () {
	$('.chat_window').toggleClass('minimized');
	if ($('.chat_window').hasClass('minimized')) {
	  $('#toggle_button').html('<i class="fas fa-window-maximize"></i>');
	} else {
	  $('#toggle_button').html('<i class="fas fa-window-minimize"></i>');
	}
  });
