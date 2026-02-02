<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * PageController
 * 
 * Handles all static page rendering using a DRY pattern.
 * Instead of 10+ repetitive methods, uses a single dynamic handler.
 */
class PageController extends Controller
{
    /**
     * Valid page slugs mapped to their view paths.
     * Add new pages here to enable routing.
     */
    private const VALID_PAGES = [
        'heating'          => 'pages.heating',
        'cooling'          => 'pages.cooling',
        'furnaces'         => 'pages.furnaces',
        'heat-pumps'       => 'pages.heat-pumps',
        'air-conditioners' => 'pages.air-conditioners',
        'ductless-systems' => 'pages.ductless-systems',
        'packaged-systems' => 'pages.packaged-systems',
        'air-quality'      => 'pages.air-quality',
        'thermostats'      => 'pages.thermostats',
        'why-nordic'       => 'pages.why-nordic',
        'support'          => 'pages.support',
    ];

    /**
     * Display the home page.
     * Uses the modular pages.home view.
     */
    public function index(): View
    {
        return view('pages.home');
    }

    /**
     * Dynamic page handler.
     * 
     * Renders any valid product/category page based on slug.
     * Throws 404 for invalid slugs.
     *
     * @param string $page The page slug from the URL
     * @throws NotFoundHttpException If page slug is not in VALID_PAGES
     */
    public function show(string $page): View
    {
        if (!array_key_exists($page, self::VALID_PAGES)) {
            abort(404, "Page '{$page}' not found.");
        }

        return view(self::VALID_PAGES[$page]);
    }
}
