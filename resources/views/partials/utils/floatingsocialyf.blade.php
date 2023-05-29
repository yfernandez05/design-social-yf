<audio id="notificationSound">
    <source src="{{asset('sound/notification.mp3')}}" type="audio/mpeg">
</audio>
<div class="float-socials">
    <!-- body chat -->
    <div class="whatsapp-popup col-12 col-md-10 col-lg-11 col-xl-9">
        <div class="popup-content bg-white hide">
            <div class="">
                <div class="popup-header bg-primary px-4 py-3 d-flex align-items-center">
                    <div class="profile-image">
                        <img src="{{asset('images/miningalati-default.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="profile-info text-white">
                        <h5 class="m-0">Asistente Mining Alati</h5>
                        <h6 class="m-0 font-secondary">Escríbenos y te responderemos</h6>
                    </div>
                </div>
                <div class="popup-body p-3 pl-4 pt-2">
                    <div class="chat-background shadow-sm"><p class="mb-0 p-0" style="width: 350px;"></p>
                        <div class="typing-animation col-12"></div>
                    </div>
                    <div class="message-text hide whatsapp-message shadow-sm mb-2">
                        <h5 class="mb-2"><small class="text-muted font-secondary">Asistente Mining Alati</small></h5>
                        <p class="mb-1">
                            Bienvenido a Mining Alati Cursos de Especialización Minera 👷
                        </p>
                        <p class="mb-1">
                            ¿En qué podemos ayudarte? 👇
                        </p>

                    </div>

                    <div class="message-text-2 hide whatsapp-message shadow-sm mb-1">
                        <h5 class="mb-2"><small class="text-muted font-secondary">Asistente Mining Alati</small></h5>
                        <p class="mb-1">
                            ¿cómo puedo serparar cupon de atención? <a href="#" class="font-primary">AQUÍ</a>
                        </p>
                        <p class="mb-1">
                            ¿Más información sobre las especializaciones mineras? <a href="#" class="font-primary">AQUÍ</a>
                        </p>
                        <p class="mb-1">
                            ¿Quieres contactarte con un asesor? <a href="#" class="font-primary">AQUÍ</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="popup-footer text-center px-3 py-2 bg-white">
                <a href="https://api.whatsapp.com/send?phone=1234567890" class="btn btn-primary col-10 py-2 text-white font-primary ">Iniciar Chat <i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
    <!-- buttom chat -->
    <div class="position-relative mt-2">
        <div class="waves"></div>
        <a class="whatsapp-icon text-decoration-none btn-whatsapp c-pointer">
            <i class="fab fa-whatsapp"></i>
        </a>
        <div class="badge hide badge-wtsp">1</div>
    </div>

</div>