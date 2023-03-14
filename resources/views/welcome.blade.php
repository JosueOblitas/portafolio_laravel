@extends('AppLayout')
@section('content')

<main class="lg:mx-24 mx-5 mt-28 w-100 bg-white rounded-xl">
    <div class="p-10 flex items-center justify-center section" id="about">
        <div class="md:block lg:grid items-center grid-cols-7 gap-4">
                <div class="col-span-4 animate__animated animate__slideInLeft">
                    <h1 class="font-bold text-7xl py-5">Hola!</h1>
                    <p class="text-lg">Soy un desarrollador web con experiencia en la creación de sitios web <strong>atractivos</strong> y funcionales. Mi pasión por la tecnología y mi habilidad para resolver problemas me han llevado a especializarme en el desarrollo web. Me encanta crear soluciones que ayuden a las empresas a alcanzar sus objetivos en línea y mejorar la experiencia de usuario para los visitantes del sitio. Siempre estoy en busca de nuevas tecnologías y tendencias en el desarrollo web para ofrecer lo mejor a mis clientes. Espero poder ayudarte a crear un sitio web impresionante y efectivo para tu negocio.</p>
                    <a  href="{{route('contacto')}}" class="w-20 md:flex md:justify-center my-7 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Contactar</a>
                </div>
                    <div class="col-span-3 animate__animated animate__fadeInDown">
                    <img class="md:w-5/6" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678739784/portafolio/Mi_proyecto_ggeos5.png" alt="">
                </div>
        </div>
    </div>
    <div class="px-10 flex flex-col justify-center section" id="skill">
        <h2 class="font-bold text-3xl py-5">Principales Habilidades</h2>
        <p class="text-lg">Aquí están las tecnologías que utilizo para el desarrollo web:</p>
        <div class="md:block lg:flex lg:gap-x-36 flex-wrap">
            <div class="flex-1">
                <h1 class="font-bold text-3xl pt-10">Frontend</h1>
                <div class="tec_frontend text-center flex gap-6 py-5 ">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678740282/portafolio/ICONOS_FRONTEND/html-5_lonv4d.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678740766/portafolio/ICONOS_FRONTEND/css-3_c2r9z5.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678740842/portafolio/ICONOS_FRONTEND/js_dyl9gp.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678740916/portafolio/ICONOS_FRONTEND/react_ksyamy.png" alt="">
                </div>
            </div>
            <div class="flex-1">
                <h1 class="font-bold text-3xl pt-10">Backend</h1>
                <div class="tec_backend text-center flex gap-3 py-5">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678741615/portafolio/ICONOS_FRONTEND/php_mns9n5.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678741609/portafolio/ICONOS_FRONTEND/logomark.min_diqyll.svg" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678741821/portafolio/ICONOS_FRONTEND/mysql_i43nhg.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678742417/portafolio/ICONOS_FRONTEND/wordpress_uikckg.png" alt="">
                </div>
            </div>
            <div class="flex-1">
                <h1 class="font-bold text-3xl pt-10">Otros</h1>
                <div class="tec_backend flex gap-3 py-5">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678743034/portafolio/ICONOS_FRONTEND/linux_fj9wa3.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678743038/portafolio/ICONOS_FRONTEND/git_kasn53.png" alt="">
                    <img width="60px" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678743042/portafolio/ICONOS_FRONTEND/figma_xcmouo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 mt-10 flex flex-col justify-center section" id="proyectos">
        <h2 class="font-bold text-3xl py-5">Proyectos</h2>
        <p class="text-lg">Los mejores proyectos:</p>
        <div class="md:block md:mx-auto lg:mx-0 lg:flex lg:justify-between  lg:gap-4 my-10">
            <div class="flex-1 md:my-5">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678749923/portafolio/ICONOS_FRONTEND/gymfitness_klgx3h.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GymFitness</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Proyecto realizado con wordpress para un cliente final que necesita llegar a más publico y generar mas inscripciones</p>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Wordpress</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">PHP</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">MYSQL</span>
                        <div class="pt-3">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver<svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 md:my-5">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678750416/portafolio/ICONOS_FRONTEND/LARAVEL_brn8xb.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fresh Coffe</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kiosko de comida para un restaurante de comida rapida de mi localidad, el obejtivo es agilixar el pedido de productos y el pago del mismo</p>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">React</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Laravel</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">MYSQL</span>
                        <div class="pt-3">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver<svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 md:my-5">
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678750677/portafolio/ICONOS_FRONTEND/laravel_1_pouymf.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">DevJobs</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Portal de Empleo para Desarroladores de todo el mundo, tanto el desarrollador pued ingresar para encotnar trabajo como los recuiters pueden ingresar para publicar ofertas laborales</p>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">LiveWire</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Laravel</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">MYSQL</span>
                        <div class="pt-3">
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Ver<svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-10 flex flex-col justify-center section" id="experiencia">
        <h2 class="font-bold text-3xl py-5">Experiencia Laboral</h2>
        <div class="flex gap-7 my-10">
            <img class="w-14 h-14" src="https://res.cloudinary.com/dwipjtlpj/image/upload/v1678752087/portafolio/ICONOS_FRONTEND/1525632108525_qc5qmr.jpg" alt="">
            <div class="info_empresa">
                <p>Empresa: HostingLabs</p>
                <p><span>Puesto:</span>Desarrollador FullStack</p>
                <p><span>Descripción:</span>Encargado de creación de herramientas para las áreas internas de la empresa</p>
                @php
                    use Carbon\Carbon;
                    Carbon::setLocale('es');
                    $fecha1 = Carbon::parse('2022-05-01');
                    $fecha2 = Carbon::now();

                    $diferencia = $fecha2->diffForHumans($fecha1);
                    $diferencia_formateada = str_replace(['después', 'antes'],"", $diferencia);
                @endphp
                <p>Tiempo:{{ $diferencia_formateada}}</p>
                <p><span>Tecnologías:</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">JS</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">PHP</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">Laravel</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">React</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">MYSQL</span>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">GIT</span>
                </p>
            </div>
        </div>
    </div>
</main>
@endsection        
