import preset from '../../../../vendor/filament/filament/tailwind.config.preset'

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
                primary: "#1E40AF", // Dark Blue
                secondary: "#FACC15", // Yellow
            },
        },
    },
    plugins: [forms],
}
