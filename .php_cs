<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(
        [
            '@PhpCsFixer' => true,
            '@PHP73Migration' => true,
            'phpdoc_summary' => false,
            'phpdoc_to_comment' => false,
            'phpdoc_no_empty_return' => false,
            'phpdoc_no_alias_tag' => false,
            'concat_space' => ['spacing' => 'one'],
            'phpdoc_align' => ['align' => 'left'],
            'array_syntax' => ['syntax' => 'short'],
            'yoda_style' => false,
            'class_attributes_separation' => true,
            'visibility_required' => ['elements' => ['property', 'method', 'const']],
            'not_operator_with_successor_space' => true,
            'ordered_class_elements' => ['order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private']],
            'phpdoc_types_order' => false,
            'multiline_whitespace_before_semicolons' => true,
            'php_unit_test_class_requires_covers' => false,
            'php_unit_internal_class' => false,
            'php_unit_method_casing' => ['case' => 'snake_case'],
            'array_indentation' => false,
            'increment_style' => ['style' => 'post'],
            'simplified_null_return' => true,
            'no_superfluous_phpdoc_tags' => false,
        ]
    )
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__ . '/config')
            ->in(__DIR__ . '/tests')
    );
