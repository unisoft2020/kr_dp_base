<?php

// DO NOT EDIT THIS FILE

// TO ADD CUSTOM FONTS , SEE SRC/STYLES/FONTS.CSS.PHP INSTEAD

// TO NOT EDIT THIS FILE, IT WILL NOT WORK ON OUT CLIENT'S WEBSITE

if(!function_exists('base64_file')) {
  function base64_file($path, $type = 'ttf') {
    $data = file_get_contents($path);
    return 'data:font/' . $type . ';charset=utf-8;base64,' . base64_encode($data);
  }
}
?>
@font-face {
  font-family: 'Berthold Akzidenz Grotesk';
  src: url(<?= base64_file('common/fonts/AkzidenzGroteskBE-Cn.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Berthold Akzidenz Grotesk';
  src: url(<?= base64_file('common/fonts/AkzidenzGroteskBE-BoldCn.ttf') ?>) format('truetype');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'replica-mono';
  src: url(<?= base64_file('common/fonts/Replica-Mono.otf', 'opentype') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Roman.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Bold.ttf') ?>) format('truetype');
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Didot LT Std';
  src: url(<?= base64_file('common/fonts/DidotLTStd-Italic.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: italic;
}

@font-face {
  font-family: 'Computerfont';
  src: url(<?= base64_file('common/fonts/Computerfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

<?php foreach ([
  'BrandonText-Thin' =>           200,
  'BrandonText-Light' =>          300,
  'BrandonText-Regular' =>        400,
  'BrandonText-Medium' =>         500,
  'BrandonText-Bold' =>           600,
  'BrandonText-Black' =>          800,
] as $file => $weight): ?>
@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file("common/fonts/${file}.ttf") ?>) format('truetype');
  font-weight: <?= $weight ?>;
  font-style: normal;
}

@font-face {
  font-family: 'Brandon Text';
  src: url(<?= base64_file("common/fonts/${file}Italic.ttf") ?>) format('truetype');
  font-weight: <?= $weight ?>;
  font-style: italic;
}
<?php endforeach; ?>

@font-face {
  font-family: 'agBook';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_book-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'agBold';
  src: url(<?= base64_file('common/fonts/maje/AvantGarde-Bold.ttf') ?>) format('truetype'),
       url(<?= base64_file('common/fonts/maje/AvantGarde-Bold.woff') ?>) format('woff'),
       url(<?= base64_file('common/fonts/maje/AvantGarde-Bold.eot') ?>);
  font-weight: 700;
  font-style: normal;
}

@font-face {
  font-family: 'agDemi';
  src: url(<?= base64_file('common/fonts/maje/itc_avant_garde_gothic_demi-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'agMedium';
  src: url(<?= base64_file('common/fonts/itc_avant_garde_gothic_medium-webfont.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}

<?php if(KrConfig::CLIENT_MINELLI == KrConfig::$CLIENT): ?>
@font-face {
  font-family: 'icons-minelli';
  src: url(<?= base64_file('common/fonts/icons-minelli.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}
<?php endif; ?>

<?php if(KrConfig::CLIENT_MAJE == KrConfig::$CLIENT): ?>
@font-face {
  font-family: icomoon;
  src: url(<?= base64_file('common/fonts/icomoon10.ttf') ?>) format('truetype');
  font-weight: 400;
  font-style: normal;
  font-display: block;
}
<?php endif; ?>

<?php if(KrConfig::CLIENT_UNDIZ == KrConfig::$CLIENT): ?>
@font-face {
  font-family: icomoon;
  src: url(<?= base64_file('common/fonts/undiz-icomoon.ttf') ?>) format('truetype');
  font-weight: 400;
  font-style: normal;
  font-display: block;
}
<?php endif; ?>

<?php if(KrConfig::CLIENT_YSL_BEAUTY == KrConfig::$CLIENT): ?>
  <?php foreach([
    'AvantGardeGothicITCW01B 731063', // ITCAvantGarde-Bold
    'AvantGardeGothicITCW01B 731069',
    'ITCAvantGardeStd-Bk',
    'ITCAvantGardeStd-BkCn',
    'ITCAvantGardeStd-Demi',
    'ITCAvantGardeStd-DemiCn',
    'ITCAvantGardeW01-CnBk',
    'ITCAvantGardeW01-CnDm',
    'ITCAvantGardeW01-CnMd',
    'fontello',
  ] as $font_family): ?>
@font-face {
  font-family: '<?= $font_family ?>';
  src: url(<?= base64_file('common/fonts/' . str_replace(' ', '', $font_family) . '.ttf') ?>) format('truetype');
  font-weight: normal;
  font-style: normal;
}
<?php endforeach; ?>
<?php endif; ?>

<?php if(KrConfig::CLIENT_LANCOME == KrConfig::$CLIENT): ?>
@font-face {
  font-family: lnc-icons;
  src: url(<?= base64_file('common/fonts/lancome/lnc-icons.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/lnc-icons.woff2') ?>) format('woff2'),
    url(<?= base64_file('common/fonts/lancome/lnc-icons.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
  font-display: block;
}
@font-face {
  font-family: "Gotham Book";
  src: url(<?= base64_file('common/fonts/lancome/gothambook-webfont.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/gothambook-webfont.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Gotham Bold";
  src: url(<?= base64_file('common/fonts/lancome/gothambold-webfont.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/gothambold-webfont.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "Gotham Light";
  src: url(<?= base64_file('common/fonts/lancome/gothamlight-webfont.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/gothamlight-webfont.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: Gotham;
  src: url(<?= base64_file('common/fonts/lancome/MillerDisplay-RomanBETA.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/MillerDisplay-RomanBETA.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: "MillerDisplay Light";
  src: url(<?= base64_file('common/fonts/lancome/MillerDisplay-Light.ttf') ?>) format('truetype'),
    url(<?= base64_file('common/fonts/lancome/MillerDisplay-Light.woff') ?>) format('woff');
  font-weight: 400;
  font-style: normal;
}
<?php endif; ?>