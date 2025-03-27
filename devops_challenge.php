<?php
/**
 * @package Devops_challenge_Junior
 * @version 1.0
 */
/*
Plugin Name: Devops Challenge Júnior
Plugin URI: https://apiki.com/
Description: Sabe de nada, inocente! Ordinária!!
Author: Apiki WordPress
Version: 1.0
*/

// 1. Inicialização da variável global
$global_lyrics = '';

function apiki_segura_o_tchan() {
    // 2. Uso correto da variável global
    global $global_lyrics;
    
    $global_lyrics = "Pau que nasce torto nunca se endireita
    Menina que requebra a mãe pega na cabeça
    Pau que nasce torto nunca se endireita
    Menina que requebra a mãe pega na cabeça
    Domingo ela não vai (vai, vai)
    Domingo ela não vai não (vai, vai, vai)
    Olha, domingo ela não vai (vai, vai)
    Domingo ela não vai não (vai, vai, vai)
    O pau que nasce torto nunca se endireita
    Menina que requebra a mãe pega na cabeça
    Pau que nasce torto nunca se endireita
    Menina que requebra a mãe pega na cabeça
    Segure o tchan
    Amarre o tchan
    Segure o tchan tchan tchan tchan
    Depois de nove meses você vê o resultado
    Esse é o Gera Samba arrebentando no pedaço
    Joga ela no meio, mete em cima, mete embaixo";

    // 4. Correção da falta de ponto e vírgula
    $lyrics = explode("\n", $global_lyrics);

    // 5. Correção na função mt_rand (invertendo parâmetros)
    return wptexturize($lyrics[mt_rand(0, count($lyrics) - 1)]);
}

function devops_challenge() {
    // 7. Correção de variável indefinida
    $chosen = apiki_segura_o_tchan();

    $lang = '';
    if ('en_' !== substr(get_user_locale(), 0, 3)) {
        $lang = ' lang="en"';
    }

    // 8. Ajuste da função printf para argumentos corretos
    printf(
        '<p %s>%s %s</p>',
        esc_attr($lang),
        esc_html__('Segure o Tchan, by Apiki WordPress:', 'devops_challenge_junior'),
        esc_html($chosen)
    );
}

// 6. Correção no hook com identificador correto
add_action('admin_notices', 'devops_challenge');

function devop_css() {
    // 10. Hook de CSS correto
    echo "<style>
    #devop {
        float: right;
        padding: 5px 10px;
        margin: 0;
        font-size: 12px;
        line-height: 1.6666;
    }
    .rtl #devop {
        float: left;
    }
    .block-editor-page #devop {
        display: none;
    }
    @media screen and (max-width: 782px) {
        #devop, .rtl #devop {
            float: none;
            padding-left: 0;
            padding-right: 0;
        }
    }
    </style>";
}

// 9. Aplicação do CSS diretamente ao painel
add_action('admin_head', 'devop_css');