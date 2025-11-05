/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // Main EOS plugin templates and PHP files
    '../../plugins/eos/**/*.php',
    '../../plugins/eos/**/*.js',

    // All EOS-related plugins
    '../../plugins/eos-*/**/*.php',
    '../../plugins/eos-*/**/*.js',

    // Theme files (if needed)
    '../../themes/**/*.php',

    // WordPress core (if needed)
    '../../../*.php',
  ],

  theme: {
    extend: {
      /**
       * EOS Brand Colors
       * Extracted from existing custom CSS
       */
      colors: {
        eos: {
          // Primary/Action colors
          primary: '#276FFF',
          'primary-light': '#6495ED',

          // State colors
          success: '#27C46B',
          warning: '#FFC107',
          danger: '#E34724',
          'danger-alt': '#FF1B1B',

          // Neutral colors (matching current Bootstrap overrides)
          gray: {
            50: '#f8f9fa',
            100: '#dee2e6',
            200: '#ced4da',
            300: '#adb5bd',
            400: '#868e96',
            500: '#495057',
            600: '#343a40',
            700: '#212529',
          },
        },
      },

      /**
       * Font Family
       * Montserrat is the primary EOS font
       */
      fontFamily: {
        sans: [
          'Montserrat',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          'sans-serif',
        ],
      },

      /**
       * Border Radius
       * Matching Bootstrap default (0.375rem = 6px)
       */
      borderRadius: {
        DEFAULT: '0.375rem',
      },

      /**
       * Box Shadows
       * Matching Bootstrap card shadow
       */
      boxShadow: {
        'card': '0 0.125rem 0.25rem rgba(0, 0, 0, 0.075)',
      },

      /**
       * Max Width
       * EOS uses 1440px max-width for containers
       */
      maxWidth: {
        'eos': '1440px',
      },

      /**
       * Minimum Heights
       * Common EOS patterns
       */
      minHeight: {
        'section': '700px',
        'patient-row': '150px',
        'appointment-row': '165px',
      },
    },
  },

  plugins: [],
}
