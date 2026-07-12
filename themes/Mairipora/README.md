# Tema Mairiporã

Tema do Mapa Cultural de Mairiporã, filho do tema core `BaseV2`
(`\MapasCulturais\Themes\BaseV2\Theme`). Como é uma extensão do BaseV2,
qualquer asset (imagem/css) que não exista nesta pasta cai automaticamente
para o equivalente do BaseV2 - não há risco de quebrar o site enquanto os
ajustes são feitos aos poucos.

## Estrutura

- `Theme.php` - classe do tema. Carrega `assets/css/theme-Mairipora.css`
  por cima do CSS do BaseV2.
- `conf-base.php` - chaves de configuração de imagens (logo, capa da home,
  favicon, imagem de compartilhamento). Item comentado = ainda usando o
  padrão do BaseV2; descomente ao adicionar o arquivo correspondente em
  `assets/img/`.
- `assets/img/logo.png` - logo exibida no cabeçalho.
- `assets/img/home-header.jpg` - imagem de capa/banner da home.
- `assets/css/theme-Mairipora.css` - paleta de cores (CSS puro, sem build).

## Como ajustar aos poucos

**Trocar uma imagem:** substitua o arquivo em `assets/img/` mantendo o
mesmo nome (ou aponte `conf-base.php` para o novo nome).

**Adicionar favicon / imagem de compartilhamento:** salve os arquivos em
`assets/img/` e descomente as linhas correspondentes em `conf-base.php`.

**Trocar as imagens dos cards da home (Oportunidades/Eventos/Espaços/Agentes/
Projetos) e do banner "Faça seu cadastro":** essas não têm chave de config
neste tema - basta salvar o arquivo no mesmo caminho relativo usado pelo
BaseV2, dentro de `assets/img/` deste tema, que ele passa a ser usado
automaticamente (herança de assets, ver acima). Caminhos:

| Seção          | Caminho do arquivo                                |
|----------------|-----------------------------------------------------|
| Oportunidades  | `assets/img/home/home-entities/opportunities.jpg`   |
| Eventos        | `assets/img/home/home-entities/events.jpg`          |
| Espaços        | `assets/img/home/home-entities/spaces.jpg`          |
| Agentes        | `assets/img/home/home-entities/agents.jpg`          |
| Projetos       | `assets/img/home/home-entities/projects.jpg`        |
| Banner cadastro| `assets/img/home/home-register/background.jpg`      |

(A lista completa dessas chaves está documentada como referência em
`conf-base.php`, mas comentada - não é necessário editá-la.)

**Ajustar cores:** edite os valores em `assets/css/theme-Mairipora.css`.
Cada cor tem 3 tons: `-500` (cor base), `-300` (tom claro, usado em
hover/fundo) e `-700` (tom escuro, usado em texto/contraste). Depois de
editar, no ambiente de dev basta recarregar a página (não precisa rebuild).

**Nome/descrição do site:** ficam em
`docker/common/config.d/0.main.php` (`app.siteName` / `app.siteDescription`),
não neste tema.

Depois de qualquer alteração de arquivo/volume, reinicie o container de
dev (`dev/start.sh`) para os efeitos serem aplicados.
