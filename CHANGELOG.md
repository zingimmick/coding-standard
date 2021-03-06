# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

PRs and issues are linked, so you can find more about it. Thanks to [ChangelogLinker](https://github.com/Symplify/ChangelogLinker).

<!-- changelog-linker -->

## [3.3.0]

### Changed

- [#57] Bump actions/cache from v2 to v2.1.4

### Deprecated

- [#56] Remove deprecated rector set

### Removed

- [#58] Remove default skip option

## [3.1.1] - 2020-12-26

### Changed

- [#52] Disable ModernClassNameReferenceSniff.ClassNameReferencedViaFunctionCall

## [3.0.0] - 2020-12-23

### Removed

- [#51] Remove type hint sniff

## [3.0.0-alpha.2]

### Changed

- [#50] Update dependency symplify/easy-coding-standard to v9

## [2.6.2] - 2020-11-20

### Added

- [#48] Add autoapprove with kodiak

### Changed

- [#49] Update CHANGELOG.md

### Removed

- [#46] Remove SlevomatCodingStandard\Sniffs\Namespaces\UnusedUsesSniff
- [#47] Remove composer v2 option

## [2.6.0] - 2020-09-30

### Changed

- [#44] Disable ArrayListItemNewlineFixer
- [#43] Use constant instead of string for changelog-linker option

### Deprecated

- [#42] Remove deprecated usage of Symplify\EasyCodingStandard\Configuration\Option

### Removed

- [#41] Remove php-cs-fixer rule sets

## [2.5.4] - 2020-09-27

### Changed

- [#40] Disable PostStatementCommentSniff.Found

## [2.5.3] - 2020-09-25

- [#39] Bump rector/rector from 0.8.0 to 0.8.10

## [2.5.2] - 2020-09-22

### Fixed

- [#38] Fix phpstan/phpstan ^0.12.43 requires unsupported nikic/php-parser 4.10.0

## [2.5.1] - 2020-09-16

### Changed

- [#36] Skip UnaryOperatorSpacesFixer

## [2.5.0] - 2020-09-02

- [#33] Update slevomat/coding-standard from dev-master to ^6.4
- [#35] YAML to PHP
- [#34] Update dependency rector/rector to ^0.8.0

## [2.3.0] - 2020-08-21

### Removed

- [#32] Remove Rector exclude_rectors config

## [2.2.2] - 2020-08-12

### Added

- [#31] Add php-cs-fixer-risky set

## [2.2.1] - 2020-08-10

### Changed

- [#30] Improve doc
- [#29] Support for phpdoc-parser 0.4.9

## [2.2.0] - 2020-08-06

- [#28] Suport for ecs 8.1.20

## [2.1.0] - 2020-08-06

### Added

- [#27] Add conflict rule for rector 0.7.62 and ecs 8.1.20

## [2.0.5] - 2020-08-01

- [#26] Add conflict rule for rector

## [2.0.4] - 2020-08-01

### Changed

- [#24] Configure Renovate
- [#25] Update rector/rector requirement from ^0.7.50 to ^0.7.50,<0.7.54

## [2.0.3] - 2020-07-30

### Added

- [#22] Add changelog generator
- [#21] Add kodiak config
- [#20] Add ordered imports test
## [2.0.3]^2

### Changed

- [#23] Support for rector 0.7.55

## [2.0.1] - 2020-07-23

- [#19] Skip PSR12\Sniffs\Traits\UseDeclarationSniff.UseAfterBrace and UselessFunctionDocCommentSniff.UselessDocComment

## [2.0.0] - 2020-07-22

### Added

- [#14] Added tentative support for composer 2

### Changed

- [#17] switch YAML to PHP
- [#18] Enable prefer stable

### Fixed

- [#13] Fix new conflict resolution

## [1.3.1]

### Changed

- [#15] Lock symplify/easy-coding-standard below 8.1.7

### Removed

- [#7] Remove nikic/php-parser requirement

## [1.2.4] - 2020-07-06

### Changed

- [#6] Bump rector/rector from 0.7.41 to 0.7.43

## [1.2.0] - 2020-07-03

- [#4] Bump rector/rector from 0.7.26 to 0.7.41

## [1.1.0]

- [#3] Update symplify/easy-coding-standard requirement from ^7.2 to ^8.1
- [#2] Bump actions/cache from v1 to v2

[#52]: https://github.com/zingimmick/coding-standard/pull/52
[#51]: https://github.com/zingimmick/coding-standard/pull/51
[#50]: https://github.com/zingimmick/coding-standard/pull/50
[#49]: https://github.com/zingimmick/coding-standard/pull/49
[#48]: https://github.com/zingimmick/coding-standard/pull/48
[#47]: https://github.com/zingimmick/coding-standard/pull/47
[#46]: https://github.com/zingimmick/coding-standard/pull/46
[#44]: https://github.com/zingimmick/coding-standard/pull/44
[#43]: https://github.com/zingimmick/coding-standard/pull/43
[#42]: https://github.com/zingimmick/coding-standard/pull/42
[#41]: https://github.com/zingimmick/coding-standard/pull/41
[#40]: https://github.com/zingimmick/coding-standard/pull/40
[#39]: https://github.com/zingimmick/coding-standard/pull/39
[#38]: https://github.com/zingimmick/coding-standard/pull/38
[#36]: https://github.com/zingimmick/coding-standard/pull/36
[#35]: https://github.com/zingimmick/coding-standard/pull/35
[#34]: https://github.com/zingimmick/coding-standard/pull/34
[#33]: https://github.com/zingimmick/coding-standard/pull/33
[#32]: https://github.com/zingimmick/coding-standard/pull/32
[#31]: https://github.com/zingimmick/coding-standard/pull/31
[#30]: https://github.com/zingimmick/coding-standard/pull/30
[#29]: https://github.com/zingimmick/coding-standard/pull/29
[#28]: https://github.com/zingimmick/coding-standard/pull/28
[#27]: https://github.com/zingimmick/coding-standard/pull/27
[#26]: https://github.com/zingimmick/coding-standard/pull/26
[#25]: https://github.com/zingimmick/coding-standard/pull/25
[#24]: https://github.com/zingimmick/coding-standard/pull/24
[#23]: https://github.com/zingimmick/coding-standard/pull/23
[#22]: https://github.com/zingimmick/coding-standard/pull/22
[#21]: https://github.com/zingimmick/coding-standard/pull/21
[#20]: https://github.com/zingimmick/coding-standard/pull/20
[#19]: https://github.com/zingimmick/coding-standard/pull/19
[#18]: https://github.com/zingimmick/coding-standard/pull/18
[#17]: https://github.com/zingimmick/coding-standard/pull/17
[#15]: https://github.com/zingimmick/coding-standard/pull/15
[#14]: https://github.com/zingimmick/coding-standard/pull/14
[#13]: https://github.com/zingimmick/coding-standard/pull/13
[#7]: https://github.com/zingimmick/coding-standard/pull/7
[#6]: https://github.com/zingimmick/coding-standard/pull/6
[#4]: https://github.com/zingimmick/coding-standard/pull/4
[3.1.1]: https://github.com/zingimmick/coding-standard/compare/3.0.0...3.1.1
[3.0.0-alpha.2]: https://github.com/zingimmick/coding-standard/compare/2.6.2...3.0.0-alpha.2
[3.0.0]: https://github.com/zingimmick/coding-standard/compare/3.0.0-alpha.2...3.0.0
[#3]: https://github.com/zingimmick/coding-standard/pull/3
[2.6.2]: https://github.com/zingimmick/coding-standard/compare/2.6.0...2.6.2
[2.6.0]: https://github.com/zingimmick/coding-standard/compare/2.5.4...2.6.0
[2.5.4]: https://github.com/zingimmick/coding-standard/compare/2.5.3...2.5.4
[2.5.3]: https://github.com/zingimmick/coding-standard/compare/2.5.2...2.5.3
[2.5.2]: https://github.com/zingimmick/coding-standard/compare/2.5.1...2.5.2
[2.5.1]: https://github.com/zingimmick/coding-standard/compare/2.5.0...2.5.1
[2.5.0]: https://github.com/zingimmick/coding-standard/compare/2.3.0...2.5.0
[2.3.0]: https://github.com/zingimmick/coding-standard/compare/2.2.2...2.3.0
[2.2.2]: https://github.com/zingimmick/coding-standard/compare/2.2.1...2.2.2
[2.2.1]: https://github.com/zingimmick/coding-standard/compare/2.2.0...2.2.1
[2.2.0]: https://github.com/zingimmick/coding-standard/compare/2.1.0...2.2.0
[2.1.0]: https://github.com/zingimmick/coding-standard/compare/2.0.5...2.1.0
[2.0.5]: https://github.com/zingimmick/coding-standard/compare/2.0.4...2.0.5
[#2]: https://github.com/zingimmick/coding-standard/pull/2
[2.0.4]: https://github.com/zingimmick/coding-standard/compare/2.0.3...2.0.4
[2.0.3]: https://github.com/zingimmick/coding-standard/compare/2.0.1...2.0.3
[2.0.1]: https://github.com/zingimmick/coding-standard/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/zingimmick/coding-standard/compare/1.3.1...2.0.0
[1.3.1]: https://github.com/zingimmick/coding-standard/compare/1.2.4...1.3.1
[1.2.4]: https://github.com/zingimmick/coding-standard/compare/1.2.0...1.2.4
[1.2.0]: https://github.com/zingimmick/coding-standard/compare/1.1.0...1.2.0
[#58]: https://github.com/zingimmick/coding-standard/pull/58
[#57]: https://github.com/zingimmick/coding-standard/pull/57
[#56]: https://github.com/zingimmick/coding-standard/pull/56
[3.3.0]: https://github.com/zingimmick/coding-standard/compare/3.1.1...3.3.0
