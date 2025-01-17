<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/Home.css">
  <link rel="stylesheet" href="/css/Cards.css">
  <link rel="stylesheet" href="/css/Footer.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css?family=Mitr|Roboto+Slab|Source+Sans+Pro&display=swap" rel="stylesheet">
<script src="https://premium-tailwindcomponents.netlify.app/assets/build/js/main.js?id=8c11b7cf78ebea1b5aed"></script>

</head>
<body>

<div class="min-h-full">
    <nav class="navbar">
      <div class="mx-auto max-w-1xl px-1 sm:px-6 lg:px-3">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" id="HomeNa" class="text-violet-950  hover:text-rose-500 rounded-md px-3 py-2 text-lg  font-medium">Home</a>
                <a href="#" id="CadastrarNa"class="text-violet-950  hover:text-rose-500 rounded-md px-3 py-2 text-lg  font-medium">Cadastro</a>
                <a href="#" id="DeletarNa" class="text-violet-950  hover:text-rose-500 rounded-md px-3 py-2 text-lg  font-medium">Deletar</a>
                <a href="#" id="editarNa" class="text-violet-950  hover:text-rose-500 rounded-md px-3 py-2 text-lg  font-medium">editar</a>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>

  
                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
          <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
          </div>
        </div>
      </div>


        <div class="container min-h-full px-6 md:px-12 z-10 flex items-center py-24 xl:py-40 ">
            <div class="lg:w-3/5 xl:w-2/5 flex flex-col items-start relative z-10">
                <h1 class="font-roboto-slab text-4xl sm:text-6xl text-red-400 leading-tight mt-4">Filmes e Séries <br> Para todas as pessoas</h1>
    
                <div class="max-w-md">
                    <p class="font-source-sans-pro text-indigo-500 mt-6 text-lg">A maior plataforma de filmes e séries da atualidade, venha ver com a familia os maiores lançamentos</p>
                </div>
    
                <a href="#" class="block bg-indigo-500 hover:bg-indigo-400 py-2 px-4 rounded-full text-sm font-mitr text-white uppercase mt-10">Vamos nessa</a>
            </div>
    
            <img src="/img/2224153.jpg" class="hidden sm:block absolute bottom-0 right-0 -mr-40 lg:mr-0 fundo" alt="">    
        </div>
    
    </div>
    </nav>


    

        

        
        <main class="h-screen w-screen py-6 flex items-center justify-center flex-wrap mt-20">
        <h1 class="">Principais Filmes</h1>
          <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto:wght@300&display=swap" rel="stylesheet">
        
          
          <div class="containercard">
          
            <div class="card">
              <figure class="card__thumb">
                <img src="/img/1521070.jpg" alt="Picture by Štefan Štefančík" class="card__image">
                <figcaption class="card__caption">
                  <h2 class="card__title">Oppenheimer <br></h2>
                  <br>
                  <p class="card__snippet">Filme que narra a vida e o trabalho de J. Robert Oppenheimer, um cientista chave no desenvolvimento da primeira bomba atômica durante a Segunda Guerra Mundial.</p>
                  <a href="" class="card__button">Leia Mais</a>
                </figcaption>
              </figure>
            </div>
          
            <div class="card">
              <figure class="card__thumb">
                <img src="/img/1521070.jpg" alt="Picture by Nathan Dumlao" class="card__image">
                <figcaption class="card__caption">
                  <h2 class="card__title">John <br>Wick</h2>
                  <p class="card__snippet">"John Wick" é um filme de ação estrelado por Keanu Reeves como um ex-assassino que retorna ao mundo do crime para vingar a morte de seu cachorro.</p>
                  <a href="" class="card__button">Leia Mais</a>
                </figcaption>
              </figure>
            </div>
          
            <div class="card">
              <figure class="card__thumb">
                <img src="/img/446720-avengers-endgame-iphone-wallpaper-avengers-poster.jpg"" alt="Picture by Daniel Lincoln" class="card__image">
                <figcaption class="card__caption">
                  <h2 class="card__title">Os
                    <br> Vingadores</h2>
                  <p class="card__snippet">"Vingadores" é um filme de super-heróis que reúne personagens da Marvel, incluindo Homem de Ferro, Capitão América, Thor e Hulk, para combater ameaças globais. Juntos, eles formam uma equipe poderosa chamada Os Vingadores para proteger o mundo.</p>
                  <a href="" class="card__button">Leia Mais</a>
                </figcaption>
              </figure>
            </div>

            <div class="card">
              <figure class="card__thumb">
                <img src="/img/5562592.jpg" alt="Picture by Štefan Štefančík" class="card__image">
                <figcaption class="card__caption">
                  <h2 class="card__title">Velozes e 
                    <br>Furiosos</h2>
                  <p class="card__snippet">"Velozes e Furiosos" é uma série de filmes de ação que gira em torno de corridas de carros e atividades criminosas, destacando a importância da família e amizade em meio a aventuras repletas de adrenalina.</p>
                  <a href="" class="card__button">Leia Mais</a>
                </figcaption>
              </figure>
            </div>
            <div class="card">
              <figure class="card__thumb">
                <img src="/img/915259.jpg" alt="Picture by Štefan Štefančík" class="card__image">
                <figcaption class="card__caption">
                  <h2 class="card__title">Liga da <br> Justiça</h2>
                  <p class="card__snippet">A "Liga da Justiça" é um grupo de super-heróis da DC Comics, incluindo Batman, Superman, Mulher-Maravilha, Flash, Aquaman e Cyborg, que se unem para combater ameaças cósmicas e proteger o mundo contra vilões poderosos. Juntos, eles defendem a justiça e a segurança do planeta Terra.</p>
                  <a href="" class="card__button">Leia Mais</a>
                </figcaption>
              </figure>
            </div>
          </div>

          @if (count($filmes) > 0)
                    @foreach ($filmes as $fil)
<article class="flex items-start space-x-6 p-6">
  <img src="/img/915259.jpg" alt="" width="60" height="88" class="flex-none rounded-md bg-slate-100" />
  <div class="min-w-0 relative flex-auto">
    <h2 class="font-semibold text-slate-900 truncate pr-20">{{$fil->titulo}}</h2>
    <dl class="mt-2 flex flex-wrap text-sm leading-6 font-medium">
      <div class="absolute top-0 right-0 flex items-center space-x-1">
        <dt class="text-sky-500">
          <span class="sr-only">Star rating</span>
          <svg width="16" height="20" fill="currentColor">
            <path d="M7.05 3.691c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.372 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.363-1.118L.98 9.483c-.784-.57-.381-1.81.587-1.81H5.03a1 1 0 00.95-.69L7.05 3.69z" />
          </svg>
        </dt>
        <dd>{{$fil->pontuacao}}</dd>
      </div>
      
      <div>
        <dt class="sr-only">Rating</dt>
        <dd class="px-1.5 ring-1 ring-slate-500 rounded">{{$fil->duracao}}</dd>
      </div>
      <div class="ml-2">
        <dt class="sr-only">diretor</dt>
        <dd>{{$fil->diretor}}</dd>
      </div>
      <div>
        <dt class="sr-only">ano</dt>
        <dd class="flex items-center">
          <svg width="2" height="2" fill="currentColor" class="mx-2 text-slate-500" aria-hidden="true">
            <circle cx="1" cy="1" r="1" />
          </svg>
          {{$fil->anolanc}}
        </dd>
      </div>
    </dl>
  </div>
</article>
@endforeach
                @else
                    <tr>
                        <td colspan="9">Sem registros!</td>
                    </tr>
                @endif


<!--
    <div class="container mt-5">
      <div class="table-responsive">
        <table class="table table-bordered border-primary">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Subtítulo</th>
                    <th scope="col">Ano de lançamento</th>
                    <th scope="col">Duração</th>
                    <th scope="col">Pontuação</th>
                    <th scope="col">Diretor</th>
                    <th scope="col">Resumo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @if (count($filmes) > 0)
                    @foreach ($filmes as $fil)
                        <tr>
                            <td>{{ $fil->id }}</td>
                            <td>{{ $fil->titulo }}</td>
                            <td>{{ $fil->subtitulo }}</td>
                            <td>{{ $fil->anolanc }}</td>
                            <td>{{ $fil->duracao }}</td>
                            <td>{{ $fil->pontuacao }}</td>
                            <td>{{ $fil->diretor }}</td>
                            <td>{{ $fil->resumo }}</td>
                            <td>
                                <a href="/editar/{{ $fil->id }}" class="btn btn-primary">Editar</a>
                                <a href="/excluir/{{ $fil->id }}" class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">Sem registros!</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
-->

    
          <div class="cardfooter">
            <img src="/img/wallpapersden.com_k-demon-slayer-kimetsu-no-yaiba-poster-2022_4508x4066.jpg" class="cardfooter__image" alt="brown couch" />
            <div class="cardfooter__content">
              <time datetime="2021-03-30" class="cardfooter__date">28 de Abril de 2024</time>
              <span class="cardfooter__title">Venha conferir as novidades do momento no mundo do cinema<span>
            </div>
          </div>
          
      
          
    <footer class="bg-white min-w-full">
      <div class="mx-auto max-w-screen-x3 space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
          <div>
            <div class="text-teal-600">
             
            </div>
    
            <p class="mt-4 max-w-xs text-gray-500">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse non cupiditate quae nam
              molestias.
            </p>
    
            <ul class="mt-8 flex gap-6">
              <li>
                <a
                  href="#"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Facebook</span>
    
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="#"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Instagram</span>
    
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="#"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Twitter</span>
    
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="#"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">GitHub</span>
    
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="#"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Dribbble</span>
    
                  <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
    
          <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-4">
            <div>
              <p class="font-medium text-gray-900">Services</p>
    
              <ul class="mt-6 space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> 1on1 Coaching </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Company Review </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
                </li>
              </ul>
            </div>
    
            <div>
              <p class="font-medium text-gray-900">Company</p>
    
              <ul class="mt-6 space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                </li>
              </ul>
            </div>
    
            <div>
              <p class="font-medium text-gray-900">Helpful Links</p>
    
              <ul class="mt-6 space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
                </li>
              </ul>
            </div>
    
            <div>
              <p class="font-medium text-gray-900">Legal</p>
    
              <ul class="mt-6 space-y-4 text-sm">
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Accessibility </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Returns Policy </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
                </li>
    
                <li>
                  <a href="#" class="text-gray-700 transition hover:opacity-75"> Hiring Statistics </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    
        <p class="text-xs text-gray-500">&copy; 2022. Company Name. All rights reserved.</p>
      </div>
    </footer>
  


  
  
</body>
    </div>
    

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
['Cadastrar', 'CadastrarNa'].forEach(id => document.getElementById(id)?.addEventListener('click', () => window.location.href='/cadastrar'));

    ['Atualizar', 'AtualizarNa'].forEach(id =>document.getElementById(id)?.addEventListener('click',() => window.location.href='/atualizar'
    ));

   ['Deletar','DeletarNa'].forEach(id => document.getElementById(id)?.addEventListener('click', () =>window.location.href='/deletar'
   ));
   
   ['Listar','ListarNa'].forEach(id => document.getElementById(id)?.addEventListener('click', () =>window.location.href='/Listar'
   ));
</script>

</body>

</html>