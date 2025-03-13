import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

const plugin = require('tailwindcss/plugin');

export default {
    presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./vendor/filament/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./app/Filament/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#1E40AF",
                secondary: "#FACC15",
                contentBg: "#F3F4F6",
            },
        },
    },
    plugins: [
        plugin(({ addComponents }) => {
            addComponents({
                '.fi-sidebar': {
                    // backgroundColor: '#6868c6',
                    customBackground: '#1E293B',
                },
                '.fi-button': {
                    backgroundColor: '#0f3460',
                    borderRadius: '8px',
                },
            });
        }),
    ],

}
