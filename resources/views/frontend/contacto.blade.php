<x-main-frontend>
    <!-- title -->
    @section('title')Contácto @endsection

    <!---- CSS ----->
    <x-slot name="css">
    </x-slot>

    <main>
        <!-- |==========================================| -->
        <!-- |=====|| Page Title Start ||===============| -->
        <section class="page_title page_title__img-02">
            <div class="page_title__padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page_title__content">
                                <h1>Contácto</h1>
                                <div class="page_title__bread-crumb">
                                    <ul>
                                        <li><a href="{{route('inicio')}}">Inicio</a></li>
                                        <li><a>Contáctenos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- |=====|| Page Title End ||=================| -->
        <!-- |==========================================| -->

         <!-- |==========================================| -->
        <!-- |=====|| Google Map Start ||===============| -->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.840310142671!2d-72.50136633572868!3d7.9117448076638395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e664541acb5d8a9%3A0x6b5948aee0db1950!2sUniversidad%20de%20Santander%20sede%20C%C3%BAcuta!5e0!3m2!1ses!2sco!4v1665019858173!5m2!1ses!2sco" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- |=====|| Google Map End ||=================| -->
        <!-- |==========================================| -->

        <!-- |==========================================| -->
        <!-- |=====|| Contact Start ||===============| -->
        <div class="contact_page1">
            <div class="content_box_100">
                <div class="container">
                    <div class="row mb-50">
                        <div class="col-md-12">
                            <div class="contact_page1__title text-center">
                                <h2>Contáctenos o envíenos su Mensaje</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact_page1__left mb-30">
                                <div class="contact_page1__left--heading">
                                    <h4>¿Tienes dudas?</h4>
                                </div>
                                <p>Atenderemos tus dudas o inquietudes lo más pronto posible.
                                    Completa el formulario con los datos correspondientes y así darte respuesta.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="contact_page1__form">
                                <form id="contact-form" action="assets/php/mail.php" method="POST">
                                    <div class="row mb-20">
                                        <div class="col-xl-6">
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Nombres Completos*" required>
                                        </div>
                                        <div class="col-xl-6">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Correo Electrónico*" required>
                                        </div>
                                        <div class="col-xl-6">
                                            <input class="form-control" type="text" name="phone-number"
                                                placeholder="Nùmero de Celular*" required>
                                        </div>
                                        <div class="col-xl-6">
                                            <input class="form-control" type="text" name="subject"
                                                placeholder="Asunto">
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea class="form-control" name="message" placeholder="Su mensaje"
                                                cols="30" rows="7" required></textarea>
                                            <button type="submit" class="btn9">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- |=====|| Contact End ||=================| -->
        <!-- |==========================================| -->

    </main>

    <x-slot name="js">
    </x-slot>

</x-main-frontend>
