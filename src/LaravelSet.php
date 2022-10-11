<?php

declare(strict_types=1);

namespace Zing\CodingStandard;

use PhpCsFixer\RuleSet\AbstractRuleSetDescription;

final class LaravelSet extends AbstractRuleSetDescription
{
    /**
     * @param array<string, bool|array<string, mixed>> $rules
     */
    public function __construct(
        private array $rules
    ) {
        parent::__construct();
    }

    public function getName(): string
    {
        return 'laravel';
    }

    public function getDescription(): string
    {
        return 'Laravel Coding Style Ruleset';
    }

    /**
     * @return array<string, bool|array<string, mixed>>
     */
    public function getRules(): array
    {
        return $this->rules;
    }
}
