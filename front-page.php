<?php

/**
 * O arquivo de template da página inicial.
 *
 * Este é o arquivo de template mais genérico em um tema WordPress
 * e um dos dois arquivos necessários para um tema (o outro sendo style.css).
 * Ele é usado para exibir uma página quando nada mais específico corresponde a uma consulta.
 * Por exemplo, ele monta a página inicial quando nenhum arquivo home.php existe.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coopers
 */

get_header(); // Inclui o header.php do tema (contém DOCTYPE, html, head, body de abertura)
?>

<!-- SEÇÃO PRINCIPAL (HERO) - Baseada em image_44f750.png -->
<!-- REMOVIDO: 'pb-40' para evitar que o fundo branco da seção vaze -->
<section class="relative w-full overflow-hidden bg-white flex items-center justify-center min-h-[600px] lg:min-h-screen px-4 sm:px-8">
  <!-- BG Triângulo (visível apenas no desktop) -->
  <!-- BG Triângulo (oculto no mobile, visível no desktop com ajustes exatos) -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BG.png"
    alt="Background Triangle"
    class="absolute top-[40px] right-[1px] w-[600px] h-[500px] md:w-[800px] md:h-[800px] lg:w-[960px] lg:h-[900px] z-10 ml-[100px] opacity-0 lg:opacity-100 hidden lg:block" />
    
    <div class="absolute top-4 left-4 hidden lg:flex lg:items-center">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
     alt="To-do List Logo"
     class="w-[100px] md:w-[120px] lg:w-[140px] mb-8 mx-auto lg:ml-12" />
      </a>
    </div>

  <div class="relative z-10 max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-10">
    <!-- LOGO COOPERS (no desktop) -->
    <!-- 📄 TEXTO NA ESQUERDA (no desktop) -->
    <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left px-2 sm:px-4">
   
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
        Organize <br />
        <span class="text-[#56c870] font-normal">your daily jobs</span>
      </h1>

      <p class="mt-4 text-sm sm:text-base md:text-lg text-gray-700">
        The only way to get things done.
      </p>

      <a href="#contact"
        class="bg-[#56c870] mt-6 py-3 px-6 rounded-md text-white font-bold hover:bg-green-600 transition duration-300 shadow-md">
        Meet the To-do list
      </a>
    </div>

    <!-- 👩‍🦱 IMAGEM NA DIREITA (no desktop) -->
    <div class="w-full lg:w-1/2 flex justify-center items-center mt-6 lg:mt-0 lg:ml-10">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.png"
        alt="Illustration"
        class="w-[220px] sm:w-[280px] md:w-[350px] lg:w-[500px] rounded-xl z-10 shadow-xl transition-all duration-300" />
    </div>
  </div>

  <!-- Seta de scroll -->
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-scroll.png"
    alt="Scroll Icon"
    class="absolute bottom-[60px] left-1/2 transform -translate-x-1/2 w-6 sm:w-8 animate-bounce z-20 md:opacity-100 opacity-0 lg:opacity-100" />
</section>



<!-- SEÇÃO DE INTRODUÇÃO DOS PLANOS (FAIXA PRETA INCLINADA) -->
<section class="relative top-[-100px] w-full overflow-hidden bg-white py-16 z-0">
  <div class="bg-black text-white transform -skew-y-3 py-10 z-0"> <!-- Margem negativa para sobrepor a seção anterior -->
    <div class="max-w-screen-2xl mx-auto transform skew-y-3 text-center px-4 sm:px-8">
      <h2 class="text-4xl md:text-5xl font-bold mb-4 relative inline-block">
        To-do List
        <span class="block h-1 bg-[#56c870] w-3/5 mx-auto mt-2"></span>
      </h2>
      <p class="text-lg md:text-xl font-light leading-relaxed mt-8">
        Choose the right plan for you and get in touch<br>
        through our contact form. We are here to help.
      </p>
    </div>
  </div>
</section>


<!-- PLANS SECTION -->
<section class="container flex flex-col lg:flex-row gap-8 justify-center items-center w-full max-w-5xl relative z-10 mx-auto py-16 px-5">

  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lateral-esquerda.png"
    alt="Meio Triângulo"
    class="absolute bottom-0 left-[-450px] w-[250px] h-[500px z-0" />

  <!-- Basic Plan Card -->
  <div class="bg-white rounded-xl shadow-lg overflow-hidden w-full lg:w-1/2 max-w-sm flex flex-col transform hover:scale-105 transition duration-300 ease-in-out">
    <!-- Green top bar -->
    <div class="bg-[#50C878] h-3"></div>

    <div class="p-6 flex-grow flex flex-col items-center text-center">
      <h3 class="text-4xl font-bold text-gray-800 mt-4">R$ 20 / mês</h3>
      <p class="text-xl font-semibold text-gray-700 mt-2">Basic Plan</p>
      <p class="text-md text-gray-500 mb-6">unlimited tasks</p>

      <ul class="text-left w-full space-y-3">
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Create to-do lists
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Share lists via WhatsApp
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-cross"></span>
          Offline mode
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-cross"></span>
          Invite collaborators
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-cross"></span>
          Dark mode
        </li>
      </ul>

      <a href="#contact" class="mt-8 w-full bg-black text-white py-3 rounded-lg text-lg font-semibold hover:bg-gray-800 transition duration-300">
        get in touch
      </a>
    </div>
  </div>

  <!-- Pro Plan Card -->
  <div class="bg-white rounded-xl shadow-lg overflow-hidden w-full lg:w-1/2 max-w-sm flex flex-col transform hover:scale-105 transition duration-300 ease-in-out">
    <!-- Green top bar -->
    <div class="bg-[#50C878] h-3"></div>

    <div class="p-6 flex-grow flex flex-col items-center text-center">
      <h3 class="text-4xl font-bold text-gray-800 mt-4">R$ 30 / mês</h3>
      <p class="text-xl font-semibold text-gray-700 mt-2">Pro Plan</p>
      <p class="text-md text-gray-500 mb-6">unlimited everything</p>

      <ul class="text-left w-full space-y-3">
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Create to-do lists
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Share lists via WhatsApp
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Offline mode
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Invite collaborators
        </li>
        <li class="flex items-center text-gray-700 text-lg">
          <span class="icon-check"></span>
          Dark mode
        </li>
      </ul>

      <a href="#contact" class="mt-8 w-full bg-black text-white py-3 rounded-lg text-lg font-semibold hover:bg-gray-800 transition duration-300">
        get in touch
      </a>
    </div>
  </div>
</section>

<!-- CARDS SECTION (GOOD THINGS) -->
<section class="bg-[#56c870] text-white py-16 px-5">
  <div class="container max-w-screen-xl mx-auto">
    <h2 class="text-4xl font-bold mb-8 text-center md:text-left">Good Things</h2>
    <div class="flex gap-5 overflow-x-auto pb-3 scrollbar-hide">
      <?php
      $cards = [
        ['img' => 'card1.jpg', 'text' => 'Organize your daily job enhance your life performance'],
        ['img' => 'card2.jpg', 'text' => 'Mark one activity as done makes your brain understands the power of doing.'],
        ['img' => 'card3.jpg', 'text' => 'Careful with misunderstanding between list of things and desires.']
      ];
      foreach ($cards as $card): ?>
        <div class="min-w-[280px] md:min-w-[320px] flex-shrink-0 bg-white rounded-lg shadow-lg p-4 text-gray-800">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $card['img']; ?>" alt="Card image" class="w-full h-40 object-cover rounded-md mb-4">
          <p class="mt-3 text-base font-semibold">Function</p>
          <p class="text-sm text-gray-600 mb-4"><?php echo $card['text']; ?></p>
          <a href="#" class="text-[#56c870] underline text-sm hover:no-underline transition duration-300">Read more</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="container mx-auto py-16 px-5 text-center">
  <div class="flex flex-col items-center max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
    <!-- Imagem da Pessoa de Contato -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/person_placeholder.png" alt="Contact Person" class="w-24 h-24 rounded-full object-cover mb-6 shadow-md">
    <h2 class="text-4xl font-bold mb-8 text-gray-800">GET IN TOUCH</h2>
    <form class="flex flex-col gap-4 w-full" action="#" method="POST">
      <input type="text" name="name" placeholder="Your name" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870]">
      <input type="email" name="email" placeholder="Email" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870]">
      <input type="tel" name="phone" placeholder="Telephone" class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870]">
      <textarea name="message" placeholder="Message" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870] h-32 resize-y"></textarea>
      <button type="submit" class="bg-[#56c870] text-white py-3 px-4 border-none rounded-md font-semibold hover:bg-green-600 transition duration-300 shadow-md">SEND NOW</button>
    </form>
  </div>
</section>

<!-- FOOTER SECTION -->
<footer class="text-white text-center py-10 relative">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotabe.png" alt="Footer Background" class="absolute inset-0 w-full h-full ">
  <div class="relative z-10">
    <p class="text-xl font-bold mb-2">Need help?</p>
    <p class="text-lg font-semibold mb-2">coopers@coopers.pro</p>
    <p class="text-xs mb-8">© 2021 Coopers. All rights reserved.</p>
  </div>
  <div class="w-80 h-10 bg-green-400 mx-auto skew-y-[-1.2deg]"></div>
</footer>

<?php get_footer(); // Inclui o footer.php do tema (fecha as tags body e html) 
?>