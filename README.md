# Coopers Front Page - Tema WordPress Personalizado

Este projeto é um tema WordPress personalizado desenvolvido para a página inicial da Coopers. Ele apresenta um layout moderno, responsivo e com gerenciamento de conteúdo totalmente dinâmico via Advanced Custom Fields (ACF).

## 🚀 Visão Geral do Projeto

O tema **Coopers Front Page** foi criado do zero para atender às especificações de design e funcionalidade da empresa, transformando um layout estático em uma experiência dinâmica e totalmente gerenciável pelo painel do WordPress.

### Principais Seções

- **Seção Hero (Principal):** Com título, subtítulo, descrição, botão de CTA e imagens (de fundo e ilustração) configuráveis.
- **Seção de Introdução aos Planos:** Faixa preta com título e descrição dinâmicos.
- **Seção de Planos:** Apresenta dois planos (Basic e Pro) com preços, nomes, descrições e listas de funcionalidades totalmente configuráveis.
- **Seção "Good Things":** Área de cards com imagens, textos e links, que possui paginação dinâmica controlada via JavaScript.
- **Seção de Contato:** Formulário com campos personalizados e imagem de perfil. Exibe mensagem de sucesso diretamente na página após o envio (sem redirecionamento) e limpa os campos via JavaScript.
- **Rodapé:** Área com informações de contato e direitos autorais, também personalizável.

## ✨ Funcionalidades

- **Design Responsivo:** Layout adaptável para diferentes tamanhos de tela (desktop, tablet e mobile), com uso de Tailwind CSS.
- **Conteúdo Dinâmico com ACF:** Todas as informações textuais, imagens e links são gerenciadas via campos personalizados no painel do WordPress.
- **Gerenciamento de Planos Flexível:** Permite adicionar e editar detalhes como nome, preço, descrição e funcionalidades dos planos.
- **Paginação de Cards com JavaScript:** A seção "Good Things" usa navegação por pontos para exibição dos cards, com adaptação ao tamanho da tela.
- **Formulário de Contato com Feedback Imediato:** Interação via JavaScript que evita redirecionamentos, exibe feedback na própria página e limpa os campos após o envio (simulado, sem backend).
- **Estrutura Padrão de Tema WordPress:** Utiliza a hierarquia e os arquivos recomendados pelo WordPress (`header.php`, `footer.php`, `front-page.php`, etc.).

## 🛠️ Tecnologias Utilizadas

- **WordPress**
- **PHP**
- **Advanced Custom Fields (ACF)**
- **HTML5**
- **Tailwind CSS**
- **JavaScript (Vanilla JS)**

## ⚙️ Instalação e Configuração

1. **Instale o WordPress**  
   Certifique-se de ter uma instalação funcional do WordPress (local ou em servidor remoto).

   **Clone ou Baixe o Tema:**
    * Clone este repositório para a pasta `wp-content/themes/` da sua instalação WordPress:
        ```bash
        git clone https://github.com/WiniciusNeves/coopers
        ```

3. **Adicione o Tema**
   Copie os arquivos do tema para a pasta `wp-content/themes/coopers-front-page`.

4. **Ative o Tema**
   No painel do WordPress, vá até `Aparência > Temas`, localize "Coopers Front Page" e clique em **Ativar**.

5. **Instale o Plugin ACF PRO**
   Vá em `Plugins > Adicionar Novo`, procure por "Advanced Custom Fields PRO", instale e ative o plugin.

6. **Importe os Campos Personalizados (ACF)**
   Vá em `ACF > Ferramentas > Importar`. Clique em **Importar JSON**, cole o conteúdo do JSON e clique em **Importar Arquivos**:

   📄 [Coopers - Página Inicial (JSON)](https://github.com/user-attachments/files/20734482/acf-export-2025-06-14.json)

7. **Crie e Atribua a Página Inicial**
   Vá em `Páginas > Adicionar Nova`, crie uma nova página (ex: "Página Inicial Coopers") e selecione o modelo **Coopers Front Page** nos atributos da página. Publique-a.

8. **Defina a Página Inicial do Site**
   Vá em `Configurações > Leitura` e em "Sua página inicial exibe", selecione **Uma página estática**. Escolha a página criada como "Página inicial".

9. **Preencha os Campos ACF**
   Edite a página e preencha os campos personalizados de cada seção com os conteúdos desejados.

## 📝 Notas e Considerações

- **Formulário de Contato:** Controlado via JavaScript (`script.js`). Atualmente, não envia e-mails. Exibe uma mensagem de sucesso e limpa os campos. Para envio real, será necessário integrar um backend ou API de e-mail.
- **Paginação de Cards:** Feita com JavaScript puro e adaptável ao tamanho da tela. Não possui animações de transição.
- **Estilização:** Utiliza Tailwind CSS para todos os estilos. O `style.css` é mínimo.

## 📞 Contato

Para dúvidas ou mais informações, entre em contato:

- **Nome:** Winicius Neves  
- **Email:** [winiciusneves2004@hotmail.com](mailto:winiciusneves2004@hotmail.com)  
- **LinkedIn:** [linkedin.com/in/winicius-neves](https://www.linkedin.com/in/winicius-neves-4b9257268/)
