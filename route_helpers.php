<?php
declare(strict_types=1);

/**
 * Build a clean URL path from a route name.
 */
function cleanRoutePath(string $route): string
{
    $trimmed = trim($route, "/ \t\n\r\0\x0B");
    if ($trimmed === '' || $trimmed === 'index') {
        return '/';
    }

    return '/' . $trimmed . '/';
}

/**
 * Redirect direct *.php requests to their clean route equivalent.
 *
 * This keeps legacy links functional while preserving extensionless URLs
 * in the browser address bar.
 */
function redirectPhpToCleanRoute(string $scriptFile, string $route): void
{
    if (PHP_SAPI === 'cli' || headers_sent()) {
        return;
    }

    $scriptName = basename((string) ($_SERVER['SCRIPT_NAME'] ?? ''));
    if (strcasecmp($scriptName, $scriptFile) !== 0) {
        return;
    }

    $requestUri = (string) ($_SERVER['REQUEST_URI'] ?? '');
    $requestPath = parse_url($requestUri, PHP_URL_PATH);
    if (!is_string($requestPath)) {
        return;
    }

    $expectedPath = '/' . $scriptFile;
    if (strcasecmp($requestPath, $expectedPath) !== 0) {
        return;
    }

    $target = cleanRoutePath($route);
    $query = (string) ($_SERVER['QUERY_STRING'] ?? '');
    if ($query !== '') {
        $target .= '?' . $query;
    }

    header('Location: ' . $target, true, 301);
    exit();
}

