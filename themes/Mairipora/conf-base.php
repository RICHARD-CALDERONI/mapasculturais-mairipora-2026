<?php

return [
    /* ===== LOGO =====
     * assets/img/logo.png deste tema - já contém o texto "Mapa Cultural de Mairiporã",
     * por isso o label textual padrão (logo.title/subtitle) fica oculto.
     */
    'logo.image' => env('LOGO_IMAGE', 'img/logo.png'),
    'logo.hideLabel' => env('LOGO_HIDELABEL', true),

    /* ===== CAPA/BANNER DA HOME =====
     * assets/img/home-header.jpg deste tema
     */
    'homeHeader.background' => env('HOME_HEADER_BACKGROUND', 'img/home-header.jpg'),

    /* Banners adicionais exibidos ao lado do texto de boas-vindas na home (opcional).
     * Descomente e aponte para um arquivo em assets/img/ quando tiver a imagem pronta.
     */
    // 'homeHeader.banner'       => env('HOME_HEADER_BANNER', 'img/banner-1.jpg'),
    // 'homeHeader.bannerLink'   => env('HOME_HEADER_LINK', ''),
    // 'homeHeader.secondBanner' => env('HOME_HEADER_SECOND_BANNER', 'img/banner-2.jpg'),
    // 'homeHeader.thirdBanner'  => env('HOME_HEADER_THIRD_BANNER', 'img/banner-3.jpg'),

    /* ===== FAVICON =====
     * Enquanto não forem definidos, o favicon padrão do BaseV2 continua sendo usado
     * (o tema herda os assets do tema pai automaticamente). Para customizar, gere os
     * tamanhos abaixo, salve em assets/img/ e descomente:
     */
    // 'favicon.ico' => env('FAVICON_IMAGE_ICO', 'img/favicon.ico'),
    // 'favicon.svg' => env('FAVICON_IMAGE_SVG', 'img/favicon.svg'),
    // 'favicon.180' => env('FAVICON_IMAGE_180', 'img/favicon-180x180.png'),
    // 'favicon.192' => env('FAVICON_IMAGE_192', 'img/favicon-192x192.png'),
    // 'favicon.512' => env('FAVICON_IMAGE_512', 'img/favicon-512x512.png'),

    /* ===== IMAGEM DE COMPARTILHAMENTO (OG/redes sociais) =====
     * Exibida ao compartilhar o link do site no WhatsApp/Facebook/Twitter.
     * Recomendado 1200x630px. Descomente quando tiver a imagem pronta:
     */
    // 'share.image'         => env('SHARE_IMAGE', 'img/share.png'),
    // 'share.image_twitter' => env('SHARE_IMAGE_TWITTER', 'img/share.png'),

    /* ===== IMAGENS DOS CARDS DA HOME (Oportunidades/Eventos/Espaços/Agentes/Projetos)
     * E DO BANNER "FAÇA SEU CADASTRO" =====
     *
     * Estas imagens NÃO precisam de nenhuma chave de configuração aqui: elas usam
     * os mesmos caminhos relativos do tema BaseV2, e como este tema herda os assets
     * do BaseV2 (ver README.md), basta salvar o arquivo no mesmo caminho dentro de
     * assets/img/ deste tema que ele passa a ser usado automaticamente no lugar do
     * padrão. Caminhos (relativos a assets/img/):
     *
     *   home/home-entities/opportunities.jpg  -> card "Oportunidades"
     *   home/home-entities/events.jpg         -> card "Eventos"
     *   home/home-entities/spaces.jpg         -> card "Espaços"
     *   home/home-entities/agents.jpg         -> card "Agentes"
     *   home/home-entities/projects.jpg       -> card "Projetos"
     *   home/home-register/background.jpg     -> banner "Faça seu cadastro"
     */
];
