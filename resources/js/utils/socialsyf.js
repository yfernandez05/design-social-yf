//active sound and notification
document.addEventListener('DOMContentLoaded', function() {
    var badge = document.querySelector('.badge-wtsp');
    setTimeout(function() {
        badge.classList.remove('hide');
        var notificationSound = document.getElementById('notificationSound');
        notificationSound.play()
        .catch(function(error) {
            console.log('-');
        });
    }, 5000);
});
  
//show animation tipyn and show info mensaje
var setTimeoutExecuted = false;
document.querySelector('.btn-whatsapp').addEventListener('click', function(event) {
    event.preventDefault();
    var popupContent = document.querySelector('.popup-content');
    popupContent.classList.toggle('hide');
  
    var btnWhatsApp = this;
    var icon = btnWhatsApp.querySelector('i');
  
    // Alternar entre el icono de WhatsApp y el icono de la equis (x)
    icon.classList.toggle('fa-whatsapp');
    icon.classList.toggle('fa-times');
    icon.classList.toggle('fab');
    icon.classList.toggle('fas');
  
    var messageElements = document.querySelectorAll('[class^="message-text"]');

    if (!setTimeoutExecuted) {
        setTimeoutExecuted = true;

        setTimeout(async function() {
            var chatBackground = document.querySelector('.chat-background');
            chatBackground.classList.add('hide');
  
            //mostrar los mensajes sucesivamente con un retraso ajustable
            async function showMessages() {
                let delay = 0; // retaso primer mensaje
        
                for (let i = 0; i < messageElements.length; i++) {
                    await new Promise(resolve => setTimeout(resolve, delay));
                    messageElements[i].classList.remove('hide');
                    delay = 900; // Ajusta el retraso desde el segundo mensajes
                    //console.log('mensaje Nº ' + i);
                }
            }    
            await showMessages();

        }, 800);
    }
    
  });