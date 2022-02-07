<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Sinval Imóveis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="pt-br" />
    <meta property="og:site_name" content="" />
    <!-- <link rel="shortcut icon" href="dist/img/favicon.png" type="image/x-icon"> -->
    <meta name="theme-color" content="#825389" />
    <link rel="stylesheet" href="dist/css/style.css?v=20210520" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="preloader">
      <img
        src="dist/img/logotipo-cliente.png"
        alt="Logotipo"
        title="Logotipo"
        class="preloader_Image"
      />
    </div>
    <header class="Header">
      <div class="Header_Container">
        <div class="Header_Container_Logotipo">
          <img
            src="dist/img/logotipo-cliente.png"
            alt="Logotipo"
            title="Logotipo"
            loading="lazy"
          />
        </div>
        <nav class="Header_Container_Menu">
          <div class="Container_Menu_Icone">
            <div class="Menu_Icone_Row"></div>
            <div class="Menu_Icone_Row"></div>
            <div class="Menu_Icone_Row"></div>
          </div>
          <ul>
            <li><a href="#" target="_self">Início</a></li>
            <li><a href="#" target="_self">Quem Somos</a></li>
            <li><a href="#" target="_self">Empreendimentos</a></li>
            <li><a href="#" target="_self">Cases de Sucesso</a></li>
            <li><a href="#" target="_self">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="SuperBanner">
      <div class="SuperBanner_Container">
        <h1 class="SuperBanner_Container_Titulo">
          Segurança, conforto e qualidade
        </h1>
        <span class="SuperBanner_Container_Subtitulo">
          Essas são algumas das principais vantagens que você irá encontrar em
          nossos
          <span class="Container_Subtitulo_Destaque"
            >empreendimentos de luxo</span
          >, localizados nos melhores pontos do Rio de Janeiro e em todo o
          Brasil.
        </span>
        <button class="Container_Subtitulo_Button">
          Conhecer Empreendimentos
        </button>
      </div>
    </section>

    <div class="SegundoBloco">
      <div class="SegundoBloco_Container">
        <div class="SegundoBloco_QuemSomos">
          <div class="SegundoBloco_QuemSomos_Container">
            <div class="QuemSomos_Container_Titulo">Quem Somos</div>
            <div class="QuemSomos_Container_Texto">
              <p>
                A Sinval Imóveis é uma das mais tradicionais empresas do ramo
                imobiliário de luxo no Brasil, contando com mansões de alto
                nível nos melhores condomínios do Rio de Janeiro e Brasil.
              </p>

              <p>
                Temos em nosso portfólio parcerias com a grandes construtoras e
                investidores do mundo todo, com foco em garantir imóveis da mais
                alta qualidade à nossos clientes e parceiros. Clique aqui e fale
                agora mesmo conosco.
              </p>
            </div>
            <div class="QuemSomos_Container_Cards">
              <div class="Container_Cards_Item">
                <div class="Cards_Item_Icone"><i class="fas fa-award"></i></div>
                <div class="Cards_Item_Descricao">
                  Imóveis da
                  <span class="Item_Descricao_Destaque"
                    >mais alta qualidade</span
                  >.
                </div>
              </div>
              <div class="Container_Cards_Item">
                <div class="Cards_Item_Icone"><i class="fas fa-users"></i></div>
                <div class="Cards_Item_Descricao">
                  Equipe
                  <span class="Item_Descricao_Destaque"
                    >altamente qualificada</span
                  >.
                </div>
              </div>
              <div class="Container_Cards_Item">
                <div class="Cards_Item_Icone">
                  <i class="fas fa-building"></i>
                </div>
                <div class="Cards_Item_Descricao">
                  Empreendimentos nos
                  <span class="Item_Descricao_Destaque">melhores bairros</span>.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="SegundoBloco_Contato">
          <div class="SegundoBloco_Contato_Titulo">Cotação</div>
          <div class="SegundoBloco_Contato_Subtitulo">
            Preencha nosso formulário abaixo e nossa equipe entrará em contato.
          </div>
          <form class="SegundoBloco_Contato_Form">
            <div class="Contato_Form_Item">
              <label class="Form_Item_Label">Nome:</label>
              <input class="Form_Item_Input" placeholder="Seu nome"/ >
              <span class="Form_Item_Aviso">Preenchimento inválido.</span>
            </div>

            <div class="Contato_Form_Item">
              <label class="Form_Item_Label">Email:</label>
              <input class="Form_Item_Input" placeholder="seu@email.com.br"/ >
              <span class="Form_Item_Aviso">Preenchimento inválido.</span>
            </div>

            <div class="Contato_Form_Item">
              <label class="Form_Item_Label">Telefone:</label>
              <input class="Form_Item_Input" type="phone" placeholder="+55 21
              96969-6969"/ >
              <span class="Form_Item_Aviso">Preenchimento inválido.</span>
            </div>

            <button class="Contato_Form_Button">Enviar mensagem</button>
          </form>
        </div>
      </div>
    </div>

    <section class="NossosEmpreendimentos">
      <div class="NossosEmpreendimentos_Container">
        <div class="NossosEmpreendimentos_Container_Titulo">
          Nossos Empreendimentos
        </div>
        <div class="NossosEmpreendimentos_Container_Cards">
          <div
            class="Container_Cards_Item"
            style="
              background-image: url(dist/img/modern-house-with-garden-swimming-pool-and-wooden-2021-08-26-18-24-29-utc.jpg);
            "
          >
            <div class="Cards_Item_Content">
              <div class="Item_Content_Label">Barra da Tijuca</div>
              <div class="Item_Content_Principal">R$4.000,00</div>
            </div>
          </div>
          <div
            class="Container_Cards_Item"
            style="
              background-image: url(dist/img/modern-house-with-garden-swimming-pool-and-wooden-2021-08-26-18-24-30-utc.jpg);
            "
          >
            <div class="Cards_Item_Content">
              <div class="Item_Content_Label">Barra da Tijuca</div>
              <div class="Item_Content_Principal">R$4.000,00</div>
            </div>
          </div>
          <div
            class="Container_Cards_Item"
            style="
              background-image: url('dist/img/modern-kitchen-in-luxury-mansion-2021-08-26-15-50-23-utc.jpg');
            "
          >
            <div class="Cards_Item_Content">
              <div class="Item_Content_Label">Barra da Tijuca</div>
              <div class="Item_Content_Principal">R$4.000,00</div>
            </div>
          </div>
          <div
            class="Container_Cards_Item"
            style="
              background-image: url('dist/img/modern-kitchen-in-luxury-mansion-2021-08-26-15-50-23-utc.jpg');
            "
          >
            <div class="Cards_Item_Content">
              <div class="Item_Content_Label">Barra da Tijuca</div>
              <div class="Item_Content_Principal">R$4.000,00</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="CasesSucesso">
      <div class="CasesSucesso_Container">
        <div class="CasesSucesso_Container_Titulo">Cases de Sucesso</div>
        <div class="CasesSucesso_Container_CasesBox">
          <div class="Container_CasesBox_Item">
            <div class="CasesBox_Item_Titulo">PS Design e Desenvolvimento</div>
            <div class="CasesBox_Item_Texto">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                quis augue ut lacus maximus pretium. Nulla quis tempus urna.
                Mauris in dui lacus. Fusce sit amet tellus justo. Nam non ante
                non nulla vulputate mollis in quis nisl. Nullam in tortor at
                libero laoreet volutpat a et sapien.
              </p>

              <p>
                Fusce venenatis condimentum hendrerit. Nam orci augue, faucibus
                vel vehicula quis, porta imperdiet neque. Integer eget facilisis
                nisi, vel pellentesque enim.
              </p>
            </div>
            <div class="CasesBox_Item_Button">
              <button class="Item_Button_ItemBTN">
                Conhecer empreendimento
              </button>
            </div>
          </div>
          <div class="Container_CasesBox_Item">
            <div class="CasesBox_Item_Titulo">PS Design e Desenvolvimento</div>
            <div class="CasesBox_Item_Texto">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                quis augue ut lacus maximus pretium. Nulla quis tempus urna.
                Mauris in dui lacus. Fusce sit amet tellus justo. Nam non ante
                non nulla vulputate mollis in quis nisl. Nullam in tortor at
                libero laoreet volutpat a et sapien.
              </p>

              <p>
                Fusce venenatis condimentum hendrerit. Nam orci augue, faucibus
                vel vehicula quis, porta imperdiet neque. Integer eget facilisis
                nisi, vel pellentesque enim.
              </p>
            </div>
            <div class="CasesBox_Item_Button">
              <button class="Item_Button_ItemBTN">
                Conhecer empreendimento
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <link
      href="lib/fontawesome-free-5.9.0-web/css/all.min.css"
      rel="stylesheet"
    />
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/app.js?v=8"></script>
  </body>
</html>
