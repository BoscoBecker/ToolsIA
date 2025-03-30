<?php
$translations = [
    'pt' => [
        'search_placeholder' => 'Pesquisar ferramentas...',
        'hero_title' => 'Ferramentas de IA',
        'hero_subtitle' => 'Explore as melhores ferramentas de inteligência artificial',
        'section_titles' => [
            'chats-assistentes' => 'Chats e Assistentes Virtuais',
            'geracao-imagens' => 'Geração de Imagens e Arte',
            'analise-dados' => 'Análise de Dados',
            'audio-voz' => 'Áudio e Voz',
            'gerenciamento-texto' => 'Gerenciamento e Análise de Texto',
            'design-imagens' => 'Design e Edição de Imagens',
            'seguranca-privacidade' => 'Segurança e Privacidade',
            'ia-codigo' => 'IA para Código e Desenvolvimento',
            'pesquisa-aprendizado' => 'Pesquisa e Aprendizado de Máquina'
        ],
        'access_site' => 'Acessar Site',
        'description' => 'Descrição:',
        'back_to_top' => 'Voltar ao topo'
    ],
    'en' => [
        'search_placeholder' => 'Search tools...',
        'hero_title' => 'AI Tools',
        'hero_subtitle' => 'Explore the best artificial intelligence tools',
        'section_titles' => [
            'chats-assistentes' => 'Chats & Virtual Assistants',
            'geracao-imagens' => 'Image Generation & Art',
            'analise-dados' => 'Data Analysis',
            'audio-voz' => 'Audio & Voice',
            'gerenciamento-texto' => 'Text Management & Analysis',
            'design-imagens' => 'Design & Image Editing',
            'seguranca-privacidade' => 'Security & Privacy',
            'ia-codigo' => 'AI for Code & Development',
            'pesquisa-aprendizado' => 'Research & Machine Learning'
        ],
        'access_site' => 'Access Site',
        'description' => 'Description:',
        'back_to_top' => 'Back to top'
    ]
];

// Default language
$lang = 'pt';

// Check if language is set in session or cookie
session_start();
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'] == 'en' ? 'en' : 'pt';
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}

// Set cookie for language preference 30 days
setcookie('lang', $lang, time() + (86400 * 30), "/"); ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferramentas de IA - Coleção Completa de Recursos de Inteligência Artificial | AI Tools Collection</title>
    <!-- Meta tags para SEO (Português) -->
    <meta name="description" content="Explore nossa coleção completa das melhores ferramentas de Inteligência Artificial para aumentar sua produtividade. Chatbots, geração de imagens, análise de dados e muito mais.">
    <meta name="keywords" content="ferramentas de IA, inteligência artificial, ChatGPT, Midjourney, geração de imagens IA, assistentes virtuais, IA para código, análise de dados, IA para texto, IA para áudio, segurança com IA">
    <!-- Meta tags for SEO (English) -->
    <meta name="description" lang="en" content="Explore our complete collection of the best Artificial Intelligence tools to boost your productivity. Chatbots, image generation, data analysis and much more.">
    <meta name="keywords" lang="en" content="AI tools, artificial intelligence, ChatGPT, Midjourney, AI image generation, virtual assistants, AI for coding, data analysis, AI for text, AI for audio, AI security">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://toolsia.boscobecker.fun//">
    <meta property="og:title" content="Ferramentas de IA - Coleção Completa de Recursos | AI Tools Collection">
    <meta property="og:description" content="Explore nossa coleção completa das melhores ferramentas de Inteligência Artificial para aumentar sua produtividade. | Explore our complete collection of the best AI tools.">
    <meta property="og:image" content="https://toolsia.boscobecker.fun//assets/og-image.jpg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://toolsia.boscobecker.fun//">
    <meta property="twitter:title" content="Ferramentas de IA - Coleção Completa | AI Tools Collection">
    <meta property="twitter:description" content="Explore nossa coleção das melhores ferramentas de IA | Explore our collection of the best AI tools">
    <meta property="twitter:image" content="https://toolsia.boscobecker.fun//assets/og-image.jpg">
    <!-- Metadados adicionais / Additional metadata -->
    <meta name="author" content="ToolsIA">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Portuguese, English">
    <meta name="revisit-after" content="7 days">
    <meta name="generator" content="ToolsIA Platform">    
    <!-- Alternate language versions -->
    <link rel="alternate" hreflang="pt-BR" href="https://toolsia.boscobecker.fun/">
    <link rel="alternate" hreflang="en" href="https://toolsia.boscobecker.fun/en/">
    <link rel="alternate" hreflang="x-default" href="https://toolsia.boscobecker.fun//">
    <link rel="stylesheet" href="css/layout.css">
    <script src="js/site.js"></script>
    <!-- Canonical URL -->
    <link rel="canonical" href="https://toolsia.boscobecker.fun/">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XC3CKG88PQ"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1221014883643198" crossorigin="anonymous"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XC3CKG88PQ');
    </script>    
</head>
<body> 
    <div class="hero-card">
        <br>
            <div class="tool-icon-wrapper">
            <img src="assets/chatgpt.png" alt="ChatGPT" class="tool-icon">
                <img src="assets/copilot.png" alt="GitHub Copilot" class="tool-icon">
                <img src="assets/deepseek.png" alt="DeepSeek" class="tool-icon">
            </div>       
            <br>
            <div class="language-toggle">
                <button id="langToggle" class="lang-btn" aria-label="Toggle Language">
                    <span class="lang-text"><?php echo $lang === 'pt' ? 'EN' : 'PT'; ?></span>
                </button>
            </div>
            <div class="export-toggle">
                <button id="exportExcel" class="export-btn" aria-label="Export to Excel">
                    <span class="export-text"><?php echo $translations[$lang]['export_excel'] ?? 'Export Excel'; ?></span>
                </button>
            </div>
            <div class="hero-content">
                <h1><?php echo $translations[$lang]['hero_title']; ?></h1>
                <p><?php echo $translations[$lang]['hero_subtitle']; ?></p>
                <div class="search-wrapper">
                    <label class="search-label"></label>
                    <button class="clear-search" id="clearSearch">✕</button>
                    <input type="text" id="searchTools" placeholder="<?php echo $translations[$lang]['search_placeholder']; ?>">
                </div>
            </div>
        </div>
        <div class="section" id="chats-assistentes">
            <h2><?php echo $translations[$lang]['section_titles']['chats-assistentes']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>ChatGPT</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Desenvolvido pela OpenAI, o ChatGPT é um modelo de linguagem avançado capaz de gerar textos coerentes e interagir de forma natural em conversas.' : 'Developed by OpenAI, ChatGPT is an advanced language model capable of generating coherent texts and interacting naturally in conversations.'; ?></p>
                    <p><a href="https://chat.openai.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>YouChat</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Um chatbot que permite interações semelhantes ao ChatGPT, oferecendo respostas diretas e conversas interativas.' : 'A chatbot that allows interactions similar to ChatGPT, offering direct responses and interactive conversations.'; ?></p>
                    <p><a href="https://you.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Poe</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Chatbot do Quora que integra diversos assistentes com habilidades variadas para responder perguntas dos usuários.' : 'Quora\'s chatbot that integrates various assistants with varied skills to answer user questions.'; ?></p>
                    <p><a href="https://poe.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Google Gemini</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Anteriormente conhecido como Bard, é o modelo de linguagem avançado do Google para conversas e análises.' : 'Previously known as Bard, it is Google\'s advanced language model for conversations and analysis.'; ?></p>
                    <p><a href="https://gemini.google.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Microsoft Copilot</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Anteriormente Bing Chat, oferece assistência inteligente integrada aos serviços Microsoft.' : 'Previously Bing Chat, offers intelligent assistance integrated with Microsoft services.'; ?></p>
                    <p><a href="https://copilot.microsoft.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>HuggingChat</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Chat baseado em modelos open-source da Hugging Face, oferecendo uma alternativa transparente.' : 'Chat based on Hugging Face open-source models, offering a transparent alternative.'; ?></p>
                    <p><a href="https://huggingface.co/chat" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Mistral Chat</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Chatbot desenvolvido pela Mistral AI, focado em precisão e eficiência.' : 'Chatbot developed by Mistral AI, focused on precision and efficiency.'; ?></p>
                    <p><a href="https://chat.mistral.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DeepSeek Chat</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de IA especializado em conversas profundas e análises detalhadas.' : 'AI assistant specialized in deep conversations and detailed analysis.'; ?></p>
                    <p><a href="https://chat.deepseek.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Jan AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de IA com foco em produtividade e automação de tarefas.' : ' '; ?></p>
                    <p><a href="https://jan.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Pi AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Desenvolvido pela Inflection AI, oferece conversas naturais e empáticas.' : 'Powered by Inflection AI, it delivers natural and empathetic conversations.'; ?></p>
                    <p><a href="https://pi.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Open Assistant</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Projeto open-source da LAION para criar um assistente de IA acessível.' : 'LAIONs open-source project to create an accessible AI assistant.'; ?></p>
                    <p><a href="https://open-assistant.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Replika AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Companheiro de IA focado em conversas emocionais e suporte pessoal.' : 'AI companion focused on emotional conversations and personal support.'; ?></p>
                    <p><a href="https://replika.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Komo AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de IA versátil para diferentes tipos de tarefas e interações.' : 'Versatile AI assistant for different types of tasks and interactions.'; ?></p>
                    <p><a href="https://komo.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>AI Dungeon</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Jogo de aventura baseado em IA que cria histórias interativas personalizadas.' : 'AI-driven adventure game that creates personalized interactive stories.'; ?></p>
                    <p><a href="https://play.aidungeon.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Vercel AI Chat</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de chat AI da Vercel com foco em desenvolvimento e produtividade.' : 'Vercels AI chat platform focused on development and productivity.'; ?></p>
                    <p><a href="https://chat.vercel.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>

        <div class="section" id="geracao-imagens">
            <h2><?php echo $translations[$lang]['section_titles']['geracao-imagens']; ?></h2>
            <div class="card-container">
                <!-- Existing cards remain -->
                <div class="card">
                    <h3>Midjourney</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Um dos modelos mais populares para criação de arte digital, muito utilizado por designers e artistas.' : 'One of the most popular models for creating digital art, widely used by designers and artists.'; ?></p>
                    <p><a href="https://www.midjourney.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Leonardo AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma avançada para geração de imagens com foco em designers e artistas.' : ' '; ?></p>
                    <p><a href="https://leonardo.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DreamStudio</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Interface amigável para gerar imagens usando Stable Diffusion na nuvem.' : 'User-friendly interface to generate images using Stable Diffusion in the cloud.'; ?></p>
                    <p><a href="https://dreamstudio.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Artbreeder</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Geração colaborativa de imagens que permite mesclar e modificar rostos e paisagens.' : 'Collaborative image generation that allows you to merge and modify faces and landscapes.'; ?></p>
                    <p><a href="https://www.artbreeder.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DeepAI Text to Image</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Geração de imagens a partir de texto com diferentes estilos de arte.' : 'Generating images from text with different art styles.'; ?></p>
                    <p><a href="https://deepai.org/machine-learning-model/text-to-image" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Dream by Wombo</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Aplicativo que transforma descrições em ilustrações artísticas de forma rápida.' : 'Application that quickly transforms descriptions into artistic illustrations.'; ?></p>
                    <p><a href="https://dream.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>GetIMG</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta poderosa para edição, expansão e criação de imagens com IA.' : 'Powerful tool for AI-powered image editing, expansion and creation.'; ?></p>
                    <p><a href="https://getimg.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Playground AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma online gratuita para criar imagens de IA com diferentes modelos.' : 'Free online platform to create AI images with different models.'; ?></p>
                    <p><a href="https://playgroundai.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Fotor AI Art Generator</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Criador de arte baseado em IA para transformar texto em imagem.' : 'AI-based art creator to turn text into image.'; ?></p>
                    <p><a href="https://www.fotor.com/features/ai-image-generator" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>NightCafe AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Criador de imagens de IA que oferece diversas opções de estilos artísticos.' : 'AI image creator that offers a variety of artistic styles.'; ?></p>
                    <p><a href="https://creator.nightcafe.studio" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Pixray</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerador de imagens simples, mas poderoso, baseado em texto.' : 'Simple yet powerful text-based image generator.'; ?></p>
                    <p><a href="https://pixray.gob.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DiffusionBee</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Aplicação local para geração de imagens com Stable Diffusion para macOS.' : 'Local application for generating images with Stable Diffusion for macOS.'; ?></p>
                    <p><a href="https://diffusionbee.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Text2Art</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Geração de imagens artísticas a partir de descrições em texto.' : 'Generation of artistic images from text descriptions.'; ?></p>
                    <p><a href="https://text2art.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>This Person Does Not Exist</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gera rostos realistas de pessoas que não existem, utilizando IA.' : 'Generates realistic faces of non-existent people using AI'; ?></p>
                    <p><a href="https://thispersondoesnotexist.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Neural.love</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA que gera arte digital e amplia imagens sem perda de qualidade.' : 'AI that generates digital art and enlarges images without loss of quality'; ?></p>
                    <p><a href="https://neural.love" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <div class="section" id="analise-dados">
            <h2><?php echo $translations[$lang]['section_titles']['analise-dados']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>DataRobot</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de automação de machine learning que permite construir, implantar e monitorar modelos de IA sem necessidade de código avançado.' : 'Machine learning automation platform that lets you build, deploy, and monitor AI models without the need for advanced code.'; ?></p>
                    <p><a href="https://www.datarobot.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>H2O.ai</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Framework open-source para aprendizado de máquina e análise preditiva com suporte para AutoML.' : 'Open-source framework for machine learning and predictive analytics with support for AutoML.'; ?></p>
                    <p><a href="https://www.h2o.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Google AutoML</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço do Google Cloud que permite criar modelos de machine learning personalizados sem precisar de expertise avançada.' : 'Google Cloud service that lets you build custom machine learning models without requiring advanced expertise.'; ?></p>
                    <p><a href="https://cloud.google.com/automl" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>RapidMiner</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software poderoso de análise preditiva que facilita a construção de modelos de machine learning.' : 'Powerful predictive analytics software that makes it easy to build machine learning models.'; ?></p>
                    <p><a href="https://rapidminer.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>BigML</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma intuitiva para modelagem preditiva e análise de dados usando aprendizado de máquina.' : 'Intuitive platform for predictive modeling and data analysis using machine learning.'; ?></p>
                    <p><a href="https://bigml.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Alteryx</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de automação de análise de dados, ideal para integração e processamento de grandes volumes de dados.':'Data analysis automation tool, ideal for integrating and processing large volumes of data.'?></p>
                    <p><a href="https://www.alteryx.com/" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Power BI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'O Power BI é uma plataforma de business intelligence (BI) desenvolvida pela Microsoft para análise de dados e visualização interativa' : 'Power BI is a business intelligence (BI) platform developed by Microsoft for data analysis and interactive visualization.'; ?></p>
                    <p><a href="https://www.microsoft.com/pt-br/power-platform/products/power-bi/" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Tableau AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Extensão do Tableau que usa IA para fornecer insights automatizados e análise visual de dados.' : 'Description: Tableau extension that uses AI to provide automated insights and visual data analysis.'; ?></p>
                    <p><a href="https://www.tableau.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Amazon SageMaker</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço da AWS para criação, treinamento e implantação de modelos de machine learning.' : 'AWS service for building, training, and deploying machine learning models'; ?></p>
                    <p><a href="https://aws.amazon.com/sagemaker" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>KAI (Kasisto)</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de IA focada na análise de dados financeiros e tomada de decisão em fintechs.' : 'Plataforma de IA focada na análise de dados financeiros e tomada de decisão em fintechs.'; ?></p>
                    <p><a href="https://kasisto.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>MonkeyLearn</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma que usa IA para análise de texto e mineração de dados.' : 'Platform that uses AI for text analysis and data mining.'; ?></p>
                    <p><a href="https://monkeylearn.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Sisense</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software de business intelligence (BI) com recursos de IA para análise de dados.' : 'Business intelligence (BI) software with AI capabilities for data analysis.'; ?></p>
                    <p><a href="https://www.sisense.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Tonic AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta para anonimização e geração de dados sintéticos para análise segura.' : 'Tool for anonymization and generation of synthetic data for secure analysis.'; ?></p>
                    <p><a href="https://www.tonic.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Metabase AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma open-source de análise de dados que permite consultas SQL simplificadas.' : 'Open-source data analytics platform that enables simplified SQL queries.'; ?></p>
                    <p><a href="https://www.metabase.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Einblick</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de análise de dados colaborativa que utiliza IA para sugerir insights.' : 'Collaborative data analysis tool that uses AI to suggest insights.'; ?></p>
                    <p><a href="https://www.einblick.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Octoparse</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software para extração automatizada de dados da web (web scraping) com IA.' : 'Software for automated web data extraction (web scraping) with AI.'; ?></p>
                    <p><a href="https://www.octoparse.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Databricks AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma que combina engenharia de dados, análise e machine learning.' : 'Platform that combines data engineering, analytics and machine learning.'; ?></p>
                    <p><a href="https://www.databricks.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Seek AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para análise de dados que permite consultas em linguagem natural e interpretação automática dos resultados.' : 'AI for data analysis that allows queries in natural language and automatic interpretation of results.'; ?></p>
                    <p><a href="https://seek.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <div class="section" id="audio-voz">
            <h2><?php echo $translations[$lang]['section_titles']['audio-voz']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>OpenAI Whisper</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Modelo de reconhecimento de voz altamente preciso que transcreve áudio para texto em vários idiomas.' : 'Highly accurate speech recognition model that transcribes audio to text in multiple languages.'; ?></p>
                    <p><a href="https://openai.com/research/whisper" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Voicemaker</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma que converte texto em fala com IA, oferecendo diversas vozes e estilos.' : 'AI-powered text-to-speech platform offering a variety of voices and styles.'; ?></p>
                    <p><a href="https://voicemaker.in" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Speechelo</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software que transforma texto em voz natural com diferentes tonalidades e entonações.' : 'Software that transforms text into natural voice with different tones and intonations.'; ?></p>
                    <p><a href="https://speechelo.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Google Text-to-Speech</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço da Google que transforma texto em fala com vozes naturais e realistas.' : 'Google service that transforms text into speech with natural and realistic voices.'; ?></p>
                    <p><a href="https://cloud.google.com/text-to-speech" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Microsoft Azure Speech</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Solução da Microsoft para conversão de texto em fala, reconhecimento de voz e geração de vozes personalizadas.' : 'Microsofts solution for text-to-speech, speech recognition, and generation of custom voices.'; ?></p>
                    <p><a href="https://azure.microsoft.com/en-us/products/cognitive-services/speech-services" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Amazon Polly</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço da AWS que gera vozes naturais a partir de texto para uso em aplicativos e assistentes virtuais.' : 'AWS service that generates natural-sounding voices from text for use in applications and virtual assistants.'; ?></p>
                    <p><a href="https://aws.amazon.com/polly" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Descript</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software de edição de áudio que permite alterar voz, remover ruídos e até gerar vozes sintéticas.' : 'Audio editing software that allows you to change voice, remove noise and even generate synthetic voices.'; ?></p>
                    <p><a href="https://www.descript.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Voice.ai</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de modulação e alteração de voz em tempo real baseada em IA.' : 'Plataforma de modulação e alteração de voz em tempo real baseada em IA.'; ?></p>
                    <p><a href="https://voice.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>iSpeech</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço de conversão de texto para fala com várias opções de personalização de voz.' : 'Text-to-speech service with multiple voice customization options.'; ?></p>
                    <p><a href="https://www.ispeech.org" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Deepgram</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'API para reconhecimento de fala em tempo real, usada para transcrição e análise de áudio.' : 'API for real-time speech recognition, used for transcription and audio analysis.'; ?></p>
                    <p><a href="https://deepgram.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Krisp AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software que usa IA para remover ruídos de fundo em chamadas e gravações de áudio.' : 'Software that uses AI to remove background noise in calls and audio recordings.'; ?></p>
                    <p><a href="https://krisp.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Lovo AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de clonagem de voz e síntese de fala, focada em produções audiovisuais.' : 'Voice cloning and speech synthesis platform, focused on audiovisual productions.'; ?></p>
                    <p><a href="https://www.lovo.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>FakeYou</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA que permite transformar texto em fala usando vozes de personagens famosos.' : 'AI that allows you to transform text into speech using the voices of famous characters.'; ?></p>
                    <p><a href="https://fakeyou.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Speechmatics</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Tecnologia avançada de reconhecimento de voz para transcrição automática e legendagem.' : 'Advanced speech recognition technology for automatic transcription and captioning.'; ?></p>
                    <p><a href="https://www.speechmatics.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <div class="section" id="gerenciamento-texto">
            <h2><?php echo $translations[$lang]['section_titles']['gerenciamento-texto']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>Grammarly</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de escrita baseado em IA que corrige gramática, ortografia e sugere melhorias no estilo do texto.' : 'AI-based writing assistant that corrects grammar, spelling, and suggests improvements to text style.'; ?></p>
                    <p><a href="https://www.grammarly.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Hemingway Editor</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Aplicativo que melhora a legibilidade dos textos, sugerindo ajustes na gramática e estrutura das frases.' : 'Application that improves the readability of texts, suggesting adjustments to grammar and sentence structure.'; ?></p>
                    <p><a href="https://hemingwayapp.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>ProWritingAid</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Software de análise de texto que detecta erros gramaticais, sugere melhorias no estilo e oferece estatísticas detalhadas.' : 'Text analysis software that detects grammatical errors, suggests style improvements, and provides detailed statistics.'; ?></p>
                    <p><a href="https://prowritingaid.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DeepL Write</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de escrita baseado em IA que aprimora gramática e estilo para textos em vários idiomas.' : 'AI-based writing assistant that improves grammar and style for texts in multiple languages.'; ?></p>
                    <p><a href="https://www.deepl.com/write" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Sapling AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de escrita para empresas, com recursos de autocompletar e análise de tom para melhorar a comunicação.' : 'Writing assistant for businesses, with auto-complete and tone analysis features to improve communication.'; ?></p>
                    <p><a href="https://sapling.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Jasper AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerador de conteúdo com IA que cria textos para blogs, marketing e redes sociais.' : 'AI-powered content generator that creates texts for blogs, marketing and social media.'; ?></p>
                    <p><a href="https://www.jasper.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Copy.ai</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de geração de conteúdo para marketing, capaz de criar textos persuasivos e otimizados.' : 'Content generation platform for marketing, capable of creating persuasive and optimized texts.'; ?></p>
                    <p><a href="https://www.copy.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Writesonic</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para criação de textos, incluindo posts de blog, descrições de produtos e anúncios.' : 'AI for creating texts, including blog posts, product descriptions, and ads.'; ?></p>
                    <p><a href="https://writesonic.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Rytr</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de escrita automatizada baseada em IA, ideal para copywriting e criação de conteúdo.' : 'AI-based automated writing tool ideal for copywriting and content creation.'; ?></p>
                    <p><a href="https://rytr.me" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Sudowrite</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de escrita para escritores e romancistas, ajudando na criação de histórias e personagens.' : 'Writing assistant for writers and novelists, helping with the creation of stories and characters.'; ?></p>
                    <p><a href="https://www.sudowrite.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Text Blaze</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de automação de escrita que permite criar templates inteligentes e atalhos para textos repetitivos.' : 'Writing automation tool that allows you to create smart templates and shortcuts for repetitive texts.'; ?></p>
                    <p><a href="https://blaze.today" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>AI21 Studio</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de leitura e análise de textos que resume documentos longos com IA.' : 'Text reading and analysis tool that summarizes long documents with AI.'; ?></p>
                    <p><a href="https://www.ai21.com/studio" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Paraphraser.io</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de reescrita de textos com IA, útil para evitar plágio e criar novas versões de conteúdos.' : 'AI-powered text rewriting platform, useful for avoiding plagiarism and creating new versions of content.'; ?></p>
                    <p><a href="https://www.paraphraser.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Article Forge</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerador de artigos automáticos com IA, criando textos otimizados para SEO.' : 'Automatic article generator with AI, creating texts optimized for SEO.'; ?></p>
                    <p><a href="https://www.articleforge.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>SummarizeBot</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de IA que resume artigos, documentos e textos longos de forma automática.' : 'AI tool that automatically summarizes articles, documents and long texts.'; ?></p>
                    <p><a href="https://summarizebot.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Frase.io</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de otimização de conteúdo que usa IA para analisar tendências e sugerir melhorias para SEO.' : 'Content optimization platform that uses AI to analyze trends and suggest SEO improvements.'; ?></p>
                    <p><a href="https://www.frase.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>INK Editor</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de escrita com IA, especializado em SEO e copywriting para conteúdos otimizados.' : 'AI-powered writing assistant specializing in SEO and copywriting for optimized content.'; ?></p>
                    <p><a href="https://inkforall.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <div class="section" id="design-imagens">
            <h2><?php echo $translations[$lang]['section_titles']['design-imagens']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>Canva AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de design gráfico com recursos de IA para geração de imagens e layouts automáticos.' : 'Graphic design tool with AI capabilities for automatic image generation and layouts.'; ?></p>
                    <p><a href="https://canva.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Remove.bg</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Remove automaticamente o fundo de imagens com um clique, usando IA.' : 'Automatically remove background from images with one click using AI.'; ?></p>
                    <p><a href="https://remove.bg" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Let’s Enhance</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Melhora a qualidade de imagens de baixa resolução, aprimorando detalhes e removendo ruídos.' : 'Improve the quality of low-resolution images by enhancing details and removing noise.'; ?></p>
                    <p><a href="https://letsenhance.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Runway ML</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de edição de vídeo e imagem com recursos de IA, incluindo remoção de fundo e geração de efeitos especiais.' : 'Description: Video and image editing tool with AI features including background removal and special effects generation.'; ?></p>
                    <p><a href="https://runwayml.com" class="card-button"  target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Deep Dream Generator</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Usa redes neurais para criar arte surrealista a partir de imagens enviadas pelo usuário.' : 'Description: Uses neural networks to create surrealist art from user-submitted images.'; ?></p>
                    <p><a href="https://deepdreamgenerator.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="section" id="seguranca-privacidade">
            <h2><?php echo $translations[$lang]['section_titles']['seguranca-privacidade']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>Cloudflare Bot Management</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Protege sites contra bots maliciosos usando IA para identificar e bloquear tráfego suspeito.' : 'Protects websites from malicious bots using AI to identify and block suspicious traffic.'; ?></p>
                    <p><a href="https://www.cloudflare.com/bot-management" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Norton Genie AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de IA da Norton para detecção de phishing e links suspeitos.' : 'Norton AI tool for phishing detection and suspicious links.'; ?></p>
                    <p><a href="https://us.norton.com/genie" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Bitdefender AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Antivírus com IA que detecta e bloqueia ameaças avançadas.' : 'AI-powered antivirus that detects and blocks advanced threats.'; ?></p>
                    <p><a href="https://www.bitdefender.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>IBM Security QRadar</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de segurança que usa IA para detectar e responder a ameaças cibernéticas.' : 'Security platform that uses AI to detect and respond to cyber threats.'; ?></p>
                    <p><a href="https://www.ibm.com/security/qradar" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Google Safe Browsing</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Sistema de proteção contra phishing e malware que usa IA para detectar sites perigosos.' : 'Protection system against phishing and malware that uses AI to detect dangerous sites.'; ?></p>
                    <p><a href="https://transparencyreport.google.com/safe-browsing" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>McAfee AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Solução de segurança que usa IA para análise de ameaças em tempo real.' : 'Security solution that uses AI for real-time threat analysis.'; ?></p>
                    <p><a href="https://www.mcafee.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Microsoft Defender AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de IA para proteção contra ameaças cibernéticas avançadas.' : 'AI tool for protection against advanced cyber threats.'; ?></p>
                    <p><a href="https://www.microsoft.com/security/blog" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Trend Micro XDR</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma que usa IA para detectar e responder a ataques cibernéticos.' : 'Platform that uses AI to detect and respond to cyber attacks.'; ?></p>
                    <p><a href="https://www.trendmicro.com/en_us/business/products/detection-response/xdr.html" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>ESET AI Security</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Antivírus com inteligência artificial para proteção contra ameaças desconhecidas.' : 'Antivirus with artificial intelligence for protection against unknown threats.'; ?></p>
                    <p><a href="https://www.eset.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Tessian AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Protege e-mails contra ataques de phishing e vazamento de dados usando IA.' : 'Protects emails against phishing attacks and data leaks using AI.'; ?></p>
                    <p><a href="https://www.tessian.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Dashlane AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerenciador de senhas com IA para detectar senhas fracas e gerar senhas seguras.' : 'Password manager with AI to detect weak passwords and generate secure ones.'; ?></p>
                    <p><a href="https://www.dashlane.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>1Password AI Watchtower</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Monitora senhas vazadas e sugere melhorias na segurança.' : 'Monitors leaked passwords and suggests security improvements.'; ?></p>
                    <p><a href="https://1password.com/watchtower" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>LastPass AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Avalia a segurança de senhas armazenadas e alerta sobre vulnerabilidades.' : 'Evaluates stored password security and alerts about vulnerabilities.'; ?></p>
                    <p><a href="https://www.lastpass.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>ReCaptcha AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Sistema de IA que protege sites contra bots e ataques automatizados.' : 'AI system that protects websites against bots and automated attacks.'; ?></p>
                    <p><a href="https://www.google.com/recaptcha/about" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DuckDuckGo AI Privacy</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Navegador e extensão que bloqueia rastreamento e protege dados do usuário.' : 'Browser and extension that blocks tracking and protects user data.'; ?></p>
                    <p><a href="https://www.duckduckgo.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Jumbo Privacy</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Aplicativo de IA que analisa configurações de privacidade e protege dados pessoais.' : 'AI app that analyzes privacy settings and protects personal data.'; ?></p>
                    <p><a href="https://www.jumboprivacy.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Kaspersky AI Security</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de segurança baseada em IA para análise de ameaças cibernéticas.' : 'AI-based security tool for cyber threat analysis.'; ?></p>
                    <p><a href="https://www.kaspersky.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Apple Lockdown Mode AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Modo de segurança avançado da Apple que protege contra ataques cibernéticos sofisticados.' : 'Apple\'s advanced security mode that protects against sophisticated cyber attacks.'; ?></p>
                    <p><a href="https://support.apple.com/en-us/HT212650" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Anonymizer AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Criação de e-mails anônimos para proteger a privacidade do usuário.' : 'Creation of anonymous emails to protect user privacy.'; ?></p>
                    <p><a href="https://anonaddy.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <div class="section" id="ia-codigo">
            <h2><?php echo $translations[$lang]['section_titles']['ia-codigo']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>GitHub Copilot</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de programação da GitHub que sugere código em tempo real usando IA.' : 'GitHub\'s programming assistant that suggests code in real-time using AI.'; ?></p>
                    <p><a href="https://github.com/features/copilot" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Amazon CodeWhisperer</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta da AWS que gera sugestões de código baseadas em comentários e contexto.' : 'AWS tool that generates code suggestions based on comments and context.'; ?></p>
                    <p><a href="https://aws.amazon.com/codewhisperer" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Tabnine</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de código que aprende com seu estilo de programação para sugestões personalizadas.' : 'Code assistant that learns from your programming style for personalized suggestions.'; ?></p>
                    <p><a href="https://www.tabnine.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Replit</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IDE online com recursos de IA para ajudar no desenvolvimento de código.' : 'Online IDE with AI features to help with code development.'; ?></p>
                    <p><a href="https://replit.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodePen AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de IA integrado ao CodePen para ajudar no desenvolvimento front-end.' : 'AI assistant integrated with CodePen to help with front-end development.'; ?></p>
                    <p><a href="https://codepen.io/ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Codeium</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Alternativa gratuita ao Copilot com suporte a múltiplas IDEs e linguagens.' : 'Free Copilot alternative with support for multiple IDEs and languages.'; ?></p>
                    <p><a href="https://codeium.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Mintlify</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerador de documentação automática usando IA para analisar seu código.' : 'Automatic documentation generator using AI to analyze your code.'; ?></p>
                    <p><a href="https://mintlify.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Sourcegraph</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de busca e navegação de código com recursos de IA.' : 'Code search and navigation tool with AI capabilities.'; ?></p>
                    <p><a href="https://sourcegraph.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Mutable AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de desenvolvimento que usa IA para acelerar a codificação.' : 'Development platform that uses AI to accelerate coding.'; ?></p>
                    <p><a href="https://mutable.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodeWP</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de IA especializado em desenvolvimento WordPress.' : 'AI assistant specialized in WordPress development.'; ?></p>
                    <p><a href="https://codewp.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
            <h2><?php echo $translations[$lang]['section_titles']['ia-codigo']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>GitHub Copilot</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de codificação baseado em IA que sugere trechos de código em tempo real.' : 'AI-based coding assistant that suggests code snippets in real-time.'; ?></p>
                    <p><a href="https://github.com/features/copilot" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Tabnine</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Autocompletar avançado para programadores, suportando diversas linguagens.' : 'Advanced autocomplete for programmers, supporting multiple languages.'; ?></p>
                    <p><a href="https://www.tabnine.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Codeium</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Alternativa gratuita ao Copilot para sugestões de código baseadas em IA.' : 'Free alternative to Copilot for AI-based code suggestions.'; ?></p>
                    <p><a href="https://www.codeium.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Amazon CodeWhisperer</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de codificação da AWS com suporte para diversas linguagens.' : 'AWS coding assistant with support for multiple languages.'; ?></p>
                    <p><a href="https://aws.amazon.com/codewhisperer" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Mutable AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para acelerar a escrita e refatoração de código.' : 'AI to accelerate code writing and refactoring.'; ?></p>
                    <p><a href="https://www.mutable.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Cogram</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de codificação baseado em IA para Python e SQL.' : 'AI-based coding assistant for Python and SQL.'; ?></p>
                    <p><a href="https://www.cogram.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Sourcegraph Cody</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta de busca e compreensão de código baseada em IA.' : 'AI-based code search and understanding tool.'; ?></p>
                    <p><a href="https://sourcegraph.com/cody" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>AskCodi</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA que auxilia na geração de código e explicação de trechos.' : 'AI that helps with code generation and snippet explanation.'; ?></p>
                    <p><a href="https://www.askcodi.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodeGeeX</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Modelo de IA para completar código em diversas linguagens.' : 'AI model for code completion in multiple languages.'; ?></p>
                    <p><a href="https://github.com/THUDM/CodeGeeX" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DeepCode</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta que analisa código e detecta vulnerabilidades com IA.' : 'Tool that analyzes code and detects vulnerabilities using AI.'; ?></p>
                    <p><a href="https://snyk.io/deepcode-ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodeWP</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para geração de código WordPress.' : 'AI for WordPress code generation.'; ?></p>
                    <p><a href="https://www.codewp.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Warp AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Terminal inteligente que auxilia na execução de comandos.' : 'Smart terminal that assists in command execution.'; ?></p>
                    <p><a href="https://www.warp.dev" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Ponicode</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para geração automática de testes unitários.' : 'AI for automatic unit test generation.'; ?></p>
                    <p><a href="https://www.ponicode.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodePal</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Gerador de código que interpreta prompts em linguagem natural.' : 'Code generator that interprets natural language prompts.'; ?></p>
                    <p><a href="https://www.codepal.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Refact AI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA para refatoração e limpeza de código.' : 'AI for code refactoring and cleanup.'; ?></p>
                    <p><a href="https://www.smallcloud.ai/refact" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>AutoRegex</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Converte linguagem natural em expressões regulares.' : 'Converts natural language to regular expressions.'; ?></p>
                    <p><a href="https://www.autoregex.xyz" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Codiga</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Assistente de codificação para detectar e corrigir erros automaticamente.' : 'Coding assistant to automatically detect and fix errors.'; ?></p>
                    <p><a href="https://www.codiga.io" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>GPT Engineer</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'IA que gera projetos inteiros a partir de descrições.' : 'AI that generates entire projects from descriptions.'; ?></p>
                    <p><a href="https://github.com/AntonOsika/gpt-engineer" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>CodeConvert</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Traduz código entre diferentes linguagens automaticamente.' : 'Automatically translates code between different languages.'; ?></p>
                    <p><a href="https://www.codeconvert.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>AI Code Mentor</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ajuda a depurar e melhorar código automaticamente.' : 'Helps debug and improve code automatically.'; ?></p>
                    <p><a href="https://www.aicodementor.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>

        <div class="section" id="pesquisa-aprendizado">
            <h2><?php echo $translations[$lang]['section_titles']['pesquisa-aprendizado']; ?></h2>
            <div class="card-container">
                <div class="card">
                    <h3>TensorFlow</h3>
                    <p><a href="https://www.tensorflow.org" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: Biblioteca open-source da Google para aprendizado de máquina e deep learning.</p>
                </div>
                <div class="card">
                    <h3>PyTorch</h3>
                    <p><a href="https://pytorch.org" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: Framework poderoso para redes neurais e deep learning criado pela Meta.</p>
                </div>
                <div class="card">
                    <h3>Scikit-Learn</h3>
                    <p><a href="https://scikit-learn.org" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: Biblioteca de aprendizado de máquina para Python com algoritmos prontos.</p>
                </div>
                <div class="card">
                    <h3>Keras</h3>
                    <p><a href="https://keras.io" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: API de alto nível para redes neurais baseada no TensorFlow.</p>
                </div>
                <div class="card">
                    <h3>Hugging Face</h3>
                    <p><a href="https://huggingface.co" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: Biblioteca para NLP (Processamento de Linguagem Natural).</p>
                </div>
                <div class="card">
                    <h3>Google Vertex AI</h3>
                    <p><a href="https://cloud.google.com/vertex-ai" class="card-button"   target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                    <p>Descrição: Plataforma da Google para desenvolvimento de modelos de IA sem código.</p>
                </div>
                <div class="card">
                    <h3>Amazon SageMaker</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma da AWS para desenvolvimento e treinamento de modelos de ML.' : 'AWS platform for ML model development and training.'; ?></p>
                    <p><a href="https://aws.amazon.com/sagemaker" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Azure Machine Learning</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Serviço da Microsoft para criar e implantar modelos de ML.' : 'Microsoft service for creating and deploying ML models.'; ?></p>
                    <p><a href="https://azure.microsoft.com/en-us/products/machine-learning" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>JAX</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Biblioteca da Google para computação numérica eficiente e aprendizado profundo.' : 'Google library for efficient numerical computing and deep learning.'; ?></p>
                    <p><a href="https://jax.readthedocs.io/en/latest" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>OpenAI Gym</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma para desenvolver e testar algoritmos de aprendizado por reforço.' : 'Platform for developing and testing reinforcement learning algorithms.'; ?></p>
                    <p><a href="https://www.gymlibrary.dev" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>MLflow</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta open-source para gerenciar ciclos de vida de modelos de aprendizado de máquina.' : 'Open-source tool for managing machine learning model lifecycles.'; ?></p>
                    <p><a href="https://mlflow.org" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Google Colab</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ambiente online gratuito para rodar notebooks Jupyter com suporte a GPU.' : 'Free online environment for running Jupyter notebooks with GPU support.'; ?></p>
                    <p><a href="https://colab.research.google.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>FastAI</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Biblioteca de aprendizado profundo de alto nível para Python baseada no PyTorch.' : 'High-level deep learning library for Python based on PyTorch.'; ?></p>
                    <p><a href="https://www.fast.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>DVC</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Controle de versão para projetos de aprendizado de máquina.' : 'Version control for machine learning projects.'; ?></p>
                    <p><a href="https://dvc.org" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Ludwig</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Framework de aprendizado de máquina da Uber sem necessidade de programação.' : 'Uber no-code machine learning framework.'; ?></p>
                    <p><a href="https://ludwig.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>H2O.ai</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de AutoML para criar modelos de aprendizado de máquina sem código.' : 'AutoML platform for creating no-code machine learning models.'; ?></p>
                    <p><a href="https://www.h2o.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Neptune.ai</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta para rastrear experimentos e otimizar modelos de ML.' : 'Tool for tracking experiments and optimizing ML models.'; ?></p>
                    <p><a href="https://neptune.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Weights & Biases</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma para monitorar, treinar e analisar modelos de IA.' : 'Platform for monitoring, training, and analyzing AI models.'; ?></p>
                    <p><a href="https://wandb.ai" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Comet ML</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma para rastrear experimentos de aprendizado de máquina.' : 'Platform for tracking machine learning experiments.'; ?></p>
                    <p><a href="https://www.comet.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>RapidMiner</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de ciência de dados para análise preditiva e aprendizado de máquina.' : 'Data science platform for predictive analytics and machine learning.'; ?></p>
                    <p><a href="https://rapidminer.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>BigML</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Plataforma de aprendizado de máquina baseada em nuvem com interface amigável.' : 'Cloud-based machine learning platform with user-friendly interface.'; ?></p>
                    <p><a href="https://bigml.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
                <div class="card">
                    <h3>Orange3</h3>
                    <p><?php echo $translations[$lang]['description']; ?> <?php echo $lang === 'pt' ? 'Ferramenta visual para análise de dados e aprendizado de máquina.' : 'Visual tool for data analysis and machine learning.'; ?></p>
                    <p><a href="https://orangedatamining.com" class="card-button" target="_blank"><?php echo $translations[$lang]['access_site']; ?></a></p>
                </div>
            </div>
        </div>
        <button class="back-to-top" aria-label="Back to top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z" />
            </svg>
        </button>
</body>
</html>