module.exports = {
    purge: ["./resources/**/*.blade.php"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            height: {
                480: "480px",
            },
            backgroundColor: {
                utama: "#89C8FD",
                utamaHover: "#66b7f9",
                kedua: "#FFB054",
                keduaHover: "#ffa53f",
                ketiga: "#3B3453",
            },
            textColor: {
                utama: "#89C8FD",
                utamaHover: "#66b7f9",
                kedua: "#FFB054",
                ketiga: "#3B3453",
            },
        },
    },
    variants: {
        extend: {
            textColor: ["active"],
        },
    },
    plugins: [],
};
