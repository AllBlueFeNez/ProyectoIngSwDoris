@extends('layouts.tema')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <main id="main">
                        <!-- ======= My Resume Section ======= -->
                        <section id="resume" class="resume">
                            <div class="container">

                                <div class="section-title">
                                    <span>Nuestra Historia</span>
                                    <h2>Nuestra Historia</h2>
                                    <p>¿Quiénes somos?</p>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="resume-title">Comienzo</h3>
                                        <div class="resume-item pb-0">
                                            <h4>Dori's cravings</h4>
                                            <p><em>(Descripcion Pendiente)</em></p>
                                            <p>
                                                <ul>
                                                    <li>Originaria de ...</li>
                                                    <li>Contacto tel:</li>
                                                    <li>Correo@gmail.com</li>
                                                </ul>
                                            </p>
                                        </div>

                                        <h3 class="resume-title">Inicios</h3>
                                        <div class="resume-item">
                                            <h4>Inaguración &amp; Comienzo ...</h4>
                                            <h5>1970</h5>
                                            <p><em>En Jalisco, México.</em></p>
                                            <p>Empresa de familiar fundada en Jalisco.</p>
                                        </div>
                                        <div class="resume-item">
                                            <h4>Crecimiento &amp; Alcance</h4>
                                            <h5>1975</h5>
                                            <p><em>Inicia con local en...</em></p>
                                            <h5>1982</h5>
                                            <p><em>...</em></p>
                                            <h5>1986</h5>
                                            <p><em>...</em></p>
                                            <h5>1987</h5>
                                            <p><em>...</em></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="resume-title">Formación Profesional</h3>
                                        <div class="resume-item">
                                            <h4>Experiencia desde:</h4>
                                            <h5>1970</h5>
                                            <p><em>Jalisco, México. </em></p>
                                            <p>
                                                <ul>
                                                    <li>Local especializado en antojitos</li>
                                                    <li>Bebidas frias </li>
                                                    <li>Alcance en fraccionamiento...</li>
                                                    <li> </li>
                                                </ul>
                                            </p>
                                        </div>
                                        <div class="resume-item">
                                            <h4>Cabezal</h4>
                                            <h5>2015 - Presente</h5>
                                            <p><em>En Guadalajara, Jalisco, México.</em></p>
                                            <p>
                                                <ul>
                                                    <li>.</li>
                                                    <li>.</li>
                                                    <li>.</li>
                                                    <li> </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End My Resume Section -->

                        <!-- ======= My Services Section ======= -->
                        <section id="services" class="services">
                            <div class="container">

                                <div class="section-title">
                                    <span>Servicios</span>
                                    <h2>Servicios</h2>
                                    <p>La mejor calidad y el mejor servicio, para tí.</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                            <h4 class="title"><a href="">Alimentos</a></h4>
                                            <p class="description">Descripcion</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-file"></i></div>
                                            <h4 class="title"><a href="">Bebidas</a></h4>
                                            <p class="description">Descripcion</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                                            <h4 class="title"><a href="">Envios</a></h4>
                                            <p class="description">Descripcion</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-world"></i></div>
                                            <h4 class="title"><a href="">Otros</a></h4>
                                            <p class="description">Descripcio</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section><!-- End My Services Section -->

                        <!-- ======= My Portfolio Section ======= -->
                        <section id="portfolio" class="portfolio">
                            <div class="container">

                                <div class="section-title">
                                    <span>Portafolio</span>
                                    <h2>Portafolio</h2>
                                    <p>Satisfaciendo tu habre de con rica comida. </p>
                                </div>

                                <ul id="portfolio-flters" class="d-flex justify-content-center">
                                    <li data-filter="*" class="filter-active">Todas</li>
                                    <li data-filter=".filter-app">App</li>
                                    <li data-filter=".filter-card">Tarjeta</li>
                                    <li data-filter=".filter-web">Web</li>
                                </ul>

                                <div class="row portfolio-container">

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/frappe.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 1</h4>
                                            <p>App</p>
                                            <a href="{{ asset('img/portfolio/frappe.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 1"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/elote.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/elote.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/oreos.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 2</h4>
                                            <p>App</p>
                                            <a href=" {{ asset('img/portfolio/oreos.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/papas.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 2</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/papas.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/salchitacos.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 2</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/salchitacos.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/salchipulpos.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 3</h4>
                                            <p>App</p>
                                            <a href="{{ asset('img/portfolio/salchipulpos.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/freir.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 1</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/freir.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 1"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/comercio.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 3</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/comercio.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/tlaquepaque.jpeg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/tlaquepaque.jpeg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- End My Portfolio Section -->

                        <!-- ======= About Me Section ======= -->
                        <section id="about" class="about">
                            <div class="container">

                                <div class="section-title">
                                    <span>Acerca De Nosotros</span>
                                    <h2>Acerca De Nosotros</h2>
                                </div>

                                <div class="row">
                                    <div
                                        class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                                    </div>
                                    <div class="col-lg-8 d-flex flex-column align-items-stretch">
                                        <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li><i class="icofont-rounded-right"></i> <strong>Nombre:</strong>
                                                            Dori's cravings</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Correo:</strong> correo@gmail.com</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Teléfonos:</strong> Pendiente</li>
                                                        <li><i class="icofont-rounded-right"></i> <strong>Ubicación:</strong>
                                                            Pendiente <br> Colonia: <br> Ciudad de Guadalajara, Jalisco. México.</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li><i class="icofont-rounded-right"></i> <strong>Horario de Atención:</strong></li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Lunes - Viernes:</strong> 10:00 - 14:00 Hrs y 16:00 - 20:00 Hrs.</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Sábados:</strong> 10:00 - 14:00 Hrs.</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Domingo:</strong> Descansamos</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mt-n4">
                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-simple-smile" style="color: #20b38e;">+</i>
                                                        <span data-toggle="counter-up">100</span>
                                                        <p><strong>Clientes Felices</strong> que han adquirido nuestro servicio.</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-document-folder" style="color: #8a1ac2;">+</i>
                                                        <span data-toggle="counter-up">5,000</span>
                                                        <p><strong>Ordenes</strong> vendidas.</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-clock-time" style="color: #ee2c66;">+</i>
                                                        <span data-toggle="counter-up">824,200</span>
                                                        <p><strong>Horas invertidas</strong> cumpliendo cada uno de nuestros pedidos.</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-award" style="color: #ffb459;">+</i>
                                                        <span data-toggle="counter-up">50</span>
                                                        <p><strong>Reconocimientos</strong> por nuestro arduo trabajo.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End .content-->

                                        <div class="skills-content pl-lg-4">
                                            <div class="progress">
                                                <span class="skill">Calidad del servicio <i class="val">100%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill"> cliente satisfecho <i class="val">90%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill"> cliente insatisfecho <i class="val">10%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section><!-- End About Me Section -->

                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
