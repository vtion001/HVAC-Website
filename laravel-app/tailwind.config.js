import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                'trane-red': '#C8102E', // Keep for legacy if needed, or remove
                'arctic-blue': '#03BEFA',
                'nordic-beige': '#f9f7f2',
                brand: {
                    50: '#f4f9f4',
                    100: '#e3f2e3',
                    200: '#c5e5c5',
                    300: '#98c998',
                    400: '#7ebb63', // Main Primary (Green)
                    500: '#5da042',
                    600: '#467f30',
                    700: '#386328',
                    800: '#2f4f41', // Dark Section BG
                    900: '#263f35',
                    950: '#1a2e26', // Footer BG
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true,
            padding: '1rem',
        },
    },
    plugins: [],
};
