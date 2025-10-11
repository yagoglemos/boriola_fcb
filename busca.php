<?php

/**
 * Procura por uma correspondência (texto) em arquivos dentro de um diretório e seus subdiretórios.
 *
 * @param string $diretorio Caminho para o diretório onde a busca será iniciada.
 * @param string $termo Pesquisa a ser procurada (string ou expressão regular).
 * @param array $extensoes Array de extensões de arquivo a serem consideradas (ex: ['php', 'txt', 'js']). Se vazio, busca em todos os arquivos.
 * @param bool $regex Se true, o termo é tratado como uma expressão regular.
 * @return array Um array associativo contendo os resultados da busca.  As chaves são os caminhos dos arquivos,
 *               e os valores são arrays contendo as linhas onde a correspondência foi encontrada.
 *               Se nenhum arquivo ou correspondência for encontrada, retorna um array vazio.
 */
function buscarCorrespondenciaEmArquivos(string $diretorio, string $termo, array $extensoes = [], bool $regex = false): array
{
    $resultados = [];

    $diretorio = rtrim($diretorio, '/'); // Remove barras finais para evitar problemas

    if (!is_dir($diretorio)) {
        echo "Erro: O diretório '$diretorio' não existe ou não é um diretório válido.\n";
        return $resultados; // Retorna array vazio em caso de erro
    }

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($diretorio),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($iterator as $arquivo) {
        if ($arquivo->isFile()) {
            $caminhoCompleto = $arquivo->getPathname();
            $extensao = strtolower(pathinfo($caminhoCompleto, PATHINFO_EXTENSION));

            // Verificar extensão (se fornecida)
            if (!empty($extensoes) && !in_array($extensao, $extensoes)) {
                continue; // Ignorar arquivo se a extensão não estiver na lista permitida
            }

            try {
                $conteudo = file_get_contents($caminhoCompleto);
                if ($conteudo === false) {
                    echo "Erro ao ler o arquivo: " . $caminhoCompleto . "\n";
                    continue; // Próximo arquivo em caso de erro de leitura.
                }
            } catch (Exception $e) {
                echo "Erro ao ler o arquivo " . $caminhoCompleto . ": " . $e->getMessage() . "\n";
                continue; // Próximo arquivo em caso de erro
            }

            $linhas = explode("\n", $conteudo);
            $linhasCorrespondentes = [];

            foreach ($linhas as $numeroLinha => $linha) {
                $numeroLinha++; // Ajuste para começar em 1 (mais intuitivo)

                if ($regex) {
                    if (preg_match($termo, $linha)) {
                        $linhasCorrespondentes[] = $numeroLinha;
                    }
                } else {
                    if (stripos($linha, $termo) !== false) {
                        $linhasCorrespondentes[] = $numeroLinha;
                    }
                }
            }

            if (!empty($linhasCorrespondentes)) {
                $resultados[$caminhoCompleto] = $linhasCorrespondentes;
            }
        }
    }

    return $resultados;
}


// **Exemplo de uso (ajustado para a sua necessidade):**

// 1. O diretório onde o script está localizado será a base da busca.
$diretorioProjeto = __DIR__; // __DIR__ representa o diretório atual do arquivo PHP

// 2. **INSIRA O TERMO DE BUSCA AQUI, entre as aspas:**
$termoProcurado = 'runner_mail'; // Substitua por sua busca.

// 3. Defina as extensões de arquivo que você deseja buscar (opcional):
$extensoesConsideradas = ['php', 'txt', 'js']; // Buscando em arquivos PHP, TXT e JS

// **Execução da busca:**
$resultadosBusca = buscarCorrespondenciaEmArquivos($diretorioProjeto, $termoProcurado, $extensoesConsideradas);

// **Exibição dos resultados:**
if (empty($resultadosBusca)) {
    echo "Nenhuma correspondência encontrada para '$termoProcurado' nos arquivos do diretório '$diretorioProjeto'.\n";
} else {
    echo "Correspondências encontradas:\n";
    foreach ($resultadosBusca as $caminhoArquivo => $linhas) {
        echo "Arquivo: " . $caminhoArquivo . "\n";
        echo "  Linhas: " . implode(", ", $linhas) . "\n";
    }
}

?>