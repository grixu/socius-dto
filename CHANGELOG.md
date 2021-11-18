# Changelog

All notable changes to `socius-dto` will be documented in this file

## 1.2.1 - 2021-11-18

- Fixed auto-merging on dependabot's updates
- `commit-msg` regex updated
- Fixed names of jobs & slack notifications in pipelines

## 1.2.0 - 2021-11-17

- Added `composer-git-hooks`
- Configured hooks with auto-install/update
- Added timeouts in pipelines
- Added  auto-merge pipeline for small updates made by dependabot
- Added `x-ray`
- Added `x-ray` checking in CI pipeline
- Added `x-ray` checking in git hooks
- Added `changelog-updater-action` to CD pipeline

## 1.1.1 - 2021-11-08

- Updated Larastan to `1.0.1`

## 1.1.0 - 2021-10-28

- Added code quality tools such as PHP_CS_Fixer, PHP Insights & PHPStan
- Added scanning & formatting code with those tools in CI pipeline
- Applied formatting on code base

## 1.0.0 - 2021-05-14

- initial release
