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
   * Template Name: Coopers Front Page
   */

  get_header();
  ?>

  <!-- SEÇÃO PRINCIPAL (HERO) -->
  <section class="relative w-full overflow-hidden bg-white flex items-center justify-center min-h-[600px] lg:min-h-screen px-4 sm:px-8">
    <?php
    $hero_section = get_field('hero_section');
    if ($hero_section) : ?>
      <?php if (!empty($hero_section['hero_bg_triangle'])) : ?>
        <img src="<?php echo esc_url($hero_section['hero_bg_triangle']); ?>"
          alt="Background Triangle"
          class="absolute top-[40px] right-0 w-[60vw] h-[50vh] md:w-[80vw] md:h-[80vh] lg:w-[50vw] lg:h-[90vh] z-10 ml-[100px] opacity-0 lg:opacity-100 hidden lg:block" />
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BG.png"
          alt="Background Triangle"
          class="absolute top-[40px] right-0 w-[60vw] h-[50vh] md:w-[80vw] md:h-[80vh] lg:w-[50vw] lg:h-[90vh] z-10 ml-[100px] opacity-0 lg:opacity-100 hidden lg:block" />
      <?php endif; ?>
 <!-- Logo Coopers - Ajustada para ficar no canto superior esquerdo e visível em todas as telas -->
    <div class="absolute top-4 left-4 z-30"> <!-- Z-index maior para garantir que esteja acima de tudo -->
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
          alt="To-do List Logo"
          class="w-[80px] md:w-[100px] lg:w-[120px]" />
      </a>
    </div>

    <div class="relative z-20 w-full max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center lg:items-certer lg:justify-between gap-10">
      <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left px-2 sm:px-4 lg:pl-4"> <!-- ALTERADO AQUI: lg:pl-16 para lg:pl-4 -->

        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
          <?php echo !empty($hero_section['hero_main_title']) ? esc_html($hero_section['hero_main_title']) : 'Organize'; ?> <br />
          <span class="text-[#56c870] font-normal"><?php echo !empty($hero_section['hero_subtitle']) ? esc_html($hero_section['hero_subtitle']) : 'your daily jobs'; ?></span>
        </h1>

        <p class="mt-4 text-sm sm:text-base md:text-lg text-gray-700">
          <?php echo !empty($hero_section['hero_description']) ? nl2br(esc_html($hero_section['hero_description'])) : 'The only way to get things done.'; ?>
        </p>

        <a href="#todo-list"
          class="bg-[#56c870] mt-6 py-3 px-6 rounded-md text-white font-bold hover:bg-green-600 transition duration-300 shadow-md">
          <?php echo !empty($hero_section['hero_button_text']) ? esc_html($hero_section['hero_button_text']) : 'Meet the To-do list'; ?>
        </a>
      </div>

        <div class="w-full lg:w-1/2 flex justify-center items-center mt-6 lg:mt-0 lg:ml-10">
          <?php if (!empty($hero_section['hero_image'])) : ?>
            <img src="<?php echo esc_url($hero_section['hero_image']); ?>"
              alt="Illustration"
              class="w-[220px] sm:w-[280px] md:w-[350px] lg:w-[500px] rounded-xl z-10 shadow-xl transition-all duration-300" />
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto.png"
              alt="Illustration"
              class="w-[220px] sm:w-[280px] md:w-[350px] lg:w-[500px] rounded-xl z-10 shadow-xl transition-all duration-300" />
          <?php endif; ?>
        </div>
      </div>

      <?php if (!empty($hero_section['hero_scroll_icon'])) : ?>
        <img src="<?php echo esc_url($hero_section['hero_scroll_icon']); ?>"
          alt="Scroll Icon"
          class="absolute bottom-[60px] left-1/2 transform -translate-x-1/2 w-6 sm:w-8 animate-bounce z-20 hidden lg:block" />
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-scroll.png"
          alt="Scroll Icon"
          class="absolute bottom-[60px] left-1/2 transform -translate-x-1/2 w-6 sm:w-8 animate-bounce z-20 hidden lg:block" />
      <?php endif; ?>
    <?php endif; ?>
  </section>

  <!-- SEÇÃO DE INTRODUÇÃO DOS PLANOS (FAIXA PRETA INCLINADA) -->
  <section id="todo-list" class="relative top-[-100px] w-full overflow-hidden bg-white py-16 z-0">
    <?php
    $todo_list_intro_section = get_field('todo_list_intro_section');
    if ($todo_list_intro_section) : ?>
      <div class="bg-black text-white transform -skew-y-3 py-10 z-0">
        <div class="max-w-screen-2xl mx-auto transform skew-y-3 text-center px-4 sm:px-8">
          <h2 class="text-4xl md:text-5xl font-bold mb-4 relative inline-block">
            <?php echo !empty($todo_list_intro_section['todo_list_title']) ? esc_html($todo_list_intro_section['todo_list_title']) : 'To-do List'; ?>
            <span class="block h-1 bg-[#56c870] w-3/5 mx-auto mt-2"></span>
          </h2>
          <p class="text-lg md:text-xl font-light leading-relaxed mt-8">
            <?php echo !empty($todo_list_intro_section['todo_list_description']) ? nl2br(esc_html($todo_list_intro_section['todo_list_description'])) : 'Choose the right plan for you and get in touch<br>through our contact form. We are here to help.'; ?>
          </p>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <!-- PLANS SECTION -->
  <section class="container flex flex-col lg:flex-row gap-8 justify-center items-center w-full max-w-full relative z-10 mx-auto py-16 px-5">
    <?php
    $plans_section = get_field('plans_section');
    if ($plans_section) : ?>
      <?php if (!empty($plans_section['plans_left_triangle'])) : ?>
        <img src="<?php echo esc_url($plans_section['plans_left_triangle']); ?>"
          alt="Meio Triângulo"
          class="absolute bottom-0 left-[0] w-[13vw] h-[50vh] z-0" />
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lateral-esquerda.png"
          alt="Meio Triângulo"
          class="absolute bottom-0 left-[0] w-[13vw] h-[50vh] z-0" />
      <?php endif; ?>

      <?php
      $basic_plan = $plans_section['basic_plan'];
      if ($basic_plan) : ?>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden w-full lg:w-1/2 max-w-sm flex flex-col transform hover:scale-105 transition duration-300 ease-in-out">
          <div class="bg-[#50C878] h-3"></div>

          <div class="p-6 flex-grow flex flex-col items-center text-center">
            <h3 class="text-4xl font-bold text-gray-800 mt-4"><?php echo !empty($basic_plan['price']) ? esc_html($basic_plan['price']) : 'R$ 20 / mês'; ?></h3>
            <p class="text-xl font-semibold text-gray-700 mt-2"><?php echo !empty($basic_plan['plan_name']) ? esc_html($basic_plan['plan_name']) : 'Basic Plan'; ?></p>
            <p class="text-md text-gray-500 mb-6"><?php echo !empty($basic_plan['plan_description']) ? esc_html($basic_plan['plan_description']) : 'unlimited tasks'; ?></p>

            <ul class="text-left w-full space-y-3">
              <?php
              if (isset($basic_plan['plan_features']) && is_array($basic_plan['plan_features'])) :
                foreach ($basic_plan['plan_features'] as $feature) : ?>
                  <li class="flex items-center text-gray-700 text-lg">
                    <span class="<?php echo !empty($feature['icon_type']) ? esc_attr($feature['icon_type']) : ''; ?>"></span>
                    <?php echo !empty($feature['feature_text']) ? esc_html($feature['feature_text']) : ''; ?>
                  </li>
                <?php endforeach;
              else: ?>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Create to-do lists</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Share lists via WhatsApp</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-cross"></span> Offline mode</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-cross"></span> Invite collaborators</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-cross"></span> Dark mode</li>
              <?php
              endif; ?>
            </ul>

            <a href="#contact" class="mt-8 w-full bg-black text-white py-3 rounded-lg text-lg font-semibold hover:bg-gray-800 transition duration-300">
              <?php echo !empty($basic_plan['button_text']) ? esc_html($basic_plan['button_text']) : 'get in touch'; ?>
            </a>
          </div>
        </div>
      <?php endif; ?>

      <?php
      $pro_plan = $plans_section['pro_plan'];
      if ($pro_plan) : ?>
        <div class="bg-white rounded-xl shadow-lg overflow-hidden w-full lg:w-1/2 max-w-sm flex flex-col transform hover:scale-105 transition duration-300 ease-in-out">
          <div class="bg-[#50C878] h-3"></div>

          <div class="p-6 flex-grow flex flex-col items-center text-center">
            <h3 class="text-4xl font-bold text-gray-800 mt-4"><?php echo !empty($pro_plan['price']) ? esc_html($pro_plan['price']) : 'R$ 30 / mês'; ?></h3>
            <p class="text-xl font-semibold text-gray-700 mt-2"><?php echo !empty($pro_plan['plan_name']) ? esc_html($pro_plan['plan_name']) : 'Pro Plan'; ?></p>
            <p class="text-md text-gray-500 mb-6"><?php echo !empty($pro_plan['plan_description']) ? esc_html($pro_plan['plan_description']) : 'unlimited everything'; ?></p>

            <ul class="text-left w-full space-y-3">
              <?php
              if (isset($pro_plan['plan_features']) && is_array($pro_plan['plan_features'])) :
                foreach ($pro_plan['plan_features'] as $feature) : ?>
                  <li class="flex items-center text-gray-700 text-lg">
                    <span class="<?php echo !empty($feature['icon_type']) ? esc_attr($feature['icon_type']) : ''; ?>"></span>
                    <?php echo !empty($feature['feature_text']) ? esc_html($feature['feature_text']) : ''; ?>
                  </li>
                <?php endforeach;
              else: ?>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Create to-do lists</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Share lists via WhatsApp</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Offline mode</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Invite collaborators</li>
                <li class="flex items-center text-gray-700 text-lg"><span class="icon-check"></span> Dark mode</li>
              <?php
              endif; ?>
            </ul>

            <a href="#contact" class="mt-8 w-full bg-black text-white py-3 rounded-lg text-lg font-semibold hover:bg-gray-800 transition duration-300">
              <?php echo !empty($pro_plan['button_text']) ? esc_html($pro_plan['button_text']) : 'get in touch'; ?>
            </a>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  </section>

  <!-- CARDS SECTION (GOOD THINGS) -->
  <section class="relative bg-white pt-16 pb-16 px-5 z-10">
    <div class="container max-w-screen-xl mx-auto relative">
      <div class="absolute top-0 left-[-50px] rounded-xl bg-[#56c870] z-0
                    w-[95%] sm:w-[90%] md:w-[85%] lg:w-[80%] xl:w-[75%]
                    h-[250px] sm:h-[280px] md:h-[320px] lg:h-[350px] xl:h-[400px]">
      </div>

      <div class="relative z-10 pt-10">
        <?php
        $good_things_section = get_field('good_things_section');
        if ($good_things_section && !empty($good_things_section['section_title'])) : ?>
          <h2 class="text-3xl sm:text-4xl font-bold text-white text-center md:text-left mb-8 px-4">
            <?php echo esc_html($good_things_section['section_title']); ?>
          </h2>
        <?php else : ?>
          <h2 class="text-3xl sm:text-4xl font-bold text-white text-center md:text-left mb-8 px-4">Good Things</h2>
        <?php endif; ?>

        <!-- Wrapper com overflow -->
        <div class="overflow-hidden relative px-4 mt-[-20px]">
          <div id="cards-slider" class="flex transition-transform duration-500 ease-in-out">
            <?php
            // Changed to check if good_things_cards repeater exists and is not empty within the good_things_section group
            if (isset($good_things_section['good_things_cards']) && is_array($good_things_section['good_things_cards']) && !empty($good_things_section['good_things_cards'])) :
              foreach ($good_things_section['good_things_cards'] as $index => $card) :
                $card_image = !empty($card['card_image']) ? $card['card_image'] : get_template_directory_uri() . '/assets/img/placeholder.png';
                $card_text = !empty($card['card_text']) ? $card['card_text'] : 'Default card text.';
                $read_more_text = !empty($card['read_more_text']) ? $card['read_more_text'] : 'read more';
                $read_more_url = !empty($card['read_more_url']) ? esc_url($card['read_more_url']) : '#';
            ?>
                <div class="good-thing-card w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-2">
                  <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
                    <img src="<?php echo esc_url($card_image); ?>" alt="Card image" class="w-full h-40 object-cover rounded-t-xl">
                    <div class="p-4 text-left">
                      <div class="inline-block border border-gray-300 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">function</div>
                      <p class="text-base font-semibold text-gray-800 mb-4"><?php echo nl2br(esc_html($card_text)); ?></p>
                      <a href="<?php echo $read_more_url; ?>" class="text-[#56c870] underline text-sm hover:no-underline transition duration-300"><?php echo esc_html($read_more_text); ?></a>
                    </div>
                  </div>
                </div>
              <?php
              endforeach;
            else :
              // Fallback para cards estáticos se ACF não estiver preenchido ou o repetidor estiver vazio
              $static_cards = [
                ['img' => 'card1.png', 'text' => 'Organize your daily job enhance your life performance'],
                ['img' => 'card2.png', 'text' => 'Mark one activity as done makes your brain understands the power of doing.'],
                ['img' => 'card3.png', 'text' => 'Careful with misunderstanding between list of things and desires.'],
                ['img' => 'card2.png', 'text' => 'Explore the wonders of the world with curiosity.'],
                ['img' => 'card3.png', 'text' => 'Learn a new skill and open doors to new opportunities.'],
                ['img' => 'card1.png', 'text' => 'Embrace challenges as they are steps to growth.'],
              ];
              foreach ($static_cards as $index => $card) : ?>
                <div class="good-thing-card w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-2">
                  <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $card['img']; ?>" alt="Card image" class="w-full h-40 object-cover rounded-t-xl">
                    <div class="p-4 text-left">
                      <div class="inline-block border border-gray-300 text-gray-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">function</div>
                      <p class="text-base font-semibold text-gray-800 mb-4"><?php echo nl2br(esc_html($card['text'])); ?></p>
                      <a href="#" class="text-[#56c870] underline text-sm hover:no-underline transition duration-300">read more</a>
                    </div>
                  </div>
                </div>
            <?php endforeach;
            endif;
            ?>
          </div> <!-- fecha #cards-slider -->
        </div> <!-- fecha wrapper com overflow-hidden -->

        <!-- Dots de Paginação -->
        <div id="pagination-dots" class="hidden md:flex justify-center gap-3 mt-8">
          <!-- Bolinhas inseridas via JavaScript -->
        </div>

      </div>
    </div>
  </section>


  <!-- CONTACT SECTION -->
  <section id="contact" class="container mx-auto py-16 px-5 text-center">
    <?php
    $contact_section = get_field('contact_section');
    if ($contact_section) : ?>
      <!-- Bloco principal do formulário, agora com a imagem superior e linha verde -->
      <div class="relative flex flex-col items-center max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8 pt-20 pb-10">
        <!-- Linha verde acima da imagem (posicionamento absoluto) -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-16 h-1 bg-[#56c870] rounded-full"></div>

        <!-- Imagem do Contato (posicionamento absoluto) -->
        <?php if (!empty($contact_section['contact_person_image'])) : ?>
          <img src="<?php echo esc_url($contact_section['contact_person_image']); ?>" alt="Contact Person" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4 w-24 h-24 rounded-full object-cover shadow-md z-10">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.png" alt="Contact Person" class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 mt-4 w-24 h-24 rounded-full object-cover shadow-md z-10">
        <?php endif; ?>

        <!-- Conteúdo principal do formulário -->
        <div class="mt-8 flex flex-col items-start w-full">
          <!-- Mensagem de feedback do formulário -->
          <div id="form-message" class="w-full mb-4 text-center text-sm font-semibold"></div>

          <!-- Ícone de Envelope e Título "GET IN TOUCH" -->
          <div class="flex items-center gap-2 mb-8 text-gray-800">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-mail.png" alt="Mail Icon">
            <h2 class="text-3xl">
              <?php
              $contact_title_full = !empty($contact_section['contact_title']) ? esc_html($contact_section['contact_title']) : 'GET IN TOUCH';
              $words = explode(' ', $contact_title_full);
              $first_part = implode(' ', array_slice($words, 0, count($words) - 1));
              $last_word = end($words);
              echo $first_part . '<br><span class="font-bold">' . $last_word . '</span>';
              ?>
            </h2>
          </div>

          <form id="contact-form" class="flex flex-col gap-4 w-full" method="POST">
            <!-- Campo Your name -->
            <label for="name" class="block text-sm font-semibold text-gray-700">Your name</label>
            <input type="text" name="name" id="name" placeholder="<?php echo !empty($contact_section['placeholder_name']) ? esc_attr($contact_section['placeholder_name']) : 'type your name here...'; ?>" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870] w-full">

            <!-- Campos Email e Telephone lado a lado em desktop -->
            <div class="flex flex-col md:flex-row gap-4 w-full">
              <div class="flex-1">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email*</label>
                <input type="email" name="email" id="email" placeholder="<?php echo !empty($contact_section['placeholder_email']) ? esc_attr($contact_section['placeholder_email']) : 'example@example.com'; ?>" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870] w-full">
              </div>
              <div class="flex-1">
                <label for="phone" class="block text-sm font-semibold text-gray-700">Telephone*</label>
                <input type="tel" name="phone" id="phone" placeholder="<?php echo !empty($contact_section['placeholder_phone']) ? esc_attr($contact_section['placeholder_phone']) : '( ) _ _ _ - _ _ _ _'; ?>" class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870] w-full">
              </div>
            </div>

            <!-- Campo Message -->
            <label for="message" class="block text-sm font-semibold text-gray-700">Message*</label>
            <textarea name="message" id="message" placeholder="<?php echo !empty($contact_section['placeholder_message']) ? esc_attr($contact_section['placeholder_message']) : 'Type what you want to say to us'; ?>" required class="p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#56c870] h-32 resize-y"></textarea>

            <button type="submit" class="bg-[#56c870] text-white py-3 px-4 border-none rounded-md font-semibold hover:bg-green-600 transition duration-300 shadow-md">
              <?php echo !empty($contact_section['send_button_text']) ? esc_html($contact_section['send_button_text']) : 'SEND NOW'; ?>
            </button>
          </form>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <!-- FOOTER SECTION -->
  <footer class="text-white text-center py-10 relative">
    <?php
    $footer_section = get_field('footer_section');
    if ($footer_section) : ?>
      <?php if (!empty($footer_section['footer_background_image'])) : ?>
        <img src="<?php echo esc_url($footer_section['footer_background_image']); ?>" alt="Footer Background" class="absolute inset-0 w-full h-full ">
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotabe.png" alt="Footer Background" class="absolute inset-0 w-full h-full ">
      <?php endif; ?>
      <div class="relative z-10">
        <p class="text-xl font-bold mb-2"><?php echo !empty($footer_section['help_text']) ? esc_html($footer_section['help_text']) : 'Need help?'; ?></p>
        <p class="text-lg font-semibold mb-2"><?php echo !empty($footer_section['contact_email']) ? esc_html($footer_section['contact_email']) : 'coopers@coopers.pro'; ?></p>
        <p class="text-xs mb-8"><?php echo !empty($footer_section['copyright_text']) ? esc_html($footer_section['copyright_text']) : '© 2021 Coopers. All rights reserved.'; ?></p>
      </div>
      <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 w-80 h-10 bg-green-400 mx-auto skew-y-[-1.2deg]"></div>
    <?php endif; ?>
  </footer>

  <!-- Link para o script.js externo -->
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

  <?php get_footer();
  ?>