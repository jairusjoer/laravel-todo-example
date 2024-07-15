const mix = (name: string) => `color-mix(in srgb, transparent, var(${name}) calc(100% * <alpha-value>))`;

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php", "./resources/js/**/*.js"],
    theme: {
        extend: {
            fontSize: {
                small: ".875rem",
                p: "1rem",
                h6: "1.25rem",
                h5: "1.625rem",
                h4: "2.125rem",
                h3: "2.75rem",
                h2: "3.5rem",
                h1: "4.375rem",
            },
            colors: {
                background: mix("--background"),
                foreground: mix("--foreground"),

                muted: {
                    DEFAULT: mix("--muted"),
                    foreground: mix("--muted-foreground"),
                },

                card: {
                    DEFAULT: mix("--card"),
                    foreground: mix("--card-foreground"),
                },

                popover: {
                    DEFAULT: mix("--popover"),
                    foreground: mix("--popover-foreground"),
                },

                border: mix("--border"),

                input: mix("--input"),

                button: {
                    DEFAULT: mix("--button"),
                    subtle: mix("--button-subtle"),
                },

                secondary: {
                    bold: mix("--secondary-bold"),
                    DEFAULT: mix("--secondary"),
                    subtle: mix("--secondary-subtle"),
                },

                brand: {
                    bold: mix("--brand-bold"),
                    DEFAULT: mix("--brand"),
                    subtle: mix("--brand-subtle"),
                },

                informative: {
                    bold: mix("--informative-bold"),
                    DEFAULT: mix("--informative"),
                    subtle: mix("--informative-subtle"),
                },

                successful: {
                    bold: mix("--successful-bold"),
                    DEFAULT: mix("--successful"),
                    subtle: mix("--successful-subtle"),
                },

                cautionary: {
                    bold: mix("--cautionary-bold"),
                    DEFAULT: mix("--cautionary"),
                    subtle: mix("--cautionary-subtle"),
                },

                destructive: {
                    bold: mix("--destructive-bold"),
                    DEFAULT: mix("--destructive"),
                    subtle: mix("--destructive-subtle"),
                },

                ring: mix("--ring"),
            },
        },
    },
    plugins: [],
};
