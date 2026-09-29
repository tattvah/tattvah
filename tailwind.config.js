/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.php",
    "./*.php",
    "./public/**/*.js"
  ],
  theme: {
    fontFamily: {
      sans: ["Roboto"],
      mulish: ["Mulish"],
      lora: ["Lora", "serif"],
      openSans: ["Open Sans", "sans-serif"],
    },
    extend: {
      colors: {
        // --- NEW BRAND PALETTE ---
        'brand-primary': '#174C3C',
        'brand-secondary': '#28735B',
        'bg-cream': '#FFF4DF',
        'bg-sand': '#EAD9BC',
        'text-primary': '#33251D',
        'text-secondary': '#715846',
        'white': '#FFFFFF',
        'accent-yellow': '#F4B51B',
        'accent-orange': '#E87527',
        'accent-coral': '#E85D68',
        'fragrance-rose': '#D94F70',
        'fragrance-lavender': '#8D7BC3',
        'fragrance-teal': '#168C82',
        'accent-blue': '#12639A',
        
        // --- OLD VARIABLES MAPPED ---
        'tattvah-maroon': '#174C3C', // Mapped to Primary Brand
        'tattvah-peach': '#F4B51B',  // Mapped to Marigold Yellow
        'tattvah-bg': '#FFF4DF',     // Mapped to Cream Background
      }
    },
  },
  plugins: [],
};
