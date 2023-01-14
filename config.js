tailwind.config = {
    theme: {
      extend: {
        colors: {
          clifford: '#da373d',
          blues :"#97bdfe",
        },
        top: {
          '80%': '80%',
          '85%': '85%',
        },
      
      }
    },
    keyframes: {
      wiggle: {
        '0%, 100%': { transform: 'rotate(-3deg)' },
        '50%': { transform: 'rotate(3deg)' },
      }
    },
    animation: {
      "animate-wiggle": 'wiggle 1s ease-in-out infinite',
    } 
  }