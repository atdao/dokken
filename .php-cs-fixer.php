<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/app')
    ->in(__DIR__ . '/routes')
    ->in(__DIR__ . '/tests');

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@PSR12'                           => true,
        'no_blank_lines_after_phpdoc'      => true,
        'no_empty_phpdoc'                  => true,
        'no_unused_imports'                => true,
        'phpdoc_indent'                    => true,
        'phpdoc_trim'                      => true,
        'phpdoc_scalar'                    => true,
        'phpdoc_separation'                => true,
        'whitespace_after_comma_in_array'  => true,
        'not_operator_with_space'          => true,
        'ordered_imports'                  => true,
        'concat_space' => [
            'spacing' => 'one'
        ],
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try', 'for', 'foreach', 'if', 'switch', 'do', 'while']
        ],
    ])
    ->setFinder($finder);

