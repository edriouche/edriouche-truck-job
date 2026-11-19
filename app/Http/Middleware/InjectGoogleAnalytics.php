<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InjectGoogleAnalytics
{
    private const MEASUREMENT_ID = 'G-PJJ9CPZRBW';

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            !str_contains((string) $response->headers->get('Content-Type'), 'text/html')
            || !is_string($response->getContent())
        ) {
            return $response;
        }

        $html = $response->getContent();
        $bootstrap = <<<'HTML'
<script>
(function () {
    var measurementId = 'G-PJJ9CPZRBW';

    if (typeof window.gtag !== 'function') {
        window.dataLayer = window.dataLayer || [];
        window.gtag = function () { window.dataLayer.push(arguments); };
        window.gtag('js', new Date());
        window.gtag('config', measurementId);

        var analyticsScript = document.createElement('script');
        analyticsScript.async = true;
        analyticsScript.src = 'https://www.googletagmanager.com/gtag/js?id=' + measurementId;
        document.head.appendChild(analyticsScript);
    }

    if (window.__edrioucheAnalyticsListenersInstalled) return;
    window.__edrioucheAnalyticsListenersInstalled = true;

    document.addEventListener('click', function (event) {
        var link = event.target && event.target.closest
            ? event.target.closest('a[href]')
            : null;

        if (!link || typeof window.gtag !== 'function') return;

        var destination;
        try {
            destination = new URL(link.href, window.location.href);
        } catch (error) {
            return;
        }

        var currentHost = window.location.hostname;
        var isExternal = destination.hostname
            && destination.hostname !== currentHost
            && !['mailto:', 'tel:'].includes(destination.protocol);

        if (isExternal) {
            window.gtag('event', 'outbound_link_click', {
                link_url: destination.href,
                link_text: (link.innerText || link.getAttribute('aria-label') || '').trim().slice(0, 100),
                page_path: window.location.pathname,
                transport_type: 'beacon'
            });
        }

        if (destination.pathname === '/for-companies') {
            window.gtag('event', 'company_advertising_page_click', {
                page_path: window.location.pathname,
                transport_type: 'beacon'
            });
        }
    }, true);

    document.addEventListener('submit', function (event) {
        var form = event.target;
        if (!form || !form.action || !form.action.includes('/for-companies/request')) return;
        if (typeof window.gtag !== 'function') return;

        window.gtag('event', 'company_advertising_request_submit', {
            page_path: window.location.pathname,
            transport_type: 'beacon'
        });
    }, true);
})();
</script>
HTML;

        // Inject once per HTML response. Existing pages that already initialize
        // gtag keep their configuration; the guard above prevents double setup.
        if (!str_contains($html, 'window.__edrioucheAnalyticsListenersInstalled')) {
            if (stripos($html, '</head>') !== false) {
                $html = preg_replace('/<\/head>/i', $bootstrap . "\n</head>", $html, 1);
            } elseif (stripos($html, '</body>') !== false) {
                $html = preg_replace('/<\/body>/i', $bootstrap . "\n</body>", $html, 1);
            } else {
                $html = $bootstrap . "\n" . $html;
            }

            $response->setContent($html);
        }

        return $response;
    }
}
