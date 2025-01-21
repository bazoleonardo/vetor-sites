<?php
// Extrair o nome do vendedor do parâmetro de consulta na URL
$nome_vendedor = isset($_GET['vendedor']) ? $_GET['vendedor'] : '';

// Array associativo contendo os dados dos vendedores
$vendedores = array(
    'leilakeller' => array(
        'nome'     => 'Leila Keller',
        'cargo'    => 'Executiva de vendas',
        'foto'     => 'img/leila.jpg',
        'telefone' => '41988346003',
        'celular'  => '41988346003',
        'whatsapp' => '5541988346003',
        'email'    => 'leila@vetorsistemas.com.br',
        'sobre'    => 'Consultora de vendas com experiência em atendimento ao cliente e fechamento de negócios.'
    ),
    'toninho' => array(
        'nome'     => 'Toninho',
        'cargo'    => 'Executivo de vendas',
        'foto'     => 'img/toninho.jpg',
        'telefone' => '42988741571',
        'celular'  => '42988741571',
        'whatsapp' => '5542988741571',
        'email'    => 'cleudemirantonio@gmail.com',
        'sobre'    => 'Consultor de vendas com experiência em atendimento ao cliente e fechamento de negócios.'
    ),
    'eversonstaichaka' => array(
        'nome'     => 'Everson Staichaka',
        'cargo'    => 'Executivo de vendas',
        'foto'     => 'img/everson.jpg',
        'telefone' => '42999380575',
        'celular'  => '42999380575',
        'whatsapp' => '5542999380575',
        'email'    => 'everson.staichaka@vetorsistemas.com.br',
        'sobre'    => 'Consultor de vendas com experiência em atendimento ao cliente e fechamento de negócios.'
    ),
    'cilenevendramini' => array(
        'nome'     => 'Cilene Vendramini',
        'cargo'    => 'Executiva de vendas',
        'foto'     => 'img/cilene.jpg',
        'telefone' => '41988354298',
        'celular'  => '41988354298',
        'whatsapp' => '5541988354298',
        'email'    => 'cilene.vendramini@vetorsistemas.com.br',
        'sobre'    => 'Consultora de vendas com experiência em atendimento ao cliente e fechamento de negócios.'
    ),
    'joelpadilha' => array(
        'nome'     => 'Joel Padilha',
        'cargo'    => 'Diretor Comercial',
        'foto'     => 'img/joel.jpg',
        'telefone' => '41988358910',
        'celular'  => '41988358910',
        'whatsapp' => '5541988358910',
        'email'    => 'joel.padilha@vetorsistemas.com.br',
        'sobre'    => 'Diretor comercial com vasta experiência em gestão de vendas e estratégias de mercado.'
    )
);

// Verificar se o nome do vendedor fornecido na URI existe no array de vendedores
if (array_key_exists($nome_vendedor, $vendedores)) {
    // Extrair os dados do vendedor
    $vendedor = $vendedores[$nome_vendedor];
    // Exibir os dados do vendedor
    $nome      = $vendedor['nome'];
    $cargo     = $vendedor['cargo'];
    $foto      = $vendedor['foto'];
    $telefone  = $vendedor['telefone'];
    $celular   = $vendedor['celular'];
    $whatsapp  = $vendedor['whatsapp'];
    $email     = $vendedor['email'];
    $sobre     = $vendedor['sobre'];
}

   // Estes dados são fixos
   $endereco  = 'AV. Gov. Ney Braga, 15338 | Curitiba - PR';
   $facebook  = 'https://www.facebook.com/vetorsistemas';
   $instagram = 'https://www.instagram.com/vetorsistemas';
   $linkedin  = 'https://www.linkedin.com/company/vetor-sistemas';
   $youtube   = 'https://youtu.be/4IsTBG_hQWE?si=DovGEduXkpHo77_M';
   $tiktok    = 'https://www.tiktok.com/@vetorsistemas3';
   $site      = 'https://vetorsistemas.com.br';
   $link      = 'http://mitryusweb.com.br/contato/leilakeller';

    // Função para codificar uma imagem JPEG em base64
    function encodeImageToBase64($filename) {
        // Verificar se o arquivo existe
        if (file_exists($filename)) {
            // Ler o conteúdo do arquivo
            $fileContents = file_get_contents($filename);
            // Codificar o conteúdo em base64
            $base64 = base64_encode($fileContents);
            // Formatar a string para o vCard
            return "PHOTO;ENCODING=BASE64;JPEG:" . $base64;
        } else {
            return '';
        }
    }

//print_r($nome_vendedor); exit();

?>
<!DOCTYPE html>
<html translate="no" lang="pt-br">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="icon.ico" rel="shortcut icon" type="image/ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css?v=2" />
  <link rel="stylesheet" type="text/css" href="css/feather.css">

  <link href="css/fontawesome.css" rel="stylesheet">
  <link href="css/brands.css" rel="stylesheet">
  <link href="css/solid.css" rel="stylesheet">

  <meta name="theme-color" content="#000000">
  <title><?php echo $nome;?> | Vetor Sistemas</title>
  <meta name="robots" content="noindex">
  <meta name="theme-color" content="#f28900">
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $site;?>">
  <meta property="og:image" content="img/logo_vetor.jpeg">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <script>
      // Verificar se é um dispositivo móvel
      function isMobileDevice() {
          return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      }

      // Verificar se é um dispositivo desktop
      function isDesktopDevice() {
          return !isMobileDevice();
      }
  </script>

  <style>
    @font-face {
      font-family: HUM521N;
      src: url('fonts/HUM521N.TTF') format('truetype');
    }

    body {
      font-family: HUM521N, Arial, sans-serif;
    }

    span {
      font-family: HUM521N, Arial, sans-serif;
    }
  </style>
</head>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/packed.js"></script>
<script type="text/javascript" src="js/mask.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

<div>
  <div class="bottom-sheet" >
    <div style="margin:auto;max-width:450px">
      <div class="bt-back" style="display: inline-block;margin-bottom: 10px;">
        <i class="las la-arrow-left"></i>
      </div>
      <br>Qual número você deseja ligar?<br><br>
      <div class="row" style="align-items:center;">
        <a rel="nofollow" href="tel:<?php echo $telefone;?>" class="link-profile noselect" style="background:#f28900">
          <i class="las la-mobile"></i>
          <span>
        <small>Celular:<br></small>
          <?php echo $celular;?>
        </span></a>
      </div>
      <div class="row" style="align-items:center;">
        <a rel="nofollow" href="tel:<?php echo $telefone;?>" class="link-profile noselect" style="background:#f28900">
          <i class="las la-phone"></i>
          <span>
        <small>Fixo:<br></small></span></a>
      </div>
    </div>
  </div>
  <div class="overlay"></div>

  <div style="height:140px;background:#05509D;width:100%;"></div>

  <div class="avatar" style="background: url('<?php echo $foto;?>') center no-repeat;background-size: cover;margin:auto;margin-top: -80px;position: relative;"></div>

  <div class="share-main-body" style="background:#fff;padding:20px;display: none;border-radius:20px;margin-top: -60px;">
    <div class="bt-back">
      <i class="las la-arrow-left icon-color"></i>
    </div><br>
    Digite o código do país (55 para Brasil) + DDD do estado +  Número do WhatsApp para enviar seu cartão de visita:
    <div class="item-edit" style="border:0;margin-top: 0;padding-top:10px">
      <div>
        <div class="row" style="margin-top: 5px;">
          <input value="" style="padding:10px;margin-bottom:10px;font-size: 22px; font-weight:bold;" inputmode="numeric" id="share-number" placeholder="55 (__) ____-____" />
        </div>
      </div>
    </div>
    <button class="apply apply-share" style="justify-content:center">Enviar Cartão  &nbsp;<i class="las la-arrow-right"></i></button>
    <div style="text-align:center;padding:10px">ou</div>
    <div style="cursor:pointer;border:2px solid rgba(32, 121, 255);color:rgba(32, 121, 255);text-decoration:none;padding:15px; border-radius:7px;margin: auto;display:block;margin-top: 0px;text-align: center;" onclick="share()">
      <i class="las la-user"></i> Selecionar Contato</div>
  </div>
</div>

<div class="profile-main-body false" style="">

  <div style="text-align:left;color:#262626;text-align: center;padding:80px 20px 10px 20px;box-sizing: border-box;">
    <span class="false" style="display: inline-block; font-size:23px;line-height:28px"><?php echo $nome;?> </span>
    <br>
    <div style="font-size:17px;color:#999;line-height:22px;margin-top:5px;"><?php echo $cargo;?></div>
  </div>

  <div style="padding-bottom:0px;display:flex;flex-direction:row;align-items:center;justify-content: space-evenly;margin-top:10px;margin-bottom: 20px;">

    <div style="min-width: 92px;" class="item-social noselect save-vcard false" onClick="qrcode()">
      <i class="las la-qrcode icon-color"></i> <br>
      Modo Offline
    </div>

    <div>
        <button id="bt-vcard" type="button" class="bt-vcard noselect" style="background: #0779EB;">
            <span style="color:#ffffff;">Salvar no Telefone</span>
        </button>
    </div>

    <div style="min-width: 92px;" class="item-social noselect false" data-share="share">
      <i class="las la-share icon-color"></i> <br>
      <span>Enviar Cartão</span>
    </div>

  </div>

  <div style="display: none" id="show-qr">
    <div class="wrapper-slider" style="text-align:center">

      <div class="element-slider" style="display:none">
        <div class="qrcode-container" style="text-align: center;border:1px solid #e5e5e5;margin:0px;border-radius:10px;padding:20px;border:3px solid #0779EB;">
          <b>QRCODE Online</b>
          <div style="text-align: center;padding:0 20px">
            <p>Acesse para ir ao perfil online.</p>
          </div>
          <div id="qrcode-2" class="qr-code-generetor" style="margin:auto;border:12px solid #fff"></div>
        </div>
      </div>

      <div class="element-slider">
        <div class="qrcode-container" style="text-align: center;border:1px solid #e5e5e5;margin:0px;border-radius:10px;padding:20px;border:3px solid #0779EB;">
          <b>Modo Offline</b>

          <p>Acesse para salvar diretamente na agenda.</p>

          <div style="text-align: center;display: flex;flex-direction:column;padding: 0px;">
            <div id="qrcode" class="qr-code-generetor" style="margin:auto;border:12px solid #fff"></div><br>
          </div>

        </div>
      </div>

    </div>
    <p style="text-align: center;display:none">Arraste para o lado <i class="la la-arrow-right" style="font-size: 22px"></i></p>
  </div>

  <div class="profile-icons-row false" style="margin-bottom: 10px;">

    <a rel="nofollow" href="#" class="item-social noselect false" onClick="tel()">
      <i class="las la-mobile icon-color" style="font-size: 40px;"></i><br>
      Ligar
    </a>

    <a rel="nofollow" href="#" class="item-social noselect false" onClick="mail()">
      <i class="las la-envelope icon-color" style="font-size: 40px;"></i><br>
      Email
    </a>

    <a rel="nofollow" href="#" class="item-social noselect false" onClick="openwhatsapp()">
      <i class="lab la-whatsapp icon-color" style="font-size: 40px;"></i><br>
      WhatsApp
    </a>

    <a rel="nofollow" href="https://www.google.com/maps/place/Vetor+Sistemas/@-25.4909659,-49.2723017,15z/data=!4m6!3m5!1s0x94dce37550c67589:0xe2d4de8a0e4f2757!8m2!3d-25.4909659!4d-49.2723017!16s%2Fg%2F1jkxj19fq?entry=ttu" style="text-decoration:none" class="item-social noselect false">
      <i class="las la-map-marked icon-color" style="font-size: 40px;"></i><br>
      Mapa
    </a>

  </div>

  <div style="font-size:1px; opacity: 0;" id="copy-link"><?php echo $site;?></div>

  <div style="padding:20px;padding-top:0;max-width:400px;margin:auto;text-align:center">

    <div id="profileDescription" style="display:block; padding: 20px; font-family: HUM521N, Arial, sans-serif;">
        <?php echo $sobre;?>
    </div>
    <div style="flex:1;flex-direction:column;">
      <div style="margin-top:10px"></div>
      <div id="sort">
        <div class="row" style="align-items:center; display: none;">
          <a rel="nofollow" class="link-profile pix" style="padding:11px 15px;background:#0779EB">
            <i class="las la-bolt"></i>
            <div style="overflow: hidden; text-overflow: ellipsis;">
              <span>Conectar-se</span><br>
              <small style="font-size: 12px;" >Envie seus contatos para minha agenda</small>
            </div>
          </a>
        </div>

        <div class="modal modal-texto" style="padding: 0;">
          <div class="false" style="padding:25px">
            <div style="text-align: center;margin-bottom:12px">
              <b id="cont-texto-titulo"></b></div>
            <div id="cont-texto"></div>
            <br>
            <div rel="nofollow" class="link-profile noselect closeModal" style="margin-bottom:0;background:#0779EB">
              <i class="las la-times"></i>
              Fechar</div>
          </div>
        </div>

        <div class="row" style="align-items:center;">

          <a rel="nofollow" target="_blank" href="<?php echo $site;?>" class="link-profile noselect" style="background:#0779EB">
            <i class="las la-external-link-square-alt" style="color:#ffffff;"></i>
            <span style="color:#ffffff;">Vetor Sistemas</span>
          </a>

        </div>

        <div class="row" style="align-items:center;">

          <a rel="nofollow" target="_blank" href="tel://<?php echo $telefone;?>" class="link-profile noselect" style="background:#0779EB">
            <i class="las la-phone" style="color:#ffffff;"></i>
            <span style="color:#ffffff;">Contato</span>
          </a>

        </div>


        <div class="row" style="align-items:center;">

          <a rel="nofollow" target="_blank" href="https://wa.me/<?php echo $whatsapp;?>" class="link-profile noselect" style="background:#0779EB">
            <i class="lab la-whatsapp" style="color:#ffffff;"></i>
            <span style="color:#ffffff;">Whatsapp</span>
          </a>

        </div>

        <div class="row" style="align-items:center;">

          <a rel="nofollow" target="_blank" href="mailto:<?php echo $email;?>" class="link-profile noselect" style="background:#0779EB">
            <i class="las la-envelope" style="color:#ffffff;"></i>
            <span style="color:#ffffff;">E-mail</span>
          </a>

        </div>

      </div>
    </div>
  </div>
</div>

<br><br><br><br><br>

</div>
</div>
</div>

<script src="js/clipboard.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/qrjs2.min.js"></script>

<script>

    // Dados do vendedor
    let nome       = "<?php echo $nome; ?>";
    let cargo      = "<?php echo $cargo; ?>";
    let telefone   = "<?php echo $telefone; ?>";
    let celular    = "<?php echo $celular; ?>";
    let whatsapp   = "<?php echo $whatsapp; ?>";
    let email      = "<?php echo $email; ?>";
    let sobre      = "<?php echo $sobre; ?>";
    let endereco   = "<?php echo $endereco; ?>";
    let site       = "<?php echo $site; ?>";
    let fotoBase64 = "<?php echo encodeImageToBase64($foto); ?>";

    // Função para gerar vCard
    function generateVCard() {
        var vcardContent = "BEGIN:VCARD\n";
        vcardContent += "VERSION:3.0\n";
        vcardContent += "FN:" + nome + "\n";
        vcardContent += "ORG:" + cargo + "\n";
        vcardContent += "item1.EMAIL;type=Email;type=work,pref:" + email + "\n";
        vcardContent += "item1.X-ABLabel:Email \n";
        vcardContent += "item2.TEL;TYPE=work,pref:" + whatsapp + "\n";
        vcardContent += "item2.X-ABLabel:Whatsapp \n";
        vcardContent += "item6.TEL;TYPE=CELL:" + celular + "\n";
        vcardContent += "item6.X-ABLabel:Celular \n";
        vcardContent += "Contato.X-ABLabel:Contato \n";
        vcardContent += "Whatsapp.X-ABLabel:Whatsapp \n";
        vcardContent += "item4.ADR;TYPE=work:;;" + endereco + "\n";
        vcardContent += "item4.X-ABLabel:Endereço \n";
        vcardContent += "URL;WORK:" + site + "\n";
        vcardContent += "NOTE:" + sobre + "\n";
        vcardContent += fotoBase64 + "\n"; // Adiciona a imagem codificada em base64
        vcardContent += "END:VCARD";

        return vcardContent;
    }

    // Função para baixar vCard
    function downloadVCard() {
        var vcardData = generateVCard();
        var blob = new Blob([vcardData], {type: "text/vcard"});
        var url = window.URL.createObjectURL(blob);

        var downloadLink = document.createElement("a");
        downloadLink.href = url;
        downloadLink.download = nome + ".vcf";
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
        window.URL.revokeObjectURL(url);
    }

    function qrcode() {
        $('#show-qr').toggle();
        if($('#qrcode').html() == "") {

            let div = document.getElementById("qrcode");
            let div2 = document.getElementById("qrcode-2");
            let text2 = '<?php echo $link;?>';

            let text = "BEGIN:VCARD\n";
            text += "VERSION:3.0\n";
            text += "FN:" + nome + "\n";
            text += "ORG:" + cargo + "\n";
            text += "EMAIL;type=Email;type=work,pref:" + email + "\n";
            text += "TEL;TYPE=work,pref:" + whatsapp + "\n";
            text += "TEL;TYPE=CELL:" + celular + "\n";
            text += "ADR;TYPE=work:;;" + endereco + "\n";
            text += "URL;WORK:" + site + "\n";
            text += "NOTE:" + sobre + "\n";
            text += "END:VCARD";

            console.log(text);

            let qr = QRCode.generateSVG(text, {
                ecclevel: "M",
                fillcolor: "#FFF",
                textcolor: "#000",
                margin: 2,
                modulesize: 8
            });
            div.appendChild(qr);

            let qr2 = QRCode.generateSVG(text2, {
                ecclevel: "M",
                fillcolor: "#FFF",
                textcolor: "#000",
                margin: 2,
                modulesize: 8
            });
            div2.appendChild(qr2);

        }
    }

  function tel() {
    location.href='tel:<?php echo $telefone;?>';
  }

  function mail() {
    location.href='mailto:<?php echo $email;?>';
  }

    function openwhatsapp() {
        if (isMobileDevice()) {
            console.log("Está acessando de um dispositivo móvel.");
            location.href = 'whatsapp://send?phone=<?php echo $whatsapp;?>&text=';
        } else if (isDesktopDevice()) {
            console.log("Está acessando de um dispositivo desktop.");
            location.href = 'https://api.whatsapp.com/send?phone=<?php echo $whatsapp;?>&text=';
        }
    }

  function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  var clipboard = new ClipboardJS('.copy');

  clipboard.on('success', function(e) {
    $('#link-copy-text').html('Link Copiado!');
    alert('Link copiado! \nAcesse seu perfil do Instagram, clique em Editar Perfil e cole este link para criar sua árvore de links.');
  });

  function share() {
    //$('.overlay, .bottom-sheet').show();
    if(false) {
      location.href = 'whatsapp://send?phone&text=Este é o meu Cartão de Visita Digital <?php echo $link;?>';
    } else {
      location.href = 'https://api.whatsapp.com/send?phone&text=Este é o meu Cartão de Visita Digital <?php echo $link;?>';
    }
  }

  function share_number(phone) {
    phone = phone.replace(/\D/g, '')
    if(false) {
      location.href = 'whatsapp://send?phone='+ phone +'&text=Este é o meu Cartão de Visita Digital <?php echo $link;?>';
    } else {
      location.href = 'https://api.whatsapp.com/send?phone='+ phone +'&text=Este é o meu Cartão de Visita Digital <?php echo $link;?>';
    }
  }

  $('.link-texto').on('click',function() {
    $('.overlay, .modal-texto').show();
    $('#cont-texto').html($(this).attr('data-texto'));
    $('#cont-texto-titulo').html($(this).attr('data-texto-titulo'));
  })

  $('.closeModal').on('click',function() {
    $('.overlay, .modal-texto').hide();
  })

  $('.bt-back').on('click',function() {
    $('.overlay, .bottom-sheet, .share-main-body').hide();
    $('.profile-main-body').show();
  });

  $('input').on('keyup',function() {
    $(this).removeClass('input_error');
  })

  $('.bt-back').on('click',function() {
    $('.overlay, .bottom-sheet, .share-main-body').hide();
    $('.profile-main-body').show();
  });

  $('.apply-share').on('click',function() {
    if($('#share-number').val().length > 0) {
      share_number( $('#share-number').val() );
    } else {
      share();
    }
  });

  var color1 = tinycolor("#f28900");
  if(color1.isLight()) {
    $('.bt-vcard, .link-profile, .sidebar-profile, #share-main-body').css('color','#000');
  };

  $('[data-share]').on('click',function() {
    $('.profile-main-body').hide();
    $('.share-main-body').show();
    $('#share-number').focus();
  })

    // Evento de clique no botão de download
    document.getElementById("bt-vcard").addEventListener("click", function() {
        downloadVCard();
    });
</script>

<script>
  $( document ).ready(function() {
      $('.menu-bars').on('click',function() {
          $('.nav-menu').toggle();
      });
  });
</script>

</html>
